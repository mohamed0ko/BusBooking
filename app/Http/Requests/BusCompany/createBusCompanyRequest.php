<?php

namespace App\Http\Requests\BusCompany;

use Illuminate\Foundation\Http\FormRequest;

class createBusCompanyRequest extends FormRequest
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
            'company_name' => 'sometimes|string|max:50',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:50048'

        ];
    }
}
