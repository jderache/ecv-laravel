<form action="" method="post" class="vstack gap-2">
    @csrf
    <div class="form-group">
        <label for="name">Nom de la tâche :</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $task->name) }}">
        @error("name")
        {{ $message }}
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
    <div class="form-group">
        <label for="description">Descriptif de la tâche :</label>
        <textarea name="description" id="description" class="form-control">{{ old('description', $task->description) }}</textarea>
        @error("description")
        {{ $message }}
        @enderror
    </div>
    <button class="btn btn-primary">
        @if ($task->id)
        Modifier
        @else
        Créer
        @endif
    </button>
</form>
