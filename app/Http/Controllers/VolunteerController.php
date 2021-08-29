<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VolunteerController extends Controller
{

    public function all(){
        $volunteer = Volunteer::all();
        return view("admin.ad_page.volunteer.list",[
            "volunteer" => $volunteer
        ]);
    }
    public function accept(){

    }
    public function refuse(){

    }
    public function register(Request $request){
        Volunteer::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone'=>$request->get('phone'),
            'address'=>$request->get('address'),
            'birthday'=>$request->get('date'),
            'occupation'=>$request->get('occupation'),
            'messages'=>$request->get('message'),
        ]);

        $mail = $request['email'];
        $name = $request['name'];
        $now = Carbon::now('asia/Ho_Chi_Minh')->format('F d,Y');

        Mail::send('admin.mail.confirm_register_volunteer',[
            'name'=>$name,
            'now'=>$now

        ],function ($message) use ($mail){
            $message -> to($mail)->subject('Non-governmental Organizations');
            $message ->from($mail,'Non-governmental Organizations');

        });
                $data = $request->all();
        print_r($data);
    }
}
