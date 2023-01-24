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
                                    <h3 class="title-5 m-b-35">Edit Cinemas</h3>
                                    <form class="needs-validation" action="{{ route('cinema.update',$cinema->id) }}" method="POST" enctype="multipart/form-data" novalidate>
                                      @csrf
                                      @method('PUT')
                                      <div class="row lg-3">
                                      <div class="col-sm-6">
                                          <label for="firstName" class="form-label">Name</label>
                                          <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{$cinema->name}}" required>
                                          <div class="invalid-feedback">
                                            Valid Name.
                                          </div>
                                        </div>   
                                        <div class="col-sm-6">
                                          <label for="firstName" class="form-label">Rating</label>
                                          <input type="text" class="form-control" id="rating" name="rating" placeholder="Stars" value="{{$cinema->rating}}" required>
                                          <div class="invalid-feedback">
                                            Valid rating.
                                          </div>
                                        </div>    
                                        <div class="col-12">
                                          <label for="username" class="form-label">Address</label>
                                          <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="{{$cinema->address}}"  required>
                                          <div class="invalid-feedback">
                                          Address
                                            </div>
                                          </div>
                                        </div>
                            
                                        <div class="col-12">
                                          <label for="email" class="form-label">Descriptions <span class="text-muted">(Optional)</span></label>
                                          <textarea name="description" id="descriptions" class="form-control co   l-12" cols="30" rows="10">{{$cinema->description}}</textarea>
                                          <div class="invalid-feedback">
                                            Please enter a valid descriptions.
                                          </div>
                                        </div>
                            
                                        <div class="col-12">
                                          <label for="address" class="form-label">Image</label>
                                          <input type="file" class="form-control" id="image" name="image" placeholder="Image" required>
                                          <img src="/image/{{$cinema->image}}" width="500px" alt="">
                                          <div class="invalid-feedback">
                                            Please Choose Cinema Image .
                                          </div>
                                        </div>
                                      </div>
                            
                                      <hr class="my-4">
                            
                                      <button class="w-100 btn btn-primary btn-lg" type="submit">Update</button>
                                    </form>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
@endsection