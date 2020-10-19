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
		<th scope="col"></th>
		<th scope="col"></th>
    </tr>
  </thead>
  <tbody>

	 @forelse ($data as $comic)
		<tr>
      <th scope="row">{{$comic->id}}</th>
      <td><a href="{{route('comic.show',$comic->id)}}">{{$comic->titolo}}</a></td>
      <td>{{$comic->autore}}</td>
		<td>{{$comic->prezzo}}</td>
		<td>{{$comic->quantita}}</td>
		<td>
		<a class="btn btn-info" href="{{route('comic.edit',$comic->id)}}" role="button">Modifica</a>
		</td>
		<td>
			{{-- <a href="{{route('comic.destroy',$comic->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?">delete</a> --}}
			<form action="{{route('comic.destroy',$comic->id)}}" method="post">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Elimina</button>
			</form>
		</td>

		
				
    </tr>
	 @empty
		  <p>Nessun record trovato!</p>
	 @endforelse	
   
  </tbody>
</table>
@endsection