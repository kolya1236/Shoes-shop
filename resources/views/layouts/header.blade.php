<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>Shoes shop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

        {{-- Styles --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header class="container-fluid">
            <div class="top-right text-center row links">
                    <a href="{{asset('/')}}" class="col-md-4 col-xs-12 title col-md-offset-1 col-sm-offset-0 col-xs-offset-0 h4">Best online shoes shop in internet</a>
                @guest
                    <div class="row col-md-3 col-md-offset-2 col-xs-offset-0 col-xs-12">
                        <a class="h4 col-md-4 col-md-offset-1 col-xs-offset-0 col-xs-12" href="{{ route('login') }}">Login</a>
                        <a class="h4 col-md-4 col-xs-12" href="{{ route('register') }}">Register</a>
                    </div>
                @else
                    <a href="{{asset('cart')}}" class="col-md-1 col-md-offset-2 col-xs-offset-0 col-xs-12 h4">Cart <i class="fas fa-shopping-cart"></i>({{$quantity}})</a>

                    <a class="col-md-1 col-xs-12 h4" href="{{asset('logout')}}">Log out</a>
                @endguest
                @if(1 == Auth::user()["admin"])
                    <a class="col-md-1 col-xs-12 h4" href="{{asset('admin')}}">Administration</a>
                @endif
            </div>
        </header>