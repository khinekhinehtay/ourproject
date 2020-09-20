@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Lesson Detail</h1>
    		<a href="{{route('lessons.index')}}" class="btn btn-outline-info float-right"><i class="fas fa-angle-double-left"></i>Go back</a>
  		</div>
    </div>
    
    <div class="row mt-4">
 	<div class="col-md-12">
 		<table class="table table-bordered">
 			<thead class="thead-dark">
 				<tr>
 					<th>No</th>
          <th>Subject Name</th>
 					<th>Description</th>
 					<th>Video</th>

 					<!-- <th>Actions</th> -->
 				</tr>
 			</thead>
 			<tbody>
 				@php $i=1; @endphp
 				
 				<tr>
 					<td>{{$i++}}</td>
          			<td>{{$lessons->subject->name}}</td>
 					<td>{{$lessons->description}}</td>
 					<td>
 						<video width="250" height="170" controls>
                <source src="{{ asset('/' . $lessons->video) }}" type="video/mp4">
            </video>
          </td>

 				</tr>
 				
 			</tbody>
 		</table>
 	</div>
 </div>

</div>
@endsection