<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<title>E learning platform</title>
<meta chrset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="{{ url('/') }}" class="w3-bar-item w3-button"><b>E-Learning</b> Platform</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Courses</a>
      <a href="#tutors" class="w3-bar-item w3-button">Tutors</a>
      <a href="{{ route('login') }}" class="w3-bar-item w3-button">Login</a>
      <a href="{{ route('register') }}" class="w3-bar-item w3-button">Register</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="https://www.artechnoweb.in/images/slide/website-design-background.jpg" alt="Architecture" width="100%" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>E Learning</b></span> <span class="w3-hide-small w3-text-light-grey">Platform</span></h1>
    <h1 class="w3-text-yellow"  style="text-shadow:1px 1px 0 #444">The New Way To Learn Properly in With Us!</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Courses Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Popular Courses</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Web Design</div>
        <img src="https://varnitec.com/sites/default/files/2020-06/2.jpg" alt="House" style="width:100%">
      </div>
    </div>
    
  </div>



  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>


  <div class="w3-container w3-padding-32" id="tutors">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Tutors</h3>
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="https://i.pinimg.com/originals/cd/88/6e/cd886e4afd07dafeee0f1bc4872740f9.png" alt="John" style="width:100%">
      <h3>Web Design</h3>
      <p class="w3-opacity">John Smith</p>
      <p>Senior Web Designer</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="https://i.pinimg.com/originals/cd/88/6e/cd886e4afd07dafeee0f1bc4872740f9.png" alt="John" style="width:100%">
      <h3>Web Design</h3>
      <p class="w3-opacity">John Smith</p>
      <p>Senior Web Designer</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="https://i.pinimg.com/originals/cd/88/6e/cd886e4afd07dafeee0f1bc4872740f9.png" alt="John" style="width:100%">
      <h3>Web Design</h3>
      <p class="w3-opacity">John Smith</p>
      <p>Senior Web Designer</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your aspire.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
  


<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Created by <a href="" class="w3-hover-text-green">KHSM-KKH-NNH</a></p>
</footer>

</body>
</html>
