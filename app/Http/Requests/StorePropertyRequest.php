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
            'name' => 'nullable|string|max:255',
            'price' => 'nullable|integer',
            'category' => 'nullable|string|max:255',
            'cluster_type' => 'nullable|string|max:255',
            'province' => 'nullable|string|max:255',
            'regency' => 'nullable|string|max:255',
            'district' => 'nullable|string|max:255',
            'village' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'toilet' => 'nullable|integer',
            'bedroom' => 'nullable|integer',
            'surface_area' => 'nullable|integer',
            'building_area' => 'nullable|integer',
            'carport' => 'nullable|integer',
            'floor' => 'nullable|integer',
            'description' => 'nullable|string',
            'mosque' => 'nullable|boolean',
            'jogging' => 'nullable|boolean',
            'sports' => 'nullable|boolean',
            'child' => 'nullable|boolean',
            'pool' => 'nullable|boolean',
            'instalment' => 'nullable|integer',
            'area1'=>'nullable|string',
            'distance1'=>'nullable|numeric',
            'area2'=>'nullable|string',
            'distance2'=>'nullable|numeric',
            'area3'=>'nullable|string',
            'distance3'=>'nullable|numeric',
            'pictures'=>'nullable'
        ];
    }
}
