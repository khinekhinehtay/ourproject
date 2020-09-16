@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-10 mb-3 mx-auto">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Course Detail</h1>
    		<a href="{{route('courses.index')}}" class="btn btn-outline-info float-right"><i class="fas fa-angle-double-left"></i>Go back</a>
  		</div>
    </div>
    
    <div class="row mt-4">
 	<div class="col-md-12">
 		<table class="table table-bordered">
 			<thead class="thead-dark">
 				<tr>
 					<th>No</th>
 					<th>Name</th>
 					<th>Description</th>

 					<!-- <th>Actions</th> -->
 				</tr>
 			</thead>
 			<tbody>
 				@php $i=1; @endphp
 				
 				<tr>
 					<td>{{$i++}}</td>
 					<td>{{$courses->name}}</td>
 					<td>{{$courses->description}}</td>

 				</tr>
 				
 			</tbody>
 		</table>
 	</div>
 </div>

</div>
@endsection