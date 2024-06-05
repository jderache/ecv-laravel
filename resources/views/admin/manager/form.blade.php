<form action="" method="post" class="vstack gap-2">
    @csrf
    <div class="form-group">
        <label for="firstname">Prénom :</label>
        <input type="text" class="form-control" name="firstname" value="{{ old('firstname', $manager->firstname) }}">
        @error("firstname")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="lastname">Nom :</label>
        <input type="text" class="form-control" name="lastname" value="{{ old('lastname', $manager->lastname) }}">
        @error("lastname")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="function">Rôle :</label>
        <input type="text" class="form-control" name="function" value="{{ old('function', $manager->function) }}">
        @error("function")
        {{ $message }}
        @enderror
    </div>
    <button class="btn btn-primary">
        @if ($manager->id)
        Modifier
        @else
        Créer
        @endif
    </button>
</form>
