@extends('layout.app')

@section('titolo','Comic Home')

@section('main')

<h2 class="text-primary">Inserimento</h2>

{{-- Validation --}}

 	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif


<form action="{{(!empty($comic)) ? route('comic.update',$comic->id) : route('comic.store')}}" method="post">
	@csrf
	@if (!empty($comic))
		 @method('PATCH')
		 <input type="hidden" class="form-control" value={{$comic->id}}>
	@else
		 @method('POST')
	@endif

	
  <div class="form-group">
    <label for="titolo">Titolo</label>
    <input type="text" class="form-control" id="titolo" placeholder="Inserisci il titolo" name='titolo' autocomplete="off" value={{(!empty($comic)) ? $comic->titolo : old('titolo') }}>
  </div>
  <div class="form-group">
    <label for="autore">Autore</label>
    <input type="text" class="form-control" id="autore" placeholder="Inserisci un autore" name='autore' autocomplete="off" value={{ (!empty($comic)) ? $comic->autore : old('autore') }}>
  </div>
  <div class="form-group">
    <label for="prezzo">Prezzo</label>
    <input type="text" class="form-control" id="prezzo" placeholder="Inserisci un prezzo" name='prezzo' autocomplete="off" value={{(!empty($comic)) ? $comic->prezzo :  old('prezzo') }}>
  </div>
   <div class="form-group">
    <label for="quantita">Quantità</label>
    <input type="number" class="form-control" id="quantita" placeholder="Inserisci un quantità" name='quantita' autocomplete="off" value={{ (!empty($comic)) ? $comic->quantita : old('quantita') }}>
  </div>
  
  <button type="submit" class="btn btn-primary">Inserisci</button>
</form>

@endsection