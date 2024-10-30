@extends('master')

@section('title', 'Home')

@section('style')
<link rel="stylesheet" href="/css/home.css">
@endsection

@section('title-content')

     <div class="container-fluid jumbotron d-flex align-items-center justify-content-center flex-column">

        <img src="/asset/jumbotron/search.jpg" alt="Jumbotron" class="jumbotron-img">

        
        <div class="container-lg jumbotron-content d-flex align-items-center justify-content-center flex-column">
            {{-- Text --}}
            <h1 class="jumbotron-title">OVERWATCH</h1>
            <h3 class="text-uppercase ft-color-orange "> Discover Your Hero </h3>

            {{-- Input --}}
           <form action="{{route('searchHeroes')}}" class="mt-5 col-6 " method="get">
                <div class="input-group">
                    <span class="input-group-text d-flex align-items-center justify-content-center icon icon-left">
                        <button class="btn input-btn" type="submit" id="btn-search">
                            <img src="/asset/icon/search.png" alt="search" class="input-icon">
                        </button>
                    </span>

                    <input type="text" class="form-control input-content" id="search" name="search" placeholder="Search">
                </div>
                
           </form>
        
    </div>
    
@endsection

@section('main-content')
    <div class="container-md d-flex align-items-center justify-content-center px-0 mt-5">
        
        {{-- cards --}}
        <div class="row text-center justify-content-center px-6 card-container">

            @foreach ($heroes as $h)
                <button class="col-md-3 m-4  col-lg-2 card p-0 d-flex align-items-center flex-column text-center" type="button">
                <img src="/asset/heroes/{{$h->folder}}/profile.png" alt="{{$h->name}}" class="card-img">

                <h4 class="ft-color-orange text-uppercase text-center mt-3 mb-1">{{$h->name}}</h4>
                <h6 class="text-center ft-color-white text-uppercase mb-4">
                    {{$h->subtitle}}
                </h6>
            </button>
            @endforeach
            
           
        </div>
        
    </div>
@endsection