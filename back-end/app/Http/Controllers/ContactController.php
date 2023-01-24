<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    
    public function index()
    {
        
        return view('guest.contact');
    }

    public function create(Request $req)
    {
        
        $contact= new Contact();
        $contact->email= $req->input('email');
        $contact->name= $req->input('name');
        $contact->message= $req->input('message');

        $contact->save();
        return redirect('/');
    }
}

