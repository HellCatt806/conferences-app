<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', __('messages.app_name')) — {{ __('messages.app_name') }}</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{{ __('messages.app_name') }}</a>
        <div class="navbar-nav me-auto">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">
                {{ __('messages.nav_home') }}
            </a>
            <a class="nav-link {{ request()->is('client/*') ? 'active' : '' }}" href="{{ route('client.conferences') }}">
                {{ __('messages.nav_client') }}
            </a>
            <a class="nav-link {{ request()->is('employee/*') ? 'active' : '' }}" href="{{ route('employee.conferences') }}">
                {{ __('messages.nav_employee') }}
            </a>
            <a class="nav-link {{ request()->is('admin/*') ? 'active' : '' }}" href="{{ route('admin.index') }}">
                {{ __('messages.nav_admin') }}
            </a>
        </div>
        <div class="d-flex align-items-center gap-3">
    @auth
        <span class="text-white">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-secondary btn-sm">{{ __('messages.logout') }}</button>
        </form>
    @else
        <a href="{{ route('login') }}" class="btn btn-secondary btn-sm">Prisijungti</a>
    @endauth
</div>
    </div>
</nav>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @yield('content')
</div>

@vite(['resources/js/app.js'])
<footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
        <small>{{ __('messages.app_name') }} &copy; {{ date('Y') }}</small>
    </div>
</footer>
</body>
</html>