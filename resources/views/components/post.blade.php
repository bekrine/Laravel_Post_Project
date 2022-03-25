 @props(['post'=>$post])

 <div class="mainDiv">
     <div class="title">

         <a href="{{route('user.posts',$post->user)}}">{{$post->user->name}}</a>
         <h2>{{$post->created_at->diffForHumans()}}</h2>
     </div>
     <div id="body">

         <p>{{$post->body}}</p>
     </div>
     @auth
     <div class="newpost">
         @can('delete',$post)
         <div>

             <form style=" margin-left: 5px;" action="{{route('posts.destroy',$post)}}" method="POST">
                 @csrf
                 @method('DELETE')
                 <button type="submit">delete</button>
             </form>
         </div>
         @endcan
         <div style="display: flex;justify-content: space-between">
             @if(!$post->likedby(auth()->user()))
             <form action="{{route('posts.like',$post->id)}}" method="POST">
                 @csrf
                 <button type="submit">Like</button>
             </form>
             @else
             <form style="margin-left: 5px;" action="{{route('posts.like',$post->id)}}" method="POST">
                 @csrf
                 @method('DELETE')
                 <button type="submit">unLike</button>
             </form>
             @endif
             @endauth
             <p style="margin-left: 5px;">
                 {{$post->likes->count()}} {{Str::plural('like',$post->likes->count())}}
             </p>
         </div>
     </div>
 </div>