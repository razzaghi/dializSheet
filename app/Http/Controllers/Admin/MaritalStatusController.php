<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\MaritalStatus;
use App\Http\Requests\CreateMaritalStatusRequest;
use App\Http\Requests\UpdateMaritalStatusRequest;
use Illuminate\Http\Request;



class MaritalStatusController extends Controller {

	/**
	 * Display a listing of maritalstatus
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $maritalstatus = MaritalStatus::all();

		return view('admin.maritalstatus.index', compact('maritalstatus'));
	}

	/**
	 * Show the form for creating a new maritalstatus
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.maritalstatus.create');
	}

	/**
	 * Store a newly created maritalstatus in storage.
	 *
     * @param CreateMaritalStatusRequest|Request $request
	 */
	public function store(CreateMaritalStatusRequest $request)
	{
	    
		MaritalStatus::create($request->all());

		return redirect()->route('admin.maritalstatus.index');
	}

	/**
	 * Show the form for editing the specified maritalstatus.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$maritalstatus = MaritalStatus::find($id);
	    
	    
		return view('admin.maritalstatus.edit', compact('maritalstatus'));
	}

	/**
	 * Update the specified maritalstatus in storage.
     * @param UpdateMaritalStatusRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateMaritalStatusRequest $request)
	{
		$maritalstatus = MaritalStatus::findOrFail($id);

        

		$maritalstatus->update($request->all());

		return redirect()->route('admin.maritalstatus.index');
	}

	/**
	 * Remove the specified maritalstatus from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		MaritalStatus::destroy($id);

		return redirect()->route('admin.maritalstatus.index');
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
            MaritalStatus::destroy($toDelete);
        } else {
            MaritalStatus::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.maritalstatus.index');
    }

}
