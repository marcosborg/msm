@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.social.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.socials.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.social.fields.id') }}
                        </th>
                        <td>
                            {{ $social->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.social.fields.name') }}
                        </th>
                        <td>
                            {{ $social->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.social.fields.icon') }}
                        </th>
                        <td>
                            {{ $social->icon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.social.fields.link') }}
                        </th>
                        <td>
                            {{ $social->link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.socials.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection