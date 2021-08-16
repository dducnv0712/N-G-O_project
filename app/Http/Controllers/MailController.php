<?php

namespace App\Http\Controllers;

use App\Models\MailNews;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function subMail(Request $request){
        MailNews::create([
            'name'=>$request->get("name"),
            'email'=>$request->get("email"),
        ]);
    }
    public function sendEmailNews($id){
//        $mail = [];
//        $post_send =Post::where('id',3)->get();
        $mail_news = MailNews::all();

        $post_send = Post::findOrFail($id);


        foreach ($mail_news as $mail_n){
            $mail = $mail_n -> email;
            $mail_name = $mail_n -> name;

            Mail::send('admin.mail.mail_news',[
                'name' => $mail_name,
                'post' =>  $post_send

            ],function ($message) use ($mail){
                $message -> to($mail)->subject('Non-governmental Organizations');
                $message ->from($mail,'Non-governmental Organizations');

            });
        }
        $post_send -> update([
            'send_mail' => 1
        ]);




        return redirect()->to("admin/posts");

    }

}
