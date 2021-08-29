<?php

namespace App\Http\Controllers;
use App\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Todolistcontroller extends Controller
{
    public function getallTasks()
    {
        $tasks = task::all();
        return view('Tasks',compact('tasks'));
    }
    public function addtask( Request $request)
    {
       $data = $request->validate([
           'content' =>'required'
       ]);
    }


    public function deletetask( task $tasks)
    {
        $tasks ->delete();
        return back();
    }
    public function confirmtask()
    {

    }
}
