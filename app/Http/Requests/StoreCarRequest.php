<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
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
            'brand' => 'required|min:2',
            'model' => 'required|min:2',
            'year' => 'required',
            'maxSpeed' => 'nullable|integer|min:20|max:300',
            'isAutomatic' => 'required',
            'engine' => 'required',
            'numberOfDoors' => 'required|integer|min:2|max:5'
        ];
    }
}