<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100|unique:cars',
            'also_called' => 'required|string|max:100',
            'manufacturer' => 'required|string|max:100',
            'color' => 'required|string|max:100',
            'engine' => 'required|string|max:100',
            'release_date' => 'required|date',
            'description' => 'required|string|max:500',
            'price' => 'required|numeric|min:1|max:1000000',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Please provide a name for the car',
            'name.string' => 'Car name must be a text',
            'name.max' => 'Car name cannot exceed 100 characters',
            'also_called.required' => 'Please provide an alias for the car',
            'also_called.string' => 'Car alias must be a text',
            'also_called.max' => 'Car alias cannot exceed 100 characters',
            'manufacturer.required' => 'Please provide a manufacturer for the car',
            'manufacturer.string' => 'Manufacturer must be a text',
            'manufacturer.max' => 'Manufacturer name cannot exceed 100 characters',
            'color.required' => 'Please provide a color for the car',
            'color.string' => 'Car color must be a text',
            'color.max' => 'Car color cannot exceed 100 characters',
            'engine.required' => 'Please provide an engine type for the car',
            'engine.string' => 'Engine type must be a number',
            'engine.max' => 'Engine type cannot exceed 100 characters',
            'release_date.required' => 'Please provide a release date for the car',
            'release_date.date' => 'Release date must be a valid date',
            'description.required' => 'Please provide a description for the car',
            'description.string' => 'Description must be a text',
            'description.max' => 'Description cannot exceed 255 characters',
            'price.required' => 'Please provide a price for the car',
            'price.numeric' => 'Price must be a number',
            'price.min' => 'Price cannot be less than 1',
            'price.max' => 'Price cannot exceed 1000000',
        ];
    }

}
