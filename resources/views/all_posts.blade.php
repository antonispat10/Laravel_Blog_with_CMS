@extends('layouts.app2')

@section('content')



    <div class="first-body col-lg-9">




    <div class="panel-body">


        @if($posts)

            @foreach($posts as $post)

                <h1>{{$post->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">{{$post->user->name}}</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span>Posted {{$post->created_at->diffForHumans()}}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" height="200" src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}" alt="">

                <hr>

                <!-- Post Content -->
                <p>{{$post->body}}</p>
                <hr>


        </div>



    @endforeach

    @endif



@endsection


    </div>



@section('sidebar')
    <br> <br>

    @endsection
