@extends('layouts.app')

@section('title')

    <title>Profile</title>

@endsection

@section('main')
@if(Auth::user()->isAdmin())
    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='/profile'>Profiles</a></li>
        <li><a href='/profile/create'></a>Create</li>
    </ol>

@else

<ol class='breadcrumb'>
    <li><a href='/'>Home</a></li>
    <li><a href='/profile/create'></a>Create</li>
</ol>

@endif    

<div class="row">
    <div class="col-lg-4 col-md-5">
        <div class="card card-user">
            <div class="image">
                <img src="/images/background.jpg" alt="..."/>
            </div>
            <div class="content">
                <div class="author">
                    <img class="avatar border-white" src="{{ Gravatar::get(Auth::user()->email)  }}">
                    <h4 class="title">{{ $profile->fullName() }}<br />
                        <a href="#">
                            @if(Auth::user()->isAdmin())
                            <small>@Amin</small>
                            @else if
                            <small>@Normal</small>
                            @endif
                        </a>
                    </h4>
                </div>
                <p class="description text-center">
                    "I like the way you work it <br>
                    No diggity <br>
                    I wanna bag it up"
                </p>
            </div>
            <hr>
            <div class="text-center">
                <div class="row">
                    <div class="col-md-3 col-md-offset-1">
                        <h5>12<br /><small>Files</small></h5>
                    </div>
                    <div class="col-md-4">
                        <h5>2GB<br /><small>Used</small></h5>
                    </div>
                    <div class="col-md-3">
                        <h5>24,6$<br /><small>Spent</small></h5>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-lg-8 col-md-7">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edit Profile</h4>
                </div>
                <div class="content">
                    <form>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Tên người dùng</label>
                                    <input type="text" class="form-control border-input" placeholder="Username" value="{{ $profile->fullName() }}">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ email </label>
                                    <input type="email" class="form-control border-input" placeholder="Email" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Họ</label>
                                    <input type="text" class="form-control border-input" placeholder="Company" value="{{ $profile->first_name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" class="form-control border-input" placeholder="Last Name" value="{{ $profile->last_name }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control border-input" placeholder="Home Address" value="{{ $profile->address }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ngày sinh</label>
                                    <input type="text" class="form-control border-input" placeholder="Ngày sinh của bạn" value="{{ $profile->birthdate }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Giới tính</label>
                                    <input type="text" class="form-control border-input" placeholder="Country" value="{{ $profile->gender }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ngày đăng ký</label>
                                    <input type="number" class="form-control border-input" placeholder="{{ $profile->created_at }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>About Me</label>
                                    <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike">
                                            {{ $profile->aboutme }}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
</div>

<div class="panel panel-default">
    <!-- Table -->
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Birthdate</th>
            @if(Auth::user()->adminOrCurrentUserOwns($profile))
            <th>Edit</th>
            @endif
            <th>Delete</th>    
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>{{ $profile->id }} </td>
            <td> <a href="/profile/{{ $profile->id }}/edit">
                    {{ $profile->fullName() }}</a></td>
            <td>{{ $profile->showGender($profile->gender) }}</td>
            <td>{{ $profile->birthdate->format('m-d-Y') }}</td>    
            @if(Auth::user()->adminOrCurrentUserOwns($profile))    
            <td> <a href="/profile/{{ $profile->id }}/edit">    
                    <button type="button" class="btn btn-default">Edit</button></a>                                
            </td>    
            @endif    
            <td>
                <div class="form-group">    
                    <form class="form" role="form" method="POST" action="{{ url('/profile/'. $profile->id) }}">
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
        return x;
    }        
</script>
    
@endsection