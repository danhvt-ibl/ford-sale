@extends('layouts.master')

@section('title')

    <title>Edit Widget</title>

@endsection

@section('main')


    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/car'>Widgets</a></li>
        <li><a href='/car/{{$car->id}}'>{{$car->name}}</a></li>
        <li class='active'>Edit</li>
    </ol>

    <h1>Edit Widget</h1>

    <hr/>


    <form class="form" role="form" method="POST" action="{{ url('/car/'. $car->id) }}">
        
        {{ method_field('PATCH') }}
    
        {{ csrf_field() }}

    <!-- widget_name Form Input -->
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="control-label">car Name</label>

            <input type="text" class="form-control" name="name" value="{{ $car->name }}">

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">
                Edit
            </button>
        </div>

    </form>


@endsection