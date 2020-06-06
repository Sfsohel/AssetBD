<!DOCTYPE html>
<html lang="en">

<head>
    <title>Assets BD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="site-loader"></div>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-8 col-md-8 col-lg-4">
                    <a href="{{route('root')}}" class="h5 text-uppercase text-black">
                        <img class="header-logo" src="{{asset('images/logo.png')}}" alt="assetsBD">
                    </a>
                </div>
                <div class="col-4 col-md-4 col-lg-8">
                    <nav class="site-navigation text-right text-md-right" role="navigation">

                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                                                                      class="site-menu-toggle js-menu-toggle text-black"><span
                                    class="icon-menu h3"></span></a></div>

                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="active">
                                <a href="{{route('root')}}">Home</a>
                            </li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li>
                                <a href="{{route('properties')}}">Properties</a>
                            </li>
                            <li><a href="{{route('blog')}}">Blog</a></li>

                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </div>
</div>

{{--<div class="slide-one-item home-slider owl-carousel">

    <div class="site-blocks-cover" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade"
         data-stellar-background-ratio="0.5">


        <!--
                    <div class="text">
                        <h2>Find your properties in Bangladesh</h2>
                        <p class="location"><span class="property-icon icon-room"></span>607 Los Angeles, CA 90005</p>
                        <p class="mb-2"><strong>$2,250,500</strong></p>


                        <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>

                    </div>
        -->

    </div>


    <div class="site-blocks-cover" style="background-image: url(images/hero_bg_3.jpg);" data-aos="fade"
         data-stellar-background-ratio="0.5">


        <!--
                    <div class="text">
                        <h2>Find your properties in Bangladesh</h2>
                        <p class="location"><span class="property-icon icon-room"></span>607 Los Angeles, CA 90005</p>
                        <p class="mb-2"><strong>$2,250,500</strong></p>


                        <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>

                    </div>
        -->


    </div>


</div>--}}

<div class="slide-one-item home-slider owl-carousel">
    <div class="site-blocks-cover" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">

        <div class="text">
            <h1 class="text-center">Search Your Next Property</h1>

            <div class="row">
                <div class="col-8">
                    <input type="slidertext" id="fname" name="fname" value="John">
                </div>
                <div class="col-4">
                    <input type="slidertext" id="fname" name="fname" value="Doe">
                </div>

                <div class="col-4">
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0 search-textbox">
                        <option value="">Residential</option>
                        <option value="">Apartment</option>
                        <option value="">Penthouse</option>
                        <option value="">Plaza</option>
                        <option value="">Plot</option>
                        <option value="">Room</option>
                        <option value="">Duplex</option>
                        <option value="">Building</option>
                    </select>
                </div>

                <div class="col-4">
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0 search-mid-textbox">
                        <option value="">Commercial</option>
                        <option value="">Office</option>
                        <option value="">Floor</option>
                        <option value="">Duplex</option>
                        <option value="">Building</option>
                        <option value="">Shop</option>
                        <option value="">Apartment</option>
                        <option value="">Plaza</option>
                        <option value="">Plot</option>
                    </select>
                </div>

                <div class="col-4">
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0 search-textbox">
                        <option value="">Bedrooms</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5+">5+</option>
                    </select>
                </div>

                <div class="col-4">
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0 search-textbox">
                        <option value="">Residential</option>
                        <option value="">Apartment</option>
                        <option value="">Penthouse</option>
                        <option value="">Plaza</option>
                        <option value="">Plot</option>
                        <option value="">Room</option>
                        <option value="">Duplex</option>
                        <option value="">Building</option>
                    </select>
                </div>

                <!--
                                     <div class="col-4">
                                        <select name="offer-types" id="offer-types" class="form-control d-block rounded-0 search-mid-textbox">
                                            <option value="">Residential</option>
                                            <option value="">Apartment</option>
                                            <option value="">Penthouse</option>
                                            <option value="">Plaza</option>
                                            <option value="">Plot</option>
                                            <option value="">Room</option>
                                            <option value="">Duplex</option>
                                            <option value="">Building</option>
                                        </select>
                                    </div>
                -->
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="mb-4">
                        <div id="slider-range" class="border-primary"></div>
                        <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white">
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<div class="pt-5">
    <div class="container">

        <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="site-section-title">
                    <h2>Find your desire properties</h2>
                </div>
            </div>
        </div>

        <form class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <span class="icon icon-arrow_drop_down"></span>
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                        <option value="">Lot Area</option>
                        <option value="1000">1000</option>
                        <option value="800">800</option>
                        <option value="600">600</option>
                        <option value="400">400</option>
                        <option value="200">200</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <span class="icon icon-arrow_drop_down"></span>
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                        <option value="">Property Status</option>
                        <option value="For Sale">For Sale</option>
                        <option value="For Rent">For Rent</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <span class="icon icon-arrow_drop_down"></span>
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                        <option value="">Location</option>
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Canada">Canada</option>
                        <option value="Belgium">Belgium</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <span class="icon icon-arrow_drop_down"></span>
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                        <option value="">Property Type</option>
                        <option value="1000">Residential</option>
                        <option value="800">Commercial</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <span class="icon icon-arrow_drop_down"></span>
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                        <option value="">Bedrooms</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5+">5+</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <span class="icon icon-arrow_drop_down"></span>
                    <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                        <option value="">Bathrooms</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5+">5+</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="mb-4">
                    <div id="slider-range" class="border-primary"></div>
                    <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled=""/>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <input type="submit" style="background-color: #308221"
                       class="btn btn-primary btn-block form-control-same-height rounded-0" value="Find">
            </div>

        </form>


    </div>
</div>
<div class="site-section site-section-sm bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <div class="site-section-title">
                    <h2>New Properties for You</h2>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure>
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">$1,930,000</span>
                            <button type="button" class="btn btn-info product_button"><i class="fas fa-phone"
                                                                                         style="color: white"></i>
                            </button>
                            <button type="button" class="btn btn-info product_button"><i class="fas fa-envelope"
                                                                                         style="color: white"></i>
                            </button>
                            <h3 class="title">853 S Lucerne Blvd</h3>
                            <p class="location">Los Angeles, CA 90005</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>240m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Beds:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Baths:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Garages:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure>
                        <img src="images/img_2.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">$2,438,000</span>
                            <button type="button" class="btn btn-info product_button"><i class="fas fa-phone"
                                                                                         style="color: white"></i>
                            </button>
                            <button type="button" class="btn btn-info product_button"><i class="fas fa-envelope"
                                                                                         style="color: white"></i>
                            </button>
                            <h3 class="title">853 S Lucerne Blvd</h3>
                            <p class="location">Los Angeles, CA 90005</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>240m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Beds:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Baths:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Garages:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure>
                        <img src="images/img_3.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">$5,320,000</span>
                            <button type="button" class="btn btn-info product_button"><i class="fas fa-phone"
                                                                                         style="color: white"></i>
                            </button>
                            <button type="button" class="btn btn-info product_button"><i class="fas fa-envelope"
                                                                                         style="color: white"></i>
                            </button>
                            <h3 class="title">853 S Lucerne Blvd</h3>
                            <p class="location">Los Angeles, CA 90005</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>240m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Beds:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Baths:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Garages:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure>
                        <img src="images/img_4.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">$2,350,000</span>
                            <button type="button" class="btn btn-info product_button"><i class="fas fa-phone"
                                                                                         style="color: white"></i>
                            </button>
                            <button type="button" class="btn btn-info product_button"><i class="fas fa-envelope"
                                                                                         style="color: white"></i>
                            </button>
                            <h3 class="title">853 S Lucerne Blvd</h3>
                            <p class="location">Los Angeles, CA 90005</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>240m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Beds:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Baths:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Garages:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure>
                        <img src="images/img_5.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">$1,550,000</span>
                            <button type="button" class="btn btn-info product_button"><i class="fas fa-phone"
                                                                                         style="color: white"></i>
                            </button>
                            <button type="button" class="btn btn-info product_button"><i class="fas fa-envelope"
                                                                                         style="color: white"></i>
                            </button>
                            <h3 class="title">853 S Lucerne Blvd</h3>
                            <p class="location">Los Angeles, CA 90005</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>240m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Beds:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Baths:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Garages:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="property-details.html" class="prop-entry d-block">
                    <figure>
                        <img src="images/img_6.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <div class="prop-text">
                        <div class="inner">
                            <span class="price rounded">$4,291,000</span>
                            <button type="button" class="btn btn-info product_button"><i class="fas fa-phone"
                                                                                         style="color: white"></i>
                            </button>
                            <button type="button" class="btn btn-info product_button"><i class="fas fa-envelope"
                                                                                         style="color: white"></i>
                            </button>
                            <h3 class="title">853 S Lucerne Blvd</h3>
                            <p class="location">Los Angeles, CA 90005</p>
                        </div>
                        <div class="prop-more-info">
                            <div class="inner d-flex">
                                <div class="col">
                                    <span>Area:</span>
                                    <strong>240m<sup>2</sup></strong>
                                </div>
                                <div class="col">
                                    <span>Beds:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Baths:</span>
                                    <strong>2</strong>
                                </div>
                                <div class="col">
                                    <span>Garages:</span>
                                    <strong>1</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <!--
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="site-pagination">
          <a href="#" class="active">1</a>
          <a href="#">2</a>
          <a href="#">3</a>
          <a href="#">4</a>
          <a href="#">5</a>
          <span>...</span>
          <a href="#">10</a>
        </div>
      </div>
    </div>
-->

    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center mb-5">
                <div class="site-section-title">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="#" class="service text-center border rounded">
                    <span class="icon flaticon-house"></span>
                    <h2 class="service-heading">Research Subburbs</h2>
                    <p><span class="read-more">Learn More</span></p>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="#" class="service text-center border rounded">
                    <span class="icon flaticon-sold"></span>
                    <h2 class="service-heading">Sold Houses</h2>
                    <p><span class="read-more">Learn More</span></p>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="#" class="service text-center border rounded">
                    <span class="icon flaticon-camera"></span>
                    <h2 class="service-heading">Security Priority</h2>
                    <p><span class="read-more">Learn More</span></p>
                </a>
            </div>

            <div class="col-md-6 col-lg-4 mb-4">
                <a href="#" class="service text-center border rounded">
                    <span class="icon flaticon-house"></span>
                    <h2 class="service-heading">Research Subburbs</h2>
                    <p><span class="read-more">Learn More</span></p>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="#" class="service text-center border rounded">
                    <span class="icon flaticon-sold"></span>
                    <h2 class="service-heading">Sold Houses</h2>
                    <p><span class="read-more">Learn More</span></p>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <a href="#" class="service text-center border rounded">
                    <span class="icon flaticon-camera"></span>
                    <h2 class="service-heading">Security Priority</h2>
                    <p><span class="read-more">Learn More</span></p>
                </a>
            </div>
        </div>
    </div>
</div>

<!--
<div class="site-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center">
        <div class="site-section-title">
          <h2>Our Blog</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
        <a href="#"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
        <div class="p-4 bg-white">
          <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
          <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
        <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
        <div class="p-4 bg-white">
          <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
          <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
        <a href="#"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
        <div class="p-4 bg-white">
          <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
          <h2 class="h5 text-black mb-3"><a href="#">When To Sell &amp; How Much To Sell?</a></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
        </div>
      </div>

    </div>

  </div>
</div>
-->


<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7">
                <div class="site-section-title text-center">
                    <h2>Clients Feedback</h2>
                </div>
            </div>
        </div>
        <div class="row block-13">

            <div class="nonloop-block-13 owl-carousel">

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/jackie.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam
                                non quis facere blanditiis praesentium est. </p>
                            <p>
                                <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/jackie.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam
                                non quis facere blanditiis praesentium est. </p>
                            <p>
                                <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/jackie.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam
                                non quis facere blanditiis praesentium est. </p>
                            <p>
                                <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/jackie.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam
                                non quis facere blanditiis praesentium est. </p>
                            <p>
                                <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/jackie.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam
                                non quis facere blanditiis praesentium est. </p>
                            <p>
                                <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/jackie.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam
                                non quis facere blanditiis praesentium est. </p>
                            <p>
                                <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/jackie.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam
                                non quis facere blanditiis praesentium est. </p>
                            <p>
                                <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/jackie.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam
                                non quis facere blanditiis praesentium est. </p>
                            <p>
                                <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slide-item">
                    <div class="team-member text-center">
                        <img src="images/jackie.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                        <div class="text p-3">
                            <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                            <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam
                                non quis facere blanditiis praesentium est. </p>
                            <p>
                                <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                                <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="site-section site-section-sm main_color">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2 class="text-white">Wide Range of Properties Just For You</h2>
                <p class="lead text-white-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4 text-center">
                <a href="#" class="btn btn-outline-primary btn-block py-3 btn-lg">See Properties</a>
            </div>
        </div>
    </div>
</div>


<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-5">
                    <h3 class="footer-heading mb-4">About HomeSpace</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero
                        atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis
                        blanditiis, minima minus odio!</p>
                </div>


            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Navigations</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Buy</a></li>
                            <li><a href="#">Rent</a></li>
                            <li><a href="#">Properties</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>


            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Follow Us</h3>
                <div>
                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
            </div>

        </div>

    </div>
</footer>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/mediaelement-and-player.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>

</html>
