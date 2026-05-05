@extends('layouts.app')

@section('content')
<h2>{{ __('messages.user_edit') }}</h2>
<form action="{{ route('admin.users.update', 1) }}" method="POST" class="mt-3" style="max-width: 500px">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">{{ __('messages.user_name') }}</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('messages.user_surname') }}</label>
        <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" value="{{ old('surname') }}">
        @error('surname')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label class="form-label">{{ __('messages.user_email') }}</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <button type="submit" class="btn btn-primary">{{ __('messages.save') }}</button>
    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">{{ __('messages.cancel') }}</a>
</form>
@endsection