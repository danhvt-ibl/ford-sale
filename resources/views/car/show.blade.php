@extends('layouts.master')

@section('title')

    <title>{{ $car->name }} Widget</title>

@endsection

@section('main')

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/car'>Cars</a></li>
        <li><a href='/car/{{ $car->id }}'>{{ $car->name }}</a></li>
    </ol>

    <h1>{{ $car->name }}</h1>

    <hr/>

    <div class="panel panel-default">

        <!-- Table -->
        <table class="table table-striped">

            <thead>
            <tr>

                <th>Id</th>
                <th>Name</th>
                <th>Date Created</th>
                @if(Auth::user()->adminOrCurrentUserOwns($car))
                <th>Edit</th>
                @endif
                <th>Delete</th>

            </tr>
            </thead>
            <tbody>

            <tr>
                <td>{{ $car->id }} </td>
                <td> <a href="/car/{{ $car->id }}/edit">
                        {{ $car->name }}</a></td>
                <td>{{ $car->created_at }}</td>
                @if(Auth::user()->adminOrCurrentUserOwns($car))
                <td> 
                    <a href="/car/{{ $car->id }}/edit">
                        <button type="button" class="btn btn-default">Edit</button>
                    </a>
                </td>
                @endif
                <td>

                    <div class="form-group">

                        <form class="form" role="form" method="POST" action="{{ url('/car/'. $car->id) }}">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}

                            <input class="btn btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

                        </form>
                    </div>
                </td>

            </tr>
            </tbody>

        </table>


    </div>

@endsection
@section('scripts')
    <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x){
                return true;
            } else {
                return false;
            }
        }
    </script>
@endsection