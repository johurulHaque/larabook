<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sign;

class SignController extends Controller
{
  public function master(){
    return view('sign.master');
    }

  public function create(){
      return view('sign.create');
      }

  public function store(Request $request){
        $input = new sign;
        $input -> name = $request -> name;
        $input -> email = $request -> email;
        $input -> number = $request -> number;

        $input -> save();
        return redirect()->route('show');
    }

    public function show(){
      $data = sign::get();
      return view('sign.show')->with('datas',$data);
    }

    public function edit($id){
      $data = sign::find($id);
      return view('sign.edit')->with('data',$data);
      }

    public function update(Request $request,$id){
        $input = sign::find($id);
        $input -> name = $request-> name;
        $input -> email = $request-> email;
        $input -> number = $request-> number;
        $input -> save();
        return redirect()->route('show');
    }
    public function delete($id){
      $data = sign::find($id);
      $data -> delete();
      return redirect()->route('show');
    }
}
