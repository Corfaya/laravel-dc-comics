@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>I nostri fumetti</h1>
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
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection