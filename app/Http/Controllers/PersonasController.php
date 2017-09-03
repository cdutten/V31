<?php

namespace App\Http\Controllers;

use App\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
    //
    public function index(){
        $Personas = Personas::all();
    	return view('personas', ['personas' => $Personas]);
    }
}
