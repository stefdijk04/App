<form>
    <input type="hidden" wire:model="reason_id">
    <div>
        <label for="input1">Naam:</label>
        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="input1" placeholder=""
            wire:model="name">
        @error('name') <span class="text-red-700">{{ $message }}</span>@enderror
    </div><br>
    <button wire:click.prevent="update()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Opslaan</button>
    <button wire:click.prevent="cancel()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Annuleren</button>
</form>