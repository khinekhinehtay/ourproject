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
			      
			       
			      <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name" value="{{$tutor->name}}">
			          <span class="text-danger">{{ $errors->first('name') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
			        <label for="inputDescription" class="col-sm-2 col-form-label">Photo</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name" value="{{$tutor->photo}}">
			          <span class="text-danger">{{ $errors->first('photo') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('address') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Address</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name" value="{{$tutor->address}}">
			          <span class="text-danger">{{ $errors->first('address') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('email') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Email</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name" value="{{$tutor->email}}">
			          <span class="text-danger">{{ $errors->first('email') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('gender') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">Gender</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name" value="{{$tutor->gender}}">
			          <span class="text-danger">{{ $errors->first('gender') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('dob') ? 'has-error' : '' }}">
			        <label for="inputName" class="col-sm-2 col-form-label">DOB</label>
			        <div class="col-sm-5">
			          <input type="text" class="form-control" id="inputName" name="name" value="{{$tutor->dob}}">
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