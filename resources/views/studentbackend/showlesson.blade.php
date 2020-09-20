@extends('studentbackend.backend')

@section('content')

@if (session('flash_messagetouser'))
    <div class="card-body">
        <div class="alert alert-success">
            {{ session('flash_messagetouser') }}
        </div>
    </div>
@endif

<div>
    <div class="container m-auto">
        <a href="{{route('mycourse')}}"><i class="fas fa-arrow-left"></i></a>
            <h2 style="margin-top:52px;margin-left:34px;font-family:'Open Sans', sans-serif;font-size:22px;font-weight:800;line-height:32px;color:rgb(0,0,0);">Lessons</h2>
            <div class="cust_bloglistintro">
                <p style="margin-left:34px;color:rgba(255,255,255,0.5);font-size:14px;"></p>
            </div>
        <div class="row">
            @foreach($lessons as $lesson)
            @php $i=1; @endphp
            <div class="col-sm-12 col-lg-4 cust_blogteaser">
                <div class="card m-2"  style="padding-bottom:20px;margin:0px;">
                    <p class="text-secondary text-white ml-1 mt-1">{{$i++}} </p>
                    <video width="auto" height="200" oncontextmenu="return false;" controls controlsList="nodownload">
                        <source src="{{ asset('/' . $lesson->video) }}" type="video/mp4">
                        Your browser does not support HTML video.
                      </video>
                    <h3 style="text-align:left;margin-top:20px;font-family:'Open Sans', sans-serif;font-size:18px;margin-right:0;margin-left:24px;line-height:34px;letter-spacing:0px;font-style:normal;font-weight:bold;">{{$lesson->description}}<br></h3>
                    

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection





   