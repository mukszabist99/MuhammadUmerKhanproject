<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function datasubmit(Request $request){
        Contact::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'message' => $request['message'],
            
        ]);
        return redirect('/Contact');
    }
}
