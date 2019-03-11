<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
          return redirect(route('home'));
        }
        
        return view('contact')->with(['title'=>'Contact | familyTree']);
    }
}
