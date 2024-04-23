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
            'name'=>'sometimes|string',
            'description'=>'sometimes|string',
            'user_id'=>'sometimes|exists:users,id',
            'customer_id'=>'sometimes|exists:customers,id',
            'starting_date'=>'sometimes|date',
            'ending_date'=>'sometimes|date',
            'category_id'=>'sometimes|exists:categories,id'
        ];
    }
}
