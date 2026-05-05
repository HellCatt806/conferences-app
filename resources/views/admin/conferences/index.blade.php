@extends('layouts.app')

@section('title', __('messages.manage_conferences'))
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.nav_home') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">{{ __('messages.admin_subsystem') }}</a></li>
        <li class="breadcrumb-item active">{{ __('messages.manage_conferences') }}</li>
    </ol>
</nav>
<div class="d-flex justify-content-between align-items-center">
    <h2>{{ __('messages.manage_conferences') }}</h2>
    <a href="{{ route('admin.conferences.create') }}" class="btn btn-success">
        {{ __('messages.conference_create') }}
    </a>
</div>
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
                    <a href="{{ route('admin.conferences.edit', $conference['id']) }}" class="btn btn-sm btn-warning">
                        {{ __('messages.edit') }}
                    </a>
                    <form action="{{ route('admin.conferences.destroy', $conference['id']) }}" method="POST" class="d-inline" id="delete-form-{{ $conference['id'] }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $conference['id'] }})">
                            {{ __('messages.delete') }}
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4" class="text-center">Konferencijų nėra</td></tr>
        @endforelse
    </tbody>
</table>

<script>
function confirmDelete(id) {
    Swal.fire({
        title: '{{ __('messages.conference_delete_confirm') }}',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: '{{ __('messages.delete') }}',
        cancelButtonText: '{{ __('messages.cancel') }}'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }
    });
}
</script>
@endsection