<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Occupation;
use App\Http\Requests\CreateOccupationRequest;
use App\Http\Requests\UpdateOccupationRequest;
use Illuminate\Http\Request;



class OccupationController extends Controller {

	/**
	 * Display a listing of occupation
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $occupation = Occupation::all();

		return view('admin.occupation.index', compact('occupation'));
	}

	/**
	 * Show the form for creating a new occupation
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.occupation.create');
	}

	/**
	 * Store a newly created occupation in storage.
	 *
     * @param CreateOccupationRequest|Request $request
	 */
	public function store(CreateOccupationRequest $request)
	{
	    
		Occupation::create($request->all());

		return redirect()->route('admin.occupation.index');
	}

	/**
	 * Show the form for editing the specified occupation.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$occupation = Occupation::find($id);
	    
	    
		return view('admin.occupation.edit', compact('occupation'));
	}

	/**
	 * Update the specified occupation in storage.
     * @param UpdateOccupationRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateOccupationRequest $request)
	{
		$occupation = Occupation::findOrFail($id);

        

		$occupation->update($request->all());

		return redirect()->route('admin.occupation.index');
	}

	/**
	 * Remove the specified occupation from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Occupation::destroy($id);

		return redirect()->route('admin.occupation.index');
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
            Occupation::destroy($toDelete);
        } else {
            Occupation::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.occupation.index');
    }

}
