<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ali Ebrahiminejad">

    <title>Players</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font.css')}}">
    <link href="{{ asset('styles/main.css')}}" rel="stylesheet">
    <link href="{{ asset('styles/games.css')}}" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top" id="nav1">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img alt="dice" src="{{ asset('img/logo.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingnavbar"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsingnavbar">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/play">Play</a></li>
                <li class="nav-item"><a class="nav-link" href="/create">Create new game</a></li>
                <li class="nav-item"><a class="nav-link" href="/players">View all players</a></li>
                <li class="nav-item"><a class="nav-link" href="/games">View all games</a></li>
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
                                        <input id="emailInput" placeholder="Email" name="email"
                                               class="form-control form-control-sm"
                                               type="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input id="passwordInput" placeholder="Password" name="password"
                                               class="form-control form-control-sm" type="password" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="custom-btn btn btn-primary btn-block">Login
                                        </button>
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

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/topvote.jpg')}}" alt="Los Angeles" width="800" height="300">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Top voted game</h5>
                    <p>play game other likes</p>
                </div>

            </div>
            <div class="carousel-item">
                <img src="{{asset('img/topplayed.jpg')}}" alt="Chicago" width="800" height="300">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Top played game</h5>
                    <p>play game other plays</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/toprecent.jpg')}}" alt="New York" width="800" height="300">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Most recent game</h5>
                    <p>play new game</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>

    <div class="header row py-2 mt-1" id="play">
        <div class="col-3">
            Creator
        </div>
        <div class="col-1">
            Max score
        </div>
        <div class="col-1">
            Dice to lose
        </div>
        <div class="col-1">
            Number of dices
        </div>
        <div class="col-1">
            Throw limit
        </div>
        <div class="col-2">
            Create time
        </div>
        <div class="col-1">
            Up votes
        </div>
        <div class="col-1">
            Down votes
        </div>
        <div class="col-1">
            Action
        </div>
    </div>
    @foreach(App\Games::all() as $game)
        <div class="field row py-1 mt-1 mb-3 text-center">
            <div class="col-3">
                {{App\User::where('id', '=', $game->creator)->firstOrFail()->email}}
            </div>
            <div class="fp col-1">
                {{$game->max_score}}
            </div>
            <div class="fp col-1">
                @if($game->lose_dice > 0)
                    {{$game->lose_dice > 0}}
                @else
                    disabled
                @endif
            </div>
            <div class="fp col-1">
                {{$game->dice_number}}
            </div>
            <div class="fp col-1">
                @if($game->trow_limit > 0)
                    {{$game->trow_limit > 0}}
                @else
                    disabled
                @endif
            </div>
            <div class="fp col-2">
                {{$game->created_at}}
            </div>
            <div class="fp col-1">
                {{$game->up_votes}}
            </div>
            <div class="fp col-1">
                {{$game->down_votes}}
            </div>
            <div class="fp col-1">
                <a href="/play?id={{$game->id}}"><img width="32" height="32" src="{{asset('img/play.png')}}"></a>
            </div>
        </div>
    @endforeach
</div>

<footer>

    <div class="text-center">© 2019 Copyright: Ali Ebrahiminejad -
        <a target="_blank" class="footer-link" href="https://walllit.ir">Walllit.ir</a>
    </div>

</footer>
</body>
</html>