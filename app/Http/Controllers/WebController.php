<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{


    public function home(){
        return view('home');
    }
    public function admin(){
        return view('admin.admin_home');
    }








    public function donate(){

        return view('pages.donate');
    }
    public function about(){
        return view('pages.about');
    }
    public function account(){
        return view('pages.login');
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
    public function add(){
        return view('admin.ad_page.posts.add');
    }
    public function list(){
        return view('admin.ad_page.posts.list');
    }
    public function update(){
        return view('admin.ad_page.posts.update');
    }




}
