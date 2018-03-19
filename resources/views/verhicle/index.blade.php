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
    
            @foreach($verhicles as $verhicle)
                <tr>
                    <td><a href="/dong-xe/{{ $verhicle->id }}">
                    <img src="{{ $verhicle->showImage($verhicle, $thumbnailPath) }}">
                    </a></td>
                    <td><a href="/marketing-image/{{ $verhicle->id }}">
                        {{ $verhicle->name }}</a></td>                    
                    </td>
                    <td>{{ $verhicle->created_at }}</td>
                </tr>
            @endforeach

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