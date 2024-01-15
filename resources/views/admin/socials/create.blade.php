@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.social.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.socials.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.social.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.social.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="icon">{{ trans('cruds.social.fields.icon') }}</label>
                <input class="form-control {{ $errors->has('icon') ? 'is-invalid' : '' }}" type="text" name="icon" id="icon" value="{{ old('icon', '') }}" required>
                @if($errors->has('icon'))
                    <div class="invalid-feedback">
                        {{ $errors->first('icon') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.social.fields.icon_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="link">{{ trans('cruds.social.fields.link') }}</label>
                <input class="form-control {{ $errors->has('link') ? 'is-invalid' : '' }}" type="text" name="link" id="link" value="{{ old('link', '') }}" required>
                @if($errors->has('link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.social.fields.link_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection