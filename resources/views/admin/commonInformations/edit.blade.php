@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.commonInformation.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.common-informations.update", [$commonInformation->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="footer_info">{{ trans('cruds.commonInformation.fields.footer_info') }}</label>
                <textarea class="form-control {{ $errors->has('footer_info') ? 'is-invalid' : '' }}" name="footer_info" id="footer_info">{{ old('footer_info', $commonInformation->footer_info) }}</textarea>
                @if($errors->has('footer_info'))
                    <div class="invalid-feedback">
                        {{ $errors->first('footer_info') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.commonInformation.fields.footer_info_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.commonInformation.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', $commonInformation->address) }}">
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.commonInformation.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.commonInformation.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $commonInformation->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.commonInformation.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.commonInformation.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', $commonInformation->phone) }}">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.commonInformation.fields.phone_helper') }}</span>
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