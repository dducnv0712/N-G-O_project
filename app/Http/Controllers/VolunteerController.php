<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Volunteer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use Laravel\Jetstream\Jetstream;

class VolunteerController extends Controller
{
    use \App\Actions\Fortify\PasswordValidationRules;

    public function all(){
        $volunteer = Volunteer::all();
        return view("admin.ad_page.volunteer.list",[
            "volunteer" => $volunteer
        ]);
    }
    public function save(Request $request){

        try {
        Volunteer::create([
            'approval'=>0,
            'image'=>$request->get('image'),
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'office'=>$request->get('office'),
            'birthday'=>$request->get('date'),
            'occupation'=>$request->get('occupation'),
            'education'=>$request->get('education'),
            'address'=>$request->get('address'),
            'introduce'=>$request->get('introduce')
        ]);
        return redirect()->to('/admin/volunteer');
        }catch (\Exception $e){
            abort(404);
        }

    }
    public function update(Request $request,$id){
        $volunteer = Volunteer::findOrFail($id);
        try {
        $volunteer->update([
            'image'=>$request->get('image'),
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'office'=>$request->get('office'),
            'birthday'=>$request->get('date'),
            'occupation'=>$request->get('occupation'),
            'education'=>$request->get('education'),
            'address'=>$request->get('address'),
            'introduce'=>$request->get('introduce')
        ]);
        return redirect()->to('/admin/volunteer');
        }catch (\Exception $e){
            abort(404);
        }
    }
    public function delete($id){
        try {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->delete();
        }catch (\Exception $e){
            abort(404);
        }
    }
    public function important($id){
        $volunteer = Volunteer::findOrFail($id);
        if($volunteer->important == 0){
            $volunteer-> update([
                "important" => 1
            ]);
        }else{
            $volunteer-> update([
                "important" => 0
            ]);
        }
        return redirect()->to('/admin/volunteer');


    }
    public function register(Request $request){
        $mail = $request['email'];
        $name = $request['name'];
        $now = Carbon::now('asia/Ho_Chi_Minh')->format('F d,Y');
        Volunteer::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone'=>$request->get('phone'),
            'address'=>$request->get('address'),
            'birthday'=>$request->get('date'),
            'occupation'=>$request->get('occupation'),
            'messages'=>$request->get('message'),
        ]);
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
    public function admit($id){
        $volunteer = Volunteer::findOrFail($id);
        $user = User::where('email',$volunteer->email)->first();
        $button = false;
        if (!$user == null){
            $button= true;
        }
        $now = Carbon::now('asia/Ho_Chi_Minh')->format('F d,Y');
        $volunteer -> update(['approval' => 0]);
        $volunteer_join_date = now('asia/Ho_Chi_Minh');

        $mail = $volunteer->email;
        Mail::send('admin.mail.confirm_admit_volunteer',[
            'volunteer'=>$volunteer,
            'now'=>$now,
            'button'=>$button

        ],function ($message) use ($mail){
            $message -> to($mail)->subject('Non-governmental Organizations');
            $message ->from($mail,'Non-governmental Organizations');

        });
        if (!$user == null && $volunteer->approval == 0){
            $user -> update(['role'=>'VOLUNTEER' ,'name'=>$volunteer->name,'created_at'=>$volunteer_join_date]);
        }
        return redirect()->to('/admin/volunteer');

    }
    public function refuse(Request $request,$id){
        $volunteer = Volunteer::findOrFail($id);
        $now = Carbon::now('asia/Ho_Chi_Minh')->format('F d,Y');
        $mail = $volunteer->email;
        $subject = $request['subject'];

        Mail::send('admin.mail.confirm_refuse_volunteer',[
            'volunteer'=>$volunteer,
            'content'=>$request->get('content'),
            'now'=>$now,

        ],function ($message) use ($mail,$subject){
            $message -> to($mail)->subject($subject);
            $message ->from($mail,'Non-governmental Organizations');

        });
        $volunteer ->delete();
        return redirect()->to('/admin/volunteer');
    }
    public function acc_register($id){
        $volunteer = Volunteer::findOrFail($id);
        if($volunteer->approval == 0){
            return view('admin.ad_page.volunteer.volunteer-acc_register',[
                'volunteer' => $volunteer
                ]);
        }
        return abort(404);
    }
    public function acc_save(Request $request,$id){
        $volunteer = Volunteer::findOrFail($id);
            $request->validate([

                'password' => $this->passwordRules(),
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            ]);
            User::create([
                'name' => $volunteer->name,
                'email' => $volunteer->email,
                'role' => 'VOLUNTEER',
                'password' => Hash::make($request['password']),
            ]);
             return redirect()->to('/volunteer-update-info/'.$volunteer->id);



    }
    public function update_info($id){
        $volunteer = Volunteer::findOrFail($id);
        if($volunteer->approval == 0){
            return view('admin.ad_page.volunteer.volunteer_update_info',[
                'volunteer' => $volunteer
            ]);
        }
        return abort(404);
    }
    public function info_save(Request $request,$id){
        $volunteer = Volunteer::findOrFail($id);

        if($volunteer->approval == 0){
            $volunteer->update([
                'image'=>$request->get('image'),
                'education'=>$request->get('education'),
                'occupation'=>$request->get('occupation'),
                'address'=>$request->get('address'),
                'introduce'=>$request->get('introduce')

            ]);
            return redirect()->to('/volunteer-dashboard');

        }
        return abort(404);
    }



}
