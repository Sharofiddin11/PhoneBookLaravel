<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otdel;
use App\Department;

class OtdelController extends Controller
{
	  public function index() {
    		$otdeldates = otdel::latest()->paginate(5);
    		return view('otdeldate.index', compact('otdeldates'))
                     ->with('i', (request()->input('page',1) -1)*5);
	  }
		
		
	  public function create() {
	        $deperdatas = department::latest()->paginate(5);
	        return view('otdeldate.create', compact('deperdatas'))
	                      ->with('i', (request()->input('page',1) -1)*5);
	  }
		
	  public function store(Request $request) {
	        $request->validate([
			        'name' => 'required',
			        'department_id' => 'required'
	        ]);

	        $st = $request['department_id'];

	        $deperdatas = department::latest()->paginate(5);
	        foreach ($deperdatas as $deperdata) {
	        	if($deperdata->name == $st) $request['department_id'] = $deperdata->id;
	        }

	  	    otdel::create($request->all());
	  	    return redirect()->route('otdel.index')
	                      ->with('success', 'new department created successfully');
	         
	  }
		
	  public function destroy($id) {
	        $otdeldate = otdel::find($id);
	        $otdeldate->delete();
	        return redirect()->route('otdel.index')
	                        ->with('success', 'Department deleted successfully');
	  }
		
		
	  public function edit($id) {

	        $deperdatas = department::latest()->paginate(5);
	        $otdeldate = otdel::find($id);
	        return view('otdeldate.edit', compact('otdeldate'), compact('deperdatas'));
	  }
		
	  public function update(Request $request, $id) {
		      $request->validate([
				    'name' => 'required',
				    'department_id' => 'required'
		      ]);

	          $st = $request['department_id'];

	          $deperdatas = department::latest()->paginate(5);
	          foreach ($deperdatas as $deperdata) {
	        	 if($deperdata->name == $st) $request['department_id'] = $deperdata->id;
	          }

		      $otdeldate = otdel::find($id);
		      $otdeldate->name = $request->get('name');
		      $otdeldate->department_id = $request->get('department_id');
		      $otdeldate->save();
		      return redirect()->route('otdel.index')
		                      ->with('success', 'Department updated successfully');
	  }

	  public function show($id)
      {
            $otdeldata = Otdel::find($id);
            return view('otdeldate.detail', compact('otdeldata'));
      }
}
