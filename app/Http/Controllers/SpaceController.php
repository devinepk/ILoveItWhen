<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        return view('userSpaces', compact('user'));

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
      $space = new \App\Space;
      $space->space_name = $request->input('space_name');
      $space->user_id = \Auth::id();
      $space->save();
      return redirect("/spaces");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     // Find the existing space
    //     $s = \App\Space::find($id);
    //
    //     //check to see if the email exists in the user database
    //     $email = \DB::table('users')->where('email', '=', $request->input('friend_name'))->select('id')->first();
    //         if ($email != null) {
    //             $s->users()->attach($email);
    //         } else {
    //             $request->session()->flash('notif', 'No user with that email address found.  Please have your friend sign up first.');
    //             $space = \App\Space::find($id);
    //             return view('addUser', compact('space'));
    //         }

    }








    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $space = \App\Space::find($id);
      $space->delete();
      return redirect("/spaces");
    }
}
