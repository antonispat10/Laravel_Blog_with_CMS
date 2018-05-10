@extends('layouts.app2')

@section('content')
<div class="col-lg-9">

    @foreach($posts as $index => $post)
        <?php if ($index > 2 ) { ?>
        <div class="lll col-lg-4">
            <div class="col-lg-12">
                <div class="col-lg-12">
                <!-- Preview Image -->
                <a href="{{route('home.post', $post->slug)}}">  <img class="img-responsive pic-index"  src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}" alt=""> </a>
                </div>
                <hr>
                <div class="col-lg-12">

                    <h4 style="font-size:17px;"> <a href="{{route('home.post', $post->slug)}}"><?php echo str_limit($post->title,40)?> </a></h4>
                </div>
                <!-- Author -->
                <div class="col-lg-12">

                    <p class="lead" style="font-size:16px;">
                        by <a href="{{route('home.post', $post->slug)}}">{{$post->user ? $post->user->name : "no user" }}</a>
                    </p>
                </div>
                <hr>
                <div class="col-lg-12">

                    <!-- Date/Time -->
                    <p><span class="glyphicon glyphicon-time"></span>Posted {{$post->created_at->diffForHumans()}}</p>
                </div>
                <hr>

                <div class="col-lg-12">


                    <!-- Post Content -->
                    <p><?php echo str_limit($post->body,1100) ?></p>
                    <hr>
                </div>
            </div>
        </div>
        <?php } ?>

    @endforeach



    </div>
@endsection






