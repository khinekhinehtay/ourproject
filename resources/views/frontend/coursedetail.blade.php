<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>E learning platform</title>
<meta chrset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
	html {
		background: #efefef;
	}
	
	/* Dialog */
	#overlay {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: #000;
		opacity: 0.8;
		display: none;
	}
	#dialog {
		position: relative;
		margin: 50px auto;
		width: 50%;
		height: 60%;
		border: 4px solid #ccc;
		background: #e9ecef;
		display: none;
		border-radius: 20px;
	}
	#dialog h2 {
		margin: 0;
		padding: 8px;
		background: #ddd;
		font-size: 17px;
	}
	span {
		position: relative;
		display: block;
		float: right;
		padding: 0 10px;
		color: #white;
		cursor: pointer;
	}
</style>
</head>
<body onload="showDialog()">
	

	<!-- Dialog -->
	<div id="overlay" onClick="hideDialog()"></div>
	
	<div id="dialog">
		<a href="{{ url('/#courses') }}"><span >X</span></a>

		<div class="jumbotron">
			
			<div class="course-title">
				<h1 class = "display-4">{{$course->name}}</h4>
				</div>

				
				<img src="{{ asset('/' . $course->photo) }}" width="150" height="150">


				<div class="published">
					<h6>Published on: {{ $course->created_at->toFormattedDateString() }}</h6>
				</div>
				<div class="author">
					{{-- <h6 class= "lead">Author: {{ $author->name }}</h6> --}}
					<p>{{$course->description}}</p>
				</div>
				<div class="author">
					<p>Tutor : {{$course->tutor->name}}</p>
				</div>

				@if ($enroll == true)
		
				<div class="course-button">
					<a href="{{ route('course.unenroll', [$course->id]) }}" type="button" class="btn btn-primary btn-lg mb-2">Unenroll</a>
					@if ($complete == false)
					<br>
					<a href="{{ route('course.complete', [$course->id]) }}" type="button" class="btn btn-primary btn-lg" >Mark as Complete</a>
					<br>
					@endif
				</div>
				@else
				@if ($complete == false)
				<a href="{{ route('course.enroll', [$course->id]) }}" type="button" class="btn btn-primary btn-lg" >Enroll</a>
				@endif
				@endif
			</div>
			
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script>
			function showDialog() {
				document.getElementById("overlay").style.display = "block";
				document.getElementById("dialog").style.display = "block";
			}
			function hideDialog() {
				document.getElementById("overlay").style.display = "none";
				document.getElementById("dialog").style.display = "none";
			}
		</script>
	</body>
	</html>