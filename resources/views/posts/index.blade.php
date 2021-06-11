@extends('layouts.app')

@section('content')
    <h2>Posts</h2>
    @if(count($posts) > 0)
        @foreach ($posts as $post)

            <div class="well">
                <div class="row">
                    
                    <div class="col-md-2 col-sm-2">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>

                    <div class="col-md-3 col-sm-3">
                        <h3> <a href="/posts/{{$post->id}}">{{$post->title}}</a> </h3>
                        <small><em>Written on <strong>{{$post->created_at}}</strong> by <strong>{{$post->user->name}}</strong></em></small>
                    </div>

                </div>
            </div>
        
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
@endsection