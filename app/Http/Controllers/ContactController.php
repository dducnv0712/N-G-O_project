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
}
