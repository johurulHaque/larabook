<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class databaseController extends Controller
{
    public function store(Request $request){
    	 $request -> validate([
        'category' => 'required',
        'name'	   => 'required',
        'price'	   => 'required'

    ],
    [
        'category.required' => 'it can not be blanked',
        'name.required' => 'it can not be blanked',
        'price.required' => 'it can not be blanked'
    ]);


		$input =new product;
		$input -> category = $request -> input('category');
		$input -> name = $request -> input('name');
		$input -> price = $request ->input('price','name');
		$input->save();
		return redirect()->route('home');
    }



 public function show(){
    // all data
 	// $data = product::get();
    $data = product::skip(1)->take(2)->get();
 	// $data = product::pluck('name');
 	// $data = product::where('name', 'htc')->value('price'); modify table in a single value

 	// return view('database.insert')->withData($data);
    return $data; 
 }



 //middle ware
 //middle ware
 public function home(){
    return view('middleware.home');
 }
 public function about(){
    return view('middleware.about');
 }

}
