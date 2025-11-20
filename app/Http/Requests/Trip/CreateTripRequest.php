<?php

namespace App\Http\Requests\Trip;

use Illuminate\Foundation\Http\FormRequest;

class CreateTripRequest extends FormRequest
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
            'bus_id'    => 'required|integer|exists:buses,id',
            'from_city' => 'required|integer|exists:cities,id',
            'to_city'   => 'required|integer|exists:cities,id',
            'date'      => 'required|date',
            'time'      => 'required',
            'price'     => 'required|numeric|min:0',
            'discount'  => 'nullable|numeric|min:0|max:100',
        ];
    }
}
