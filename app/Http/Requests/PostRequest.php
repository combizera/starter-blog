<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'category_id' => 'required|exists:categories,id',
            'user_id' => 'required|exists:users,id',
            'title' => 'required|max:255|string',
            'slug' => 'required|max:255|string|unique:posts,slug',
            'thumbnail' => 'nullable|image|max:2048',
            'content' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'category_id.required' => 'Category is required.',
            'category_id.exists' => 'The selected Category is invalid.',

            'user_id.required' => 'Author is required.',
            'user_id.exists' => 'The selected Author is invalid.',

            'title.required' => 'Title is required.',
            'title.max' => 'Title may not be greater than 255 characters.',
            'title.string' => 'Title must be a string.',

            'slug.required' => 'Slug is required.',
            'slug.max' => 'Slug may not be greater than 255 characters.',
            'slug.string' => 'Slug must be a string.',
            'slug.unique' => 'Slug has already been taken.',

            'thumbnail.image' => 'Thumbnail must be an image.',
            'thumbnail.max' => 'Thumbnail may not be greater than 2MB.',

            'content.required' => 'The Content is required.',
            'content.string' => 'The Content must be a string.',
        ];
    }
}
