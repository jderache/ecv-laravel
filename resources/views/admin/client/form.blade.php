<form action="" method="post" class="vstack gap-2">
    @csrf
    <div class="form-group">
        <label for="society">Societé :</label>
        <input type="text" class="form-control" name="society" value="{{ old('society', $client->society) }}">
        @error("society")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="address">Adresse :</label>
        <input type="text" class="form-control" name="address" value="{{ old('address', $client->address) }}">
        @error("address")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="website">Site Web :</label>
        <input type="text" class="form-control" name="website" value="{{ old('website', $client->website) }}">
        @error("website")
        {{ $message }}
        @enderror
    </div>
    <button class="btn btn-primary">
        @if ($client->id)
        Modifier
        @else
        Créer
        @endif
    </button>
</form>
