<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('styles/login/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/login/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('styles/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top" id="nav1">
    <div class="container-fluid">
        <a class="navbar-brand" href=""><img alt="dice" src="{{asset('img/logo.png')}}"></a>
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
            <div class="navbar-nav">
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown"
                            class="custom-btn btn btn-outline-secondary dropdown-toggle">Login <span
                                class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-3">
                        <li class="px-3 py-2">
                            <form class="form" role="form">
                                <div class="form-group">
                                    <input id="emailInput" placeholder="Email" class="form-control form-control-sm"
                                           type="text" required="">
                                </div>
                                <div class="form-group">
                                    <input id="passwordInput" placeholder="Password"
                                           class="form-control form-control-sm" type="text" required="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="custom-btn btn btn-primary btn-block">Login</button>
                                </div>
                                <div class="form-group text-center">
                                    <small><a href="#">Forgot password?</a></small>
                                </div>
                                <div class="form-group text-center">
                                    <small><a href="#">Register now?</a></small>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-auto panel">
            <form action="/register" method="post" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51">
						Register
					</span>


                <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required" >
                    <input class="input100" type="email" name="email" placeholder="Email" required>
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password" required>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required" >
                    <input class="input100" type="password" id="password_confirm" name="password2" placeholder="Confirm password" oninput="check(this)" required>
                    <span class="focus-input100"></span>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <script language='javascript' type='text/javascript'>
                    function check(input) {
                        if (input.value != document.getElementById('password').value) {
                            input.setCustomValidity('Password Must be Matching.');
                        } else {
                            // input is valid -- reset the error message
                            input.setCustomValidity('');
                        }
                    }
                </script>



                <div class="container-login100-form-btn m-t-17">
                    <button class="login100-form-btn">
                        Register
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>


<script src="{{asset('js/login/main.js')}}"></script>


</body>
</html>