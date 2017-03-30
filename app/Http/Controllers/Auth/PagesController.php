<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getindex(){
    	$name = "company";
    	$records = 1;
    	 return view('pages.index')
    	 ->with("name",$name)
    	 ->with("records",$records)
    	 ;
    }
}
