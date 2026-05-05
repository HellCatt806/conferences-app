@extends('layouts.app')

@section('content')
<h2>{{ __('messages.admin_subsystem') }}</h2>
<div class="d-flex gap-3 mt-4">
    <a href="{{ route('admin.users.index') }}" class="btn btn-primary btn-lg">
        {{ __('messages.manage_users') }}
    </a>
    <a href="{{ route('admin.conferences.index') }}" class="btn btn-success btn-lg">
        {{ __('messages.manage_conferences') }}
    </a>
</div>
@endsection