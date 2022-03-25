@extends('layout.app')

@section('content')
<div class="posts">
    <div class="post">
        @auth
        <form id="contact" action="{{route('posts')}}" method="POST">
            @csrf
            <fieldset>
                <textarea name="body" id="body" cols="30" rows="4" placeholder="your poste" value="" class="textear"></textarea>

            </fieldset>

            @error('password')
            <div class="error">
                {{$message}}
            </div>
            @enderror
            <fieldset>

                <button id="contact-submit" type="submit">Post</button>
            </fieldset>
        </form>
        @endauth
        <div>
            @if($posts->count())
            @foreach($posts as $post)
            <x-post :post='$post' />
            @endforeach
            {{$posts->links()}}
            @else
            <p>no post finde</p>
            @endif
        </div>
    </div>
</div>
@endsection