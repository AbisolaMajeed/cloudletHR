<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingFormRequest extends FormRequest
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
            'name' => 'required|max: 255',
            'email' => 'required|email|max:255',            
            'phone_number' => 'required|max: 255',
            'company_logo' => 'image|mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
            'company_address' => 'required',
            'about_company' => 'required'
        ];
    }
}
