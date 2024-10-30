<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="/bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="container-xxl  fw-bold">
            <a href="{{route('home')}}" class="navbar-nav">
                <span class="text-primary"> 
                    OVERWATCH
                </span>
            </a>
        
        </div>
    </nav>
    

    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dd-roles" data-bs-toggle="dropdown">
            ROLES
        </button>
        
        <ul class="dropdown-menu" aria-labelledby="dd-roles">
            <li><a href="#" class="dropdown-item">
                    aseasdasd
                </a>
            </li>
            <li><a href="#" class="dropdown-item">
                    test
                </a>
            </li>
            <li><a href="#" class="dropdown-item">
                    test
                </a>
            </li>
        </ul>
    </div>
    
    <script src="/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>