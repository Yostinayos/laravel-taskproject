<?php

namespace App\Http\Requests\Projects;

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
            'name'=>'string',
            'description'=>'string',
            'user_id'=>'exists:users,id',
            'customer_id'=>'exists:customers,id',
            'starting_date'=>'date',
            'ending_date'=>'date',
            'category_id'=>'exists:categories,id'
        ];
    }
}
