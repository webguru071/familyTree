<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home')->with(['title'=>'Home | familyTree']);
    }

    public function storePost(User $user, Request $request)
    {

        $validator = ['message'=>'', 'success'=>false];

        $validator['message'] = Validator::make($request->all(), [
            'message' => 'required',
        ], [
          'required' => 'Your post box is empty',
        ]);

        if ($validator['message']->fails()) {
            $validator['message'] = $validator['message']->errors()->toArray();
        } else {
            $validator['message'] = $user->createPost(request()->message);
            $validator['success'] = True;
        }

        return response()->json($validator);
    }
}
