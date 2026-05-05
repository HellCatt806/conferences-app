@extends('layouts.app')

@section('content')
<h2>{{ __('messages.client_subsystem') }} — {{ __('messages.conferences') }}</h2>
<table class="table table-bordered mt-3">
    <thead class="table-dark">
        <tr>
            <th>{{ __('messages.conference_title') }}</th>
            <th>{{ __('messages.conference_date') }}</th>
            <th>{{ __('messages.conference_address') }}</th>
            <th>{{ __('messages.actions') }}</th>
        </tr>
    </thead>
    <tbody>
        @forelse($conferences as $conference)
            <tr>
                <td>{{ $conference['title'] }}</td>
                <td>{{ $conference['date'] }}</td>
                <td>{{ $conference['address'] }}</td>
                <td>
                    <a href="{{ route('client.conferences.show', $conference['id']) }}" class="btn btn-sm btn-info">
                        {{ __('messages.conference_view') }}
                    </a>
                    <form action="{{ route('client.conferences.register', $conference['id']) }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-primary">
                            {{ __('messages.register_for_conference') }}
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4" class="text-center">Konferencijų nėra</td></tr>
        @endforelse
    </tbody>
</table>
@endsection