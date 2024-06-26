<?php

namespace App\Http\Requests;

use App\Models\Pet;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePetRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pet_edit');
    }

    public function rules()
    {
        return [
            'photos' => [
                'array',
            ],
            'animal_id' => [
                'required',
                'integer',
            ],
            'name' => [
                'string',
                'required',
            ],
            'breed' => [
                'string',
                'required',
            ],
            'size' => [
                'required',
            ],
            'age' => [
                'string',
                'required',
            ],
            'gender' => [
                'string',
                'required',
            ],
            'gets_along_with' => [
                'required',
            ],
        ];
    }
}
