@extends('layouts.app')

@section('content')
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