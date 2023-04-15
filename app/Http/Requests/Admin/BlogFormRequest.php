<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogFormRequest extends FormRequest
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
            'title' => 'required|max: 255',
            'author' => 'required|max:255',            
            'image.*' => 'nullable|image|mimes:jpeg,jpg,png,gif,csv,txt,pdf',
            'posted_by' => 'required|max: 255',
            'content' => 'required'
        ];
    }
}
