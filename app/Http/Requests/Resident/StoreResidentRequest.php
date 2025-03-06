<?php

namespace App\Http\Requests\Resident;

use App\Enums\ResidentStatus;
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
            'birth_date' => 'required|date',
            'gender' => ['required', Rule::in(['Male', 'Female'])],
            'address' => 'required|string',
            'contact_number',
            'admitted_at' => 'required|date',
            'dismissed_at' => 'nullable|date',
            'status' => ['required', Rule::in(array_column(ResidentStatus::cases(), 'values'))],
            'profile' => 'required|file|mimetypes:image/*',
        ];
    }
}
