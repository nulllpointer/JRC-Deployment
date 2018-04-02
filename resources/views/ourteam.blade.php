<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.kazierfan.com/themes/construcdo/constructo/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Mar 2018 04:53:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>J.R.Consultant | We provide comprehensive solution in Engineering, Environmental and Social Studies</title>
    <meta name="Harendra Kalauni" content="JR Consultant">

    <meta name="google-site-verification" content="_HQU78JkYcSb0pUaBt_sgFHLEsd79-uMYDNcC9vicy0"/>

    <meta name="description" content="JRC is a company that primarily provides comprehensive solution in Engineering, Environmental and Social studies.  

                            JRC possesses over 28 years of experience working with variety of infrastructure development projects and we strongly believe in high quality services and customer satisfaction.
                         "/>


    <meta name="google" content="nositelinkssearchbox"/>

    <link rel="icon" href="uploads/logojrc3.png" type="image/x-icon"/>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- rippler css -->
    <link rel="stylesheet" href="css/rippler.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" href="slick/slick.css">
    <!-- jquery magnifiq popup  -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- reset css -->
    <link rel="stylesheet" href="css/reset.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive Css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body class="js">
<div id="preloader"></div>
<div class="searchboxinput">
    <form action="http://www.kazierfan.com/themes/construcdo/constructo/index.html">
        <div class="single-input-searchbox">
            <input type="text" placeholder="Search Here....">
            <button class="fa fa-search"></button>
        </div>
    </form>
</div>
<!-- start nav and topbar area -->
@include('partials.header')

<section class="constructo-serivces-section section-padding" style="background: #f4f5f9;
   ">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="section-title">
                    <h2>MEET OUR TEAM</h2>
                    {{--       <p style="font-size: 22px;">We are an alliance of creative professionals and  work in combination to reach our clients' goals. Come join the team!</p>
                    --}}       <div class="line">
                        <img src="img/line.png" alt="theconstructo.com">
                    </div>
                </div>
            </div>
        </div>


        <div class="row padding-top" >


            <div class="">


                <div class="text-center">

                    <div class="team-box">
                        <div class="team-img">
                            <img style="height: 235px; width: 270px" src="uploads/{{ $staffs[0]->image }}">
                        </div>

                        <div class="ourteam-content">
                            <h3>Mr.  {{ $staffs[0]->name }}</h3>
                            <h4>{{ $staffs[0]->department }}</h4>
                            <p>{{ $staffs[0]->message }}</p>
                            <a href="/uploads/{{ $staffs[0]->resume }}"><u>View Resume</u></a>
                            <br><br>

                        </div>


                    </div>
                </div>

            </div>


        </div>



        <div class="row padding-top">
            @for ($i = 1; $i < sizeOf($staffs); $i++)


                <div class="col-sm-4 text-center">


                    <div class="team-box">
                        <div class="team-img">
                            <img style="height: 207px; width: 230px" src="uploads/{{ $staffs[$i]->image }}">
                        </div>
                        <br>
                        <div class="ourteam-content">
                            <h3>Mr.  {{ $staffs[$i]->name }}</h3>
                            <h4>{{ $staffs[$i]->department }}</h4>
                            <p>{{ $staffs[$i]->message }}</p>
                            <a href="/uploads/{{ $staffs[$i]->resume }}"><u>View Resume</u> </a>

                        </div>
                        <br>


                    </div>
                </div>

            @endfor
        </div>
    </div>
    <br>


</section>
<!-- end of services section -->
<!-- start services countdown section -->
{{--  <section class="constructo-count-down section-padding">
      <div class="container">
          <div class="row">
              <div class="col-sm-3 text-center text-uppercase">
                  <div class="single-countdown">
                      <div class="count-icon">
                          <img src="img/count-1.png" alt="theconstructo.com">
                      </div>
                      <h2 class="counter">574</h2>
                      <h4>project completed</h4>
                  </div>
              </div>
              <div class="col-sm-3 text-center text-uppercase">
                  <div class="single-countdown">
                      <div class="count-icon">
                          <img src="img/count-2.png" alt="theconstructo.com">
                      </div>
                      <h2 class="counter">5754</h2>
                      <h4>workers & stuffs</h4>
                  </div>
              </div>
              <div class="col-sm-3 text-center text-uppercase">
                  <div class="single-countdown">
                      <div class="count-icon">
                          <img src="img/count-3.png" alt="theconstructo.com">
                      </div>
                      <h2 class="counter">78</h2>
                      <h4>DIGGING equipments</h4>
                  </div>
              </div>
              <div class="col-sm-3 text-center text-uppercase">
                  <div class="single-countdown">
                      <div class="count-icon">
                          <img src="img/count-4.png" alt="theconstructo.com">
                      </div>
                      <h2 class="counter">13</h2>
                      <h4>award winning projects</h4>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- end of count down section -->
  <!-- start client say section -->
  <section class="constructo-client-section section-padding">
      <div class="container">
          <div class="row detailst-for">
              <div class="col-xs-12 text-center">
                  <div class="imrn-client-details">
                      <i class="fa fa-quote-left"></i>
                      <p>This rank tracker has the best UI out of all hosted trackers I have used. Plus it's cheap and fast,</p>
                      <p> I'll send my friends over.</p>
                      <div class="client-name">
                          <h4>Emma Watt</h4>
                          <p>Kingfisher, CEO</p>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 text-center">
                  <div class="imrn-client-details">
                      <i class="fa fa-quote-left"></i>
                      <p>This tool makes it convenient to share a site for critiquing and gathering feedback, relying on the social </p>
                      <p>web's unrestrained penchant for talking about things. This tool is.</p>
                      <div class="client-name">
                          <h4>Emma Watt</h4>
                          <p>Kingfisher, CEO</p>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 text-center">
                  <div class="imrn-client-details">
                      <i class="fa fa-quote-left"></i>
                      <p>This tool makes it convenient to share a site for critiquing and gathering feedback, relying on the social </p>
                      <p>web's unrestrained penchant for talking about things. This tool is.</p>
                      <div class="client-name">
                          <h4>Emma Watt</h4>
                          <p>Kingfisher, CEO</p>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 text-center">
                  <div class="imrn-client-details">
                      <i class="fa fa-quote-left"></i>
                      <p>This rank tracker has the best UI out of all hosted trackers I have used. Plus it's cheap and fast,</p>
                      <p> I'll send my friends over.</p>
                      <div class="client-name">
                          <h4>Emma Watt</h4>
                          <p>Kingfisher, CEO</p>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 text-center">
                  <div class="imrn-client-details">
                      <i class="fa fa-quote-left"></i>
                      <p>This tool makes it convenient to share a site for critiquing and gathering feedback, relying on the social </p>
                      <p>web's unrestrained penchant for talking about things. This tool is.</p>
                      <div class="client-name">
                          <h4>Emma Watt</h4>
                          <p>Kingfisher, CEO</p>
                      </div>
                  </div>
              </div>
              <div class="col-xs-12 text-center">
                  <div class="imrn-client-details">
                      <i class="fa fa-quote-left"></i>
                      <p>This rank tracker has the best UI out of all hosted trackers I have used. Plus it's cheap and fast,</p>
                      <p> I'll send my friends over.</p>
                      <div class="client-name">
                          <h4>Emma Watt</h4>
                          <p>Kingfisher, CEO</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="details-nav">
                      <div class="col-sm-2">
                          <div class="single-img">
                              <img src="img/client-1.png" alt="theconstructo.com">
                          </div>
                      </div>
                      <div class="col-sm-2">
                          <div class="single-img">
                              <img src="img/client-2.png" alt="theconstructo.com">
                          </div>
                      </div>
                      <div class="col-sm-2">
                          <div class="single-img">
                              <img src="img/client-3.png" alt="theconstructo.com">
                          </div>
                      </div>
                      <div class="col-sm-2">
                          <div class="single-img">
                              <img src="img/client-4.png" alt="theconstructo.com">
                          </div>
                      </div>
                      <div class="col-sm-2">
                          <div class="single-img">
                              <img src="img/client-5.png" alt="theconstructo.com">
                          </div>
                      </div>
                      <div class="col-sm-2">
                          <div class="single-img">
                              <img src="img/client-1.png" alt="theconstructo.com">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- end of client say section -->
  <!-- start band section -->
  <div class="constructo-brand-section">
      <div class="container">
          <div class="row constructo-brand-slider text-center">
              <div class="col-sm-2">
                  <div class="brand-img"><img src="img/brand-1.png" alt="theconstructo.com"></div>
              </div>
              <div class="col-sm-2">
                  <div class="brand-img"><img src="img/brand-5h.png" alt="theconstructo.com"></div>
              </div>
              <div class="col-sm-2">
                  <div class="brand-img"><img src="img/brand-2.png" alt="theconstructo.com"></div>
              </div>
              <div class="col-sm-2">
                  <div class="brand-img"><img src="img/brand-3.png" alt="theconstructo.com"></div>
              </div>
              <div class="col-sm-2">
                  <div class="brand-img"><img src="img/brand-4.png" alt="theconstructo.com"></div>
              </div>
              <div class="col-sm-2">
                  <div class="brand-img"><img src="img/brand-5h.png" alt="theconstructo.com"></div>
              </div>
          </div>
      </div>
  </div>
--}}  <!-- end of brand section -->
<!-- start footer top section -->
{{-- <section class="constructo-footer-top section-padding">
     <div class="container">
         <div class="row">
             <div class="col-xs-12 text-center">
                 <div class="footer-top-content">
                     <h2>Ok ! Let's Get Started Now.</h2>
                     <p>Maecenas scelerisque felis ornare placerat tempus. In turpis nisi, viverra hendrerit dolor vel, auctor blandit sapien.</p>
                     <a href="#" class="contat-usf">CONTACT US</a>
                     <a href="#" class="learn-moref">LEARN MORE</a>
                 </div>
             </div>
         </div>
     </div>
 </section>
--}}


@include('partials.footer')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn4uayw359fjMh4P9i2rKKZYHzXaqTRNs"></script>
<!-- jquery min js -->
<script src="js/jquery.min.js"></script>
<!-- jquery waypoints -->
<script src="js/waypoints.min.js"></script>
<!-- jquery easing js -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- rippler js -->
<script src="js/jquery.rippler.min.js"></script>
<!-- bootstra js -->
<script src="js/bootstrap.min.js"></script>
<!-- jquery nav js -->
<script src="js/jquery.nav.js"></script>
<!-- jquery sticky js -->
<script src="js/jquery.sticky.js"></script>
<!-- slick js -->
<script src="slick/slick.min.js"></script>
<!-- jquery counter up -->
<script src="js/jquery.counterup.min.js"></script>
<!-- jqeury isotop filtaring plugins -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- jquery magnifiq popup    -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- parallax -->
<script src="js/parallax.min.js"></script>
<!-- jquery active js -->
<script src="js/active.js"></script>
</body>


<!-- Mirrored from www.kazierfan.com/themes/construcdo/constructo/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Mar 2018 04:53:54 GMT -->
</html>
