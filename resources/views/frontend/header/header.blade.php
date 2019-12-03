<header>
<!-- top-nav -->

      <div class="container-fluid top-nav">
        <div class="container">
      <div class="row">
      <div class="col-md-9 col-sm-12">
      <div class="contact-info">
      <span class="support"><i class="icofont icofont-email"></i>support@Bizzer.com</span>
       <span class="contact"><i class="icofont icofont-phone"></i>+01 12345 67890</span>
       <span class="opening"><i class="icofont icofont-clock-time"></i> Sat - Friday : 9:00 am - 5:00 pm, Sunday Closed</span>
       </div>
    </div>



    <div class="col-md-3 col-sm-12">
      <div class="social-icon">
      <span><a href="#">Follow us:</a></span> 
      <span><a href="#"><i class="icofont-facebook"></i></a></span>
      <span><a  href="#"><i class="icofont-twitter"></i></a></span>
      <span><a  href="#"><i class="icofont-pinterest"></i></a></span>
      <span><a  href="#"><i class="icofont-linkedin"></i></a></span>
      </div>
    </div>
  </div>
</div>
  </div>
  <!-- end of top-nav -->


  <!-- navbar -->
  <div class="container-fluid nav-menu" id="nav-menu">
<div class="container">
    <nav class="navbar navbar-expand-lg">
      <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#myNavbar">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </button>
      <div class="bg-cover"></div>

         <div class="logo">
  <a href="#" class="navbar-brand logo"><img src="{{url('public/images/Logo.png')}}" alt=""></a>
  </div>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav menu-item ml-auto">
        <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
        <li class="nav-item"><a href="#about" class="nav-link">about</a></li>
        <li class="nav-item"><a href="#services" class="nav-link link">services</a></li> 
        <li class="nav-item"><a href="#portfolio" class="nav-link link">Portfolio</a></li>
        <li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="#pricing" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="#contact-us" class="nav-link">contact</a></li>
      </ul>
      </div>
    </nav>
    <!-- end of navbar -->
  </div>
</div>


    <script>
      $(document).ready(function() {
  $('.nav-button').click(function() {
    $('.nav-button').toggleClass('change');
  });

  $(window).scroll(function() {
    let position = $(this).scrollTop();
    if(position >= 200) {
      $('.nav-menu').addClass('custom-navbar');
    } else {
      $('.nav-menu').removeClass('custom-navbar');
    }
  });
});

    </script>



      







<div class="banner text-light">
  <h1 class="banner-heading">Welcome to our website</h1>
  <h3 class="banner-subtitle">We are happy to see you here</h3>
  <button class="btn btn-lg  btn-abt"><a href="#about">About Us</a></button>
  <button class="btn btn-lg  btn-con"><a href="#contact-us">Contact</a></button>


</div>

</header>
  <!-- end of header-->



 









   

