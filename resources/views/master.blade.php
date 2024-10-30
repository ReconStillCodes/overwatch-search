<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="/bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/master.css">
</head>

<body>
    {{-- Nav Bar --}}
    <nav class="navbar bg-blur nb container-fluid">
        <div class="container-md  fw-bold justify-content-start">
            <a href="{{route('home')}}" class="text-decoration-none h5 fw-bold me-5">
                <span class="text-primary"> 
                    OVERWATCH
                </span>
            </a>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dd-roles" data-bs-toggle="dropdown">
                    ROLES
                </button>
                
                <ul class="dropdown-menu" aria-labelledby="dd-roles">
                    @foreach ($roles as $r)
                        <li>
                            <a href="{{$r->id}}" class="dropdown-item">
                                {{strtoupper($r->name)}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="main-content">
        @yield('content')
    </div>


    <script src="/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>