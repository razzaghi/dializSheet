<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\DoctorOrder;
use App\Http\Requests\CreateDoctorOrderRequest;
use App\Http\Requests\UpdateDoctorOrderRequest;
use Illuminate\Http\Request;

use App\Patient;
use App\Doctor;
use App\Nurse;


class DoctorOrderController extends Controller {

	/**
	 * Display a listing of doctororder
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $doctororder = DoctorOrder::with("patient")->with("doctor")->with("nurse")->get();

		return view('admin.doctororder.index', compact('doctororder'));
	}

	/**
	 * Show the form for creating a new doctororder
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $patient = Patient::lists("family", "id")->prepend('Please select', '');
$doctor = Doctor::lists("family", "id")->prepend('Please select', '');
$nurse = Nurse::lists("family", "id")->prepend('Please select', '');

	    
	    return view('admin.doctororder.create', compact("patient", "doctor", "nurse"));
	}

	/**
	 * Store a newly created doctororder in storage.
	 *
     * @param CreateDoctorOrderRequest|Request $request
	 */
	public function store(CreateDoctorOrderRequest $request)
	{
	    
		DoctorOrder::create($request->all());

		return redirect()->route('admin.doctororder.index');
	}

	/**
	 * Show the form for editing the specified doctororder.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$doctororder = DoctorOrder::find($id);
	    $patient = Patient::lists("family", "id")->prepend('Please select', '');
$doctor = Doctor::lists("family", "id")->prepend('Please select', '');
$nurse = Nurse::lists("family", "id")->prepend('Please select', '');

	    
		return view('admin.doctororder.edit', compact('doctororder', "patient", "doctor", "nurse"));
	}

	/**
	 * Update the specified doctororder in storage.
     * @param UpdateDoctorOrderRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateDoctorOrderRequest $request)
	{
		$doctororder = DoctorOrder::findOrFail($id);

        

		$doctororder->update($request->all());

		return redirect()->route('admin.doctororder.index');
	}

	/**
	 * Remove the specified doctororder from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		DoctorOrder::destroy($id);

		return redirect()->route('admin.doctororder.index');
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
            DoctorOrder::destroy($toDelete);
        } else {
            DoctorOrder::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.doctororder.index');
    }

}
