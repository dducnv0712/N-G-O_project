<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class TranslateController extends Controller
{
    //
    public function setTarget(Request $request){
        Session::put('target',$request->target);
        return 1;
    }
}
