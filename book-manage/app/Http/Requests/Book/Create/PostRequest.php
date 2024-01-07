<?php

namespace App\Http\Requests\Book\Create;

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
            'title' => ['required', 'max:100'],
            'isbn' =>  ['required', 'max:13'],
            'publication' =>  ['max:100'],
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'title.required' => '書籍名を入力してください。',
            'title.max' => '書籍名は100文字以下で入力してください。',
            'isbn.required' => 'ISBNを入力してください。',
            'isbn.max' => 'ISBNは13文字以下で入力してください。',
            'publication.max' => '出版社名は100文字以下で入力してください。',
        ];
    }
}
