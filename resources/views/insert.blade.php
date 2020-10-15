@extends('layout.app')

@section('titolo','Comic Home')

@section('main')

<h2>Inserimento Comics</h2>

<form action="{{route('comic.store')}}" method="post">
	@csrf
	@method('POST')
  <div class="form-group">
    <label for="titolo">Titolo</label>
    <input type="text" class="form-control" id="titolo" placeholder="Inserisci il titolo" name='titolo' autocomplete="off" value={{ old('titolo') }}>
  </div>
  <div class="form-group">
    <label for="autore">Autore</label>
    <input type="text" class="form-control" id="autore" placeholder="Inserisci un autore" name='autore' autocomplete="off" value={{ old('autore') }}>
  </div>
  <div class="form-group">
    <label for="prezzo">Prezzo</label>
    <input type="text" class="form-control" id="prezzo" placeholder="Inserisci un prezzo" name='prezzo' autocomplete="off" value={{ old('prezzo') }}>
  </div>
   <div class="form-group">
    <label for="quantita">Quantità</label>
    <input type="number" class="form-control" id="quantita" placeholder="Inserisci un quantità" name='quantita' autocomplete="off" value={{ old('quantita') }}>
  </div>
  
  <button type="submit" class="btn btn-primary">Inserisci</button>
</form>

@endsection