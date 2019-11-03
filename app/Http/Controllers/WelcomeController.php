<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;
use App\Otdel;
use App\People;

class WelcomeController extends Controller
{
    public function index()
    {
    	$deperdatas = department::all();
        $otdeldates = otdel::all();
        return view('welcome', compact('deperdatas', 'otdeldates'));
    }

}
