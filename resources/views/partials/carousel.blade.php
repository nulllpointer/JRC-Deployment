<div id="carouselExampleSlidesOnly" class="carousel carousel-fullscreen slide"
     data-ride="carousel">
    <div class="carousel-inner">

        @for ($i = 0; $i < count($carousel); $i++)
            <div class="item {{$i==0?'active':''}}">
                <img  src="{{ asset($carousel[$i]->pic_url) }}" caption="{{$i}}" alt="{{$carousel[$i]->pic_alt_name}}"
                     class="img-responsive"
                     data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
            </div>
        @endfor



    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <div id="caption-container">

        @for ($i = 0; $i < count($carousel); $i++)
            <div class="carousel-caption caption-{{$i}}">
                <h3>{{$carousel[$i]->caption_heading}}</h3>
                <p>{{$carousel[$i]->caption_desc}}</p>
                <span class="page-scroll"><a href="{{$carousel[$i]->btn_url}}"
                                             class="btn-u btn-brd btn-brd-hover btn-u-light">{{$carousel[$i]->btn_text}}</a></span>
            </div>
        @endfor

    </div>
    <div class="tp-dottedoverlay twoxtwo"></div>
</div>



