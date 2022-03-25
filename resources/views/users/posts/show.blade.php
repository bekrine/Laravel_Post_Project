@extends('layout.app')


@section('content')
<div class="posts">
    <div class="post">
        <x-post :post='$post' />
    </div>
</div>
@endsection