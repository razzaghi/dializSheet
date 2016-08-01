<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Description;
use App\Http\Requests\CreateDescriptionRequest;
use App\Http\Requests\UpdateDescriptionRequest;
use Illuminate\Http\Request;

use App\Patient;


class DescriptionController extends Controller {

	/**
	 * Display a listing of description
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request,$id)
    {
        $description = Description::with("patient")->get();

		$patient = Patient::find($id);

		return view('admin.description.index', compact('description','patient','id'));
	}

	/**
	 * Show the form for creating a new description
	 *
     * @return \Illuminate\View\View
	 */
	public function create($id)
	{
	    $patient = Patient::lists("family", "id")->prepend('Please select', '');

	    
	    return view('admin.description.create', compact("patient",'id'));
	}

	/**
	 * Store a newly created description in storage.
	 *
     * @param CreateDescriptionRequest|Request $request
	 */
	public function store(CreateDescriptionRequest $request)
	{
	    
		Description::create($request->all());

		$id = $request->get("patient_id");

		return redirect("admin/description/index/".$id);
	}

	/**
	 * Show the form for editing the specified description.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$description = Description::find($id);
	    $patient = Patient::lists("family", "id")->prepend('Please select', '');

	    
		return view('admin.description.edit', compact('description', "patient"));
	}

	/**
	 * Update the specified description in storage.
     * @param UpdateDescriptionRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateDescriptionRequest $request)
	{
		$description = Description::findOrFail($id);

		$description->update($request->all());

		$id = $request->get("patient_id");

		return redirect("admin/description/index/".$id);

	}

	/**
	 * Remove the specified description from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{

        $desc = Description::find($id);

		Description::destroy($id);

		return redirect("admin/description/index/" . $desc->patient_id);
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
            Description::destroy($toDelete);
        } else {
            Description::whereNotNull('id')->delete();
        }

        $id = $request->get('patientId');
        return redirect("admin/description/index/" . $id);
    }

}
