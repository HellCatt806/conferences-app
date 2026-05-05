@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.nav_home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('messages.admin_subsystem') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.conferences.index') }}">{{ __('messages.manage_conferences') }}</a></li>
        <li class="breadcrumb-item active">{{ __('messages.conference_create') }}</li>
    </ol>
</nav>
<h2>{{ __('messages.conference_create') }}</h2>
<form action="{{ route('admin.conferences.store') }}" method="POST" class="mt-3" style="max-width: 600px">
    @csrf
    @include('admin.conferences._form')
    <button type="submit" class="btn btn-success">{{ __('messages.save') }}</button>
    <a href="{{ route('admin.conferences.index') }}" class="btn btn-secondary">{{ __('messages.cancel') }}</a>
</form>
@endsection