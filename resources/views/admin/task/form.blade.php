<form action="" method="post" class="flex flex-col gap-4 p-4 bg-white">
    <h1 class="text-2xl font-bold mb-4">Modification de la tâche</h1>
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
            <option value="{{ $developer->id }}" @if ($developer->id == old('developer_id', $task->developer_id)) selected @endif>{{ $developer->firstname }} {{$developer->lastname}}</option>
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
    <button class="flex w-fit items-center px-4 py-2 text-sm text-white bg-blue-700 rounded-lg justify-center hover:bg-blue-800 self-end">
        @if ($task->id)
        Modifier
        @else
        Créer
        @endif
    </button>
</form>


<form action="" method="post" class="flex flex-col gap-4 p-4">
        @csrf
        <div class="form-group flex flex-col">
            <label for="name" class="mb-2 font-medium text-gray-700">Nom de la tâche :</label>
            <input type="text" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700" name="name" value="{{ old('name', $task->name) }}">
            @error("name")
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="project_id">Projet lié :</label>
            <select id="project_id" class="form-control"name="project_id">
                @foreach ($projects as $project)
                <option value="{{ $project->id }}" @if ($project->id == old('project_id', $task->project_id)) selected @endif>{{ $project->name }}</option>
                @endforeach
            </select>
            @error("project_id")
            {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="developer_id">Développeur :</label>
            <select id="developer_id" class="form-control"name="developer_id">
                @foreach ($developers as $developer)
                <option value="{{ $developer->id }}" @if ($developer->id == old('developer_id', $task->developer_id)) selected @endif>{{ $developer->firstname }} {{$developer->lastname}}</option>
                @endforeach
            </select>
            @error("developer_id")
            {{ $message }}
            @enderror
        </div>
        <div class="form-group flex flex-col">
            <label for="description" class="mb-2 font-medium text-gray-700">Descriptif de la tâche :</label>
            <textarea name="description" id="description" class="form-control p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-700">{{ old('description', $task->description) }}</textarea>
            @error("description")
            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="type_id">Type :</label>
            <select id="type_id" class="form-control"name="type_id">
                @foreach ($types as $type)
                 <option value="{{ $type->id }}" @if ($type->id == old('type_id', $type_id)) selected @endif>{{ $type->name }}</option>
                @endforeach
            </select>
            @error("type_id")
            {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label for="tag_id">Statut :</label>
            <select id="tag_id" class="form-control"name="tag_id">
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
    