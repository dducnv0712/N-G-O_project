<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Post;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function all()
    {
        $sponsor = Sponsor::all();
        return view('admin.ad_page.sponsor.list', [
            'sponsor' => $sponsor
        ]);
    }

    public function save(Request $request)
    {
        Sponsor::create([
            'title' => $request->get('title'),
            'image' => $request->get('image')

        ]);
        return redirect()->to("admin/sponsor");


    }
    public function active($id){
        $sponsors = Sponsor::findOrFail($id);
        if($sponsors->active == 0){
            $sponsors-> update([
                "active" => 1
            ]);
        }else{
            $sponsors-> update([
                "active" => 0
            ]);
        }


        return redirect()->to("admin/sponsor");

    }
    public function delete($id){
        $sponsors = Sponsor::findOrFail($id);
        $sponsors -> delete();

    }
}
