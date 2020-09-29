<?php

namespace App\Http\Requests\Center\Laboratory;

use Illuminate\Foundation\Http\FormRequest;

class PatientResultsRequest extends FormRequest
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
            'idExaminationSample' => 'required|digits_between:1,20',
            'examinationPassword' => 'required|max:20',
        ];
    }
}
