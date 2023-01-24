@extends('../layouts.service')
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
                                            <a href="#">Movies</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Edit</li>
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
                                    <h3 class="title-5 m-b-35">Update Movies</h3>
                                    <form class="needs-validation" action="{{ route('movie.update',$movie->id) }}" method="Post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row lg-3">
                                        <div class="col-sm-12">
                                          <label for="firstName" class="form-label">Title</label>
                                          <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{$movie->title}}" required>
                                          <div class="invalid-feedback">
                                            Valid title.
                                          </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="firstName" class="form-label">Genre</label>
                                            <input type="text" class="form-control" id="genre" name="genre"  placeholder="Enter Movie Category" value="{{$movie->genre}}" required>
                                            <div class="invalid-feedback">
                                              Valid Genre.
                                            </div>
                                          </div>
                              
                                          <div class="col-sm-4">
                                            <label for="releasing_year" class="form-label">Releasing Year</label>
                                            <input type="" class="form-control" id="releasing_year" name="releasing_year" placeholder="Enter Movie Reasing Year" value="{{$movie->releasing_year}}" required>
                                            <div class="invalid-feedback">
                                              Releasing year.
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <label for="total_minutes" class="form-label">Total Minutes</label>
                                            <input type="text" class="form-control" name="total_minutes" id="total_minutes" placeholder="" value="{{$movie->total_minutes}}" required>
                                            <div class="invalid-feedback">
                                              Valid total minutes.
                                            </div>
                                          </div>
                                        <div class="col-6">
                                          <label for="country" class="form-label">Country</label>
                                          <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="country" id="country" placeholder="Country" value="{{$movie->country}}" required>
                                          <div class="invalid-feedback">
                                              Country
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-6">
                                          <label for="rating" class="form-label">Rating</label>
                                          <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="rating" id="rating" placeholder="Rating" value="country" required>
                                          <div class="invalid-feedback">
                                              Rating
                                            </div>
                                          </div>
                                        </div>
                            
                                        <div class="col-12">
                                          <label for="description" class="form-label">Descriptions <span class="text-muted">(Optional)</span></label>
                                          <textarea  id="description" class="form-control col-12" name="description" cols="30" rows="10">{{$movie->description}}</textarea>
                                          <div class="invalid-feedback">
                                            Please enter a valid descriptions.
                                          </div>
                                        </div>

                                        <div class="col-12">
                                          <label for="link" class="form-label">Link <span class="text-muted">(Optional)</span></label>
                                          <input type="text" class="form-control" name="link" id="link" placeholder="link" value="{{$movie->link}}" required>
                                          <div class="invalid-feedback">
                                            Please enter a valid link.
                                          </div>
                                        </div>

                                        <div class="col-12">
                                          <label for="image" class="form-label">Image</label>
                                          <input type="file" class="form-control" id="image" name="image" placeholder="/image/{{$movie->image}}" required>
                                          <img src="/image/{{$movie->image}}" width="500px" alt="">
                                          <div class="invalid-feedback">
                                            Please enter your  address.
                                          </div>
                                        </div>
                                      </div>
                            
                                      <hr class="my-4">
                            
                                      <button class="w-100 btn btn-primary btn-lg" type="submit">Update</button>
                                    </form>
                                  </div>                                   
                                <hr class="my-4">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- END DATA TABLE-->
@endsection