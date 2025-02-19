<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaxRequest extends FormRequest
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
        $taxId = $this->route('tax') ? $this->route('tax')->id : null;
  
        return [
            'name' => 'required|string|max:255|unique:gst_taxes,name,'. $taxId,
            'percentage' => 'required|numeric|min:0|max:100'
        ];
    }
}
