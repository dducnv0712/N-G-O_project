<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function all(){
        $contact = Contact::all();
        return view("admin.ad_page.contact.con_list",[
            "contact" => $contact
        ]);
    }
    public function form(){
        $contact = Contact::all();
        return view("pages.contact",[
        "contact" => $contact
        ]);
    }
    public function save(Request $request){
        $request->validate([
            "name"=>"required",
            "phone"=>"required",
            "messenger"=>"required",
            "email"=>"required",
        ]);
        try {
            Contact::create([
               "name" => $request->get('name'),
               "phone" => $request->get('phone'),
               "messenger" => $request->get('messenger'),
               "email" => $request->get('email'),
            ]);
            return redirect()->to("contact");
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
}
