@extends('layouts.app')

@section('title')

    <title>Dòng xe</title>

@endsection

@section('main')       
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Danh sách dòng xe</h4>
                <p class="category">Đây là danh sách tất cả dòng xe của hệ thống</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Created</th>
                        <th>Loại</th>
                        <th>Ảnh</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    @if($verhicles->count() > 0)
                        @foreach($verhicles as $verhicle)
                            <tr>
                                <td>
                                    <a href="/dong-xe/{{ $verhicle->id }}">
                                        {{ $verhicle->id }}
                                    </a>
                                </td>
                                <td>
                                    {{ $verhicle->name }} {{ $verhicle->year }}
                                </td>  
                                <td>
                                    {{ $verhicle->created_at }}
                                </td> 
                                <td>
                                    {{ $verhicle->category }}
                                </td>                  
                                <td>
                                    <img src="{{ $verhicle->showImage($verhicle, $thumbnailPath) }}" width="35">
                                </td> 
                                <td>                                   
                                    <a href="/dong-xe/edit" class="btn btn-small btn-warning btn-fill">                
                                        <i class="ti-reload" aria-hidden="true"></i> Sửa
                                    </a>                                                       
                                </td>
                                <td>
                                    <form class="form" role="form" method="POST" action="{{ url('/dong-xe/'. $verhicle->id) }}">
                                        <input type="hidden" name="_method" value="delete">
                                        {{ csrf_field() }}

                                        <button class="btn btn-danger btn-small btn-fill" Onclick="return ConfirmDelete();" type="submit">
                                            <i class="ti-na" aria-hidden="true"></i> Xóa
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                     @else
                        <div class="alert alert-danger">
                            <span>Xin lỗi, </span> không tìm thấy dữ liệu nào về dòng xe
                        </div>                       
                    @endif
                </table>
            </div>
        </div>
        <div> 
            <a href="/dong-xe/create" class="btn btn-success">                
                <i class="fa fa-plus-circle" aria-hidden="true"></i>  Tạo mới
            </a>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        function ConfirmDelete() {
            var x = confirm("Are you sure you want to delete?");            
            if (x){            
                return true;                
            } else {            
                return false;            
            }                
        }
    </script>
@endsection