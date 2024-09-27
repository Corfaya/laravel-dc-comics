@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    <div class="col-12 col-md-6">
                        <label for="" class="control-label">Titolo fumetto</label>
                        <input type="text" class="form-control" name="title" placeholder="Nome">
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label">Breve descrizione</label>
                        <textarea type="text" class="form-control" name="description" placeholder="Descrizione"></textarea>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="" class="control-label">URL immagine</label>
                        <input type="text" class="form-control" name="thumb" placeholder="Url">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="" class="control-label">Prezzo</label>
                        <input type="text" class="form-control" name="price" placeholder="Prezzo">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="" class="control-label">Serie</label>
                        <input type="text" class="form-control" name="series" placeholder="Serie">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="" class="control-label">Data di vendita</label>
                        <input type="date" class="form-control" name="sale_date" placeholder="Vendita">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="" class="control-label">Tipo</label>
                        <input type="text" class="form-control" name="type" placeholder="Tipo">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="" class="control-label">Artista</label>
                        <input type="text" class="form-control" name="artists" placeholder="Tipo">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="" class="control-label">Scritto da:</label>
                        <input type="text" class="form-control" name="writers" placeholder="Tipo">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-sm btn-success">Memorizza</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection