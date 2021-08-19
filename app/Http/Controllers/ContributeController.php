<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use Illuminate\Http\Request;

class ContributeController extends Controller
{
    public function all(){
        $contribution=Contribution::all();
        return view("admin.ad_page.contributor.contribute",[
            'contribution'=>$contribution
        ]);
    }
}
