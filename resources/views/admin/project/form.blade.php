<div class="p-4 pt-0">
    <a href="{{ url()->previous() }}" class="mb-4 flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-200">Retour</a>
    <form action="" method="post" class="flex flex-col gap-4">
        @csrf
        <div class="form-group flex flex-col mb-4">
            <label for="name" class="mb-2 font-medium text-gray-700">Nom du projet :</label>
            <input type="text" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" name="name" value="{{ old('name', $project->name) }}">
            @error("name")
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group flex flex-col mb-4">
            <label for="description" class="mb-2 font-medium text-gray-700">Descriptif du projet :</label>
            <textarea name="description" id="description" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700">{{ old('description', $project->description) }}</textarea>
            @error("description")
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group flex flex-col mb-4">
            <label for="client_id" class="mb-2 font-medium text-gray-700">Client :</label>
            <select name="client_id" id="client_id" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700">
                @foreach ($clients as $client)
                <option value="{{ $client->id }}" @if ($client->id == old('client_id', $project->client_id)) selected @endif>
                    {{ $client->society }}
                </option>
                @endforeach
            </select>
            @error("client_id")
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group flex flex-col mb-4">
            <label for="developer_id" class="mb-2 font-medium text-gray-700">Manager :</label>
            <select name="developer_id" id="developer_id" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700">
                @foreach ($managers as $manager)
                <option value="{{ $manager->id }}" @if ($manager->id == old('developer_id', $project->developer_id)) selected @endif>
                    {{ $manager->firstname }} {{ $manager->lastname }}
                </option>
                @endforeach
            </select>
            @error("developer_id")
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>
        <button class="flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800 self-end">
            @if ($project->id)
            Modifier
            @else
            Créer
            @endif
        </button>
    </form>
</div>
