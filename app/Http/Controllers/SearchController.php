<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;
use App\Otdel;

class SearchController extends Controller
{
    public function index() {
    	$deperdatas = department::all();
        $otdeldates = otdel::all();
        return view('searchdata.index', compact('deperdatas', 'otdeldates'));
    }

}
