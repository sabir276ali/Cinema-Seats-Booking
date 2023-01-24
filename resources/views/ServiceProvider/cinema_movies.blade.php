@extends('..layouts.service')
@section('content')
 <!-- BREADCRUMB-->
 <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Plying Movies</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">List</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Movies List</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i> <a href="{{ route('cinema_movie.create') }}">Add Movies To List</a>
                                    </button>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>id</th>
                                            <th>cinema id</th>
                                            <th>movies_id</th>
                                            <th>date</th>
                                            <th>time</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cinema_movie as $c_m)
                                    <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>{{  $c_m->id }}</td>  
                                            <td>{{  $c_m->cinema_id }}</td>  
                                            <td>{{  $c_m->movie_id }}</td>  
                                            <td>{{  $c_m->date }}</td>                  
                                            <td>{{  $c_m->time }}</td>                                  
                                     
                                        
                                            <!-- <td>
                                                <div class="table-data-feature">
                                                     <form action="{{ route('movie.destroy',$c_m->id) }}" method="POST">

                                                    
                                                    <a class="btn btn-info" href="{{ route('movie.show',$c_m->id) }}">
                                                        Show
                                                    </a>
                                                  
                                                     <a class="btn btn-primary" href="{{ route('movie.edit',$c_m->id) }}">
                                                          <i class="zmdi zmdi-edit"></i>
                                                    </a> 
                                                    

                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="item" type="submit" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>

                                                  </form>
                                                </div>                               
                                            </td> -->

                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>  
                            
                        </div>
                    </div>
                </div>
            </section>


@endsection