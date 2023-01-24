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
                                <h2 class="title-1 m-b-25">Movies List</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Genre</th>
                                                <th class="text-right">Releasing Year</th>
                                                <th class="text-right">Country</th>
                                                <th class="text-right">Link</th>
                                                <th class="text-right">Duration</th>
                                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                       @foreach($movies as $bg)     
                                        <tr>        
                                        <td>{{$bg->title}}</td>
                                        <td>{{$bg->genre}}</td>
                                        <td class="text-right">{{$bg->year}}</td>
                                        <td class="text-right">{{$bg->country}}</td>    
                                          
                                        <td class="text-right">{{$bg->total_minutes}}</td>    
                                        </tr> 
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@endsection