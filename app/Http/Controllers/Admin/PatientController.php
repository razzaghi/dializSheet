<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Patient;
use App\Http\Requests\CreatePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Illuminate\Http\Request;

use App\Gender;
use App\MaritalStatus;
use App\Occupation;


class PatientController extends Controller
{

    /**
     * Display a listing of patient
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $patient = Patient::with("gender")->with("maritalstatus")->with("occupation")->get();

        return view('admin.patient.index', compact('patient'));
    }

    /**
     * Show the form for creating a new patient
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $gender = Gender::lists("title", "id")->prepend('Please select', '');
        $maritalstatus = MaritalStatus::lists("title", "id")->prepend('Please select', '');
        $occupation = Occupation::lists("title", "id")->prepend('Please select', '');


        return view('admin.patient.create', compact("gender", "maritalstatus", "occupation"));
    }

    /**
     * Store a newly created patient in storage.
     *
     * @param CreatePatientRequest|Request $request
     */
    public function store(CreatePatientRequest $request)
    {

        Patient::create($request->all());

        return redirect()->route('admin.patient.index');
    }

    /**
     * Show the form for editing the specified patient.
     *
     * @param  int $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        $gender = Gender::lists("title", "id")->prepend('Please select', '');
        $maritalstatus = MaritalStatus::lists("title", "id")->prepend('Please select', '');
        $occupation = Occupation::lists("title", "id")->prepend('Please select', '');


        return view('admin.patient.edit', compact('patient', "gender", "maritalstatus", "occupation"));
    }

    /**
     * Show the form for editing the specified patient.
     *
     * @param  int $id
     * @return \Illuminate\View\View
     */
    public function lastDializ($id)
    {
        $patient = Patient::find($id);
        $gender = Gender::lists("title", "id")->prepend('Please select', '');
        $maritalstatus = MaritalStatus::lists("title", "id")->prepend('Please select', '');
        $occupation = Occupation::lists("title", "id")->prepend('Please select', '');


        return view('admin.patient.lastDializ', compact('patient', "gender", "maritalstatus", "occupation"));
    }

    /**
     * Update the specified patient in storage.
     * @param UpdatePatientRequest|Request $request
     *
     * @param  int $id
     */
    public function update($id, UpdatePatientRequest $request)
    {
        $patient = Patient::findOrFail($id);


        $patient->update($request->all());

        return redirect("admin/patient/".$id."/edit");
    }

    /**
     * Remove the specified patient from storage.
     *
     * @param  int $id
     */
    public function destroy($id)
    {
        Patient::destroy($id);

        return redirect()->route('admin.patient.index');
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
            Patient::destroy($toDelete);
        } else {
            Patient::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.patient.index');
    }



}
