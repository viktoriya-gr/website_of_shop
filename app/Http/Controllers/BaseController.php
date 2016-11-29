<?php

namespace App\Http\Controllers;
use App\Maintext;
use Illuminate\Http\Request;

use App\Http\Requests;

class BaseController extends Controller
{
  public function getIndex(){
	  $text=Maintext::where('url','index')->first();
     return view('base')->with('text',$text);
	  	  
  }
}
