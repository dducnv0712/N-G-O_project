<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function user(){
        $users = User::all();
        return view("admin.ad_page.user.us_list",[
            "users" => $users
        ]);
    }
    public function update(Request $request,$id){
        $users = User::findOrFail($id);

        try {
            $users->update([
                "name"=>$request->get("name"),

            ]);
            return redirect()->to("admin/user");
        }catch (\Exception $e){
            abort(404);
        }
    }
}

