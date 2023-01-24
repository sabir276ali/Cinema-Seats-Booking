@extends('..layouts.service')
@section('content')
<section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Movies Playing</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Create</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
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
            <!-- DATA TABLE-->
            <section class="p-t-15">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive table-responsive-data2">
                                <div class="col-md-12 col-lg-12">
                                    <h3 class="title-5 m-b-35">Create Cinemas</h3>
                                    <form class="needs-validation" action="{{ route('cinema_movie.store') }}" method="Post" enctype="multipart/form-data">
                                     @csrf
                                    <div class="row lg-3">
                                      <div class="col-sm-12">
                                          <label for="firstName" class="form-label">Cinema</label>
                                          <select name="cinema_id" class="form-control" id="cinema_id">
                                            @foreach($cinema as $c)
                                            <option value="{{$c->id}}">{{$c->name}}</option>
                                            @endforeach
                                          </select>
                                          <div class="invalid-feedback">
                                            Valid Movie.
                                          </div>
                                        </div>     
                                    
                                        <div class="col-sm-12">
                                          <label for="movie" class="form-label">Movie</label>
                                          <select name="movie_id" class="form-control" id="movie_id">
                                            @foreach($movie as $m)
                                            <option value="{{$m->id}}">{{$m->title}}</option>
                                            @endforeach
                                          </select>
                                          <div class="invalid-feedback">
                                            Valid Movie.
                                          </div>
                                        </div>   
                                        <div class="col-sm-12">
                                          <label for="date" class="form-label">Date</label>
                                          <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="" required>
                                          <div class="invalid-feedback">
                                            Valid rating.
                                          </div>
                                        </div>   

                                        <div class="col-sm-12">
                                          <label for="time" class="form-label">Time</label>
                                          <input type="time" class="form-control" id="time" name="time" placeholder="Time" value="" required>
                                          <div class="invalid-feedback">
                                            Valid rating.
                                          </div>
                                        </div>   
                                    
                                    <br>
                            
                               
                                      <hr class="my-4">
                            
                                      <button class="w-100 btn btn-primary btn-lg mt-5" type="submit">Create</button>
                                    </form>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
@endsection