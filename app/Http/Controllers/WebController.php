<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contribution;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{


    public function home(){
        $category = Category::withCount('Post')->where('active',0)->get();
        $posts = Post::where('active',0)->get();
        $contribution =Contribution::all();
        $amount_total = 0;
        foreach ($contribution as $item){
            $amount_total += $item-> 	contribute_amount * 22854;
//            dd($item->given_name);
        }
        $contribute_total = null;
        $count_contribute = [];
        foreach ($posts as $item_post){
            foreach ($contribution as $item_contribution ){
                if($item_contribution->id_post == $item_post->id){
                    $contribute_total+= $item_contribution->contribute_amount;
                }
            }
            if(!$item_post->contribute == null){
                if($contribute_total /  $item_post->contribute * 100 >= 100){
                    $count_contribute[] = $item_post;
                }
            }
        }
//        dd(count($count_contribute));
        $important = Post::where('important',0) ->paginate(1);
        $amount_important = 0;

        foreach ($contribution as $item_con ) {
            foreach ($important as $item){
                if ($item_con->id_post == $item->id){
                    $amount_important += $item_con->contribute_amount;
                }
            }

        }
        return view('home',[
            'category' => $category,
            'posts' => $posts,
            'contribution' =>$contribution,
            'important'=>$important,
            'amount_total'=>$amount_total,
            'count_contribute'=>$count_contribute,
            'amount_important'=>$amount_important

        ]);
    }

    public function donate(){
        $category = Category::withCount('Post')->where('active',0)->get();
        $post_selected = null;
        $post = Post::where('active',0)->get();
        return view('pages.donate',[
            'category' => $category,
            'posts' => $post,
            'post_selected'=>$post_selected
        ]);
    }

    public function donate_selected($id){
        $category = Category::withCount('Post')->where('active',0)->get();
        $post_selected = Post::findOrFail($id);
        $post = Post::where('active',0)->get();
        return view('pages.donate',[
            'category' => $category,
            'posts' => $post,
            'post_selected'=>$post_selected
        ]);
    }


    public function about(){
        return view('pages.about');
    }

    public function desc_post($id){
        $contribution =Contribution::where('id_post',$id)->get();
        $contribution_list =Contribution::where('id_post',$id)->orderBy('created_at', 'desc')->paginate(6);
        $posts = Post::findOrFail($id);
        $post_list = Post::where('active',0)->get();
        $category = Category::withCount('Post')->where('active',0)->get();
        $amount = 0;

        foreach ($contribution as $item_contribution ){
            $amount += $item_contribution->contribute_amount;
        }
        return view('pages.desc_post',[
            'posts'=>$posts,
            'contribution' =>$contribution,
            'contribution_list' =>$contribution_list,
            'category'=>$category,
            'post_list'=>$post_list,
            'amount'=>$amount
        ]);
    }
    public function contact(){
        return view('pages.contact');
    }

    public function account(){
        return view('pages.login');
    }
    public function profile(){
        $id = Auth::id();
        $user = User::findOrFail($id);
        $contribution = Contribution::where('id_cus',$id)->get();
        return view('pages.profile',[
            'user'=>$user,
            'contribution'=>$contribution
        ]);
    }
    public function project($id){
        $search = null;
        $contribution =Contribution::all();
//        $categoryId = $request->get("category_id");
//        $search = $request->get("search");
        $category = Category::where('active',0)->findOrFail($id);
//        dd($category);
        $posts= Post::with('Category')->where( 'category_id',$id )->where('active',0)->orderBy("id","desc")->paginate(6);
        return view('pages.project',[
            'contribution'=>$contribution,
            'category'=>$category,
            'search'=>$search,
            'posts'=>$posts
        ]);
    }
    public function projectAll(Request $request){
        $category = null;

        $contribution =Contribution::all();
//        $categoryId = $request->get("category_id");
        $search = $request->get("search");

//        dd($category);
        $posts= Post::with('Category')->where('active',0)->search($search)->orderBy("id","desc")->get();
        return view('pages.project',[
            'contribution'=>$contribution,
            'search'=>$search,
            'posts'=>$posts,
            'category'=>$category
        ]);
    }
    public function gallery(){
        return view('pages.gallery');
    }
//    public function contribution_create(Request $request){
//        Contribution::create($request->all());
//
//
//    }
    public function join_volunteer(){
        $now = Carbon::now('asia/Ho_Chi_Minh')->format('Y-m-d');

            return view('pages.join_volunteer',[
                'now'=>$now
            ]);
    }
    public function volunteer(){
        return view('pages.volunteer');
    }
    public function contributor(){
        $contribute = Contribution::all();
        return view('pages.contributors',[
            'contribute'=>$contribute
        ]);
    }

}

