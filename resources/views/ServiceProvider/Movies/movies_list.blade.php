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
                                <!-- <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </div> -->
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i> <a href="{{ route('movie.create') }}">Create Movies</a>
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
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Genre</th>
                                            <th>Releasing Year</th>
                                            <th>Total Minutes</th> 
                                            <th>Country</th>
                                            <th>Rating</th>
                                       
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($movie as $m)
                                    <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td><img src="http://127.0.0.1:8000/image/{{$m->image}}" width="200px" height="200px" alt=""></td>  
                                            <td>{{ $m->title }}</td>  
                                            <td>{{ $m->genre }}</td>  
                                            <td>{{ $m->releasing_year }}</td>  
                                            <td>{{ $m->total_minutes }}</td>                  
                                            <td>{{ $m->country }}</td>                  
                                            <td>{{ $m->rating }}</td>                  
                                        
                                            <td>
                                                <div class="table-data-feature">
                                                     <form action="{{ route('movie.destroy',$m->id) }}" method="POST">

                                                    
                                                    <a class="btn btn-info" href="{{ route('movie.show',$m->id) }}">
                                                        Show
                                                    </a>
                                                  
                                                     <a class="btn btn-primary" href="{{ route('movie.edit',$m->id) }}">
                                                          <i class="zmdi zmdi-edit"></i>
                                                    </a>  
                                                     

                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="item" type="submit" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>

                                                  </form>
                                                </div>                               
                                            </td>

                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>  
                            {!! $movie->links('pagination') !!} 
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
@endsection