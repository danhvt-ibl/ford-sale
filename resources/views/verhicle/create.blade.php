@extends('layouts.app')

@section('title')

    <title>Khởi tạo Dòng xe</title>

@endsection
@section('main')
    <form class="form-horizontal" role="form" method="POST"
            action="{{ url('/dong-xe') }}"
            enctype="multipart/form-data">
    
            {{ csrf_field() }}
        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="control-label col-sm-2">Tên dòng xe</label>
            <div class="col-sm-10">
                <input type="text" class="form-control border-input" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))

                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group {{ $errors->has('year') ? ' has-error' : '' }}">
            <label class="control-label col-sm-2">Năm sản xuất</label>
            <div class="col-sm-10">
                <input type="number" class="form-control border-input" name="year" value="{{date('Y')}}">
                @if ($errors->has('year'))

                    <span class="help-block">
                    <strong>{{ $errors->first('year') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
            <label class="control-label col-sm-2">Phân loại</label>
            <div class="col-sm-10">
                <select class="form-control border-input" id="category" name="category">
                    <option>Please Choose One</option>
                    <option value="PICKUP">PICKUP</option>
                    <option value="SUV">SUV</option>
                    <option value="COUPE">COUPE</option>
                    <option value="SEDAN">SEDAN</option>
                    <option value="HATBACK">HATBACK</option>
                </select>    
                @if ($errors->has('is_active'))

                    <span class="help-block">
                    <strong>{{ $errors->first('is_active') }}</strong>
                    </span>

                @endif
            </div>    
        </div>
         <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label class="control-label col-sm-2">Hình ảnh</label>
            <div class="col-sm-10">
                <input type="file" name="image" id="image">
                @if ($errors->has('image'))    
                    <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>        
                @endif
            </div>            
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">
                    <i class="ti-plus"></i> Thêm vào dữ liệu
                </button>
            </div>
        </div>
    </form>
@endsection