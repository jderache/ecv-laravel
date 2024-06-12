<form action="" method="post" class="flex flex-col gap-4">
    @csrf
    <div class="form-group flex flex-col mb-4">
        <label for="society" class="mb-2 font-medium text-gray-700">Societé :</label>
        <input type="text" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" name="society" value="{{ old('society', $client->society) }}">
        @error("society")
        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group flex flex-col mb-4">
        <label for="address" class="mb-2 font-medium text-gray-700">Adresse :</label>
        <input type="text" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" name="address" value="{{ old('address', $client->address) }}">
        @error("address")
        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group flex flex-col mb-4">
        <label for="website" class="mb-2 font-medium text-gray-700">Site Web :</label>
        <input type="text" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" name="website" value="{{ old('website', $client->website) }}">
        @error("website")
        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
        @enderror
    </div>
    <button class="flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800 self-end">
        @if ($client->id)
        Modifier
        @else
        Créer
        @endif
    </button>
</form>
