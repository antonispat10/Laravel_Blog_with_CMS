@extends('layouts.app')


@section('content')

    <div class="container">




            <h1 class="text-center">Αποτελέσματα αναζήτησης</h1>
    <br>
        <br>




<?php if($post !="1700") {  ?>


@foreach($post as $p)
ss
        <div class="form-group">
            <h2><a href="{{route('show.search',$p->id)}}" >


                    <img height="50" width="200" src="{{$p->photo ? $p->photo->file : 'http://placehold.it/400x400' }}">
                    {{$p->title}}
                    {{ str_limit($p->body, 5) }}



                </a> </h2>




    </div>
        @endforeach

    <?php } ?>



    </div><!-- /.container -->





@stop