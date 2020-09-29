<?php

namespace App\Http\Requests\Admin\Center;

use Illuminate\Foundation\Http\FormRequest;

class CreateCenterRequest extends FormRequest
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
            'name' => 'required|string',
            'name_short' => 'string|nullable',
            'medical_base' => 'string|nullable',
            'post_code' => 'required|string',
            'city' => 'required|string',
            'district' => 'string|nullable',
            'section' => 'string|nullable',
            'street' => 'required|string',
            'street_number' => 'required|string',
            'additional_address_info' => 'string|nullable',
            'lat' => 'required|string',
            'lng' => 'required|string',

            'web_address' => 'required|string',
            'web_myhealth_address' => 'string|nullable',
            'email' => 'required|string',

            'social_fb' => 'string|nullable',
            'social_gplus' => 'string|nullable',
            'social_twitter' => 'string|nullable',
            'social_youtube' => 'string|nullable',

            'manager' => 'required|string',
            'accountant' => 'string|nullable',
            'senior_nurse_1' => 'string|nullable',
            'senior_nurse_2' => 'string|nullable',
            'senior_nurse_3' => 'string|nullable',

            'phone_manager' => 'string|nullable',
            'phone_accountant' => 'string|nullable',
            'phone_senior_nurse_1' => 'string|nullable',
            'phone_senior_nurse_2' => 'string|nullable',
            'phone_senior_nurse_3' => 'string|nullable',

            'phone_registry_1' => 'string|nullable',
            'phone_registry_2' => 'string|nullable',
            'phone_registry_3' => 'string|nullable',
            'fax' => 'string|nullable',

            'business_hours_start' => 'string|nullable',
            'business_hours_end' => 'string|nullable',
            'visiting_hours_start' => 'string|nullable',
            'visiting_hours_end' => 'string|nullable',
            'non_working_days' => 'string|nullable',
        ];
    }
}
