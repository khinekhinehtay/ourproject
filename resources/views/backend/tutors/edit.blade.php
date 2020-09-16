@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Tutor Edit Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('tutors.update',$tutor->id)}}" method="post" enctype="multipart/form-data">
			      @csrf
			      @method('PUT')
			      <div class="form-group row {{ $errors->has('nam
			      
			       e') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name" value="{{$tutor->name}}">
			          <span class="text-danger">{{ $errors->first('name') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
			        <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
			        <div class="col-sm-5">
			        	<nav>
						  <div class="nav nav-tabs" id="nav-tab" role="tablist">
						    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Photo</a>
						    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Photo</a>
						    
						  </div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
						  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						  	<img src="{{asset($tutor->photo)}}" width="200px" height="150px" class="mt-3">
						  	<input type="hidden" name="oldphoto" value="{{$tutor->photo}}">
						  </div>
						  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			          			<input type="file" id="inputPhoto" name="photo" class="d-block mt-3">
						  </div>
						</div>
			          	<span class="text-danger">{{ $errors->first('photo') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('address') ? 'has-error' : '' }}">
			        <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputAddress" name="address" value="{{$tutor->address}}">
			          <span class="text-danger">{{ $errors->first('address') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
			        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputEmail" name="email" value="{{$tutor->email}}">
			          <span class="text-danger">{{ $errors->first('email') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('gender') ? 'has-error' : '' }}">
			        <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
			        <div class="col-sm-5"><input type="radio"  name="gender" value="male" id="inputMale" 
							@if($tutor->gender=='male')
							checked 
							@endif
							>
					  
						<label for="inputMale">Male</label>
						<input type="radio" name="gender" value="female" id="inputFemale"
						 
							@if($tutor->gender=='female')
							checked 
							@endif
						 >
							<label for="inputFemale">Female</label>
			          {{-- <input type="radio" class="form-control" id="inputGender" name="gender" value="{{$tutor->gender}}"> --}}
			          <span class="text-danger">{{ $errors->first('gender') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('dob') ? 'has-error' : '' }}">
			        <label for="inputDob" class="col-sm-2 col-form-label">DOB</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputDob" name="dob" value="{{$tutor->dob}}">
			          <span class="text-danger">{{ $errors->first('dob') }}</span>
			        </div>
			      </div>





			      <div class="form-group row">
			        <div class="col-sm-5">
			          <input type="submit" class="btn btn-primary" name="btnsubmit" value="Update">
			        </div>
			      </div>
			    </form>
      	</div>
      </div>
    </div>
 	</div>
@endsection