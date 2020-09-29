<?php

namespace App\Http\Requests\Admin\Career;

use Illuminate\Foundation\Http\FormRequest;

class CreateCareerRequest extends FormRequest
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
            'title' => 'required|string',
            'position' => 'required|string',
            'published_on' => 'required',
            'published_on_submit' => 'required',
            'deadline' => 'string|nullable',
            'deadline_submit' => 'string|nullable',
            'city' => 'string|nullable',
            'author' => 'string|nullable',
            'rating' => 'string|nullable',
            'body' => 'required',
        ];
    }
}
