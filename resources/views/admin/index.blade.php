@extends('layouts.master')
@section('title')
    <title>The Admin Page</title>
@endsection
@section('main')
    <div class="container">
        <div class="page-header">
            <h1>Admin Dashboard</h1>
        </div>
        <user-chart></user-chart>
        @include('admin.grid')
    </div>
    
@endsection