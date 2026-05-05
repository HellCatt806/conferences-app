@extends('layouts.app')

@section('title', __('messages.conference_view'))
@section('content')
<h2>{{ __('messages.conference_view') }}</h2>
<div class="card mt-3">
    <div class="card-body">
        <p><strong>{{ __('messages.conference_title') }}:</strong> {{ $conference->title }}</p>
		<p><strong>{{ __('messages.conference_description') }}:</strong> {{ $conference->description }}</p>
		<p><strong>{{ __('messages.conference_lecturers') }}:</strong> {{ $conference->lecturers }}</p>
		<p><strong>{{ __('messages.conference_date') }}:</strong> {{ $conference->date }}</p>
		<p><strong>{{ __('messages.conference_time') }}:</strong> {{ $conference->time }}</p>
		<p><strong>{{ __('messages.conference_address') }}:</strong> {{ $conference->address }}</p>
    </div>
</div>
<a href="{{ route('client.conferences') }}" class="btn btn-secondary mt-3">{{ __('messages.back') }}</a>
@endsection