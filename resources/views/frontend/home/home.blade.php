@extends('frontend.home-master')

<!-- page title -->
@section('page-title')	
{{$seo['title']}}
@endsection
@section('description',$seo['description'])
@section('keywords',$seo['keywords'])

<!-- page content -->
@section('content')
<!-- about starts -->
<section id="about">
  <div class="container about">
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <div class="about-image">
          <img src="{{url('/imageupload/'. $about['image'])}}" class="img-fluid" alt="Image">
        </div>

      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="about-content">

          <h4>About our company</h4>
          <h2>{{$about['tagline']}}
          </h2>
          <p>{!!$about['description']!!}</p>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- about ends -->



<!-- services starts -->
<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="services">
          <h4>What We Do</h4>
          <h2>Our Main<span> Services</span></h2>
          <p>{!!$servicesum['description']!!}</p>
        </div>
      </div>
    </div>



    <div class="row">
      @foreach($service as $services)
      <div class="col-lg-3 col-md-6">
        <div class="service-brand">
          <i class="icofont icofont-chart-arrows-axis"></i>
          <h4>{{$services['name']}}</h4>
          <p>{!!$services['description']!!}</p>

        </div>
      </div>
      @endforeach




      

      

    </div>

  </div>
</section>

<!-- services ends -->


<!-- portfolio starts -->

<section id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="portfolio">
          <h4>Recent Work Sample</h4>
          <h2>Our Recent<span> Portfolio</span></h2>
          <p>{!!$portfoliosum['description']!!}</p>    
        </div>
      </div>
    </div>


    <div class="row portfolio-menu">
   <!--    <div class="col-md-12">
        <div class="menu">
         
          <button class="port-button active" data-filter="all">All</button>
           @foreach($portfolio as $port)
          <button class="port-button" data-filter="{{$port['name']}}">{{$port['name']}}</button>
          @endforeach
        </div>
      </div> -->
    </div>



    <div class="portfolio-image">
      @foreach($portfolio as $po)
      <div class="filter branding design port-img">
        <img src="{{url('/imageupload/'. $po['image'])}}" width="360" alt="">
        <div class="port-desc">
          <i class="icofont icofont-drag1"></i>
          <div class="text">{!!$po['description']!!}</div>
        </div>
      </div>
      @endforeach

      <!-- <div class="filter design promotion port-img">
        <img src="{{'public/images/port-2.jpg'}}" width="360" alt="">
        <div class="port-desc">
          <i class="icofont icofont-drag1"></i>
          <div class="text">Marketing</div>
        </div>
      </div>

      <div class="filter branding marketing port-img">
        <img src="{{'public/images/port-3.jpg'}}" width="360" alt="">
        <div class="port-desc">
          <i class="icofont icofont-drag1"></i>
          <div class="text">Design</div>
        </div>
      </div>

      <div class="filter design port-img">
        <img src="{{'public/images/port-4.jpg'}}" width="360" alt="">
        <div class="port-desc">
          <i class="icofont icofont-drag1"></i>
          <div class="text">Promotion</div>
        </div>
      </div>

      <div class="filter branding promotion port-img">
        <img src="{{'public/images/port-5.jpg'}}" width="360" alt="">
        <div class="port-desc">
          <i class="icofont icofont-drag1"></i>
          <div class="text">Research</div>
        </div>
      </div>

      <div class="filter design branding port-img">
        <img src="{{'public/images/port-6.jpg'}}" width="360" alt="">
        <div class="port-desc">
          <i class="icofont icofont-drag1"></i>
          <div class="text">Marketing</div>
        </div>
      </div> -->



    </div>







  </div>
</section>
<!-- portfolio ends -->



<!-- features starts -->
<section id="features">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="features">
            <h4>Get Touch With Us</h4>
            <h2>Our Great<span> Features</span></h2>
            <p>{!!$featuresum['description']!!}</p>    
          </div>

        </div>
      </div>



      <div class="row">
        @foreach($features as $feature)
        <div class="col-md-4 col-sm-12">
          <div class="features-brand">
            <i class="icofont icofont-dart"></i>
            <h4>{{$feature['name']}}</h4>
            <p>{!!$feature['description']!!}</p>

          </div>
        </div>
        @endforeach


        

        


        


        


      </div>
    </div>
  </div>
</section>
<!-- features ends -->




<!-- contact now -->

<section id="contact-now">
  <div class="container-fluid">

    <div class="contact-now">
     <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="heading">
          <h2>We Provide All Kind Of Business Services.
            Do You Need Any Service ?
          </h2>
          
          <button class="btn btn-lg  btn-con"><a href="#contact-us">Contact Now</a></button>
        </div>
      </div>
    </div>

  </div>
</div>

</section>


<!-- contact now ends -->




<section id="why-choose">

  <div class="container why-choose">
    <div class="row">


      <div class="col-lg-6 col-md-12">
        <div class="choose-company">
          <h4>Why Choose Our Company ?</h4>
          <h2>We Are Best Service Provider Company Of <span>The Industry</span></h2>
          <p>{!!$whyussum['description']!!}</p>
          

          
        </div>



        <div class="row choose-features">

          <div class="col-md-6">
            
            <ul>
              @foreach($why as $wh)
              <li><i class="icofont-check"></i>{{$wh['point']}}</li>
                @endforeach
            </ul>
          </div>

          
        </div>




      </div>




      

      <div class="col-lg-6 col-md-12">
        <div class="side-image">
          <img src="{{url('public/images/about-us.jpg')}}" class="img-fluid" alt="">
        </div>
      </div>
      <!-- end of row -->
    </div>
    <!-- end of container -->
  </div>
</section>


<section id="subscribe-us">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
       <div class="subscribe-us">
        <h4>Get Touch With Us</h4>
        <h2 class="font-700">Subscribe Our <span>Newsletter</span></h2>
        <p>{!!$subscriptionsum['description']!!}</p>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-6 mx-auto">

      <form action="{{url('subscriptionstore')}}" method="post">
        {{csrf_field()}}
        <div class="input-group newsltr-form">
          <input type="text" class="form-control" placeholder="Write Your Email" name="email" required="">
          <div class="input-group-append newsltr-btn">
            <button type="submit" class="btn btn-lg btn-primary">Subscribe</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</section>

<!-- subscribe us ends -->


<!-- pricing plan starts -->

<section id="pricing">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="pricing-plan">
          <h4>Choose best one</h4>
          <h2>our <span>pricing plan</span></h2>
          <p>{!!$packagesum['description']!!}</p> 
        </div>
      </div>
    </div>

    <div class="row">
      @foreach($package as $pak)
      <div class="col-md-4 col-sm-12">
        <div class="price-list">
          <h4>{{$pak['name']}}</h4>
          <h2>{{$pak['price']}}<span>/month</span>
          </h2>
          <ul>
            {!!$pak['description']!!}
          </ul>
          
        </div>

      </div>
      @endforeach
      
      
    </div>

  </div>
</section>

<!-- pricing plan ends -->



<!-- counter starts  -->





<!-- feedback starts -->

<section id="feedback">
  <div class="container feedback">
    <div class="row wht-says">
      <div class="col-md-6 mx-auto">
        <h4>What Says Our Clients</h4>
        <h2>Our Clients <span>Feedback</span></h2>
        <p>{!!$testimonialsum['description']!!}</p>
      </div>
    </div>



    <!-- testimonial carousel starts -->

     <div class="row">
    <div class="col-md-6 col-sm-12 mx-auto">

  <div class="owl-carousel owl-theme testimonial">
    @foreach($testimonial as $test)
    <div class="item">
       <div class="test-caro">
                <div class="main-par">
                  <p style="color: white;">{!!$test['description']!!}</p>
                  <span>
                    <i class="icofont icofont-star"></i>

                    <i class="icofont icofont-star"></i>

                    <i class="icofont icofont-star"></i>

                    <i class="icofont icofont-star"></i>

                    <i class="icofont icofont-star"></i>
                  </span>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="test-img">
                      <img src="{{url('public/images/client-1.jpg')}}" alt="">
                    </div>
                    <div class="test-abt">
                      <h4>John Doe</h4>
                      <h6>ThemeMacro</h6>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="test-qt">
                      <i class="icofont icofont-quote-right"></i>
                    </div>

                  </div>
                </div>

              </div>
      
    </div>
    @endforeach

<!-- 
    <div class="item">
      <div class="test-caro">
                <div class="main-par">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores sequi voluptate ullam quisquam accusamus, dicta maxime incidunt dolorum natus, officiis nihil ipsum id?</p>
                  <span>
                    <i class="icofont icofont-star"></i>

                    <i class="icofont icofont-star"></i>

                    <i class="icofont icofont-star"></i>

                    <i class="icofont icofont-star"></i>

                    <i class="icofont icofont-star"></i>
                  </span>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="test-img">
                      <img src="{{url('public/images/client-2.jpg')}}" alt="">
                    </div>
                    <div class="test-abt">
                      <h4>Ava Smith</h4>
                      <h6>Bizzer Theme</h6>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="test-qt">
                      <i class="icofont icofont-quote-right"></i>
                    </div>

                  </div>
                </div>

              </div>
      
    </div>
 -->


   <!--  <div class="item">
       <div class="test-caro">
                <div class="main-par">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores sequi voluptate ullam quisquam accusamus, dicta maxime incidunt dolorum natus, officiis nihil ipsum id?</p>
                  <span>
                    <i class="icofont icofont-star"></i>

                    <i class="icofont icofont-star"></i>

                    <i class="icofont icofont-star"></i>

                    <i class="icofont icofont-star"></i>

                    <i class="icofont icofont-star"></i>
                  </span>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="test-img">
                      <img src="{{url('public/images/client-3.jpg')}}" alt="">
                    </div>
                    <div class="test-abt">
                      <h4>Shane Kyle</h4>
                      <h6>Themefoose</h6>
                    </div>

                  </div>
                  <div class="col-md-6">
                    <div class="test-qt">
                      <i class="icofont icofont-quote-right"></i>
                    </div>

                  </div>
                </div>

              </div>
      
    </div>
 -->



    
</div>

</div>
</div>  
<!-- testimonial carousel ends -->

<!-- end of container -->
</div>
</section>
<!-- feedback ends -->












<!-- contact us starts -->


<section id="contact-us">


  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="contact-us">
            <h4>Need any help ?</h4>
            <h2>Contact <span>With Us</span></h2>
            <p>{!!$contactsum['description']!!}</p>
          </div>

        </div>
        <!-- end of row -->
      </div>

      <div class="row">






        <div class="col-md-3">

          <div class="contact-info-icon">
            <i class="icofont-google-map"></i>
            <p>23/4 Mount Avenue <br>
            New York, USA</p>
          </div>

          <div class="contact-info-icon">
            <i class="icofont-email"></i>
            <p>support@email.com <br>
            example@support.com</p>
          </div>

          <div class="contact-info-icon">
            <i class="icofont-phone"></i>
            <p>+011 12345 67890 <br>
            +022 12345 67890</p>
          </div>

        </div>






        <div class="col-md-6">

          <div class="contact-form">
            <form action="{{url('/storecontact')}}" method="post">
              {{csrf_field()}}

              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" required="">
              </div>

              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="">
              </div>

              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required="">
              </div>

              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="10" class="form-control" required="" placeholder="Write Your Message"></textarea>
              </div>

              <div class="contact-button text-center">
                <button type="submit">Submit</button>
              </div> 
            </form>
          </div>  
        </div>






        <div class="col-md-3">
          <!--Google map-->
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.3876000610726!2d85.33927831438386!3d27.674412833546796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190fc042d399%3A0x6064967133397f28!2sCreatu%20Developers!5e0!3m2!1sne!2snp!4v1569917316846!5m2!1sne!2snp" height="435" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>



        <!-- end of form row -->
      </div>
      <!-- end of container -->
    </div>
  </div>
</section>

<!-- contact us ends -->

@endsection