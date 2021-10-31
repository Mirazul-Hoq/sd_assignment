<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    @if(Session::has('userid') && Session::has('userrole') && Session::get('userrole')=='student')
        @extends('student.layouts.default')
        @section('content')
            <div id="wrapper">
                <ul class="sidebar navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">
                      <i class="fas fa-fw fa-tachometer-alt"></i>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-fw fa-folder"></i>
                      <span>Pages</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                      <h6 class="dropdown-header">Login Screens:</h6>
                      <a class="dropdown-item" href="login.html">Login</a>
                      <a class="dropdown-item" href="register.html">Register</a>
                      <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                      <div class="dropdown-divider"></div>
                      <h6 class="dropdown-header">Other Pages:</h6>
                      <a class="dropdown-item" href="404.html">404 Page</a>
                      <a class="dropdown-item" href="blank.html">Blank Page</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                      <i class="fas fa-fw fa-chart-area"></i>
                      <span>Charts</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                      <i class="fas fa-fw fa-table"></i>
                      <span>Tables</span></a>
                  </li>
                </ul>
                <p>This is a dashboard page for Student</p>
            </div>
        @stop
    @elseif(Session::has('userid') && Session::has('userrole') && Session::get('userrole')=='teacher')
        @extends('student.layouts.default')
        @section('content')
            <div id="wrapper">
                <ul class="sidebar navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">
                          <i class="fas fa-fw fa-tachometer-alt"></i>
                          <span>Dashboard</span>
                        </a>
                    </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-fw fa-folder"></i>
                      <span>Pages</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                      <h6 class="dropdown-header">Login Screens:</h6>
                      <a class="dropdown-item" href="login.html">Login</a>
                      <a class="dropdown-item" href="register.html">Register</a>
                      <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                      <div class="dropdown-divider"></div>
                      <h6 class="dropdown-header">Other Pages:</h6>
                      <a class="dropdown-item" href="404.html">404 Page</a>
                      <a class="dropdown-item" href="blank.html">Blank Page</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                      <i class="fas fa-fw fa-chart-area"></i>
                      <span>Charts</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="tables.html">
                      <i class="fas fa-fw fa-table"></i>
                      <span>Tables</span></a>
                  </li>
                </ul>
                <p>This is a dashboard page for Teacher</p>
            </div>
        @stop
    @endif
</body>
</html>













<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

         Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
       <!--  <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> -->