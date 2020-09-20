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
            <h2 style="margin-top:52px;margin-left:34px;font-family:'Open Sans', sans-serif;font-size:22px;font-weight:800;line-height:32px;color:rgb(0,0,0);">Choose Subject</h2>
            <div class="cust_bloglistintro">
                <p style="margin-left:34px;color:rgba(255,255,255,0.5);font-size:14px;"></p>
            </div>
        <div class="row">
            @foreach($sub as $subject)
            <div class="col-sm-12 col-lg-4 cust_blogteaser">
                <div class="card m-2"  style="padding-bottom:20px;margin:0px;">
                    
                    <h3 style="text-align:left;margin-top:20px;font-family:'Open Sans', sans-serif;font-size:18px;margin-right:0;margin-left:24px;line-height:34px;letter-spacing:0px;font-style:normal;font-weight:bold;">{{$subject->name}}<br></h3>
                    <p class="text-secondary" style="text-align:left;font-size:14px;font-family:'Open Sans', sans-serif;line-height:22px;color:rgb(9,9,10);margin-left:24px;">{{$subject->description}} </p>
                
                <a href="{{route('showlessons',[$subject->id])}}">
                    <button type="button" class="btn btn-dark btn-lg m-3" >Start Lessons</button> 
                </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection





   