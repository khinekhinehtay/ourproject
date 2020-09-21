<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>E learning platform</title>
<meta chrset="UTF-8">
<link rel="icon" type="image/png" href="https://e7.pngegg.com/pngimages/465/720/png-clipart-computer-icons-e-learning-encapsulated-postscript-learning-education-text-orange.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
a:link, a:visited {
  text-decoration: none;
  
}
  </style>
<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="{{ url('/') }}" class="w3-bar-item w3-button bg-dark text-white"><b class="text-white">E-Learning</b> Platform</a>
      <a href="#courses" class="w3-bar-item w3-button w3-hide-small">Courses</a>
    <a href="#tutors" class="w3-bar-item w3-button w3-hide-small">Tutors</a>

      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right">
        <a href="{{ route('content')}}" class="w3-bar-item w3-button">Contact</a>

        @guest
            <a href="{{ route('login') }}" class="w3-bar-item w3-button">Login</a>
            <a href="{{ route('register') }}" class="w3-bar-item w3-button">Register</a>
        
            
        @endguest
        @if (Auth::check())
            <a class="w3-bar-item w3-button w3-text-blue" href="{{ route('dash') }}"> {{ Auth::user()->name }}</a>
        @endif
      </div>
    </div>
  </div>

  <!-- Header -->
  <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image" src="https://wallpapercave.com/wp/wp3191229.png" alt="Architecture" width="100%" height="800">
    <div class="w3-display-middle w3-margin-top w3-center">
      <h1 class="w3-xxlarge w3-text-white w3-hide-small"><span class="w3-padding w3-black w3-opacity-min"><b>E Learning</b></span> <span class="w3-hide-small w3-text-light-grey">Platform</span></h1>
      <p class="w3-text-white w3-hide-large w3-hide-medium"><span class="w3-padding w3-black w3-opacity-min m-2"><b>E Learning</b></span> <span class="w3-text-light-grey">Platform</span></p>
      <h1 class="w3-text-white w3-hide-small"  style="text-shadow:1px 1px 0 #444">The New Way To Learn Properly in With Us!</h1>
    </div>
  </header>

  <!-- Page content -->
  <div class="w3-content w3-padding" style="max-width:1564px">

    <!-- Courses Section -->
    <div class="w3-container w3-padding-32" id="courses">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Popular Courses</h3>
    </div>

    {{-- <div class="row justify-content-center">
        <div class="w3-row">
        @foreach($courses as $course)
        
        <div class="w3-col s3"  onClick="showDialog()">
          <div class="w3-card m-2">
          <div class="w3-display-container w3-center">
           
            <a class="w3-display-topleft w3-black w3-padding" href = "{{ route('course.show', [$course->id]) }}">{{$course->name}}</a>
            <a href="{{ route('course.show', [$course->id]) }}">
              <img class="mt-5" src="{{$course->photo}}" width="150" height="150">
            </a>
            <div class="h-20">
                <p height="20" href = "{{ route('course.show', [$course->id]) }}">{{$course->description}}</p>
            </div>
                <a class="" href="{{ route('course.show', [$course->id]) }}">
                  <div class="w3-container w3-teal"><p>{{$course->tutor->name}}</p></div>
                </a>
          </div>
        </div>
        </div>

        @endforeach
      </div>
    </div> --}}

    <div class="container-fluid content-row">
      <div class="row">
        @foreach ($courses as $course)
        <div class="col-sm-12 col-lg-3 p-3" onclick="showDialog()">
          <div class="card h-100">
            <a class="w3-display-topleft w3-black w3-padding" href = "{{ route('course.show', [$course->id]) }}">{{$course->name}}</a>
            <a href="{{ route('course.show', [$course->id]) }}">
              <img class="mt-5" src="{{$course->photo}}" width="150" height="150">
            </a>
            <a class="w3-container w3-cyan w3-cell-middle w3-text-white pt-1" href="{{ route('course.show', [$course->id]) }}">
              <p>Tutor : {{$course->tutor->name}}</p>
            </a>
          </div>
      </div>
        @endforeach
      </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p class="w3-panel w3-leftbar w3-sand w3-xlarge w3-serif">“Students do not learn much just sitting in classes listening to teachers, memorizing prepackaged assignments, 
      and spitting out answers. They must talk about what they are learning, write reflectively about it, 
      relate it to past experiences, and apply it to their daily lives. 
      They must make what they learn part of themselves.” - Arthur W. Chickering and Stephen C. Ehrmann
    </p>
  </div>

  <div class="w3-container w3-padding-32" id="tutors">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Tutors</h3>
  </div>

  
  {{-- <div class="w3-row-padding w3-margin-top">
    @foreach($tutors as $tutor)
    <div class="w3-col s3">
      <div class="w3-card w3-center" width="100" height="100">
        <img src="{{$tutor->photo}}" width="150" height="150" >
        <div class="w3-container">
          <h5>{{$tutor->name}}</h5>
        </div>
      </div>
    </div>
    @endforeach
  </div> --}}
  <div class="row p-3">
    @foreach ($tutors as $tutor)

      <div class="col-sm-12 col-lg-3 p-3">
        <div class="card">
            <div class="text-center profile-card" style="margin:15px;background-color:#ffffff;">
              <div class="profile-card-img" style="background-image:url(&quot;iceland.jpg&quot;);height:150px;background-size:cover;"></div>
              <div>
                  <img class="rounded-circle" style="margin-top:-70px;" src="{{$tutor->photo}}" height="150px">
                  <h3>{{$tutor->name}}</h3>
                  <p style="padding:20px;padding-bottom:0;padding-top:5px;"></p>
              </div>
          </div>
        </div>
      </div>
        
    @endforeach
  </div>

  
  <!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Created by <a href="" class="w3-hover-text-blue">KHSM-KKH-NNH</a></p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
