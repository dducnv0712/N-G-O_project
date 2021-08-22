<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contribution;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{


    public function home(){
        $category = Category::withCount('Post')->where('active',1)->get();
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
                    if(!$item_post->contribute == null){
                        if($contribute_total /  $item_post->contribute * 100 >= 100){
                            $count_contribute[] = $item_post->id;
                        }
                    }

                }
            }
        }
        $important = count($posts->where('important',1));
        return view('home',[
            'category' => $category,
            'posts' => $posts,
            'contribution' =>$contribution,
            'important'=>$important,
            'amount_total'=>$amount_total,
            'count_contribute'=>$count_contribute

        ]);
    }

    public function donate(){
        $category = Category::withCount('Post')->where('active',1)->get();
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
        $post = Post::where('active',1)->get();
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
        $contribution =Contribution::all();
        $posts = Post::findOrFail($id);
        $post_list = Post::where('active',0)->get();
        $category = Category::withCount('Post')->where('active',0)->get();
        return view('pages.desc_post',[
            'posts'=>$posts,
            'contribution' =>$contribution,
            'category'=>$category,
            'post_list'=>$post_list
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
    public function postsList(Request $request,$id){
        $contribution =Contribution::all();
        $categoryId = $request->get("category_id");
        $search = $request->get("search");
        $category = Category::where('active',1)->findOrFail($id);
        $posts= Post::with('Category')->where( 'category_id',$id)->search($search)->category($categoryId)->orderBy("id","desc")->paginate(6);
        return view('pages.posts-list',[
            'posts' =>$posts,
            'search'=>$search,
            'category'=>$category,
            'contribution' =>$contribution,

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


}
