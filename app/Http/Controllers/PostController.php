<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "This is the index of the post contoller"
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return "A new post was created";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $post = new \App\user_post;
      $post->post_text = $request->input('post_text');
      $post->user_id = \Auth::id();
      $post->private = true;
      $post->num_of_hearts = 0;
      $post->save();
      return redirect("/private");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "display your post here";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "edit your post here";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "this saved post was updated";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $user = DB::table('space_post')->where('post_id', '=', $id)->delete();
      $user = DB::table('user_posts')->where('id', '=', $id)->delete();
      return redirect('/private');

    }

    public function addToSpace(Request $request)
    {

      //isolate the id's
      $spaceid = $request->space_id;

      $postid = $request->post_id;

      $space = \App\Space::find($spaceid);

      //define the relationship
      $space->posts()->attach($postid);
      return redirect('/private');
    }
}
