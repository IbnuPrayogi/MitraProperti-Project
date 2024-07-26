<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'regency' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'village' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'toilet' => 'required|integer',
            'bedroom' => 'required|integer',
            'surface_area' => 'required|integer',
            'building_area' => 'required|integer',
            'carport' => 'required|integer',
            'description' => 'required|string',
            'mosque' => 'required|boolean',
            'jogging' => 'required|boolean',
            'sports' => 'required|boolean',
            'child' => 'required|boolean',
            'pool' => 'required|boolean',
            'instalment' => 'required|numeric',
            'picture' => 'nullable|string',
        ];
    }
}
