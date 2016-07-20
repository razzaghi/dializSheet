<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\KindOfAdm;
use App\Http\Requests\CreateKindOfAdmRequest;
use App\Http\Requests\UpdateKindOfAdmRequest;
use Illuminate\Http\Request;



class KindOfAdmController extends Controller {

	/**
	 * Display a listing of kindofadm
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $kindofadm = KindOfAdm::all();

		return view('admin.kindofadm.index', compact('kindofadm'));
	}

	/**
	 * Show the form for creating a new kindofadm
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.kindofadm.create');
	}

	/**
	 * Store a newly created kindofadm in storage.
	 *
     * @param CreateKindOfAdmRequest|Request $request
	 */
	public function store(CreateKindOfAdmRequest $request)
	{
	    
		KindOfAdm::create($request->all());

		return redirect()->route('admin.kindofadm.index');
	}

	/**
	 * Show the form for editing the specified kindofadm.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$kindofadm = KindOfAdm::find($id);
	    
	    
		return view('admin.kindofadm.edit', compact('kindofadm'));
	}

	/**
	 * Update the specified kindofadm in storage.
     * @param UpdateKindOfAdmRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateKindOfAdmRequest $request)
	{
		$kindofadm = KindOfAdm::findOrFail($id);

        

		$kindofadm->update($request->all());

		return redirect()->route('admin.kindofadm.index');
	}

	/**
	 * Remove the specified kindofadm from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		KindOfAdm::destroy($id);

		return redirect()->route('admin.kindofadm.index');
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
            KindOfAdm::destroy($toDelete);
        } else {
            KindOfAdm::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.kindofadm.index');
    }

}
