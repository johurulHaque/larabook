<?php
namespace App\Http\Controllers;
/**
  * 
  */
 class PracticeController extends Controller
 {
 	
 	public function home($number,$num2 = null)
 	{
 		return $number + $num2;
 	}
 } 


