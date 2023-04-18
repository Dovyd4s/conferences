<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if(session('status'))
        <div style="background-color: green; color: lime;">{{session('status')}}</div>
    @endif
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="/">{{__('all.page title')}}</a>
        <div class="login-buttons">
            @guest
                <a href="{{route('register')}}">{{__('all.register')}}</a>
                <a href="{{route('login')}}">{{__('all.login')}}</a>
            @else
                <a href="{{ route('logout') }}" id="logout-link" class="link-danger">{{__('all.logout')}}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </div>

    </nav>

</header>
<body>
<div>
    @yield('content')
</div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
