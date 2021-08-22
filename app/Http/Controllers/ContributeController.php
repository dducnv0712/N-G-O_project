<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContributeController extends Controller
{
    public function all(){
        $contribution=Contribution::all();
        return view("admin.ad_page.contribution.contribution",[
            'contribution'=>$contribution
        ]);
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
            'contribute_id' =>$request['contribute_id'],
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
            'contribute_id' =>$request['contribute_id'],
            'amount' =>$request['amount'],
            'country' => $request['country']

        ],function ($message) use ($mail){
            $message -> to($mail)->subject('Non-governmental Organizations');
            $message ->from($mail,'Non-governmental Organizations');

        });
//        $data = $request->all();
//        print_r($data);
    }
}
