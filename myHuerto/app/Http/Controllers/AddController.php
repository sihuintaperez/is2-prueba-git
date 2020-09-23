<?php

namespace App\Http\Controllers;

use App\Producto

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function store()
    {
    	request()->validate([
    		"idproducto" => 'required',
    		'idproveedor' => 'required'
    	]);
    	return view('home');
    }
    
}