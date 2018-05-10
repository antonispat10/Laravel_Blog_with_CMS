@extends('layouts.app2')


@section('content')

    <div class="container">



            <h1 class="text-center">Search Results</h1>
    <br>
        <br>




<?php if($post !="1700") {  ?>


@foreach($post as $p)

        <div class="form-group">
            <a href="{{route('show.search',$p->id)}}" ><img height="100" width="200" src="{{$p->photo ? $p->photo->file : 'http://placehold.it/400x400' }}">
                <h3>{{$p->title}}</h3>  </a>



                    <?php echo str_limit($p->body, 70)?>








    </div>
        @endforeach

    <?php } ?>



    </div><!-- /.container -->





@stop