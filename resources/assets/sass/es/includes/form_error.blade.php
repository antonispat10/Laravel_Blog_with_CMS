@if(count($errors) > 0 )

    <div class="alert alert-danger">

        <ul>
            {{--@foreach($errors->all() as $error)--}}
                {{--<li>{{$error}}</li>--}}

            {{--@endforeach--}}
            <li>Παρακαλούμε συμπληρώστε σωστά τα πεδία </li>
        </ul>

    </div>
@endif