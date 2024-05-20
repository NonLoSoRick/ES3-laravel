@extends('layout')

@section('content')
<h1>Dettagli Libro</h1>
<p><strong>Titolo:</strong> {{ $libro->titolo }}</p>
<p><strong>Descrizione:</strong> {{ $libro->descrizione }}</p>
<p><strong>Autore:</strong> {{ $libro->autore->nome }}</p>
<p><strong>Categorie:</strong>
    @foreach($libro->categorie as $categoria)
    {{ $categoria->nome }}@if(!$loop->last), @endif
    @endforeach
</p>
<a href="{{ route('libri.edit', $libro->id) }}">Modifica</a>
<form action="{{ route('libri.destroy', $libro->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Elimina</button>
</form>
<a href="{{ route('libri.index') }}">Torna all'elenco</a>
@endsection