<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VolunteerController extends Controller
{
    public function register(Request $request){
        Volunteer::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone'=>$request->get('phone'),
            'address'=>$request->get('address'),
            'birthday'=>$request->get('date'),
            'occupation'=>$request->get('occupation'),
            'messages'=>$request->get('message')

        ]);

//        $mail = $request['email'];
//        Mail::send('admin.mail.feedback_contribution',[
//
//
//        ],function ($message) use ($mail){
//            $message -> to($mail)->subject('Non-governmental Organizations');
//            $message ->from($mail,'Non-governmental Organizations');
//
//        });
    }
}
