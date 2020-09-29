<?php

namespace App\Http\Requests\Admin\BuyerProfile;

use Illuminate\Foundation\Http\FormRequest;

class EditBuyerRequest extends FormRequest
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
            'buyer_id' => 'required',
            'title' => 'required|string',
            'published_on' => 'required',
            'published_on_submit' => 'required',
            'deadline' => 'string|nullable',
            'deadline_submit' => 'string|nullable',
            'buyer_type_id' => 'required',
            'body' => 'required',
        ];
    }
}
