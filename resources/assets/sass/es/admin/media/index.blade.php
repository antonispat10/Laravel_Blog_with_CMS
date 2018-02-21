@extends('layouts.admin')

@section('content')


    <h1> Media </h1>

    @if($photos)

        <form action="delete/media" method="post" class="form-inline">

            {{csrf_field()}}

            {{method_field('delete')}}

            <div class="form-group">
                <select name="checkBoxArray" id="" class="er form-inline col-sm-2 ">

                    <option value="">Delete</option>

                </select>

            </div>
            <div class="form-group">
                <input type="submit" name="delete_all" value="Delete" class="btn btn-danger">
            </div>




    <table class="table table-striped">
        <thead>
        <tr>
            <th><input type="checkbox" id="options" class="sas"></th>
            <th>Id</th>
            <th>Name</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>

        @foreach($photos as $photo)
        <tr>

            <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>

            <td><img height="50" src="{{$photo->file ? $photo->file : 'no photos'}}"></td>
            <td>{{$photo->created_at ? $photo->created_at : 'no date' }}</td>

            <td>


                <input type="hidden" name="photo" value="{{$photo->id}}">

            <div class="form-group">

                <input type="submit" name="delete_single" value="Delete" class="btn btn-danger">

            </div>



            </td>

        </tr>

            @endforeach

        </tbody>
    </table>

        </form>

    @endif




@stop

@section('scripts')

    <script>

        $(document).ready(function(){



            $('#options').click(function(){

               if(this.checked){

                   $('.checkBoxes').each(function(){

                       this.checked = true;

                   });
               }else {

                   this.checked = false;

               }

            });

        });
console.log('ss');





    </script>


    @stop

