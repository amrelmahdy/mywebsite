<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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
            'full_name' => 'required',
            'email' => 'required',
            'mobile' => 'required|alpha_num',
            'address' => 'required',
            'short_bio' => 'required',
            'image' => 'image',
            'resume' => 'mimes:pdf,docx',
            'projects_done' => 'required|alpha_num',
            'happy_clients' => 'required|alpha_num',
            'experience_years' =>'required|alpha_num',
            'countries_served' =>'required|alpha_num',

        ];
    }
}
