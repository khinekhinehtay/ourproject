@extends('backend.backendtemplate')

@section('content')
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<div class="row">
			<div class="col">
				<h1 class="h3 mb-0 text-gray-800">Lesson Edit Form</h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="{{route('lessons.update',$lesson->id)}}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')

			      <div class="form-group row {{ $errors->has('video') ? 'has-error' : '' }}">
			        <label for="inputVideo" class="col-sm-2 col-form-label">Video</label>
			        <div class="col-sm-5">
			        	<nav>
						  <div class="nav nav-tabs" id="nav-tab" role="tablist">
						    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Video</a>
						    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Video</a>
						    
						  </div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
						  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						  	<video width="320" height="240" controls>
						  	<source src="{{asset($lesson->video)}}"type="video/mp4">
						  	</video>
						  	<input type="hidden" name="oldvideo" value="{{$lesson->video}}">
						  </div>
						  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			          			<input type="file" id="inputVideo" name="video" class="d-block mt-3">
						  	
						  </div>
						 
						</div>
			          	<span class="text-danger">{{ $errors->first('video') }}</span>


			        </div>
			    </div>

			    <div class="form-group row {{ $errors->has('minutes') ? 'has-error' : '' }}">
			    	<label for="inputTime" class="col-sm-2 col-form-label">Time</label>
			    	<div class="col-sm-5">
			    		<input type="number" class="form-control" id="inputTime" name="minutes" value="{{$lesson->minutes}}">
			    		<span class="text-danger">{{ $errors->first('minutes') }}</span>
			    	</div>
			    </div>

			    <div class="form-group row {{ $errors->has('description') ? 'has-error' : '' }}">
			    	<label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
			    	<div class="col-sm-5">
			    		<textarea class="form-control" id="inputDescription" name="description" value="">{{$lesson->description}}</textarea>
			    		<span class="text-danger">{{ $errors->first('description') }}</span>
			    	</div>
			    </div>

			    <div class="form-group row {{ $errors->has('subject_id') ? 'has-error' : '' }}">
			    	<label for="inputSubjectId" class="col-sm-2 col-form-label">Subject_Name</label>
			    	<div class="col-sm-5">
			    		<select name="subject_id" class="form-control">
			    			@foreach($subjects as $subject)
			    			<option value="{{$subject->id}}" {{ ( $subject->id == $lesson->subject_id) ? 'selected' : '' }}>{{$subject->name}}</option>
			    			@endforeach
			    		</select>
			    		<span class="text-danger">{{ $errors->first('subject_id') }}</span>
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