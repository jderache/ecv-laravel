<div class="p-4 pt-0">
    <form action="" method="post" class="flex flex-col gap-4">
        @csrf
        <div class="form-group flex flex-col mb-4">
            <label for="firstname" class="mb-2 font-medium text-gray-700">Prénom :</label>
            <input type="text" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" name="firstname" value="{{ old('firstname', $manager->firstname) }}">
            @error("firstname")
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group flex flex-col mb-4">
            <label for="lastname" class="mb-2 font-medium text-gray-700">Nom :</label>
            <input type="text" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" name="lastname" value="{{ old('lastname', $manager->lastname) }}">
            @error("lastname")
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group flex flex-col mb-4">
            <label for="function" class="mb-2 font-medium text-gray-700">Fonction :</label>
            <input type="text" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" name="function" value="{{ old('function', $manager->function) }}">
            @error("function")
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>
        <button class="flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800 self-end">
            @if ($manager->id)
            Modifier
            @else
            Créer
            @endif
        </button>
    </form>
</div>
