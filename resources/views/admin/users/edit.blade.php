@extends('layouts.app')

@section('title', __('messages.user_edit'))
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.nav_home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('messages.admin_subsystem') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">{{ __('messages.manage_users') }}</a></li>
        <li class="breadcrumb-item active">{{ __('messages.user_edit') }}</li>
    </ol>
</nav>
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