@extends('layout.app')


@section('content')
<div class="posts">
    <div>
        <h1>{{$user->name}}</h1>
        <p>Posted {{$posts->count()}} {{Str::plural('post',$posts->count())}} and resived {{$user->hasmanyliked->count()}} likes</p>
    </div>
    <div class="post">
        @if($posts->count())
        @foreach($posts as $post)
        <x-post :post='$post' />
        @endforeach
        {{$posts->links()}}
        @else
        <p>{{$user->usernam}} have no posts</p>
        @endif
    </div>
</div>
@endsection