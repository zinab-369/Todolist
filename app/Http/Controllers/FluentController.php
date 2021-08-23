<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1> Fluent Stringes</h1>';
        $slice = Str::of('welcome to my youtube channle')->after('welcome to');
        echo $slice .'<br>'; 
      $string = Str::of('hello')->append('world!');
      echo $string . '<br>';
      $result = Str::of('LARAVEL 8')->lower();
      echo $result . '<br>';
      $replace = Str::of('Laravel 7.0')->replace('7.0','8.0');
      echo $replace .'<br>';
      $converted = Str ::of('this is a title')->title();
      echo $converted . '<br>'; 
      $slug = Str::of('Laravel 8 framework')->slug('-');
      echo $slug . '<br>';
      $str = Str::of ('Laravel framework')->substr(8,5);
      echo $str . '<br>';
     $str2= Str::of('/Laravel')->trim('/');
     echo $str2 . '<br>'; 
     $str3 = Str ::of ('laravel 8')->upper();
     echo $str3;
}
}