<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\IntroductionLetter;
use App\Http\Requests\CreateIntroductionLetterRequest;
use App\Http\Requests\UpdateIntroductionLetterRequest;
use Illuminate\Http\Request;



class IntroductionLetterController extends Controller {

	/**
	 * Display a listing of introductionletter
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $introductionletter = IntroductionLetter::all();

		return view('admin.introductionletter.index', compact('introductionletter'));
	}

	/**
	 * Show the form for creating a new introductionletter
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.introductionletter.create');
	}

	/**
	 * Store a newly created introductionletter in storage.
	 *
     * @param CreateIntroductionLetterRequest|Request $request
	 */
	public function store(CreateIntroductionLetterRequest $request)
	{
	    
		IntroductionLetter::create($request->all());

		return redirect()->route('admin.introductionletter.index');
	}

	/**
	 * Show the form for editing the specified introductionletter.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$introductionletter = IntroductionLetter::find($id);
	    
	    
		return view('admin.introductionletter.edit', compact('introductionletter'));
	}

	/**
	 * Update the specified introductionletter in storage.
     * @param UpdateIntroductionLetterRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateIntroductionLetterRequest $request)
	{
		$introductionletter = IntroductionLetter::findOrFail($id);

        

		$introductionletter->update($request->all());

		return redirect()->route('admin.introductionletter.index');
	}

	/**
	 * Remove the specified introductionletter from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		IntroductionLetter::destroy($id);

		return redirect()->route('admin.introductionletter.index');
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
            IntroductionLetter::destroy($toDelete);
        } else {
            IntroductionLetter::whereNotNull('id')->delete();
        }

        return redirect()->route('admin.introductionletter.index');
    }

}
