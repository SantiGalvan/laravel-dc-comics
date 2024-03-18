<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'nullable|string',
            'thumb' => 'url:http,https',
            'price' => 'required|numeric|min:1',
            'series' => 'nullable|string',
            'sale_date' => 'string',
            'type' => 'nullable|string',
            'artists' => 'string',
            'writers' => 'string'
        ];
    }
}
