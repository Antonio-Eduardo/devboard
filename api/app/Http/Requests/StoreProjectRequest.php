<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProjectRequest extends FormRequest
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
        return [
            'company_id' => ['nullable', 'integer',
                Rule::exists('companies', 'id')
                    ->where('user_id', $this->user()->id),
                ],
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:5000',
            'my_role'=>'required|string|max:255',
            'status' => 'sometimes|in:active,inactive',
            'repo_url' => 'nullable|url|max:255',
            'started_at' => 'nullable|date',
            'finished_at' => 'nullable|date|after_or_equal:started_at',
        ];
    }
}
