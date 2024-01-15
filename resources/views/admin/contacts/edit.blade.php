@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.contact.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.contacts.update", [$contact->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="location">{{ trans('cruds.contact.fields.location') }}</label>
                <input class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" type="text" name="location" id="location" value="{{ old('location', $contact->location) }}">
                @if($errors->has('location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.location_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.contact.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $contact->email) }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="call">{{ trans('cruds.contact.fields.call') }}</label>
                <input class="form-control {{ $errors->has('call') ? 'is-invalid' : '' }}" type="text" name="call" id="call" value="{{ old('call', $contact->call) }}">
                @if($errors->has('call'))
                    <div class="invalid-feedback">
                        {{ $errors->first('call') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.call_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="google_maps">{{ trans('cruds.contact.fields.google_maps') }}</label>
                <input class="form-control {{ $errors->has('google_maps') ? 'is-invalid' : '' }}" type="text" name="google_maps" id="google_maps" value="{{ old('google_maps', $contact->google_maps) }}">
                @if($errors->has('google_maps'))
                    <div class="invalid-feedback">
                        {{ $errors->first('google_maps') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.contact.fields.google_maps_helper') }}</span>
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