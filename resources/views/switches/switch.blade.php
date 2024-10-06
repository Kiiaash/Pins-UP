<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name')}}</title>
    <link href="../../css/main.css" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
   <header>
        <nav class="navbar">
            <ul>
                <li><img src="{{asset('images/logo 2 white.png')}}" width="80" height="80"></li>
                <li><a href="{{ asset('/home') }}">Home</a></li>
                <li><a href="{{ asset('/terms') }}">Terms</a></li>
                <li><a href="{{ asset('/setting') }}">Setting</a></li>
            </ul>
            @auth
            <div class="userprofile">
                <ul>
                    <li class="creat-post"><a href="{{ asset('/create') }}">Create a post</a></li>
                    <li class="profile"><a href="{{ route('profile.show') }}" class="text-center">{{ Auth::user()->email }}</a></li> 
                    <form action="{{ route('session.destroy') }}" method="POST">
                        @csrf
                        <button class="log-out" type="submit">Log out</button>
                    </form>
                </ul>
            </div>
            @endauth
            @guest
            <div class="userprofile-small">
                <ul>
                    <li class="profile-guest"><a href="{{ asset('/login') }}">Login</a></li>
                    <li class="profile-guest"><a href="{{ asset('/register') }}">Register</a></li>
                </ul>
            </div>
            @endguest
        </nav>
   </header>
   <main>
        @include('switches.messege-alert')
        @yield('mainbody')
   </main>
</body>
</html>