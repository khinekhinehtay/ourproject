@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    	<div class="row">
    		<div class="col">
      		<h1 class="h3 mb-0 text-gray-800">Lesson Create Form</h1>
    		</div>
    	</div>
    </div>
    
    <div class="container">
      <div class="row">
      	<div class="col-md-12">
      		<form action="{{route('lessons.store')}}" method="post" enctype="multipart/form-data">
			      @csrf
			      			       			     
			      <div class="form-group row {{ $errors->has('video') ? 'has-error' : '' }}">
			        <label for="inputVideo" class="col-sm-2 col-form-label">Video</label>
			        <div class="col-sm-5">
			          <input type="file" id="inputVideo" name="video" class="d-block">
			          <span class="text-danger">{{ $errors->first('video') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('minutes') ? 'has-error' : '' }}">
			        <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
			        <div class="col-sm-5">
			          <input type="number" class="form-control" id="inputTime" name="minutes">
			          <span class="text-danger">{{ $errors->first('minutes') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('description') ? 'has-error' : '' }}">
			        <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
			        <div class="col-sm-5">
			          <textarea class="form-control" id="inputDescription" name="description"></textarea>
			          <span class="text-danger">{{ $errors->first('description') }}</span>
			        </div>
			      </div>

			      <div class="form-group row {{ $errors->has('subject_id') ? 'has-error' : '' }}">
			        <label for="inputSubjectId" class="col-sm-2 col-form-label">Subject_Name</label>
			        <div class="col-sm-5">
			          <select name="subject_id" class="form-control">
			          	@foreach($subjects as $subject)
			          	<option value="{{$subject->id}}">{{$subject->name}}</option>
			          	@endforeach
			          </select>
			          <span class="text-danger">{{ $errors->first('subject_id') }}</span>
			        </div>
			      </div>

			      <div class="form-group row">
			        <div class="col-sm-5">
			          <input type="submit" class="btn btn-primary" name="btnsubmit" value="Create">
			        </div>
			      </div>
			    </form>
      	</div>
      </div>
    </div>
 	</div>
@endsection