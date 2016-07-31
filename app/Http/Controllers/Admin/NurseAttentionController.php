<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\NurseAttention;
use App\Http\Requests\CreateNurseAttentionRequest;
use App\Http\Requests\UpdateNurseAttentionRequest;
use Illuminate\Http\Request;

use App\Patient;
use App\Nurse;


class NurseAttentionController extends Controller {

	/**
	 * Display a listing of nurseattention
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $nurseattention = NurseAttention::with("patient")->with("nurse")->get();

		return view('admin.nurseattention.index', compact('nurseattention'));
	}

	/**
	 * Show the form for creating a new nurseattention
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $patient = Patient::lists("family", "id")->prepend('Please select', '');
$nurse = Nurse::lists("family", "id")->prepend('Please select', '');

	    
	    return view('admin.nurseattention.create', compact("patient", "nurse"));
	}

	/**
	 * Store a newly created nurseattention in storage.
	 *
     * @param CreateNurseAttentionRequest|Request $request
	 */
	public function store(CreateNurseAttentionRequest $request)
	{
	    
		NurseAttention::create($request->all());

		return redirect()->route('admin.nurseattention.index');
	}

	/**
	 * Show the form for editing the specified nurseattention.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$nurseattention = NurseAttention::find($id);
	    $patient = Patient::lists("family", "id")->prepend('Please select', '');
$nurse = Nurse::lists("family", "id")->prepend('Please select', '');

	    
		return view('admin.nurseattention.edit', compact('nurseattention', "patient", "nurse"));
	}

	/**
	 * Update the specified nurseattention in storage.
     * @param UpdateNurseAttentionRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateNurseAttentionRequest $request)
	{
		$nurseattention = NurseAttention::findOrFail($id);

        

		$nurseattention->update($request->all());

		return redirect()->route('admin.nurseattention.index');
	}

	/**
	 * Remove the specified nurseattention from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		NurseAttention::destroy($id);

		return redirect()->route('admin.nurseattention.index');
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
            NurseAttention::destroy($toDelete);
        } else {
            NurseAttention::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.nurseattention.index');
    }

}
