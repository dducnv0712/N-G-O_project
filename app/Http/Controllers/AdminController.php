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
        $posts= Post::all();
        $contribution =Contribution::all();
        $amount = 0;
        foreach ($contribution as $item){
            $amount += $item-> 	contribute_amount;
        }
        return view('admin.admin_home',[
            'amount' => $amount,
            'contribution' => $contribution,
            'post' => $posts,
            'now' =>$now
        ]);
    }
}
