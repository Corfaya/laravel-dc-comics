@extends('layouts.app')


@section('content')

<div class="form-jumbo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
    
                <div class="text-center py-5 title-box mx-auto fw-bold">
                    <h1 class="mx-auto my-0 py-2 px-2">Welcome!</h1>
                    <h3 class="mx-auto my-0 py-2 px-2">In this area, you can modify comics' details</h3>
                </div>
               
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST" class="my-4">
                @csrf
                {{-- method --}}
                @method('PUT')
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="title" class="control-label">Titolo fumetto</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Nome" value="{{$comic->title}}">
                    </div>
                
                    <div class="col-12">
                        <label for="description" class="control-label">Breve descrizione</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Descrizione">{{$comic->description}}</textarea>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="thumb" class="control-label">URL immagine</label>
                        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Url" value="{{$comic->thumb}}">
                    </div>
                
                    <div class="col-12 col-md-6">
                        <label for="price" class="control-label">Prezzo</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="Prezzo" value="{{$comic->price}}">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="series" class="control-label">Serie</label>
                        <input type="text" class="form-control" name="series" id="series" placeholder="Serie" value="{{$comic->series}}">
                    </div>
                
                    <div class="col-12 col-md-6">
                        <label for="sale_date" class="control-label">Data di vendita</label>
                        <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Data di vendita" value="{{$comic->sale_date}}">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="d-flex my-3">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="type" id="graphic_novel" value="{{$comic->type}}">
                                <label class="form-check-label" for="graphic_novel">Graphic Novel</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="comic_book" value="{{$comic->type}}">
                                <label class="form-check-label" for="comic_book">Comic Book</label>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-12 col-md-6">
                        <label for="artists" class="control-label">Artista</label>
                        <input type="text" class="form-control" name="artists" id="artists" placeholder="Artisti" value="{{$comic->artists}}">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="writers" class="control-label">Scritto da:</label>
                        <input type="text" class="form-control" name="writers" id="writers" placeholder="Autori" value="{{$comic->writers}}">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-sm btn-success mt-3">Salva modifiche</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>

@endsection