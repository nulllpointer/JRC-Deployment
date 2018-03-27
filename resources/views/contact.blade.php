<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.kazierfan.com/themes/construcdo/constructo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Mar 2018 04:54:53 GMT -->
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
    <!-- end nav and topbar area -->
  {{--   <section class="constructo-page-title-area parallaxsection">
    <div class="parallax-windowf" data-parallax="scroll" data-image-src="img/home1.jpg"></div>
        <div class="display-cell">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-left">
                        <div class="constructo-page-title">
                            <h1>KEEP</h1>
                            <h1 class="titlecolor">IN TOUCH</h1>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><a href="#">Contact</a></li>
                            </ol>
                            <img src="img/linew.png" alt="theconstructo.com">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  --}}  <!-- end of home area -->
   {{-- <section class="constructo-get-quote-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-left">
                    <div class="get-quate-content">
                        <h2>HANDLE YOUR PROJECT WITH PROFESSIONALS</h2>
                        <p>Maecenas scelerisque felis ornare placerat tempus. In turpis nisi, viverra hendrerit dolor vel, auctor blandit sapien. Aenean quis venenatis felis, adipiscing pretium nunc.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <div class="get-btn">
                        <a href="#">GET A QUOTE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- end of get quate area -->
    <!-- start features area -->
    <!-- end of features area -->
    <!-- start contact form area -->
    <section class="constructo-contactUs-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="section-title">
                        <h2>CONTACT US</h2>
                        <p>Give us a call, send us an email or a letter-or drop by to have a chat. We are always here to help out in whatever way we can.</p>
                        <div class="line">
                            <img src="img/linew.png" alt="theconstructo.com">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row padding-top">
                <div class="col-sm-5">
                    <div class="google-map-area">
                        <div class="googlemap" id="gmap" style="height: 385px">
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <h2 style="color: black;">Complete your details and we will contact you shortly</h2>


                    <form id="contact-form" method="post" action="/sendform" role="form">
                        {{ csrf_field() }}

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6" style="    margin-top: 20px;">
                                    <div class="form-group">
                                        <label for="form_name">&nbsp&nbspFirstname *</label>
                                        <input style="font-size: small;" id="form_name" type="text" name="name"
                                               class="form-control" placeholder="Please enter your firstname"
                                               required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" style="    margin-top: 20px;">
                                    <div class="form-group">
                                        <label for="form_lastname">&nbsp&nbspLastname *</label>
                                        <input style="font-size: small;" id="form_lastname" type="text" name="surname"
                                               class="form-control" placeholder="Please enter your lastname" required="required"
                                               data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">&nbsp&nbspEmail *</label>
                                        <input style="font-size: small;" id="form_email" type="email" name="email"
                                               class="form-control" placeholder="Please enter your email" required="required"
                                               data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">&nbspPhone *</label>
                                        <input style="font-size: small;" id="form_phone" type="tel" name="phone"
                                               class="form-control" placeholder="Please enter your phone" required="required"
                                               data-error="Valid phone number is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">&nbsp&nbspMessage *</label>
                                        <textarea style="padding-left: 0px;font-size: small;" id="form_message" name="message" class="form-control" placeholder="  Message for me " rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                {{--  <div class="col-md-12">
                                      <div class="form-group">
                                          <!-- Replace data-sitekey with your own one, generated at https://www.google.com/recaptcha/admin -->
                                          <div class="g-recaptcha" data-sitekey="6LfQH0UUAAAAAD_kdC3csxLUHV9SlS33tZqLpK9u"></div>
                                      </div>
                                  </div>
        --}}
                                <div class="col-md-12">
                                    <input   type="submit" class="btn btn-success btn-send"  value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are required. </p>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Copyright section -->
     <section class="constructo-features-area section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-sm-6 col-md-3 text-center">
                      <div class="single-features">
                          <div class="features-icon">
                              <img src="img/con1h.png" class="ficon3" alt="theconstructo.com">
                              <div class="ficonh">
                                  <img src="img/con1h.png" alt="theconstructo.com">
                              </div>
                          </div>
                          <h4>ADDRESS</h4>
                          <p>{{$aboutus[0]->address}}</p>
                          <p>Mahendranagar, Nepal</p>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3 text-center">
                      <div class="single-features">
                          <div class="features-icon">
                              <img src="img/con2h.png" class="ficon3" alt="theconstructo.com">
                              <div class="ficonh">
                                  <img src="img/con2h.png" alt="theconstructo.com">
                              </div>
                          </div>
                          <h4>PHONE NUMBERS</h4>
                          <p>Contact : {{$aboutus[0]->mobile}}</p>
                          <p>Name : Harendra Kalauni</p>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3 text-center">
                      <div class="single-features">
                          <div class="features-icon">
                              <img src="img/con3h.png" class="ficon3" alt="theconstructo.com">
                              <div class="ficonh">
                                  <img src="img/con3h.png" alt="theconstructo.com">
                              </div>
                          </div>
                          <h4>E-MAIL</h4>
                          <p>{{$aboutus[0]->email}}</p>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3 text-center">
                      <div class="single-features">
                          <div class="features-icon">
                              <img src="img/con4h.png" class="ficon3" alt="theconstructo.com">
                              <div class="ficonh">
                                  <img src="img/con4h.png" alt="theconstructo.com">
                              </div>
                          </div>
                          <h4>WORKING HOURS</h4>
                          <p>Sun to Fri : 0900 - 1900</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>


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
    <!-- google map -->
    <script src="js/gmap.js"></script>
    <!-- jquery active js -->
    <script src="js/active.js"></script>
</body>


<!-- Mirrored from www.kazierfan.com/themes/construcdo/constructo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Mar 2018 04:54:57 GMT -->
</html>
