<form>
    <div>
        <label for="input1" class="block text-gray-700 text-sm font-bold mb-2">Naam:</label>
        <input type="text"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="input1" placeholder="" wire:model="name">
        @error('name') <span class="text-red-700">{{ $message }}</span>@enderror
    </div><br>
    <button wire:click.prevent="store()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Toevoegen</button>
</form>