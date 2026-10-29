<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return ['name'=>'required|string|max:255',
            'logo_path'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'my_position'=>'nullable|string|max:255',
            'joined_at'=>'nullable|date',
            'left_at'=>'nullable|date'];
    }
}
