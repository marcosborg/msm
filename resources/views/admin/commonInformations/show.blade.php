@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.commonInformation.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.common-informations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.commonInformation.fields.id') }}
                        </th>
                        <td>
                            {{ $commonInformation->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commonInformation.fields.footer_info') }}
                        </th>
                        <td>
                            {{ $commonInformation->footer_info }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commonInformation.fields.address') }}
                        </th>
                        <td>
                            {{ $commonInformation->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commonInformation.fields.email') }}
                        </th>
                        <td>
                            {{ $commonInformation->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commonInformation.fields.phone') }}
                        </th>
                        <td>
                            {{ $commonInformation->phone }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.common-informations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection