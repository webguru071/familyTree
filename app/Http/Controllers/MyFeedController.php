<?php

namespace App\Http\Controllers;

use App\MyFeed;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class MyFeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = User::find(Auth::id())->post;

        return view('user.myFeed')->with(['title'=>'My Feed', 'posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MyFeed  $myFeed
     * @return \Illuminate\Http\Response
     */
    public function show(MyFeed $myFeed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MyFeed  $myFeed
     * @return \Illuminate\Http\Response
     */
    public function edit(MyFeed $myFeed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MyFeed  $myFeed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyFeed $myFeed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MyFeed  $myFeed
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyFeed $myFeed)
    {
        //
    }
}
