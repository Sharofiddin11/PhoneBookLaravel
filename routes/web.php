<?php


use App\Department;
use App\Otdel;
use App\People;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'SearchController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function() {

	Route::resource('people','PeopleController');
		
	Route::resource('otdel','OtdelController');
	    
	Route::resource('department','DepartmentController');

});


Route::any ( '/search', function () {

	$deperdatas = department::all();
    $otdeldates = otdel::all();

    $q = Request::get ( 'q' );
    $st1 = Request::get( 'ST1' );
    
    $st_id = 0;

    $ootdeldatas = otdel::latest()->paginate(5);
	foreach ($ootdeldatas as $ootdeldata) {
		if($ootdeldata->name == $st1) $st_id = $ootdeldata->id;
	}

    if($st1 != 'Chose otdels on department') {
    	$user = people::where ( 'otdel_id', 'LIKE', '%' . $st_id . '%' )->where ( 'name', 'LIKE', '%' . $q . '%' )->get ();
	    if (count ( $user ) > 0)
	        return view ( 'searchdata.index', compact('deperdatas', 'otdeldates'))->with('details', $user );
	    else
	        return view ( 'searchdata.index', compact('deperdatas', 'otdeldates') )->withMessage ( 'No Details found. Try to search again !' );
    }
    else {
        $user = people::where ( 'name', 'LIKE', '%' . $q . '%' )->get ();
	    if (count ( $user ) > 0)
	        return view ( 'searchdata.index', compact('deperdatas', 'otdeldates') )->with('details', $user );
	    else
	        return view ( 'searchdata.index', compact('deperdatas', 'otdeldates') )->withMessage ( 'No Details found. Try to search again !' );
    }
} );


