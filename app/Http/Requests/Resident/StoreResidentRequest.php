<?php

namespace App\Http\Requests\Resident;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreResidentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'age' => 'required|numeric',
            'gender' => ['required', Rule::in(['Male', 'Female'])],
            'address' => 'required|string',
            'status' => ['required', Rule::in(['Admitted', 'Discharged'])],
            'admitted_at' => 'required|date',
            'dismissed_at' => 'required|date',
            'profile' => 'required|file|mimetypes:image/*',
        ];
    }
}
