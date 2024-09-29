@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>I nostri fumetti</h1>
                    <a href="{{route('comics.create')}}" class="btn btn-warning btn-sm">Add</a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Titolo</th>
                            <th scope='col'>Prezzo</th>
                            <th scope='col'>Serie</th>
                            <th scope='col'>Data di vendita</th>
                            <th scope='col'>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                        <tr>
                            <td>{{$comic->id}}</td>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->price}}€</td>
                            <td>{{$comic->series}}</td>
                            <td>{{$comic->sale_date}}</td>
                            <td>
                                <a href="{{route('comics.show', ['comic'=> $comic->id])}}" class="btn btn-sm btn-primary">MOSTRA</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="bg-hero">
        <button class="btn main-btn text-uppercase fw-bolder text-white rounded-0 position-relative d-none d-md-block">Current Series</button>
    </div>
    <div class="bg-color pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center text-white">
                        <h1>I nostri fumetti</h1>
                        <a href="{{route('comics.create')}}" class="btn btn-primary btn-sm text-white"><i class="bi bi-plus-circle"></i> Add comic</a>
                    </div>
                </div>
                @foreach ($comics as $comic)
                <div class="col-6 col-md-4 col-xl-2 mx-auto">
                    <div class="cover-box">
                        <a href="{{route('comics.show', ['comic'=> $comic->id])}}"><img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" class="img-fluid"></a>
                    </div>
                    <p class="text-uppercase text-white ">{{$comic['series']}}</p>
                </div>
                @endforeach
    
                <div class="col-12">
                    <div class="d-flex justify-content-center my-4">
                        <button class="btn btn-sm text-uppercase fw-bolder text-white rounded-0">Load More</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection