<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Ensure this returns true if you want to allow the request
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'category'=>'required|string',
            'content' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}