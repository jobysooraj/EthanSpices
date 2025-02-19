<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiscountRequest extends FormRequest
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
        $discountId = $this->route('discount') ? $this->route('discount')->id : null;
        return [
            'name' => 'required|string|max:255|unique:discounts,name,' . $discountId,    
            'amount' => [
                'required',
                'numeric',
                'min:0',
                function ($attribute, $value, $fail) {
                    if ($this->discount_type == 'percentage' && ($value < 0 || $value > 100)) {
                        $fail('Percentage discount must be between 0 and 100.');
                    }
                },
            ],
            'discount_type' => 'required|in:fixed,percentage',
            'valid_from' => 'nullable|date',
            'valid_until' => 'nullable|date|after_or_equal:valid_from',
        ];
    }
}
