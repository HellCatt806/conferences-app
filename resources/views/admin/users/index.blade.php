@extends('layouts.app')

@section('title', __('messages.manage_users'))
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.nav_home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('messages.admin_subsystem') }}</a></li>
        <li class="breadcrumb-item active">{{ __('messages.manage_users') }}</li>
    </ol>
</nav>
<h2>{{ __('messages.manage_users') }}</h2>
<table class="table table-bordered mt-3">
    <thead class="table-dark">
        <tr>
            <th>{{ __('messages.user_name') }}</th>
            <th>{{ __('messages.user_surname') }}</th>
            <th>{{ __('messages.user_email') }}</th>
            <th>{{ __('messages.actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['surname'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>
                    <a href="{{ route('admin.users.edit', $user['id']) }}" class="btn btn-sm btn-warning">
                        {{ __('messages.edit') }}
                    </a>
                </td>
            </tr>
        @empty
            <tr><td colspan="4" class="text-center">Naudotojų nėra</td></tr>
        @endforelse
    </tbody>
</table>
@endsection