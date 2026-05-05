@extends('layouts.app')

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
<a href="{{ route('client.conferences') }}" class="btn btn-secondary mt-3">{{ __('messages.back') }}</a>
@endsection