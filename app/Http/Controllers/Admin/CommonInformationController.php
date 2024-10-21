<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCommonInformationRequest;
use App\Http\Requests\StoreCommonInformationRequest;
use App\Http\Requests\UpdateCommonInformationRequest;
use App\Models\CommonInformation;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CommonInformationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('common_information_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commonInformations = CommonInformation::all();

        return view('admin.commonInformations.index', compact('commonInformations'));
    }

    public function create()
    {
        abort_if(Gate::denies('common_information_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.commonInformations.create');
    }

    public function store(StoreCommonInformationRequest $request)
    {
        $commonInformation = CommonInformation::create($request->all());

        return redirect()->route('admin.common-informations.index');
    }

    public function edit(CommonInformation $commonInformation)
    {
        abort_if(Gate::denies('common_information_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.commonInformations.edit', compact('commonInformation'));
    }

    public function update(UpdateCommonInformationRequest $request, CommonInformation $commonInformation)
    {
        $commonInformation->update($request->all());

        return redirect()->route('admin.common-informations.edit', [1])->with('message', 'Updated');
    }

    public function show(CommonInformation $commonInformation)
    {
        abort_if(Gate::denies('common_information_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.commonInformations.show', compact('commonInformation'));
    }

    public function destroy(CommonInformation $commonInformation)
    {
        abort_if(Gate::denies('common_information_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commonInformation->delete();

        return back();
    }

    public function massDestroy(MassDestroyCommonInformationRequest $request)
    {
        $commonInformations = CommonInformation::find(request('ids'));

        foreach ($commonInformations as $commonInformation) {
            $commonInformation->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
