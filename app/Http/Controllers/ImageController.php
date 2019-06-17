<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ImageController extends Controller
{
    public function home(){
      $image = Image::getw
      return view('sign.image')->with('image',$image);
    }

    public function store(Request $request){
          $input = new Image;
          $input -> title = $request -> title;
          if($request ->hasFile('image')){
          $input -> image = $request -> image -> store('public/image');
        }
          $input -> save();
          return redirect()->route('home');
      }

}
