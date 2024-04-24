<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            // vlaidation rules

            'title' => '|string|unique:projects',
            'description' => '|string',
            'img' => '|string',
            'tecnologies' => '|string',
            'link' => '|string',
        ];
    }

    public function message(): array
    {
        return [
            'title' => 'Title isn\'t valid',
            'description' => 'Description isn\'t valid',
            'img' => 'Image isn\'t valid ',
            'tecnologies' => 'Tecnologies isn\'t valid ',
            'link' => 'Link isn\'t valid ',
        ];
    }
}
