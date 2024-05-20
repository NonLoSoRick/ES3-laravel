@extends('layout')

@section('content')
<h1>Elenco Libri</h1>
<a href="{{ route('libri.create') }}">Aggiungi Nuovo Libro</a>
<ul>
    @foreach($libri as $libro)
    <li>
        <a href="{{ route('libri.show', $libro->id) }}">{{ $libro->titolo }}</a>
        <a href="{{ route('libri.edit', $libro->id) }}">Modifica</a>
        <form action="{{ route('libri.destroy', $libro->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Elimina</button>
        </form>
    </li>
    @endforeach
</ul>
@endsection