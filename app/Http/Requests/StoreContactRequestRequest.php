<?php

namespace App\Http\Requests;

use App\Models\ContactRequest;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreContactRequestRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contact_request_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
            ],
            'subject' => [
                'string',
                'nullable',
            ],
            'message' => [
                'required',
            ],
        ];
    }
}
