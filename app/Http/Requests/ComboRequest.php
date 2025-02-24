<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComboRequest extends FormRequest
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
        $comboId = $this->route('combo') ? $this->route('combo')->id : null;
        return [
            'product_id'    => 'required|array|min:1',  // Ensure at least one product is selected
            'product_id.*'  => 'exists:products,id',     // Validate each product ID
            'gsttax_id'     => 'required|exists:gst_taxes,id', // Validate GST Tax
            'name'          => 'required|string|max:255', // Ensure name is provided and max length is 255
            'combo_price'   => 'required|numeric|min:0', // Ensure combo price is a valid number and not negative
            'description'   => 'nullable|string', // Optional but must be a string if provided
            'status'        => 'required|boolean',  // Ensure status is either true or false
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional image with validation
        ];
    }
}
