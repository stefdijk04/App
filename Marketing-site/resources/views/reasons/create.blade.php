@extends('layouts.app')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Claimax BV</title>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}"
                class="fixed top-4 right-20 text-sm text-gray-700 dark:text-gray-500 underline">Hoofdpagina</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();"
                    class="text-sm text-gray-700 dark:text-gray-500 underline">
                    {{ __('Log uit') }}
                </button>
            </form>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            @endauth
        </div>
        @endif

        <div class="relative overflow-x-auto">
            
        </div>
    </div>
</body>

</html>