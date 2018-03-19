
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="js/jquery.min.js"></script>


<script>
    $(document).ready(function () {
        $('li.active').removeClass('active');
        $('a[href="' + location.pathname + '"]').closest('li').addClass('active');
    });
</script>





<div class="constructo-navtop-area">
    <div class="constructo-menu-area">
        <nav class="navbar">
            <div class="container">

                <div class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <ul class="topaddres">
                                    <li><span class="fa fa-phone"></span>{{$aboutus[0]->mobile}}</li><br>
                                    <li><span class="fa fa-envelope"></span>{{$aboutus[0]->email}}</li>


                                </ul>




                            </div>











                      {{--  <div class="col-sm-6 text-right">
                                  <div class="social-link">
                                      <a href="#" class="fa fa-facebook"></a>
                                      <a href="#" class="fa fa-twitter"></a>
                                      <a href="#" class="fa fa-google"></a>
                                      <a href="#" class="fa fa-pinterest"></a>
                                      <a href="#" class="fa fa-dribbble"></a>
                                      <a href="#" class="fa fa-vine"></a>
                                      <a href="#" class="fa fa-linkedin"></a>
                                      <a href="#" class="fa fa-rss"></a>
                                  </div>
                              </div>--}}
                        </div>



                    </div>
                </div>

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="" href="/index"><img style="height: 62px; width: 100%;" src="uploads/{{$aboutus[0]->logo}}" alt="uploads/{{$aboutus[0]->logo}}"></a>

                   {{-- <a class="" href="/index"><img style="height: 62px;" src="uploads/nepal.png" alt="uploads/{{$aboutus[0]->logo}}">
                        <h style="color: darkorange; font-size: 18px"> {{$mytime}}</h>

                    </a>
                    <a></a>

--}}

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav menu navbar-nav navbar-right">
                        <li class="active"><a href="/index">HOME</a></li>
                        <li><a href="/about">ABOUT</a></li>
                        <li><a href="/ourteam">OUR TEAM</a></li>

                        <li><a href="/services">SERVICES</a></li>


                        <li class="dropdown">
                            <a class="dropdown-toggle" class="active" data-toggle="dropdown" href="#">PROJECTS
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/projectongoing">Ongoing Projects</a></li>
                                <li><a href="/projectcompleted">Completed Projects</a></li>
                            </ul>
                        </li>
                        <li><a href="/contact">CONTACT</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
</div>
