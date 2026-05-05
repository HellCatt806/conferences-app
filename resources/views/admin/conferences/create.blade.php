@extends('layouts.app')

@section('content')
<h2>{{ __('messages.conference_create') }}</h2>
<form action="{{ route('admin.conferences.store') }}" method="POST" class="mt-3" style="max-width: 600px">
    @csrf
    @include('admin.conferences._form')
    <button type="submit" class="btn btn-success">{{ __('messages.save') }}</button>
    <a href="{{ route('admin.conferences.index') }}" class="btn btn-secondary">{{ __('messages.cancel') }}</a>
</form>
@endsection