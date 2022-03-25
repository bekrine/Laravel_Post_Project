<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>

<body>
    <nav id="navbar">

        <div class="nav-wrapper">
            <div class="logo ">


                <a href="{{route('home')}}">Home</a>

                <ul id="menu">
                    <li>

                        <a href="{{route('dashbord')}}">Dashbord</a>
                    </li>
                    <li>

                        <a href="{{route('posts')}}">Post</a>
                    </li>
                </ul>


            </div>

            <div>
                @auth
                <ul id="menu">
                    <li>
                        <a href="">{{auth()->user()->name}}</a>
                    </li>

                    <li>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf

                            <button type="submit">Logout</button>
                        </form>
                    </li>
                </ul>




                @endauth
                @guest
                <ul id="menu">
                    <li>
                        <a href="{{route('login')}}">Login</a>
                    </li>
                    <li>

                        <a href="{{route('register')}}">Register</a>
                    </li>
                </ul>



                @endguest
            </div>

        </div>
    </nav>
    @yield('content')
</body>

</html>