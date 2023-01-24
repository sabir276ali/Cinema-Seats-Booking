@extends('layouts.admin')
@section('content')
<div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                </div>
            @endif 
            @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
            @endif
    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="branch" name="branch" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="address">Password</label>
                        <input type="password" class="form-control" id="address" name="password" placeholder="Address">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="address">Confirm Password</label>
                        <input type="password" class="form-control" id="address" name="c_password" placeholder="Address">
                    </div>
            </div>
            <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="role">Role</label>
                       <select name="role"  class="form-control" id="role">
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                       </select>
                    </div>
            </div>
            
            <button type="submit" class="btn btn-primary col-3">Create</button>
        </form>
</div>
@endsection