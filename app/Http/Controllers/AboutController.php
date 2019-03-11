<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
          return redirect(route('home'));
        }
        
        return view('about')->with(['title'=>'About | familyTree']);
    }
}
