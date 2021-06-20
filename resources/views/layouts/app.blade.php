<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content=" ie=edge">
  <title> @yield('title') </title>
  <link href="{{asset('styles/style.css')}}" rel="stylesheet" type="text/css" >
</head>
<body>
 @section('header')
  <div id="wrapper">
    <div id="header">
      <h3><a href="#">Блог</a></h3>
    </div>
    <div id="sidebar">
      <h2>Навигация</h2>
      <ul>
        <li><a href="/">Главная</a></li>
        <li><a href="/posts">Новости</a></li>
        <li><a href="/products">Товары</a></li>
        <li><a href="/faq">FAQ</a></li>
        <li><a href="/aboutus">О нас</a></li>
      </ul>
    </div>
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            </li> 
                            <li>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
  @show
  <div class="container" id="content">
    @yield('content')
  </div>
  @section('footer')
  </div>
    <div id="footer">
      <p>&copy; 2021 Maldybaev Taalai <a href="https://github.com/maldybaev">Github</a> </p>
    </div>
    <!-- <style type="text/css">
      /* Page Formatting */

      * {
        margin:0;
        padding:0;
        }

      body {
        background-color:#fcfcfc;
        background-image:url(images/background.png);
        background-repeat:repeat-x;
        font:12px "Trebuchet MS", Arial, Verdana;
        color:#555555;
        text-align:left;
      }
      a {
        color:#6A95AD;
        text-decoration:none;
        }
      a:hover {
        color:#E9BF1B;
        text-decoration:none;
        }
      img, img a {
        border:0;
        }
      p {
        line-height:1.7em;
        margin-bottom:20px;
      }
      .button {
        display: flex;
        align-content: right;
      }
      .des {
        text-align:: top;
      }

      /* Page Structure */

      #wrapper {
        width:760px;
        margin:0 auto;
        padding:10px;
        background-color:#fff;
        border-left:1px solid #efefef;
        border-right:1px solid #efefef;
        border-bottom:1px solid #efefef;
        }
      #header {
        height:200px;
        background-image:url(images/header.png);
        background-repeat:no-repeat;
        margin-bottom:10px;
        }
      #sidebar {
        float:left;
        text-align:left;
        width:150px;
        padding:10px;
        background-image:url(images/bg-sidebar.gif);
        border:1px solid #efefef;
        color:#666666;
        }
      #content {
        margin-left:190px;
        padding-left: 20px;
        min-height:450px;
        display: flex;
        flex-direction: column;
        }
      #footer {
        clear:both;
        padding:10px 0;
        font-size:11px;
        text-align:center;
        line-height:16px;
        color:#999999;
        font-weight:bold;
        }

      /*  Headings */

      h1 {
        font-weight:normal;
        letter-spacing:-1px;
        font-size:1.8em;
        padding-bottom:0;
        }
      h1 a {
        text-decoration:none;
        }
      h1 a:hover {
        text-decoration:none;
        }
      h2 {
        font-weight:bold;
        font-size:1.0em;
        }
      h3 {
        font-weight:normal;
        font-family:Geneva, Arial, Helvetica, sans-serif;
        font-size:3.0em;
        line-height:200px;
        margin-left:10px;
        }
      h3 a {
        color:#ffffff;
        }
      h3 a:hover {
        color:#ffffff;
        text-decoration:none;
        }

      /* Sidebar */

      #sidebar ul {
        list-style-type:none;
        margin:0 0 20px 0;
        }
      #sidebar li {
        list-style-type:disc;
        margin-left:14px;
        }
      #sidebar a {
        font-weight:normal;
        }
      #sidebar a:hover {
        text-decoration:underline;
        }

      /* Classes */

      .item {
        margin-bottom:10px;
        width: 60%;
        }
      .meta {
        margin-bottom:10px;
        color:#999999;
        }

      /* Extra's */

      blockquote  {
        border-left:5px solid #333333;
        color:#333333;
      }
      #subscribe {
        padding-right:5px;
      }
      #sub {
        font-weight:bold;
        font-family:Geneva, Arial, Helvetica, sans-serif;
        font-size:1.3em;
        }
      #sub a:hover {
        text-decoration:none;
        }
    </style> -->
    @show