@extends('layouts.app')


@section('content')

<div class="container">
sss
{!! Form::open(['method'=>'POST', 'action'=> 'AdminContactController@store','files'=>true]) !!}
            <!-- Form Name -->
            <legend>Επικοινωνήστε μαζί μας</legend>

            <!-- Text input-->

            <div class="form-group col-md-7">

                    {!! Form::label('name', 'Όνομα:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control','rows'=>3])!!}
            </div>

            <!-- Text input-->

            <div class="form-group col-md-7">
                        {!! Form::label('surname', 'Επίθετο:') !!}
                        {!! Form::text('surname', null, ['class'=>'form-control'])!!}

            </div>

            <!-- Text input-->
            <div class="form-group col-md-7">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::text('email', null, ['class'=>'form-control'])!!}
            </div>


            <!-- Text input-->

            <div class="form-group col-md-7">
                        {!! Form::label('mobile', 'Κινητό:') !!}
                        {!! Form::text('mobile', null, ['class'=>'form-control'])!!}
            </div>

    <div class="form-group col-md-7">
        {!! Form::label('message', 'Μήνυμα:') !!}
        {!! Form::text('message', null, ['class'=>'form-control'])!!}
    </div>




            <!-- Success message -->
            <div class="alert alert-success col-md-12" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

            <div class="form-group col-md-12">

                {!! Form::submit('Αποστολή', ['class'=>'btn btn-primary sub-pressed']) !!}

            </div>

            {!! Form::close() !!}







</div>
<div class="row">

    @include('includes.form_error')


</div>


</div><!-- /.container -->




@stop