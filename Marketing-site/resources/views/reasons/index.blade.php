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
            <table class="w-full text-lg text-left text-gray-500 dark:text-gray-400">
                <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400p">
                    <tr>
                        <th scope="col" class="py-3 px-3 rounded-l-lg">Redenen</th>
                        <th scope="col" class="py-3 px-3 rounded-r-lg"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reasons as $reason)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $reason->name }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('reasons.edit', $reason->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Bewerk</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>