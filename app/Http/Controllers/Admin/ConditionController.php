<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Condition;
use App\Http\Requests\CreateConditionRequest;
use App\Http\Requests\UpdateConditionRequest;
use Illuminate\Http\Request;



class ConditionController extends Controller {

	/**
	 * Display a listing of condition
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $condition = Condition::all();

		return view('admin.condition.index', compact('condition'));
	}

	/**
	 * Show the form for creating a new condition
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.condition.create');
	}

	/**
	 * Store a newly created condition in storage.
	 *
     * @param CreateConditionRequest|Request $request
	 */
	public function store(CreateConditionRequest $request)
	{
	    
		Condition::create($request->all());

		return redirect()->route('admin.condition.index');
	}

	/**
	 * Show the form for editing the specified condition.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$condition = Condition::find($id);
	    
	    
		return view('admin.condition.edit', compact('condition'));
	}

	/**
	 * Update the specified condition in storage.
     * @param UpdateConditionRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateConditionRequest $request)
	{
		$condition = Condition::findOrFail($id);

        

		$condition->update($request->all());

		return redirect()->route('admin.condition.index');
	}

	/**
	 * Remove the specified condition from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Condition::destroy($id);

		return redirect()->route('admin.condition.index');
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
            Condition::destroy($toDelete);
        } else {
            Condition::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.condition.index');
    }

}
