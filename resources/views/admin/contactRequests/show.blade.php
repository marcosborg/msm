@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.contactRequest.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.contact-requests.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contactRequest.fields.id') }}
                        </th>
                        <td>
                            {{ $contactRequest->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactRequest.fields.name') }}
                        </th>
                        <td>
                            {{ $contactRequest->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactRequest.fields.email') }}
                        </th>
                        <td>
                            {{ $contactRequest->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactRequest.fields.subject') }}
                        </th>
                        <td>
                            {{ $contactRequest->subject }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contactRequest.fields.message') }}
                        </th>
                        <td>
                            {{ $contactRequest->message }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.contact-requests.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection