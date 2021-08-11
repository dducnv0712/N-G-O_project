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
}

