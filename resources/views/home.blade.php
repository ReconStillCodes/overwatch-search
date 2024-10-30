@extends('master')

@section('title', 'Home')

@section('style')
<link rel="stylesheet" href="/css/home.css">
@endsection

@section('content')

     <div class="container-fluid jumbotron d-flex align-items-center justify-content-center">

        <img src="/asset/jumbotron/search.jpg" alt="Jumbotron" class="jumbotron-img">

        
        <div class="container-lg jumbotron-content d-flex align-items-center justify-content-center flex-column">
            {{-- Text --}}
            <h1 class="jumbotron-title">OVERWATCH</h1>
            <h3 class="text-uppercase ft-color-orange "> Discover Your Hero </h3>

            {{-- Input --}}
           <form action="" class="mt-5 col-6 ">
                <div class="input-group">
                    <span class="input-group-text d-flex align-items-center justify-content-center icon icon-left">
                        <button class="btn input-btn" type="button" id="btn-search">
                            <img src="/asset/icon/search.png" alt="search" class="input-icon">
                        </button>
                    </span>

                    <input type="text" class="form-control input-content id="search" placeholder="Search">

                    <span class="input-group-text d-flex align-items-center justify-content-center icon icon-right">
                        <button class="btn input-btn" type="button" id="btn-close">
                            <img src="/asset/icon/close.png" alt="close" class="input-icon">
                        </button>
                    </span>
                </div>
                
           </form>
        
    </div>
@endsection