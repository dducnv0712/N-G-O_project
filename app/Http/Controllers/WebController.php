<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contribution;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{


    public function home(){
        $category = Category::withCount('Post')->where('active',1)->get();
        $post = Post::where('active',1)->get();
        return view('home',[
            'category' => $category,
            'posts' => $post,
        ]);
    }
    public function admin(){
        return view('admin.admin_home');
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

    }
//    public function contribution_create(Request $request){
//        Contribution::create($request->all());
//
//
//    }


}
