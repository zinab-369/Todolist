<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Todolistcontroller extends Controller
{
    public function getallTasks()
    {
        $tasks = Todo::all();
        return view('add-task',compact('tasks'));

    }
    public function addtask( Request $request)
    {

       $this->validate($request,[
           'content' =>'required'
       ]);

       $todo = Todo::create($request->all());

       return back()->with('success','تمت اضافة المهمة بنجاح');

    }


    public function deletetask(Todo $task)
    {
        $task->delete();
        return back();
    }
    public function confirmtask()
    {

    }
}
