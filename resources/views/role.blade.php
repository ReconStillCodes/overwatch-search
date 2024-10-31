@extends('master')

@section('title', $role->name)

@section('style')
    <link rel="stylesheet" href="/css/role.css">
@endsection

@section('title-content')
    <div class="container-fluid jumbotron d-flex align-items-center justify-content-center flex-column">
        <img src="/asset/role/{{ $role->banner }}" alt="Jumbotron" class="jumbotron-img">
        
        <div class="container-lg jumbotron-content d-flex align-items-start justify-content-center flex-column">
            
            <div class="d-flex justify-content-between">
                <div class="col-md-5 col-sm-12 d-flex flex-column align-items-md-start align-items-sm-center">
                    <h1 class="jumbotron-title text-md-start text-center">{{ $role->name}}</h1>
                    <h3 class="text-uppercase ft-color-orange text-md-start text-center">{{ $role->subtitle }}</h3>
                    <h6 class="ft-color-white description mt-3  text-md-start text-center">{{$role->description}}</h6>
                </div>
                
                <div class="d-none d-md-flex justify-content-end align-items-end col-md-5 col-sm-12" >
                    <div class="d-flex flex-column align-items-end text-end">
                        <h3 class="text-uppercase ft-color-orange"> passive</h3>
                        <h6 class="ft-color-white description mt-3 ">{{$role->passive}}</h6>
                    </div>
                    <img src="/asset/role/{{ $role->img}}" alt="Role Img">
                </div>
                
            </div>
            
        </div>
    </div>
@endsection


@section('main-content')
    <div class="container-md d-flex align-items-center justify-content-center px-0 mt-5">
        
        {{-- cards --}}
        <div class="row text-center justify-content-center px-6 card-container">

            @foreach ($heroes as $h)
                <a class="col-md-3 m-4  col-lg-2 card p-0 d-flex align-items-center flex-column text-center" href="{{route('hero', [$h->id])}}" >
                    <img src="/asset/heroes/{{$h->folder}}/profile.png" alt="{{$h->name}}" class="card-img">

                    <h4 class="ft-color-orange text-uppercase text-center mt-3 mb-1">{{$h->name}}</h4>
                    <h6 class="text-center ft-color-white text-uppercase mb-4">
                        {{$h->subtitle}}
                    </h6>
                </a>
            @endforeach
            
           
        </div>
        
    </div>
@endsection