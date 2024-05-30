<form action="" method="post" class="vstack gap-2">
    @csrf
    <div class="form-group">
        <label for="name">Nom :</label>
        <input type="text" class="form-control" name="name" value="{{ old('name', $auteur->name) }}">
        @error("name")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="firstname">Prenom :</label>
        <input type="text" class="form-control" name="firstname" value="{{ old('firstname', $auteur->firstname) }}">
        @error("firstname")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" class="form-control" name="email" value="{{ old('email', $auteur->email) }}">
        @error("email")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Descriptif :</label>
        <textarea name="description" id="description" class="form-control">{{ old('description', $auteur->description) }}</textarea>
        @error("description")
        {{ $message }}
        @enderror
    </div>
    <button class="btn btn-primary">
        @if ($auteur->id)
        Modifier
        @else
        Créer
        @endif
    </button>
</form>
