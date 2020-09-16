@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Subjects</h1>
    		<a href="{{route('subjects.create')}}" class="btn btn-info float-right"><i class="fas fa-plus"></i>Add New</a>
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Name</th>
                        <th>Course_Name</th>
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody>
                    @php $i=1; @endphp
                    @foreach($subjects as $subject)
                    
                
    				<tr>
                        <td>{{$i++}}</td>    
                        <td>{{$subject->name}}</td>
                        <td>{{$subject->course->name}}</td>
                                    
                        <td>
                            <a href="{{route('subjects.show',$subject->id)}}" class="btn btn-outline-primary">Detail</a>
                            
                            
                            <a href="{{route('subjects.edit',$subject->id)}}" class="btn btn-outline-warning">Edit</a>

                             <form action="{{route('subjects.destroy',$subject->id)}}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <!-- delete lote yin method ka post nat ma ya buu dar kout method ko delete so pe change pay ya mal update lo myoe pot -->
                                <button class="btn btn-outline-danger ">Delete</button>
                            </form>
                        </td>            

                    </tr>
                    @endforeach
    			</tbody>
    		</table>
    	</div>
    </div>

 	</div>
@endsection