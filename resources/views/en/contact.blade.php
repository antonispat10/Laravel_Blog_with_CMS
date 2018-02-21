@extends('layouts.app2')


@section('content')

<div class="container">
sss
{!! Form::open(['method'=>'POST', 'action'=> 'AdminContactController@store','files'=>true]) !!}
            <!-- Form Name -->
            <legend>Επικοινωνήστε μαζί μας</legend>

            <!-- Text input-->

            <div class="form-group">

                    {!! Form::label('name', 'Όνομα:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>

            <!-- Text input-->

            <div class="form-group">
                        {!! Form::label('surname', 'Επίθετο:') !!}
                        {!! Form::text('surname', null, ['class'=>'form-control'])!!}

            </div>

            <!-- Text input-->
            <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::text('email', null, ['class'=>'form-control'])!!}
            </div>


            <!-- Text input-->

            <div class="form-group">
                        {!! Form::label('mobile', 'Κινητό:') !!}
                        {!! Form::text('mobile', null, ['class'=>'form-control'])!!}
            </div>




            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

            <div class="form-group">

                {!! Form::submit('Αποστολή', ['class'=>'btn btn-primary sub-pressed']) !!}

            </div>

            {!! Form::close() !!}




    <div class="row">

        @include('includes.form_error')


    </div>


</div>
</div><!-- /.container -->




@stop