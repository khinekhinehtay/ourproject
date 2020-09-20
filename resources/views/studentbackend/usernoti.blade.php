@extends('studentbackend.backend')

@section('content')

@if (session('flash_messagetouser'))
    <div class="card-body">
        <div class="alert alert-success">
            {{ session('flash_messagetouser') }}
        </div>
    </div>
@endif

<div class="text-primary">
    <h1>Hello</h1>
</div>

@endsection