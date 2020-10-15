@extends('layout.app')

@section('titolo','Comic Home')
	 
@section('main')

<h1 class="text-primary">Il nostro catalogo</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titolo</th>
		<th scope="col">Autore</th>
		<th scope="col">Prezzo</th>
      <th scope="col">Qtà</th>
    </tr>
  </thead>
  <tbody>

	 @forelse ($data as $comic)
		<tr>
      <th scope="row">{{$comic->id}}</th>
      <td>{{$comic->titolo}}</td>
      <td>{{$comic->autore}}</td>
		<td>{{$comic->prezzo}}</td>
		<td>{{$comic->quantita}}</td>
    </tr>
	 @empty
		  <p>Nessun record trovato!</p>
	 @endforelse	
   
  </tbody>
</table>


@endsection