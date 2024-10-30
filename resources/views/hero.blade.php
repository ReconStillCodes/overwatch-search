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
        </div>
    </div>

    <
    

@endsection