@extends('layouts.app')

@section('content')

<div class="form-jumbo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
    
                <div class="text-center py-5 title-box mx-auto fw-bold">
                    <h1 class="mx-auto my-0 py-2 px-2">Welcome!</h1>
                    <h3 class="mx-auto my-0 py-2 px-2">In this area, you can add a new comic to the list*</h3>
                    <p class="text-danger mx-auto my-0 py-2 px-2">*Remember to fill in all fields!</p>
                </div>
               
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            {{-- alert error --}}
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $err)
                            <li>{{$err}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form action="{{ route('comics.store') }}" method="POST" class="my-4">
                @csrf
                
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="title" class="control-label">Titolo fumetto</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Nome" value="{{ old('title')}}">
                    </div>
                    @error('title')
                    <div class="text-danger">{{$message}}</div>
                @enderror
                
                    <div class="col-12">
                        <label for="description" class="control-label">Breve descrizione</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Descrizione">{{ old('description')}}</textarea>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="thumb" class="control-label">URL immagine</label>
                        <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" placeholder="Url" value="{{ old('thumb')}}">
                        @error('thumb')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                
                    <div class="col-12 col-md-6">
                        <label for="price" class="control-label">Prezzo</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="Prezzo" value="{{ old('price')}}">
                        @error('price')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="series" class="control-label">Serie</label>
                        <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" placeholder="Serie" value="{{ old('series')}}">
                        @error('series')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                
                    <div class="col-12 col-md-6">
                        <label for="sale_date" class="control-label">Data di vendita</label>
                        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" placeholder="Data di vendita" value="{{ old('sale_date')}}">
                        @error('sale_date')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="d-flex my-3">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="type" id="graphic_novel" value="graphic novel">
                                <label class="form-check-label" for="graphic_novel">Graphic Novel</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="comic_book" value="comic book">
                                <label class="form-check-label" for="comic_book">Comic Book</label>
                            </div>
                        </div>
                        {{-- <label for="type" class="control-label">Tipo</label>
                        <input type="text" class="form-control" name="type" id="type" placeholder="Tipo"> --}}
                    </div>
                    
                
                    <div class="col-12 col-md-6">
                        <label for="artists" class="control-label">Artista</label>
                        <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists" id="artists" placeholder="Artisti" value="{{ old('artists')}}">
                        @error('artists')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label for="writers" class="control-label">Scritto da:</label>
                        <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers" id="writers" placeholder="Autori" value="{{ old('writers')}}">
                        @error('writers')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-sm btn-success mt-3">Memorizza</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>

@endsection