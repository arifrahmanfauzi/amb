<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('tittle')
    {{-- <title>Dashboard</title> --}}
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="{{ env('APP_URL') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet"> -->
    <link href="{{ env('APP_URL') }}/assets/plugins/pace/pace.css" rel="stylesheet">
    <link href="{{ env('APP_URL') }}/assets/plugins/highlight/styles/github-gist.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ env('APP_URL') }}/assets/css/main.min.css" rel="stylesheet">
    <link href="{{ env('APP_URL') }}/assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ env('APP_URL') }}/assets/images/other/logo.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ env('APP_URL') }}/assets/images/other/logo.png" />
</head>

<body>
    <div class="app menu-off-canvas align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="{{ url('/beranda') }}" class="logo-icon"><span class="logo-text">Beranda</span></a>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="user-info-text"><strong>
                                                {{ Auth::user()->username ? Auth::user()->username : 'kosong' }}
                                            </strong><br></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="addDropdownLink">
                                        <li>
                                            <form action="{{ url('/logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="dropdown-item">Log Out</button>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            @yield('app-content')
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ env('APP_URL') }}/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="/assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script> -->
    <script src="{{ env('APP_URL') }}/assets/plugins/pace/pace.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/plugins/highlight/highlight.pack.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/main.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/custom.js"></script>
    @yield('script')
</body>

</html>
