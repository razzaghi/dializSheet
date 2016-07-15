<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Gender;
use App\Http\Requests\CreateGenderRequest;
use App\Http\Requests\UpdateGenderRequest;
use Illuminate\Http\Request;



class GenderController extends Controller {

	/**
	 * Display a listing of gender
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $gender = Gender::all();

		return view('admin.gender.index', compact('gender'));
	}

	/**
	 * Show the form for creating a new gender
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.gender.create');
	}

	/**
	 * Store a newly created gender in storage.
	 *
     * @param CreateGenderRequest|Request $request
	 */
	public function store(CreateGenderRequest $request)
	{
	    
		Gender::create($request->all());

		return redirect()->route('admin.gender.index');
	}

	/**
	 * Show the form for editing the specified gender.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$gender = Gender::find($id);
	    
	    
		return view('admin.gender.edit', compact('gender'));
	}

	/**
	 * Update the specified gender in storage.
     * @param UpdateGenderRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateGenderRequest $request)
	{
		$gender = Gender::findOrFail($id);

        

		$gender->update($request->all());

		return redirect()->route('admin.gender.index');
	}

	/**
	 * Remove the specified gender from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Gender::destroy($id);

		return redirect()->route('admin.gender.index');
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
            Gender::destroy($toDelete);
        } else {
            Gender::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.gender.index');
    }

}
