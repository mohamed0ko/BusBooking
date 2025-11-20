<?php

namespace App\Http\Requests\Trip;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTripRequest extends FormRequest
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
            'bus_id'    => 'sometimes|integer|exists:buses,id',
            'from_city' => 'required|integer|exists:cities,id',
            'to_city'   => 'required|integer|exists:cities,id',
            'date'      => 'sometimes|date',
            'time'      => 'sometimes',
            'price'     => 'sometimes|numeric|min:0',
            'discount'  => 'sometimes|numeric|min:0|max:100',
        ];
    }
}
