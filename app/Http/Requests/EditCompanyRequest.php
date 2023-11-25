<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCompanyRequest extends FormRequest
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
            "corporate_reason" => "required|string",
            "company_sizes" => "required|string",
            "email" => "required|email",
            "description" => "required|string",
            "zip_code" => "required|integer",
            "address" => "required|string",
            "number" => "required|integer",
            "neighborhood" => "required|string",
            "city" => "required|string",
            "state" => "required|string|max:2",
        ];
    }
}
