
<form action="" method="post" class="flex flex-col gap-4 p-4">
<h1 class="text-2xl font-bold"> Modification de la tâche </h1>
    @csrf
    <div class="form-group flex flex-col">
        <label for="name" class="mb-2 font-medium text-gray-700">Nom de la tâche :</label>
        <input type="text" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" name="name" value="{{ old('name', $task->name) }}">
        @error("name")
        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group flex flex-col">
        <label for="description" class="mb-2 font-medium text-gray-700">Descriptif de la tâche :</label>
        <textarea name="description" id="description" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700">{{ old('description', $task->description) }}</textarea>
        @error("description")
        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
        @enderror
    </div>
    <button class="flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800 self-end">
        @if ($task->id)
        Modifier
        @else
        Créer
        @endif
    </button>
</form>
