@extends('layouts.master')

@section('title')

    <title>Cars</title>

    @endsection

@section('main')
<div class="container">
        <ol class='breadcrumb'>
                <li><a href='/'>Home</a></li>
                <li class='active'>Cars</li>
            </ol>
            
            <h2>Cars</h2>
            
            <hr/>
            
            @if($cars->count() > 0)
            
                <table class="table table-hover table-bordered table-striped">
            
                    <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Date Created</th>
                    </thead>
            
                    <tbody>
            
                    @foreach($cars as $car)
            
                        <tr>
                            <td>{{ $car->id }}</td>
                            <td><a href="/car/{{ $car->id }}-{{ $car->slug }}">{{ $car->name }}</a></td>
                            <td>{{ $car->created_at }}</td>
                        </tr>
            
                        @endforeach
            
                    </tbody>
            
                </table>
            
            @else
            
            Sorry, no Widgets
            
            @endif
            {{ $cars->links() }}
            <div> <a href="/car/create">
                <button type="button" class="btn btn-lg btn-primary">
                    Create New
                </button></a>
            </div>
</div>

@endsection