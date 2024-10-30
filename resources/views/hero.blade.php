@extends('master')

@section('title', $hero->name)

@section('style')
    <link rel="stylesheet" href="/css/hero.css">
@endsection

@section('title-content')
    <div class="container-fluid jumbotron d-flex align-items-center justify-content-center flex-column">
        <img src="/asset/heroes/{{ $hero->folder }}/{{ $hero->landscape }}" alt="Jumbotron" class="jumbotron-img">
        
        <div class="container-lg jumbotron-content d-flex align-items-start justify-content-center flex-column">
            {{-- Text --}}
            <h1 class="jumbotron-title">{{ $hero->name }}</h1>
            <h3 class="text-uppercase ft-color-orange">{{ $hero->subtitle }}</h3>

            <h6 class="ft-color-white description mt-3">{{$hero->description}}</h6>
        </div>
    </div>
    

@endsection

@section('main-content')
    <div class="container-md d-flex justify-content-center mt-5 mb-5">
        @foreach ($abilities as $a)
            <div class="d-flex flex-column align-items-center t col-lg-3 col-md-4 col-sm-6 mx-3">
                <img src="/asset/heroes/{{ $hero->folder }}/{{$a->no}}.png" alt="{{$a->name}}">
                <h3 class="text-uppercase ft-color-orange mt-4 text-center">{{$a->name}}</h3>
            </div>    
        @endforeach
        
    </div>
@endsection