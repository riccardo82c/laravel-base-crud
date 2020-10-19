@extends('layout.app')

@section('titolo','Comic Home')

@section('main')

<h1 class="text-primary">Riepilogo</h1>

<ul>
	<li>
		<h4>
			Titolo:
			<small class="text-muted">{{$comic->titolo}}</small>
		</h4>
	</li>
	<li>
		<h4>
			Autore:
			<small class="text-muted">{{$comic->autore}}</small>
		</h4>
	</li>
	<li>
		<h4>
			Prezzo:
			<small class="text-muted">{{$comic->prezzo}}</small>
		</h4>
	</li>
	<li>
		<h4>
			Quantità:
			<small class="text-muted">{{$comic->quantita}}</small>
		</h4>
	</li>

</ul>

@include('layout.home-btn')

@endsection

