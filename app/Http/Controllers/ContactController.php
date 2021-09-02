<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function all(){
        $contact = Contact::all();
        return view("admin.ad_page.contact.list",[
            "contact" => $contact
        ]);
    }
    public function submit(Request $request){
        try {
            Contact::create([
               "name" => $request->get('name'),
               "phone" => $request->get('phone'),
               "message" => $request->get('message'),
               "email" => $request->get('email'),
            ]);
        }catch (\Exception $e){
            abort(404);
        }
    }
    public function update(Request $request,$id){
        $contact = Contact::findOrFail($id);
        $contact->update([
            "name" => $request->get('name'),
            "phone" => $request->get('phone'),
            "messenger" => $request->get('messenger'),
            "email" => $request->get('email'),
        ]);
        return redirect()->to("admin/contact");
    }
    public function reply(Request $request,$id){
        $contact = Contact::findOrFail($id);
        $mail = $contact->email;
        $name =$contact->name;
        $now = Carbon::now('asia/Ho_Chi_Minh')->format('F d,Y');
        $message_user = $contact->message;
        $contact ->update([
            'reply'=>0,
            'reply_message'=>$request->get('messages_reply')
        ]);
        Mail::send('admin.mail.reply_contact', [
            'now'=>$now,
            'name'=>$name,
            'message_user'=>$message_user,
            'message_reply'=>$request->get('messages_reply')
        ], function ($message) use ($mail) {
            $message->to($mail)->subject('Non-governmental Organizations');
            $message->from($mail, 'Non-governmental Organizations');

        });
        return redirect()->to('/admin/contact');

    }
}
