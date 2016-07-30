<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Addmission;
use App\Http\Requests\CreateAddmissionRequest;
use App\Http\Requests\UpdateAddmissionRequest;
use Illuminate\Http\Request;

use App\Patient;


class AddmissionController extends Controller {

	/**
	 * Display a listing of addmission
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request,$id)
    {
		$patient = Patient::find($id);

        $addmission = Addmission::with("patient")->get();

		return view('admin.addmission.index', compact('addmission','patient','id'));
	}

	/**
	 * Show the form for creating a new addmission
	 *
     * @return \Illuminate\View\View
	 */
	public function create($id)
	{


	    $patient = Patient::lists("family", "id")->prepend('Please select', '');

	    return view('admin.addmission.create', compact("patient","id"));
	}

	/**
	 * Store a newly created addmission in storage.
	 *
     * @param CreateAddmissionRequest|Request $request
	 */
	public function store(CreateAddmissionRequest $request)
	{
	    
		Addmission::create($request->all());

		return redirect()->route('admin.addmission.index');
	}

	/**
	 * Show the form for editing the specified addmission.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$addmission = Addmission::find($id);
	    $patient = Patient::lists("family", "id")->prepend('Please select', '');

	    
		return view('admin.addmission.edit', compact('addmission', "patient"));
	}

	/**
	 * Update the specified addmission in storage.
     * @param UpdateAddmissionRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateAddmissionRequest $request)
	{
		$addmission = Addmission::findOrFail($id);

        

		$addmission->update($request->all());

		return redirect()->route('admin.addmission.index');
	}

	/**
	 * Remove the specified addmission from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Addmission::destroy($id);

		return redirect()->route('admin.addmission.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Addmission::destroy($toDelete);
        } else {
            Addmission::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.addmission.index');
    }

}
