@extends('layout.app')


@section('content')
<div class="posts">
    <div class="container">
        <form id="contact" action="{{route('register')}}" method="POST">
            @csrf
            <h3>Register </h3>
            <h4>and Post with your friends</h4>

            <fieldset>
                <input type="text" name="name" id="name" placeholder="your name" value="{{old('name')}}" class="inputs">
            </fieldset>

            @error('name')
            <div class="error">
                {{$message}}
            </div>
            @enderror

            <fieldset>

                <input type="text" name="username" id="username" placeholder="your username" value="{{old('username')}}" class="inputs">
            </fieldset>

            @error('username')
            <div class="error">
                {{$message}}
            </div>
            @enderror
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

                <input type='password' name="password_confirmation" id="password_confirmation" placeholder="repet your password" value="">
            </fieldset>

            <fieldset>

                <button id="contact-submit" type="submit">Register</button>
            </fieldset>


        </form>
    </div>
</div>
@endsection