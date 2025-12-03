<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name'          => 'required|max:255|string',
            'slug'          => 'required|max:255|string|unique:categories,slug,' . $this->route('category')->id,
            'description'   => 'nullable|string',
            'post_featured' => 'nullable|integer|exists:posts,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The Category name is required.',
            'name.max'      => 'The Category name may not be greater than 255 characters.',
            'name.string'   => 'The Category name must be a string.',

            'slug.required' => 'The Category slug is required.',
            'slug.max'      => 'The Category slug may not be greater than 255 characters.',
            'slug.string'   => 'The Category slug must be a string.',
            'slug.unique'   => 'The Category slug has already been taken.',

            'description.string' => 'The Category description must be a string.',

            'post_featured.integer' => 'The featured post ID must be an integer.',
            'post_featured.exists'  => 'The selected featured post does not exist.',
        ];
    }
}
