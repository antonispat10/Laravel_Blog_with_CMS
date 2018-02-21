@extends('layouts.app2')

@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}" />

    <div class="first-body col-md-9">
        <div class="panel">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <?php $i=0; ?>




            <!-- Indicators -->
                <ol class="carousel-indicators">


                    @foreach($posts as $index => $post)

                        <?php if ($index < 2) { ?>

                        <li data-target="#myCarousel" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>

                    <?php } ?>

                    @endforeach

                </ol>

                <?php
                $x = 0;
                ?>





                <div class="carousel-inner">
                    @foreach($postz as $index => $post)

                        <?php if ($index < 2) { ?>
                        <div class="{{ $index == 0 ? 'active item' : 'item' }} ">

                            <img style="height:350px; width:100%;"  src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400' }}">

                            <div class="carousel-caption">
                                <h3><a href="{{route('home.post',$post->slug)}}">{{$post->title}}</a></h3>
                            </div>

                        </div>

                            <?php } ?>

                        <br>
                    @endforeach
                </div>




                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>




            <div class="panel-body">

                </br>
                </br>
                </br>





                        <div class="ll">
                        @foreach($posts as $index => $post)
                                <?php if ($index > -1 ) { ?>
                            <div class="lll col-md-4">

                        <h1>{{$post->title}}</h1>

                        <!-- Author -->
                        <p class="lead">
                            by <a href="{{route('home.post', $post->slug)}}">{{$post->user ? $post->user->name : "no user" }}</a>
                        </p>

                        <hr>

                        <!-- Date/Time -->
                        <p><span class="glyphicon glyphicon-time"></span>Posted {{$post->created_at->diffForHumans()}}</p>

                        <hr>

                        <!-- Preview Image -->
                        <img class="img-responsive pic-index"  src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}" alt="">

                        <hr>

                        <!-- Post Content -->
                        <p>{{$post->body}}</p>
                        <hr>

                            </div>

                            <?php } ?>

                            @endforeach



            </div>








            </div>
<div class="text-center">
 {{$posts->links()}}

</div>

            <button type="button" class="btn btn-warning" id="getRequest">getRequest</button>

            <div class="row col-lg-5">

                <h2>dsadasdasdsa</h2>
                <form action="" id="register">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label for="firstname"></label>
                    <input type="text" id="firstname" class="form-control">

                    <label for="lastname"></label>
                    <input type="text" id="lastname" class="form-control">

                    <input type="submit" value="Register" class="btn btn-primary">

                </form>

            </div>


            <div id="getRequestData"> </div>

            <div id="postRequestData"> </div>



        </div>
    </div>
    </div>


    <script src="{{asset('js/jq.js') }}"></script>
@endsection





