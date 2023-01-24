@extends('layouts.profile')
@section('content')
<style>

    body {
    background: #F1F3FA;
    }

    /* Profile container */
    .profile {
    margin: 20px 0;
    }

    /* Profile sidebar */
    .profile-sidebar {
    padding: 20px 0 10px 0;
    background: #fff;
    }

    .profile-userpic img {
    float: none;
    margin: 0 auto;
    width: 50%;
    height: 50%;
    -webkit-border-radius: 50% !important;
    -moz-border-radius: 50% !important;
    border-radius: 50% !important;
    }

    .profile-usertitle {
    text-align: center;
    margin-top: 20px;
    }

    .profile-usertitle-name {
    color: #5a7391;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 7px;
    }

    .profile-usertitle-job {
    text-transform: uppercase;
    color: #5b9bd1;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 15px;
    }

    .profile-userbuttons {
    text-align: center;
    margin-top: 10px;
    }

    .profile-userbuttons .btn {
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 600;
    padding: 6px 15px;
    margin-right: 5px;
    }

    .profile-userbuttons .btn:last-child {
    margin-right: 0px;
    }
        
    .profile-usermenu {
    margin-top: 30px;
    }

    .profile-usermenu ul li {
    border-bottom: 1px solid #f0f4f7;
    }

    .profile-usermenu ul li:last-child {
    border-bottom: none;
    }

    .profile-usermenu ul li a {
    color: #93a3b5;
    font-size: 14px;
    font-weight: 400;
    }

    .profile-usermenu ul li a i {
    margin-right: 8px;
    font-size: 14px;
    }

    .profile-usermenu ul li a:hover {
    background-color: #fafcfd;
    color: #5b9bd1;
    }

    .profile-usermenu ul li.active {
    border-bottom: none;
    }

    .profile-usermenu ul li.active a {
    color: #5b9bd1;
    background-color: #f6f9fb;
    border-left: 2px solid #5b9bd1;
    margin-left: -2px;
    }

    /* Profile Content */
    .profile-content {
    padding: 20px;
    background: #fff;
    min-height: 460px;
    }
</style>
<div class="">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
                @if(count($profile)>0)
                <div class="profile-userpic">
                        <img src="user/{{$profile[0]->image}}" 
                        style="margin-left:90px;
                        border: 5px solid grey;"
                        class="img-responsive" 
                        alt="">
                </div>
                @else
                    <div class="profile-userpic">
                        <img src="user/user.png" 
                        style="margin-left:90px;
                        border: 5px solid grey;"
                        class="img-responsive" 
                        alt="Insert Image">
                    </div>
                @endif
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
                    {{ Auth::user()->name }}
					</div>
					<div class="profile-usertitle-job">
                    {{ Auth::user()->email }}
					</div>
                    @if(count($profile)>0)
                    <div class="profile-usertitle-job">
                    {{ $profile[0]->phone }}
					</div>
                    <div class="profile-usertitle-job">
                    {{ $profile[0]->address }}
					</div>
                    @endif
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<!-- <div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm col-4">Edit Profile</button>
				</div> -->
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#"></a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
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
            <div class="profile-content">
            @if (count($profile)>0)
            @else
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Information</h6>
            </div>
            <form class="form" action="{{ route('profile.store')}}" method="post" id="registrationForm" enctype="multipart/form-data">
                @csrf     

                <input type="text" name="u_id" style="display:none;" value="{{ Auth::user()->id }}">
                <div class="form-group">                       
                          <div class="col-xs-6">
                              <label for="first_name mt-2"><h4>Image</h4></label>
                              <input type="file" class="form-control" name="image" id="first_name" placeholder="Image" title="enter your first name if any." >
                          </div>
                      </div>
    
                      <div class="form-group">    
                          <div class="col-xs-6">
                              <label for="phone mt-2"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email mt-2"><h4>Adderess</h4></label>
                              <input type="text" class="form-control" name="address" placeholder="Address" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                            </div>
                      </div>
            </form>
            @endif
            <br>
            <!-- tables -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Your Tickets</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Cinema</th>
                                <th>Seat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($booking as $dn)
                            <tr>
                                <td>{{$dn->date}}</td>
                                <td>{{$dn->time}}</td>
                                <td>{{$dn->cinema}}</td>
                                <td>{{$dn->seat_no}}</td>
                                <td>
                                    <button class="btn btn-success">Track</button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
        </div>
        </div>
    </div>
		</div>
	</div>
</div>

@endsection