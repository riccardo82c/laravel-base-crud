@extends('layout.app')

@section('titolo','Comic Home')
	 
@section('main')

   
	{{-- @forelse ($data as $comic)
	<ul>
		<li>{{$comic->id}}</li>
		<li>{{$comic->titolo}}</li>
		<li>{{$comic->autore}}</li>
		<li>{{$comic->prezzo}}</li>
		<li>{{$comic->quantita}}</li>
	</ul>

	@empty

	<p>Nessun record trovato!</p>
		
	@endforelse	 --}}


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