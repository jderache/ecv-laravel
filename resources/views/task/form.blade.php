<form action="" method="post" class="vstack gap-2">
    @csrf
    <div class="form-group">
        <label for="name">Nom de la tâche :</label>
        <input type="text" class="form-control" name="name" value="{{ old('name', $task->name) }}">
        @error("name")
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
