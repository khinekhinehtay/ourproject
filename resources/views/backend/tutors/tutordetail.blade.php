@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-10 mb-3 mx-auto">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Tutor Detail</h1>
    		<a href="{{route('tutors.index')}}" class="btn btn-outline-info float-right"><i class="fas fa-angle-double-left"></i>Go back</a>
  		</div>
    </div>
    
    <div class="row mt-4">
 	<div class="col-md-12">
 		<table class="table table-bordered">
 			<thead class="thead-dark">
 				<tr>
 					<th>No</th>
    					<th>Name</th>
                        <th>Photo</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>DOB</th>
    			</tr>
 			</thead>
 			<tbody>
 				@php $i=1; @endphp
 				
 				<tr>
 					 <td>{{$i++}}</td>    
                        <td>{{$tutors->name}}</td>            
                        <td>{{$tutors->photo}}</td> 
                        <td>{{$tutors->address}}</td>
                        <td>{{$tutors->email}}</td>
                        <td>{{$tutors->gender}}</td> 
                        <td>{{$tutors->dob}}</td> >

 				</tr>
 				
 			</tbody>
 		</table>
 	</div>
 </div>

</div>
@endsection