<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Nurse;
use App\Http\Requests\CreateNurseRequest;
use App\Http\Requests\UpdateNurseRequest;
use Illuminate\Http\Request;



class NurseController extends Controller {

	/**
	 * Display a listing of nurse
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $nurse = Nurse::all();

		return view('admin.nurse.index', compact('nurse'));
	}

	/**
	 * Show the form for creating a new nurse
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.nurse.create');
	}

	/**
	 * Store a newly created nurse in storage.
	 *
     * @param CreateNurseRequest|Request $request
	 */
	public function store(CreateNurseRequest $request)
	{
	    
		Nurse::create($request->all());

		return redirect()->route('admin.nurse.index');
	}

	/**
	 * Show the form for editing the specified nurse.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$nurse = Nurse::find($id);
	    
	    
		return view('admin.nurse.edit', compact('nurse'));
	}

	/**
	 * Update the specified nurse in storage.
     * @param UpdateNurseRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateNurseRequest $request)
	{
		$nurse = Nurse::findOrFail($id);

        

		$nurse->update($request->all());

		return redirect()->route('admin.nurse.index');
	}

	/**
	 * Remove the specified nurse from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Nurse::destroy($id);

		return redirect()->route('admin.nurse.index');
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
            Nurse::destroy($toDelete);
        } else {
            Nurse::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.nurse.index');
    }

}
