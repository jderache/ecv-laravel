<form action="" method="post" class="flex flex-col gap-4 p-4 bg-white">
    <a href="{{ url()->previous() }}" class="mb-4 flex w-fit items-center px-4 py-2 text-sm bg-gray-200 rounded-lg justify-center hover:bg-gray-200">Retour</a>
    @csrf
    <div class="form-group flex flex-col mb-4">
        <label for="name" class="mb-2 font-medium text-gray-700">Nom de la tâche :</label>
        <input type="text" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" name="name" value="{{ old('name', $task->name) }}">
        @error("name")
        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group flex flex-col mb-4">
        <label for="project_id" class="mb-2 font-medium text-gray-700">Projet lié :</label>
        <select id="project_id" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" name="project_id">
            @foreach ($projects as $project)
            <option value="{{ $project->id }}" @if ($project->id == old('project_id', $task->project_id)) selected @endif>{{ $project->name }}</option>
            @endforeach
        </select>
        @error("project_id")
        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group flex flex-col mb-4">
        <label for="developer_id" class="mb-2 font-medium text-gray-700">Développeur :</label>
        <select id="developer_id" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" name="developer_id">
            @foreach ($developers as $developer)
            <option value="{{ $developer->id }}" @if ($developer->id == old('developer_id', $task->developer_id)) selected @endif>
                    {{ $developer->firstname }} {{$developer->lastname}}
            </option>
            @endforeach
        </select>
        @error("developer_id")
        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group flex flex-col mb-4">
        <label for="description" class="mb-2 font-medium text-gray-700">Descriptif de la tâche :</label>
        <textarea name="description" id="description" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700">{{ old('description', $task->description) }}</textarea>
        @error("description")
        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group flex flex-col mb-4">
        <label for="type_id" class="mb-2 font-medium text-gray-700">Type :</label>
        <select id="type_id" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" name="type_id">
            @foreach ($types as $type)
                <option value="{{ $type->id }}" @if ($type->id == old('type_id', $type_id)) selected @endif>{{ strtoupper($type->name) }}</option>
            @endforeach
        </select>
        @error("type_id")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group flex flex-col mb-4">
        <label for="tag_id" class="mb-2 font-medium text-gray-700">Statut :</label>
        <select id="tag_id" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" name="tag_id">
            @foreach ($tags as $tag)
             <option value="{{ $tag->id }}" @if ($tag->id == old('tag_id', $tag_id)) selected @endif>{{ $tag->name }}</option>
            @endforeach
        </select>
        @error("tag_id")
        {{ $message }}
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

