@extends('layouts.app')

@section('title', __('messages.home_title'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header">{{ __('messages.home_student_info') }}</div>
            <div class="card-body">
                <p><strong>Vardas Pavardė:</strong> Deividas [Pavardė]</p>
                <p><strong>Grupė:</strong> [Grupė]</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">{{ __('messages.home_choose_role') }}</div>
            <div class="card-body d-flex gap-3">
                @auth
                    @if(Auth::user()->hasRole('client'))
                        <a href="{{ route('client.conferences') }}" class="btn btn-primary">
                            {{ __('messages.nav_client') }}
                        </a>
                    @endif
                    @if(Auth::user()->hasRole('employee'))
                        <a href="{{ route('employee.conferences') }}" class="btn btn-success">
                            {{ __('messages.nav_employee') }}
                        </a>
                    @endif
                    @if(Auth::user()->hasRole('admin'))
                        <a href="{{ route('admin.index') }}" class="btn btn-danger">
                            {{ __('messages.nav_admin') }}
                        </a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Prisijungti</a>
                    <a href="{{ route('register') }}" class="btn btn-success">Registruotis</a>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection