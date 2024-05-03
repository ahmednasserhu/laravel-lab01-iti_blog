<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentStoreRequest extends FormRequest
{
    protected $redirectRoute = "posts.create";//route 
    // protected $redirect = "posts#create" //view
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
            'description' => 'required|max:100|min:10',
        ];
    }

    public function messages(): array{
        return [
            'description.required' => 'Comment description is required',
            'description.min' => 'Comment description must be at least 10 character',
            'description.max' => 'Comment description can not exceed 100 character',
        ];
    }
}
