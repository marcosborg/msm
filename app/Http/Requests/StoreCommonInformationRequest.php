<?php

namespace App\Http\Requests;

use App\Models\CommonInformation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCommonInformationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('common_information_create');
    }

    public function rules()
    {
        return [
            'address' => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
        ];
    }
}
