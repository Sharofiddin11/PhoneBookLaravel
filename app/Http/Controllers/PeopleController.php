<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use App\Otdel;
use App\Department;

class PeopleController extends Controller
{
    public function index() {
        $peodatas = people::latest()->paginate(5);
        return view('peopledate.index', compact('peodatas'))
                  ->with('i', (request()->input('page',1) -1)*5);
    }

    public function create() {
        $deperdatas = department::latest()->paginate(5);
        $otdeldates = otdel::latest()->paginate(5);
        return view('peopledate.create', compact('deperdatas'), compact('otdeldates'));
    }

    public function store(Request $request) {
        $request->validate([
    		'name' => 'required',
    		'phone_number' => 'required',
    		'email' => 'required',
    		'address' => 'required',
    		'otdel_id' => 'required'
        ]);

	    $st = $request['otdel_id'];

	    $otdeldatas = otdel::latest()->paginate(5);
	    foreach ($otdeldatas as $otdeldata) {
		    if($otdeldata->name == $st) $request['otdel_id'] = $otdeldata->id;
	    }

        people::create($request->all());
        return redirect()->route('people.index')
                        ->with('success', 'new people created successfully');
    }

  
    public function edit($id) {
	        $peodata = people::find($id);
	        $deperdatas = department::latest()->paginate(5);
	        $otdeldates = otdel::latest()->paginate(5);
	        return view('peopledate.edit', compact('peodata', 'deperdatas', 'otdeldates'));
    }


    public function update(Request $request, $id) {
	  $request->validate([
	    'name' => 'required',
	    'phone_number' => 'required',
	    'email' => 'required',
	    'address' => 'required',
	    'otdel_id' => 'required'
	  ]);

      $st = $request['otdel_id'];

      $otdeldatas = otdel::latest()->paginate(5);
      foreach ($otdeldatas as $otdeldata) {
    	 if($otdeldata->name == $st) $request['otdel_id'] = $otdeldata->id;
      }

	  $peopledate = people::find($id);
	  $peopledate->name = $request->get('name');
	  $peopledate->phone_number = $request->get('phone_number');
	  $peopledate->email = $request->get('email');
	  $peopledate->address = $request->get('address');
	  $peopledate->otdel_id = $request->get('otdel_id');
	  $peopledate->save();
	  return redirect()->route('people.index')
	                  ->with('success', 'Department updated successfully');
    }


    public function destroy($id) {
        $peodatas = People::find($id);
        $peodatas->delete();
        return redirect()->route('people.index')
                        ->with('success', 'People deleted successfully');
    }

	public function show($id) {
	    $peopledata = People::find($id);
	    $otdeldata = Otdel::find($peopledata->otdel_id);
	    $deperdata = Department::find($otdeldata->department_id);
	    return view('peopledate.detail', compact('peopledata'), compact('otdeldata', 'deperdata'));
	}
}
