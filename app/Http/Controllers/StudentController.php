<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
  public function home(){
    return view('welcome');
    }
    public function put(){
      $input = new Student;
      $input -> name = 'moony';
      $input -> email = 'pony@gmail.com';
      $input ->save();
      return redirect()->route('home');
    }
    public function show(){
      $pass = student::where('name', 'moony')->get();
      return view('welcome')->with('serve',$pass);
    }
}
