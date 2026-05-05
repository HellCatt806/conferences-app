@extends('layouts.app')

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
                <a href="{{ route('client.conferences') }}" class="btn btn-primary">
                    {{ __('messages.nav_client') }}
                </a>
                <a href="{{ route('employee.conferences') }}" class="btn btn-success">
                    {{ __('messages.nav_employee') }}
                </a>
                <a href="{{ route('admin.index') }}" class="btn btn-danger">
                    {{ __('messages.nav_admin') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection