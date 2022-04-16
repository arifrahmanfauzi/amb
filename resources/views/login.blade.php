<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi Media Belajar">
    <meta name="keywords" content="learning">
    <meta name="author" content="amb">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Login</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="{{ asset('/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/plugins/pace/pace.css') }}" rel="stylesheet">

    <link href="{{ asset('/assets/css/main.min.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/images/icons/logo.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/images/icons/logo.png') }}" />
</head>

<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background"
            style="background: url(assets/images/custom/Muslim-Children-Vector.jpg); background-position: center; background-size: 100%; background-repeat: no-repeat; ">
            <a href="https://www.vecteezy.com/free-vector/muslim"></a>
        </div>
        <div class="app-auth-container">
            <form action="{{ url('login') }}" method="POST">
                @csrf
                <div class="auth-credentials m-b-xxl">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control m-b-md" name="username" id="username" aria-describedby="username"
                        placeholder="admin">

                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" aria-describedby="password"
                        placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                </div>
                <div class="auth-submit">
                    <button type="submit" class="btn btn-primary">Masuk</button>

                </div>
            </form>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ asset('/assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('/assets/js/main.min.js') }}"></script>
    <script src="{{ asset('/assets/js/custom.js') }}"></script>
</body>

</html>
