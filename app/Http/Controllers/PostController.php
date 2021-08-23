<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost()
    {
        $posts = DB::table('post')->get();
        return view('post',compact('posts'));
    }
    public function addPost()
    {
        return view('add-post');
    }
    public function addPostSubmit(Request $request)
    {
        DB::table('post')->insert([
            'title'=>$request->title,
            'body' =>$request->body
        ]);
        return redirect()->route('post.getAllPost')->with('post_created','Post has been created sucssefully');
    }
    public function getPostId($id=null)
    {
        try {
            if($id == null)
            abort(404,'error');
            $post=DB::table('post')->where('id',$id)->first();
            return view('single-post',compact('post'));
        } catch (\Throwable $th) {
            return response()->json('id not found');
        }

    }
    public function deletePost($id)
    {
        DB::table('post')->where('id',$id)->delete();
        return back()->with('post_deleted','post has been deleted successfully');

    }
    public function updatePost(){
        return view('edit-post');
        // /resources/views/edit-view.blade.php
    }
}
