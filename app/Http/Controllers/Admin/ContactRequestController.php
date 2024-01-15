<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyContactRequestRequest;
use App\Http\Requests\StoreContactRequestRequest;
use App\Http\Requests\UpdateContactRequestRequest;
use App\Models\ContactRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactRequestController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contact_request_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactRequests = ContactRequest::all();

        return view('admin.contactRequests.index', compact('contactRequests'));
    }

    public function create()
    {
        abort_if(Gate::denies('contact_request_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactRequests.create');
    }

    public function store(StoreContactRequestRequest $request)
    {
        $contactRequest = ContactRequest::create($request->all());

        return redirect()->route('admin.contact-requests.index');
    }

    public function edit(ContactRequest $contactRequest)
    {
        abort_if(Gate::denies('contact_request_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactRequests.edit', compact('contactRequest'));
    }

    public function update(UpdateContactRequestRequest $request, ContactRequest $contactRequest)
    {
        $contactRequest->update($request->all());

        return redirect()->route('admin.contact-requests.index');
    }

    public function show(ContactRequest $contactRequest)
    {
        abort_if(Gate::denies('contact_request_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactRequests.show', compact('contactRequest'));
    }

    public function destroy(ContactRequest $contactRequest)
    {
        abort_if(Gate::denies('contact_request_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactRequest->delete();

        return back();
    }

    public function massDestroy(MassDestroyContactRequestRequest $request)
    {
        $contactRequests = ContactRequest::find(request('ids'));

        foreach ($contactRequests as $contactRequest) {
            $contactRequest->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
