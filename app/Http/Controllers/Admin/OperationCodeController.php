<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\OperationCode;
use App\Http\Requests\CreateOperationCodeRequest;
use App\Http\Requests\UpdateOperationCodeRequest;
use Illuminate\Http\Request;



class OperationCodeController extends Controller {

	/**
	 * Display a listing of operationcode
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $operationcode = OperationCode::all();

		return view('admin.operationcode.index', compact('operationcode'));
	}

	/**
	 * Show the form for creating a new operationcode
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.operationcode.create');
	}

	/**
	 * Store a newly created operationcode in storage.
	 *
     * @param CreateOperationCodeRequest|Request $request
	 */
	public function store(CreateOperationCodeRequest $request)
	{
	    
		OperationCode::create($request->all());

		return redirect()->route('admin.operationcode.index');
	}

	/**
	 * Show the form for editing the specified operationcode.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$operationcode = OperationCode::find($id);
	    
	    
		return view('admin.operationcode.edit', compact('operationcode'));
	}

	/**
	 * Update the specified operationcode in storage.
     * @param UpdateOperationCodeRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateOperationCodeRequest $request)
	{
		$operationcode = OperationCode::findOrFail($id);

        

		$operationcode->update($request->all());

		return redirect()->route('admin.operationcode.index');
	}

	/**
	 * Remove the specified operationcode from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		OperationCode::destroy($id);

		return redirect()->route('admin.operationcode.index');
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
            OperationCode::destroy($toDelete);
        } else {
            OperationCode::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.operationcode.index');
    }

}
