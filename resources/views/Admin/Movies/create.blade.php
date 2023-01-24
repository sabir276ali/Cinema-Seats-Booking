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
    <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="image">
                </div>
                <div class="form-group col-md-4">
                    <label for="name">Project</label>
                    <input type="text" class="form-control" id="project" name="project" placeholder="Name">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">City</label>
                    <input type="text" class="form-control" id="inputEmail4" name="city" placeholder="City">
                </div>
            </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                    </div>
            </div>
            
            <button type="submit" class="btn btn-primary col-3">Create</button>
        </form>
</div>
@endsection