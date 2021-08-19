<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contribution;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{


    public function home(){
        $contribution =Contribution::all();
        $category = Category::withCount(['Post','Post as post_important'=>function($query) {
           $query->where('important', 1) ;
        }])->where('active',1)->get();
//        dd($category);
        $post = Post::where('active',1)->get();

//        foreach ($contribution as $item ){
//            $amount += $item->contribute_amount;
//        }

        $important = count($post->where('important',1));

        return view('home',[
            'category' => $category,
            'posts' => $post,
            'contribution' =>$contribution,
            'important'=>$important,

        ]);
    }
    public function donate(){

        $category = Category::withCount('Post')->where('active',1)->get();
        $post = Post::where('active',1)->get();
        return view('pages.donate',[
            'category' => $category,
            'posts' => $post,
        ]);
    }

    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function account(){
        return view('pages.login');
    }



    public function postsList(){
        return view('pages.posts-list');
    }
    public function gallery(){
        return view('pages.gallery');
    }


    public function Contributor(){
        return view('admin.ad_page.contributor.contributor');
    }
    public function Digital_wallet(){
        return view('admin.ad_page.contributor.digital_wallet');
    }
    public function Credit_cart(){
        return view('admin.ad_page.contributor.credit_cart');
    }
    public function list(){
        return view('admin.ad_page.posts.list');
    }
    public function update(){
        return view('admin.ad_page.posts.update');
    }

    public function maps(){
        return view("admin.ad_page.profile.map_list");
    }


    public function contribution(Request $request){
        $cus_id = Auth::id();
        $now = Carbon::now('asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
        if ($cus_id == null){
            $cus_id = $request['id_cus'];
        }
        Contribution::create([
            'id_cus' => $cus_id,
            'given_name'=>$request->get('given_name'),
            'surname'=>$request->get('surname'),
            'email'=>$request->get('email'),
            'contribute_amount'=>$request->get('amount'),
            'country'=>$request->get('country'),
            'id_post'=>$request->get('post_id'),
            'status'=>$request->get('status')

        ]);

        $mail = $request['email'];
//        $given_name = $request['given_name'];
//        $surname = $request['surname'];
//        $contribution_id = $request['contribution_id'];
//        $amount = $request['amount'];
//        $country =$request['country'];
        $post_id = $request['post_id'];
        $posts = Post::findOrFail($post_id);
//        $data = [
//            $mail = $request['email'],
//            $given_name = $request['given_name'],
//            $surname = $request['surname'],
//            $contribution_id = $request['contribution_id'],
//            $amount = $request['amount'],
//            $country =$request['country'],
//            $post_id = $request['post_id'],
//            $date_time = $now
//        ];

        Mail::send('admin.mail.feedback_contribution',[
            'posts' => $posts,
            'date_time'=>$now,
            'given_name'=>$request['given_name'],
            'surname'=>$request['surname'],
            'contribution_id' =>$request['contribution_id'],
            'amount' =>$request['amount'],
            'country' => $request['country']

        ],function ($message) use ($mail){
            $message -> to($mail)->subject('Non-governmental Organizations');
            $message ->from($mail,'Non-governmental Organizations');

        });
//        $data = $request->all();
//        print_r($data);


    }
//    public function contribution_create(Request $request){
//        Contribution::create($request->all());
//
//
//    }


}
