<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackFormRequest extends FormRequest
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
            'email' => 'required|email|max: 255',
            'company_name' => 'required|max:255',
            'subject' => 'required|max: 255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
            'message' => 'required'
        ];
    }
}
