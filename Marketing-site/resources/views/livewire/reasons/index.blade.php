<div>

    @if (session()->has('message'))
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md">
        {{ session('message') }}
    </div><br>
    @endif

    @if($updateMode)
    @include('livewire.reasons.update')
    @else
    @include('livewire.reasons.create')
    @endif

    <table class="w-full text-lg text-left text-gray-500 dark:text-gray-400">
        <thead class="text-sm text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400p">
            <tr>
                <th scope="col" class="py-3 px-3 rounded-l-lg">Naam</th>
                <th class="py-3 px-3 rounded-l-lg"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($reasons as $reason)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">{{ $reason->name }}</td>
                <td class="px-6 py-4">
                    <button wire:click="edit({{ $reason->id }})" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Bewerk |</button>
                    <button wire:click="delete({{ $reason->id }})" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Verwijder</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>