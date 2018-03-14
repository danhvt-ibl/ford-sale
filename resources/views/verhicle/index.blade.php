@extends('layouts.app')

@section('title')

    <title>Dòng xe</title>

@endsection

@section('main')       
<h2>Tất cả dòng xe</h2>
<hr/>
<div class="verhicle-wrap mb-50">
@if($verhicles->count() > 0)
    
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Date Created</th>
        </thead>

        <tbody>
    
        {{--  @foreach($cars as $car)

            <tr>
                <td>{{ $car->id }}</td>
                <td><a href="/car/{{ $car->id }}-{{ $car->slug }}">{{ $car->name }}</a></td>
                <td>{{ $car->created_at }}</td>
            </tr>

            @endforeach  --}}

        </tbody>

    </table>
    
    @else

    <div class="alert alert-danger">
        <span>Xin lỗi, </span> không tìm thấy dữ liệu nào về dòng xe
    </div>
    
    
    
    @endif
    {{--  {{ $cars->links() }}  --}}
    <div> 
        <a href="/dong-xe/create">
            <button type="button" class="btn btn-success">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>  Tạo mới
            </button>
        </a>
    </div>
</div>

@endsection