@extends('layouts.app')

@section('title', __('messages.conference_view'))
@section('content')
<h2>{{ __('messages.conference_view') }}</h2>
<div class="card mt-3">
    <div class="card-body">
        <p><strong>{{ __('messages.conference_title') }}:</strong> -</p>
        <p><strong>{{ __('messages.conference_description') }}:</strong> -</p>
        <p><strong>{{ __('messages.conference_lecturers') }}:</strong> -</p>
        <p><strong>{{ __('messages.conference_date') }}:</strong> -</p>
        <p><strong>{{ __('messages.conference_time') }}:</strong> -</p>
        <p><strong>{{ __('messages.conference_address') }}:</strong> -</p>
    </div>
</div>
<h4 class="mt-4">{{ __('messages.registered_clients') }}</h4>
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>{{ __('messages.user_name') }}</th>
            <th>{{ __('messages.user_surname') }}</th>
            <th>{{ __('messages.user_email') }}</th>
        </tr>
    </thead>
    <tbody>
        @forelse($registeredClients as $client)
            <tr>
                <td>{{ $client['name'] }}</td>
                <td>{{ $client['surname'] }}</td>
                <td>{{ $client['email'] }}</td>
            </tr>
        @empty
            <tr><td colspan="3" class="text-center">Užsiregistravusių nėra</td></tr>
        @endforelse
    </tbody>
</table>
<a href="{{ route('employee.conferences') }}" class="btn btn-secondary mt-2">{{ __('messages.back') }}</a>
@endsection