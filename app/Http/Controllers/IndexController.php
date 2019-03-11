<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
          return redirect(route('home'));
        }
          
        return view('index')->with(['title'=>'familyTree - A Family Media Platform']);
    }
}
