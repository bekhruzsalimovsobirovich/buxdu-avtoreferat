<?php

namespace App\Domain\Teachers\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'university_id' => 'required|exists:universities,id',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'required',
            'employee_id_number' => 'required|unique:users,employee_id_number',
            'type' => 'required|in:tayanch-doktorant','mustaqil-izlanuvchi',
        ];
    }
}
