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
            'product_id'    => 'required|array',
            'product_id.*'  => 'exists:products,id',
            'gsttax_id'     => 'required|exists:gst_taxes,id',
            'name'          => 'required|string|max:255',
            'combo_price'   => 'required|numeric|min:0',
            'description'   => 'nullable|string',
            'status'        => 'required|boolean',
            'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
