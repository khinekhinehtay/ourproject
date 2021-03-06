@extends('backend.backendtemplate')

@section('content')
	<div class="container-fluid">
    <!-- Page Heading -->
  	<div class="row">
  		<div class="col-md-12 mb-3">
    		<h1 class="h3 mb-0 text-gray-800 d-inline-block">Lessons</h1>
    		<a href="{{route('lessons.create')}}" class="btn btn-info float-right"><i class="fas fa-plus"></i>Add New</a>
  		</div>
  	</div>
    
    <div class="row">
    	<div class="col-md-12">
    		<table class="table table-bordered">
    			<thead class="thead-dark">
    				<tr>
    					<th>No</th>
    					<th>Time</th>
                        <th>Description</th>
                        <th>Subject_Name</th>
    					<th>Actions</th>
    				</tr>
    			</thead>
    			<tbody>
                    @php $i=1; @endphp
                    @foreach($lessons as $lesson)
    				<tr>
                        <td>{{$i++}}</td>            
                        <td>
                            {{$lesson->minutes}} mins
                            {{-- <video width="320" height="240" controls>
                                <source src="{{$lesson->video}}" type="video/mp4">
                            </video> --}}
                        </td>
                        <td>{{$lesson->description}}</td>
                        <td>{{$lesson->subject->name}}</td>             
                        <td>

                            <a href="{{route('lessons.show',$lesson->id)}}" class="btn btn-outline-primary">Detail</a>
                            
                            <a href="{{route('lessons.edit',$lesson->id)}}" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>

                            <form action="{{route('lessons.destroy',$lesson->id)}}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <!-- delete lote yin method ka post nat ma ya buu dar kout method ko delete so pe change pay ya mal update lo myoe pot -->
                                <button class="btn btn-outline-danger "><i class="fas fa-trash"></i></button>
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