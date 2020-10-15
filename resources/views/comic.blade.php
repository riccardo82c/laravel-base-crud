@extends('layout.app')

@section('titolo','Comic Home')
	 
@section('main')

	@forelse ($data as $comic)
	<ul>
		<li>{{$comic->titolo}}</li>
		<li>{{$comic->autore}}</li>
		<li>{{$comic->prezzo}}</li>
		<li>{{$comic->quantita}}</li>
	</ul>

	@empty

	<p>Nessun record trovato!</p>
		
	@endforelse	
@endsection
