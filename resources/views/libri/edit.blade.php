@extends('layout')

@section('content')
<h1>Modifica Libro</h1>
<form action="{{ route('libri.update', $libro->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="titolo">Titolo:</label>
        <input type="text" id="titolo" name="titolo" value="{{ $libro->titolo }}" required>
    </div>
    <div>
        <label for="descrizione">Descrizione:</label>
        <textarea id="descrizione" name="descrizione">{{ $libro->descrizione }}</textarea>
    </div>
    <div>
        <label for="autore_id">Autore:</label>
        <select id="autore_id" name="autore_id" required>
            @foreach($autori as $autore)
            <option value="{{ $autore->id }}" {{ $libro->autore_id == $autore->id ? 'selected' : '' }}>{{ $autore->nome }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="categorie">Categorie:</label>
        <select id="categorie" name="categorie[]" multiple required>
            @foreach($categorie as $categoria)
            <option value="{{ $categoria->id }}" {{ in_array($categoria->id, $libro->categorie->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $categoria->nome }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Salva</button>
</form>
@endsection