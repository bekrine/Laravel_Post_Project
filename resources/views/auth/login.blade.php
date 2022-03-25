@extends('layout.app')


@section('content')
<div class="posts">
    <div class="container">
        @if(session('status'))
        {{session('status')}}
        @endif
        <form id="contact" action="{{route('login')}}" method="POST">
            @csrf
            <h3>Login</h3>
            <fieldset>

                <input type="text" name="email" id="email" placeholder="your email" value="{{old('email')}}" class="inputs">
            </fieldset>

            @error('email')
            <div class="error">
                {{$message}}
            </div>
            @enderror
            <fieldset>

                <input type='password' name="password" id="password" placeholder="your password" value="" class="inputs">
            </fieldset>
            @error('password')
            <div class="error">
                {{$message}}
            </div>
            @enderror
            <fieldset>

                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>

            </fieldset>
            <fieldset>

                <button class="btn" type="submit">Login</button>
            </fieldset>
        </form>
    </div>
</div>
@endsection