<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
        $supplierId = $this->route('supplier') ? $this->route('supplier')->id : null;
      
        return [
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|regex:/^[0-9]{10,15}$/|unique:suppliers,mobile,' . $supplierId,
            'email' => 'nullable|email|unique:suppliers,email,' . $supplierId,
            'address' => 'nullable|string|max:500',
        ];
    }
}
