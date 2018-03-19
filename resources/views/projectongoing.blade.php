<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.kazierfan.com/themes/construcdo/constructo/single-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Mar 2018 04:54:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JR Consultant | Civil Engineering Consultancy</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
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
<!-- end nav and topbar area -->
{{--  <section class="constructo-page-title-area parallaxsection">
 <div class="parallax-windowf" data-parallax="scroll" data-image-src="img/home1.jpg"></div>
     <div class="display-cell">
         <div class="container">
             <div class="row">
                 <div class="col-xs-12 text-left">
                     <div class="constructo-page-title">
                         <h1>OUR</h1>
                         <h1 class="titlecolor">Services</h1>
                         <ol class="breadcrumb">
                             <li><a href="/index">Home</a></li>
                             <li class="active"><a href="/services">services</a></li>
                         </ol>
                         <img src="img/linew.png" alt="theconstructo.com">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
--}} <!-- end of home area -->
{{--  <section class="constructo-get-quote-area">
      <div class="container">
          <div class="row">
              <div class="col-sm-8 text-left">
                  <div class="get-quate-content">
                      <h2>HANDLE YOUR PROJECT WITH PROFESSIONALS</h2>
                      <p>JRC possesses over 28 years of experience working with variety of infrastructure development projects and we strongly believe in high quality services and customer satisfaction.</p>

                  </div>

          </div>
      </div>
  </section>
--}}  <!-- end of get quate area -->
<!-- start news section -->
<section class="constructo-news-post-area section-padding" style=" background: url(uploads/bg7.jpg) no-repeat center center / cover;
   ">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <div class="single-news-post">
                    {{-- <div class="news-post-img">
                         <img src="img/survey.jpg" alt="theconstructo.com">
                     </div>
                    --}}
                    <h2 style="color: #fba919;">We are working on these projects currently</h2>

                    @for($i=0;$i<sizeof($projectongoing);$i++)
                        <div id="{{$i}}">
                            <div class="post-title">
                                <h2>{{ $projectongoing[$i]->ongoingprojecttitle }}</h2>
                            </div>
                            <div class="row single-news-paddintnew">

                                <div class="col-md-12">
                                    <div class="about-list">
                                        <ul>
                                            <li><b>Scope: </b>{{ $projectongoing[$i]->ongoingprojectdescription }}  </li>

                                            <li><b>Location: </b>{{ $projectongoing[$i]->ongoingprojectlocation }}
                                            </li>
                                         {{--   <li><b>Clients:</b>> {{ $projectongoing[$i]->ongoingprojectclient }}
                                            </li>
--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endfor


                </div>
            </div>
            <div class="col-sm-5 col-md-4">
                <div class="sidebar-area">
                    <div class="single-sidebar">
                        <div class="widget-title text-center">
                            <h2>ONGOING PROJECTS</h2>
                            <img src="img/line.png" alt="theconstructo.com">
                        </div>
                        <div class="features-side-slider">
                            <div class="single-side-featuresnew">

                                @for($i=0;$i<sizeof($projectongoing);$i++)

                                <a href="#{{$i}}">

                                    <div class="side-titlenew">

                                        <p> {{ $projectongoing[$i]->ongoingprojecttitle }}
                                        </p>
                                    </div>
                                    <br>
                                </a>
                                @endfor

                                <br>


                            </div>
                            {{--
                                                        <div class="single-side-featuresnew">
                                                            <a href="#6">

                                                                <div class="side-titlenew">
                                                                    <p>Madhya Daram Khola-A
                                                                    </p>
                                                                </div>
                                                                <br>
                                                            </a>
                                                            <a href="#7">

                                                                <div class="side-titlenew">
                                                                    <p>Madhya Daram Khola-B
                                                                    </p>
                                                                </div>
                                                                <br>
                                                            </a>
                                                            <a href="#8">

                                                                <div class="side-titlenew">
                                                                    <p>Jahare Lek Jhingni
                                                                    </p>
                                                                </div>
                                                                <br>
                                                            </a>
                                                            <a href="#9">

                                                                <div class="side-titlenew">
                                                                    <p>Mehelkuna Lake Bada Kholi
                                                                    </p>
                                                                </div>
                                                                <br>
                                                            </a>
                                                            <a href="#10">

                                                                <div class="side-titlenew">
                                                                    <p>Man Mohan Memorial Medical College
                                                                    </p>
                                                                </div>
                                                            </a>
                                                            <br>

                                                        </div>
                            --}}


                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- end of news section -->
<!-- start footer top section -->
{{--  <section class="constructo-footer-top section-padding">
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


<!-- Mirrored from www.kazierfan.com/themes/construcdo/constructo/single-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Mar 2018 04:54:57 GMT -->
</html>
