@extends('layouts.app')

@section('title')

    <title>Profiles</title>

@endsection

@section('main')     
    
<h2>Profiles</h2>    
<hr/>    
@if($profiles->count() > 0)

    <table class="table table-hover table-bordered table-striped">

        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Birthdate</th>
        </thead>
        <tbody>
        @foreach($profiles as $profile)
            <tr>
                <td>{{ $profile->id }}</td>
                <td><a href="/profile/{{ $profile->id }}">{{ $profile->fullName() }}</a></td>
                <td>{{ $profile->showGender($profile->gender) }}</td>
                <td>{{ $profile->birthdate->format('m-d-Y') }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <div>Sorry, no profiles</div>
    <a class="btn btn-success" href="/profile/create">Add profile</a>
@endif
{{ $profiles->links() }}
    
    
@endsection