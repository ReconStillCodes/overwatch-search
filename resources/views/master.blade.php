<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="/bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/master.css">
    @yield('style')
</head>

<body>
    {{-- Nav Bar --}}
    <nav class="navbar bg-blur nb container-fluid align-items-center">
        <div class="container-md justify-content-start nb-container">
            <a href="{{route('home')}}" class="text-decoration-none me-5 nb-item">
                <span class="ft-color-orange fw-bold h6 "> 
                    OVERWATCH
                </span>
            </a>
            <div class="dropdown ">
                <button class="btn dropdown-toggle ft-color-orange fw-bold h5 nb-item" type="button" id="dd-roles" data-bs-toggle="dropdown">
                    ROLES
                </button>
                
                <ul class="dropdown-menu" aria-labelledby="dd-roles">
                    @foreach ($roles as $r)
                        <li>
                            <a href="{{route('role', $r->id)}}" class="dropdown-item fw-bold h6">
                                {{strtoupper($r->name)}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="title-content">
        @yield('title-content')
    </div>

    @yield('main-content')

    <script src="/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>