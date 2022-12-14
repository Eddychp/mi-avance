<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvestigationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'date'=>"required",
            'start_date'=>"required",
            'end_date'=>"required",
            'path'=>"required",
            'area_id'=>"required",
            'category_id'=>"required",
            'qualification'=>"required",

        ];
    }
}
