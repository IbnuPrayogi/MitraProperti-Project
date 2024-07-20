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
            'name' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric',
            'category' => 'sometimes|required|string|max:255',
            'cluster_type' => 'sometimes|required|string|max:255',
            'province' => 'sometimes|required|exists:provinces,id',
            'regency' => 'sometimes|required|exists:regencies,id',
            'district' => 'sometimes|required|exists:districts,id',
            'village' => 'sometimes|required|exists:villages,id',
            'location' => 'sometimes|required|string|max:255',
            'instalment' => 'sometimes|required|numeric',
            'picture' => 'sometimes|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'terms' => 'sometimes|required|accepted',
        ];
    }
}
