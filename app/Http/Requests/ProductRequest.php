<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        
        $productId = $this->route('product') ? $this->route('product')->id : null;
       
        return [
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'gsttax_id' => 'required|exists:gst_taxes,id',           
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|array',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'short_description' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'batch_no' => 'nullable|string|max:255',
            'hsn_code' => 'nullable|string|max:255',
            'status' => 'required|boolean',
        ];
    }
}
