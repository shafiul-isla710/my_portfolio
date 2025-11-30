<?php

namespace App\Http\Requests\Admin;

use App\Models\About;
use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'designation' => 'nullable|string',
            'short_desc' => 'nullable|string',
            'long_desc' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'age' => 'nullable|numeric',
            'birth_date' => 'nullable|date',
            'phone' => 'nullable|regex:/^\+?\d{11,15}/',
            'email' => 'nullable|email',
            'degree' => 'nullable|string',
            'address' => 'nullable|string',
            'website' => 'nullable|url',
            'country' => 'nullable|string',
            'city' => 'nullable|string',
            'freelance' => 'nullable|string|in:'.implode(',', About::freelance()),
        ];
    }
}
