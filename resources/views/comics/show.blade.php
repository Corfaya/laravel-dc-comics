@extends('layouts.app')

@section('content')
<div class="bg-hero">
    <div class="detail-cover-box position-relative d-none d-md-block"><img src="{{$comic->thumb}}"></img></div>
</div>
<div class="banner py-4">
</div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex my-5">
                    <div class="details my-5 me-5 py-2">
                        <h2>{{$comic->title}}</h2>
                        <div class="green-bar px-4 my-3">

                            <div class="d-flex justify-content-between">

                                <p class="m-0 price-tag py-2">U.S. Price: <span class="price text-white fw-bold">${{$comic->price}}</span></p>

                                <div class="d-flex">
                                    <p class="text-uppercase m-0 available-style fw-bolder pe-3 py-2">Available</p>

                                    <div class="dropdown ps-3 py-2">
                                        <a class="dropdown-toggle text-white fw-bold text-decoration-none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Check Availability
                                        </a>
                                          <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                          </ul>
                                          <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                          </ul>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                        
                        
                        <p>{{$comic->description}} </p>
                    </div>

                    <div class="advertisment my-5 d-none d-md-block">
                        <p class="text-end text-uppercase text-secondary m-0">Advertisement</p>
                        <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="Pubblicità">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-details py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h5 class="fw-bold">Talent</h5>
                    <div class="p-1">
                        <div class="d-flex justify-content-between fw-bolder">
                            <p class="m-0 pe-5">Art by:</p>
                            <p class="text-primary ps-5">{{$comic->artists}}</p>
                        </div>
                        <div class="d-flex justify-content-between fw-bolder">
                            <p class="m-0 pe-5">Written by:</p>
                            <p class="text-primary ps-5">{{$comic->writers}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 offset-md-1">
                    <h5 class="fw-bold">Specs</h5>
                    <div class="p-1">
                        <div class="d-flex justify-content-between fw-bolder">
                            <p class="m-0 pe-5">Series:</p>
                            <p class="text-primary text-uppercase ps-5">{{$comic->series}}</p>
                        </div>
                        <div class="d-flex justify-content-between fw-bolder">
                            <p class="m-0 pe-5">U.S. Price:</p>
                            <p class="text-primary ps-5">${{$comic->price}}</p>
                        </div>
                        <div class="d-flex justify-content-between fw-bolder">
                            <p class="m-0 pe-5">On Sale Date:</p>
                            <p class="text-primary ps-5">{{$comic->sale_date}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection