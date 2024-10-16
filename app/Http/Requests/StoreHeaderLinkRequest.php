<?php

namespace App\Http\Requests;

use App\Models\HeaderLink;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreHeaderLinkRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('header_link_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'nullable',
            ],
            'text' => [
                'string',
                'nullable',
            ],
            'button' => [
                'string',
                'nullable',
            ],
            'link' => [
                'string',
                'nullable',
            ],
        ];
    }
}
