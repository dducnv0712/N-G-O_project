<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WebController extends Controller
{


    public function home(){
        $category = Category::where('active',1)->get();
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

        $category = Category::where('active',1)->get();
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


}
