<?php

namespace App\Http\Controllers;

use App\Models\MailNews;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailNewsLetterController extends Controller
{
    //admin

    public function all(){
        $newsletter = MailNews::all();
        return view("admin.ad_page.contact.newsletter-sub-list",[
            "newsletter" => $newsletter
        ]);
    }


    //
    public function subMail(Request $request){

        $request->validate([
            "name"=>"required",
            'email' => ['required', 'string', 'email', 'max:255', 'unique:mails_news'],
        ],[
            "name.required"=>"Vui lòng nhập tên",
            "email.required"=>"Vui lòng nhập email",
            "email.unique"=>"Email này đã được đăng ký"
        ]);
        MailNews::create([
            'name'=>$request->get("name"),
            'email'=>$request->get("email"),
        ]);
    }
    public function sendEmailNews($id){
//        $mail = [];
//        $post_send =Project::where('id',3)->get();
        $mail_news = MailNews::all();

        $post_send = Project::findOrFail($id);
        $now = Carbon::now('asia/Ho_Chi_Minh')->format('F d,Y');

        if ($post_send->approval == 0) {
            foreach ($mail_news as $mail_n) {
                $mail = $mail_n->email;
                $mail_name = $mail_n->name;

                Mail::send('admin.mail.mail_news', [
                    'name' => $mail_name,
                    'post' => $post_send,
                    'now'=>$now

                ], function ($message) use ($mail) {
                    $message->to($mail)->subject('Non-governmental Organizations');
                    $message->from($mail, 'Non-governmental Organizations');

                });
            }
            $post_send->update([
                'send_mail' => 0
            ]);
        }

    }

}
