<form action="" method="post" class="vstack gap-2">
    @csrf
    <div class="form-group">
        <label for="name">Nom du projet :</label>
        <input type="text" class="form-control" name="name" value="{{ old('name', $project->name) }}">
        @error("name")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Descriptif du projet :</label>
        <textarea name="description" id="description" class="form-control">{{ old('description', $project->description) }}</textarea>
        @error("description")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="client_id">Client :</label>
        <select name="client_id" id="client_id" class="form-control">
            @foreach ($clients as $client)
            <option value="{{ $client->id }}" @if ($client->id == old('client_id', $project->client_id)) selected @endif>
                {{ $client->society }}
            </option>
            @endforeach
        </select>
        @error("client_id")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="developer_id">Manager</label>
        <select name="developer_id" id="developer_id" class="form-control">
            @foreach ($managers as $manager)
            <option value="{{ $manager->id }}" @if ($manager->id == old('developer_id', $project->developer_id)) selected @endif>
                {{ $manager->firstname }} {{ $manager->lastname }}
            </option>
            @endforeach
        </select>
        @error("developer_id")
        {{ $message }}
        @enderror
    </div>
    <button class="btn btn-primary">
        @if ($project->id)
        Modifier
        @else
        Créer
        @endif
    </button>
</form>
