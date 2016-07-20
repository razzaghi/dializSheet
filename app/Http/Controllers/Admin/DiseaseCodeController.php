<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\DiseaseCode;
use App\Http\Requests\CreateDiseaseCodeRequest;
use App\Http\Requests\UpdateDiseaseCodeRequest;
use Illuminate\Http\Request;



class DiseaseCodeController extends Controller {

	/**
	 * Display a listing of diseasecode
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $diseasecode = DiseaseCode::all();

		return view('admin.diseasecode.index', compact('diseasecode'));
	}

	/**
	 * Show the form for creating a new diseasecode
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.diseasecode.create');
	}

	/**
	 * Store a newly created diseasecode in storage.
	 *
     * @param CreateDiseaseCodeRequest|Request $request
	 */
	public function store(CreateDiseaseCodeRequest $request)
	{
	    
		DiseaseCode::create($request->all());

		return redirect()->route('admin.diseasecode.index');
	}

	/**
	 * Show the form for editing the specified diseasecode.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$diseasecode = DiseaseCode::find($id);
	    
	    
		return view('admin.diseasecode.edit', compact('diseasecode'));
	}

	/**
	 * Update the specified diseasecode in storage.
     * @param UpdateDiseaseCodeRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateDiseaseCodeRequest $request)
	{
		$diseasecode = DiseaseCode::findOrFail($id);

        

		$diseasecode->update($request->all());

		return redirect()->route('admin.diseasecode.index');
	}

	/**
	 * Remove the specified diseasecode from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		DiseaseCode::destroy($id);

		return redirect()->route('admin.diseasecode.index');
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
            DiseaseCode::destroy($toDelete);
        } else {
            DiseaseCode::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.diseasecode.index');
    }

}
