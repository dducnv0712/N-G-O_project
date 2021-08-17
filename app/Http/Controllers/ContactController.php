<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function all(){
        $contact = Contact::all();
        return view("admin.ad_page.contact.con_list",[
            "contact" => $contact
        ]);
    }
}
