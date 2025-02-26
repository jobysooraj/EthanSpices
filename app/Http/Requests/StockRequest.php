<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StockRequest extends FormRequest
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
        
        $stockId = $this->route('stock') ? $this->route('stock')->id : null;
        return [
            'category_id' => 'required|exists:categories,id',
            'product_id' => 'required|exists:products,id',
            'total_quantity' => 'required|numeric|min:0',
            'used_quantity'  => 'nullable|numeric|min:0',
            
        ];
    }
}
