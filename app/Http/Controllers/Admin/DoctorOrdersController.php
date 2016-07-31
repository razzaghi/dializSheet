<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\DoctorOrders;
use App\Http\Requests\CreateDoctorOrdersRequest;
use App\Http\Requests\UpdateDoctorOrdersRequest;
use Illuminate\Http\Request;

use App\Doctor;
use App\Nurse;


class DoctorOrdersController extends Controller {

	/**
	 * Display a listing of doctororders
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $doctororders = DoctorOrders::with("doctor")->with("nurse")->get();

		return view('admin.doctororders.index', compact('doctororders'));
	}

	/**
	 * Show the form for creating a new doctororders
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $doctor = Doctor::lists("family", "id")->prepend('Please select', '');
$nurse = Nurse::lists("family", "id")->prepend('Please select', '');

	    
	    return view('admin.doctororders.create', compact("doctor", "nurse"));
	}

	/**
	 * Store a newly created doctororders in storage.
	 *
     * @param CreateDoctorOrdersRequest|Request $request
	 */
	public function store(CreateDoctorOrdersRequest $request)
	{
	    
		DoctorOrders::create($request->all());

		return redirect()->route('admin.doctororders.index');
	}

	/**
	 * Show the form for editing the specified doctororders.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$doctororders = DoctorOrders::find($id);
	    $doctor = Doctor::lists("family", "id")->prepend('Please select', '');
$nurse = Nurse::lists("family", "id")->prepend('Please select', '');

	    
		return view('admin.doctororders.edit', compact('doctororders', "doctor", "nurse"));
	}

	/**
	 * Update the specified doctororders in storage.
     * @param UpdateDoctorOrdersRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateDoctorOrdersRequest $request)
	{
		$doctororders = DoctorOrders::findOrFail($id);

        

		$doctororders->update($request->all());

		return redirect()->route('admin.doctororders.index');
	}

	/**
	 * Remove the specified doctororders from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		DoctorOrders::destroy($id);

		return redirect()->route('admin.doctororders.index');
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
            DoctorOrders::destroy($toDelete);
        } else {
            DoctorOrders::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.doctororders.index');
    }

}
