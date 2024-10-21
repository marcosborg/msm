<?php

namespace App\Http\Requests;

use App\Models\CommonInformation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCommonInformationRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('common_information_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:common_informations,id',
        ];
    }
}
