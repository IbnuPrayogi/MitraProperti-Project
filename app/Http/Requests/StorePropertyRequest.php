<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertyRequest extends FormRequest
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
            'cluster_type' => 'required|string|max:255',
            'province' => 'required|exists:provinces,id',
            'regency' => 'required|exists:regencies,id',
            'district' => 'required|exists:districts,id',
            'village' => 'required|exists:villages,id',
            'location' => 'required|string|max:255',
            'instalment' => 'required|numeric',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'terms' => 'accepted',
        ];
    }
}
