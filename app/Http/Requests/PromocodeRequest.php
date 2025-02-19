<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromocodeRequest extends FormRequest
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
        $promocodeId = $this->route('promocode') ? $this->route('promocode')->id : null;
        return [
            'promocode' => 'required|string|max:255|unique:promocodes,promocode,' . $promocodeId,
            'description' => 'nullable|string|max:500',
            'discount_type' => 'required|boolean',
            'discount_value' => [
                'required',
                'numeric',
                'min:0',
                function ($attribute, $value, $fail) {
                    if ($this->discount_type == 'percentage' && ($value < 0 || $value > 100)) {
                        $fail('Percentage discount must be between 0 and 100.');
                    }
                },
            ],
            'min_order_amount' => 'nullable|numeric|min:0',
            'max_discount' => 'nullable|numeric|min:0',
            'start_date' => 'nullable|date|before_or_equal:end_date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'usage_limit' => 'nullable|numeric|min:0',
            'usage_per_user_limit' => 'nullable|integer|min:1',
            'status' => 'required|boolean',
        ];
    }
}
