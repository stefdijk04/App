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
            <form action="{{ route('reasons.update', $reason->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-bold text-gray-700" for="name">Naam:</label>
                    <input type="text" name="name" value="{{ $reason->name }}"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        placeholder="{{ $reason->name }}">
                </div>

                <div class="flex items-center justify-start mt-4 gap-x-2">
                    <button type="submit"
                        class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-green-100 bg-green-500 hover:bg-green-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">Submit</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>