<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Doctor;
use App\Http\Requests\CreateDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use Illuminate\Http\Request;



class DoctorController extends Controller {

	/**
	 * Display a listing of doctor
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $doctor = Doctor::all();

		return view('admin.doctor.index', compact('doctor'));
	}

	/**
	 * Show the form for creating a new doctor
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.doctor.create');
	}

	/**
	 * Store a newly created doctor in storage.
	 *
     * @param CreateDoctorRequest|Request $request
	 */
	public function store(CreateDoctorRequest $request)
	{
	    
		Doctor::create($request->all());

		return redirect()->route('admin.doctor.index');
	}

	/**
	 * Show the form for editing the specified doctor.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$doctor = Doctor::find($id);
	    
	    
		return view('admin.doctor.edit', compact('doctor'));
	}

	/**
	 * Update the specified doctor in storage.
     * @param UpdateDoctorRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateDoctorRequest $request)
	{
		$doctor = Doctor::findOrFail($id);

        

		$doctor->update($request->all());

		return redirect()->route('admin.doctor.index');
	}

	/**
	 * Remove the specified doctor from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Doctor::destroy($id);

		return redirect()->route('admin.doctor.index');
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
            Doctor::destroy($toDelete);
        } else {
            Doctor::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.doctor.index');
    }

}
