<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdatePatientRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'unitNumber' => 'required', 
            'family' => 'required', 
            'name' => 'required', 
            'gender_id' => 'required', 
            'idNo' => 'required', 
            
		];
	}
}
