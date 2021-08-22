<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin(){
        $now = Carbon::now('asia/Ho_Chi_Minh')->format('d-m-Y');
        $posts= Post::where('active',0)->get();
        $contribution =Contribution::all();
        $amount = 0;
        foreach ($contribution as $item){
            $amount += $item-> 	contribute_amount * 22854;
//            dd($item->given_name);
        }
        $amount_total = null;
        $count_contribute = [];
        foreach ($posts as $item_post){
            foreach ($contribution as $item_contribution ){
                if($item_contribution->id_post == $item_post->id){
                    $amount_total += $item_contribution->contribute_amount;
                    if(!$item_post->contribute == null){
                        if($amount_total /  $item_post->contribute * 100 >= 100){
                            $count_contribute[] = $item_post->id;
                        }
                    }
                }
            }
        }
//        dd(count($count_contribute));
        return view('admin.admin_home',[
            'amount' => $amount,
            'contribution' => $contribution,
            'count_contribute' => $count_contribute,
            'post' => $posts,
            'now' =>$now
        ]);
    }
    public function profile(){
        return view('admin.ad_page.profile.profile');
    }
}
