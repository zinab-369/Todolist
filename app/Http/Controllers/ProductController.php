<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    $fruits = array('mango','appla','orange','panana');
    return view('welcome',compact('fruits'));
}
}
