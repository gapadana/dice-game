<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ali Ebrahiminejad">

    <title>Play dice</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font.css')}}">
    <link href="{{ asset('styles/main.css')}}" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top" id="nav1">
    <div class="container-fluid">
        <a class="navbar-brand" href=""><img alt="dice" src="{{ asset('img/logo.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingnavbar"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsingnavbar">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#play">Play</a></li>
                <li class="nav-item"><a class="nav-link" href="#create">Create new game</a></li>
                <li class="nav-item"><a class="nav-link" href="#players">View all players</a></li>
                <li class="nav-item"><a class="nav-link" href="#games">View all games</a></li>
            </ul>
            @if( auth()->check() )
                <div class="navbar-nav">
                    <a href="/lg" class="custom-btn btn btn-outline-secondary">Logout<span
                                class="caret"></span></a>
                </div>
            @else
                <div class="navbar-nav">
                    <li class="dropdown order-1">
                        <button type="button" id="dropdownMenu1" data-toggle="dropdown"
                                class="custom-btn btn btn-outline-secondary dropdown-toggle">Login <span
                                    class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right mt-3">
                            <li class="px-3 py-2">
                                <form action="/lg2" method="post" class="form">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input id="emailInput" placeholder="Email" name="email" class="form-control form-control-sm"
                                               type="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input id="passwordInput" placeholder="Password" name="password"
                                               class="form-control form-control-sm" type="password" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="custom-btn btn btn-primary btn-block">Login</button>
                                    </div>
                                    <div class="form-group text-center">
                                        <small><a href="#">Forgot password?</a></small>
                                    </div>
                                    <div class="form-group text-center">
                                        <small><a href="/rg">Register now?</a></small>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                </div>
            @endif
        </div>
    </div>
</nav>

<div class="container">
    <div class="row mt-5 " id="play">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 px-6">
            <img class="cat" src="{{ asset('img/play.jpg')}}">
        </div>
        <div class="mt-auto mb-auto col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 px-6">
            <p class="bold">
                Play:
            </p>
            <p>
                Start a new game, or continue your previously started game.
            </p>
        </div>
    </div>
    <div class="row mt-5 flex-row-reverse" id="create">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 px-6">
            <img class="cat" src="{{ asset('img/create.jpg')}}">
        </div>
        <div class="mt-auto mb-auto col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 px-6">
            <p class="bold">
                Create new game:
            </p>
            <p>
                Create your own game, with your own rules and skins.
            </p>
        </div>
    </div>
    <div class="row mt-5" id="players">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 px-6">
            <img class="cat" src="{{ asset('img/players.jpg')}}">
        </div>
        <div class="mt-auto mb-auto col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 px-6">
            <p class="bold">
                View all players:
            </p>
            <p>
                View all players that joined this site already, and see which one is online just right now.
            </p>
        </div>
    </div>
    <div class="row mt-5 mb-5 flex-row-reverse" id="games">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 px-6">
            <img class="cat" src="{{ asset('img/allgames.jpg')}}">
        </div>
        <div class="mt-auto mb-auto col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-12 px-6">
            <p class="bold">
                View all games:
            </p>
            <p>
                View all games created so far. vote up or vote them down, you can also comment on them.
            </p>
        </div>
    </div>
</div>

<footer>

    <div class="text-center">© 2019 Copyright: Ali Ebrahiminejad -
        <a target="_blank" class="footer-link" href="https://walllit.ir">Walllit.ir</a>
    </div>

</footer>
</body>
</html>