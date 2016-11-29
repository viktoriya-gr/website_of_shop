<?php

namespace App\Http\Controllers;
use App\Catalog;
use Illuminate\Http\Request;

use App\Http\Requests;

class CatalogController extends Controller
{
  public function getIndex(){
	  $text=Catalog::where('url','index')->first();
     return view('catalog')->with('text',$text);
	  	  
  }
  public function getAll(){
      $all = Catalog::get();
      return view('catalogall')->with('all', $all);
  }

}
