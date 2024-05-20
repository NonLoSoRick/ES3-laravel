@extends('layout')

@section('content')
<h1>Crea Nuovo Libro</h1>
<form action="{{ route('libri.store') }}" method="POST">
    @csrf
    <div>
        <label for="titolo">Titolo:</label>
        <input type="text" id="titolo" name="titolo" required>
    </div>
    <div>
        <label for="descrizione">Descrizione:</label>
        <textarea id="descrizione" name="descrizione"></textarea>
    </div>
    <div>
        <label for="autore_id">Autore:</label>
        <select id="autore_id" name="autore_id" required>
            @foreach($autori as $autore)
            <option value="{{ $autore->id }}">{{ $autore->nome }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="categorie">Categorie:</label>
        <select id="categorie" name="categorie[]" multiple required>
            @foreach($categorie as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Salva</button>
</form>
@endsection