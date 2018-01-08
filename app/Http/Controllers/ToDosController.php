<?php

namespace App\Http\Controllers;

use App\ToDo; 
use Illuminate\Http\Request;

class ToDosController extends Controller
{
    //


	public function index()
	{
		return response()->json([
			'items' => ToDo::latest()->get(), 
		], 200); 
	}





	public function store()
	{
		return response()->json([
			'data' => ToDo::persist(), 
		], 200); 
	}



}
