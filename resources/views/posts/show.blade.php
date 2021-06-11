@extends('layouts.app')

@section('content')

    @if(!Auth::guest())
        @if(Auth::user()->id == $Mall->user_id)
            <a href="/posts/{{$Mall->id}}/edit" class="btn btn-primary" style="float: right">Edit</a>
        @endif
    @endif

    <div class="col-md-3 col-sm-3">
        <img style="width:100%" src="/storage/cover_images/{{$Mall->cover_image}}">
    </div>
    <br><br>

    <h2 style="text-align: center">{!!$Mall->title!!}</h2>   {{-- Mall from PostsController --}}
    <div class="jumbotron text-center">
        <p>{!!$Mall->body!!}</p>
    </div>
    <small><em>Written on <strong>{{$Mall->created_at}}</strong> by <strong>{{$Mall->user->name}}</strong></em></small>
    <br><a href="/posts" class="btn btn-success">Go Back</a>

    {{-- {!!Form::open(['action' => ['PostsControll@destroy', $post->id], 'method'=>'POST', 'class'=])!!}
    {!!Form::closed()!!} --}}

    @if(!Auth::guest())
        @if(Auth::user()->id == $Mall->user_id)
            {!!Form::open(['action'=>['PostsController@destroy', $Mall->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif

@endsection