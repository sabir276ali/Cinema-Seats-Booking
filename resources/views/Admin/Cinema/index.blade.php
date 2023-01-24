@extends('layouts.admin')
@section('content')

                        <div class="row">
                            <div class="col-lg-12">
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
                                <h2 class="title-1 m-b-25">Cinemas List</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th class="text-right">Locations</th>
                                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                       @foreach($cinema as $bg)     
                                        <tr>        
                                        <td>{{$bg->name}}</td>
                                        <td><p maxlength="20" style="width:400px;overflow:hidden;">{{$bg->description}}</p></td>
                                        <td class="text-right" >{{$bg->address}}</td>
                                    
                                        </tr> 
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
        
@endsection