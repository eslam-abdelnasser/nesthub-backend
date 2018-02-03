@extends('layout')



@section('content')
    <!-- Banner start -->
    <section class="banner">
        <div class="pattern-overlay">
                <!-- Wrapper for slides -->
                <div id="ereen" class="backstretch" role="">
                    <div class="item active">
                        <div class="ovarlay">
                            <div class="container">
                                <div class="">
                                    <div class="text-center capption">
                                        <h1 data-animation="animated fadeInUp delay-05s" style="font-weight: bold;font-size: 62px;letter-spacing: -6px;"><span style="font-weight: bold;color: #ffb400;font-size: 62px;letter-spacing: -6px;">Welcome to</span> NestHub</h1>
                                        <h3 style="    letter-spacing: 7px;font-size: 30px;font-weight: 300;">THE HOME OF YOUR STARTUP DESERVE</h3> </div>
                                    <div class="text-center" >
                                        <form method="GET">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                    <div class="form-group">
                                                        <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value">
                                                            <option style="display:none;" selected>Location</option>
                                                            <option>Cairo</option>
                                                            <option>Giza</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                    <div class="form-group">
                                                        <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                                                            <option style="display:none;" selected>Category</option>
                                                            <option>STARTUPS</option>
                                                            <option>BIGGER BUSINESSES</option>
                                                            <option>AGENCIES</option>
                                                            <option>FREELANCERS</option>
                                                            <option>EVERYONE</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                    <div class="form-group">
                                                        <button class="btn btn-lg pop-button  " id="button" data-popup-open="popup-1" href="#">Select No Of Desks </button>
                                                        <div class="popup" data-popup="popup-1">
                                                            <div class="popup-inner">
                                                                <h2>Select No Of Desks :</h2>
                                                                <div class="list">
                                                                    <table>
                                                                        <tr>
                                                                            <td  class="cl" >Any</td>
                                                                            <td  class="cl">7</td>
                                                                            <td  class="cl">14</td>
                                                                            <td  class="cl">40-100</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td  class="cl">1</td>
                                                                            <td  class="cl">8</td>
                                                                            <td  class="cl">15</td>
                                                                            <td  class="cl">101+</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td  class="cl">2</td>
                                                                            <td class="cl">9</td>
                                                                            <td class="cl">16</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="cl">3</td>
                                                                            <td class="cl">10</td>
                                                                            <td class="cl">17</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td  class="cl">4</td>
                                                                            <td  class="cl">11</td>
                                                                            <td  class="cl">15</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td  class="cl">5</td>
                                                                            <td  class="cl">12</td>
                                                                            <td  class="cl">19</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td  class="cl">6</td>
                                                                            <td  class="cl">13</td>
                                                                            <td  class="cl">20-39</td>
                                                                        </tr>
                                                                    </table>

                                                                </div>

                                                                <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                    <div class="form-group">
                                                        <button class="search-button">Search</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="scrollbtm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="#" class="scroll-down" address="true"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner end -->

    <div class=" our-service" style="margin-top: 100px">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1><span>What are you</span> looking for?</h1>
            </div>

            <div class="row wow">
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                    <div class="content">
                        <i class="flaticon-apartment"></i>
                        <h4>Apartments</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                    <div class="content">
                        <i class="flaticon-internet"></i>
                        <h4>Houses</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
                    <div class="content">
                        <i class="flaticon-vehicle"></i>
                        <h4>Garages</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    </div>
                </div>

            </div>
            <a href="#" class="btn button-md button-theme">Read More</a>
        </div>
    </div>

    <!-- Featured properties start -->
    <div class="content-area featured-properties">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1><span>Featured</span> Properties</h1> </div>
            <ul class="list-inline-listing filters filters-listing-navigation">
                <li class="active btn filtr-button filtr" data-filter="all">All</li>
                <li data-filter="1" class="btn btn-inline filtr-button filtr">Startups</li>
                <li data-filter="2" class="btn btn-inline filtr-button filtr">Freelancers</li>
                <li data-filter="3" class="btn btn-inline filtr-button filtr">AGENCIES</li>
                <li data-filter="4" class="btn btn-inline filtr-button filtr">BUSINESSES</li>
            </ul>
            <div class="row">
                <div class="filtr-container">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 2, 3">
                        <div class="col-item property">
                            <div class="photo"> <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" /> </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="main-ti">Second Home - London Fields</h5>
                                                <p class="sub-ti">Shoreditch, London</p>
                                                <p class="sub-ti">Hackney Central (12 mins walk)</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="bot-info">
                                    <div class="separator clear-left">
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office office-type">Hot Disk</p>
                                            <p class="office office-price">&pound;203</p>
                                            <p class="office office-time">Per month</p>
                                        </div>
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office off-color">Fixed Disk</p>
                                            <p class="office auto-margin off-color">&nbsp;</p>
                                            <p class="office off-color">Per month</p>
                                        </div>
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office off-color">Private Office</p>
                                            <p class="office auto-margin off-color">&nbsp;</p>
                                            <p class="office off-color">Per month</p>
                                        </div>
                                    </div>
                                    <div class="shortlist">

                                        <!-- Button trigger modal -->
                                        <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal"> <i class="fa fa-heart"></i>Shortlist </button>
                                        <!-- Button trigger modal -->
                                        <!-- Modal -->
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <style>

                    </style>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
                        <div class="col-item">
                            <div class="photo"> <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" /> </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="main-ti">Second Home - London Fields</h5>
                                                <p class="sub-ti">Shoreditch, London</p>
                                                <p class="sub-ti">Hackney Central (12 mins walk)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="bot-info">
                                    <div class="separator clear-left">
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office office-type">Hot Disk</p>
                                            <p class="office office-price">&pound;203</p>
                                            <p class="office office-time">Per month</p>
                                        </div>
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office off-color">Fixed Disk</p>
                                            <p class="office auto-margin off-color">&nbsp;</p>
                                            <p class="office off-color">Per month</p>
                                        </div>
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office off-color">Private Office</p>
                                            <p class="office auto-margin off-color">&nbsp;</p>
                                            <p class="office off-color">Per month</p>
                                        </div>
                                    </div>
                                    <div class="shortlist">

                                        <!-- Button trigger modal -->
                                        <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal"> <i class="fa fa-heart"></i>Shortlist </button>
                                        <!-- Button trigger modal -->
                                        <!-- Modal -->
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2, 3">
                        <div class="col-item">
                            <div class="photo"> <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" /> </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="main-ti">Second Home - London Fields</h5>
                                                <p class="sub-ti">Shoreditch, London</p>
                                                <p class="sub-ti">Hackney Central (12 mins walk)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="bot-info">
                                    <div class="separator clear-left">
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office office-type">Hot Disk</p>
                                            <p class="office office-price">&pound;203</p>
                                            <p class="office office-time">Per month</p>
                                        </div>
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office off-color">Fixed Disk</p>
                                            <p class="office auto-margin off-color">&nbsp;</p>
                                            <p class="office off-color">Per month</p>
                                        </div>
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office off-color">Private Office</p>
                                            <p class="office auto-margin off-color">&nbsp;</p>
                                            <p class="office off-color">Per month</p>
                                        </div>
                                    </div>
                                    <div class="shortlist">

                                        <!-- Button trigger modal -->
                                        <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal"> <i class="fa fa-heart"></i>Shortlist </button>
                                        <!-- Button trigger modal -->
                                        <!-- Modal -->
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="3, 4">
                        <div class="col-item">
                            <div class="photo"> <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" /> </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="main-ti">Second Home - London Fields</h5>
                                                <p class="sub-ti">Shoreditch, London</p>
                                                <p class="sub-ti">Hackney Central (12 mins walk)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="bot-info">
                                    <div class="separator clear-left">
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office office-type">Hot Disk</p>
                                            <p class="office office-price">&pound;203</p>
                                            <p class="office office-time">Per month</p>
                                        </div>
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office off-color">Fixed Disk</p>
                                            <p class="office auto-margin off-color">&nbsp;</p>
                                            <p class="office off-color">Per month</p>
                                        </div>
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office off-color">Private Office</p>
                                            <p class="office auto-margin off-color">&nbsp;</p>
                                            <p class="office off-color">Per month</p>
                                        </div>
                                    </div>
                                    <div class="shortlist">

                                        <!-- Button trigger modal -->
                                        <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal"> <i class="fa fa-heart"></i>Shortlist </button>
                                        <!-- Button trigger modal -->
                                        <!-- Modal -->
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="4">
                        <div class="col-item">
                            <div class="photo"> <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" /> </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="main-ti">Second Home - London Fields</h5>
                                                <p class="sub-ti">Shoreditch, London</p>
                                                <p class="sub-ti">Hackney Central (12 mins walk)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="bot-info">
                                    <div class="separator clear-left">
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office office-type">Hot Disk</p>
                                            <p class="office office-price">&pound;203</p>
                                            <p class="office office-time">Per month</p>
                                        </div>
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office off-color">Fixed Disk</p>
                                            <p class="office auto-margin off-color">&nbsp;</p>
                                            <p class="office off-color">Per month</p>
                                        </div>
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office off-color">Private Office</p>
                                            <p class="office auto-margin off-color">&nbsp;</p>
                                            <p class="office off-color">Per month</p>
                                        </div>
                                    </div>
                                    <div class="shortlist">

                                        <!-- Button trigger modal -->
                                        <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal"> <i class="fa fa-heart"></i>Shortlist </button>
                                        <!-- Button trigger modal -->
                                        <!-- Modal -->
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
                        <div class="col-item">
                            <div class="photo"> <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" /> </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="main-ti">Second Home - London Fields</h5>
                                                <p class="sub-ti">Shoreditch, London</p>
                                                <p class="sub-ti">Hackney Central (12 mins walk)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="bot-info">
                                    <div class="separator clear-left">
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office office-type">Hot Disk</p>
                                            <p class="office office-price">&pound;203</p>
                                            <p class="office office-time">Per month</p>
                                        </div>
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office off-color">Fixed Disk</p>
                                            <p class="office auto-margin off-color">&nbsp;</p>
                                            <p class="office off-color">Per month</p>
                                        </div>
                                        <div class="col-md-4 col-xs-4 ">
                                            <p class="office off-color">Private Office</p>
                                            <p class="office auto-margin off-color">&nbsp;</p>
                                            <p class="office off-color">Per month</p>
                                        </div>
                                    </div>
                                    <div class="shortlist">

                                        <!-- Button trigger modal -->
                                        <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal"> <i class="fa fa-heart"></i>Shortlist </button>
                                        <!-- Button trigger modal -->
                                        <!-- Modal -->
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured properties end -->
    <!-- Listings parallax start -->
    <div class="listings-parallax clearfix">
        <div class="listings-parallax-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-8 col-xs-12">
                        <h1>We are Here to Help You</h1>
                        <h3>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsa necsagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate.</h3> <a href="#" class="btn button-sm button-theme">Read More</a> </div>
                    <div class="col-lg-offset-3 col-lg-3 col-sm-4 col-xs-12">
                        <div class="contect-agent-photo"> <img src="{{asset('front/img/avatar/avatar-8.png')}}" alt="avatar-6" class="img-responsive"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Listings parallax end -->
    <!-- Agent section start -->
    <div class="content-area agent-section chevron-icon">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1><span>Our</span> Agent</h1> </div>
            <div class="row">
                <div class="carousel our-partners slide" id="ourPartners3">
                    <div class="col-lg-12 mrg-btm-30"> <a class="right carousel-control" href="#ourPartners3" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a> <a class="right carousel-control" href="#ourPartners3" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a> </div>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <!-- Agent box start -->
                                <div class="agent-box">
                                    <div class=""><div class="photo"> <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" /> </div>
                                        <div class="info">
                                            <div class="top-info">
                                                <div class="container-fluid">
                                                    <a href="#"><div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="main-ti">Second Home - London Fields</h5>
                                                                <p class="sub-ti">Shoreditch, London</p>
                                                                <p class="sub-ti">Hackney Central (12 mins walk)</p>
                                                            </div>


                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="bot-info">
                                                <div class="separator clear-left">
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office office-type">Hot Disk</p>
                                                        <p class="office office-price">&pound;203</p>
                                                        <p class="office office-time">Per month</p>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office off-color">Fixed Disk</p>
                                                        <p class="office auto-margin off-color">&nbsp;</p>
                                                        <p class="office off-color">Per month</p>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office off-color">Private Office</p>
                                                        <p class="office auto-margin off-color">&nbsp;</p>
                                                        <p class="office off-color">Per month</p>
                                                    </div>
                                                </div>
                                                <div class="shortlist">

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal"> <i class="fa fa-heart"></i>Shortlist </button>
                                                    <!-- Button trigger modal -->
                                                    <!-- Modal -->
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Agent box end -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <!-- Agent box end -->
                                <div class="agent-box">
                                    <!-- Agent img -->
                                    <div class="">
                                        <div class="photo"> <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" /> </div>
                                        <div class="info">
                                            <div class="top-info">
                                                <div class="container-fluid">
                                                    <a href="#"><div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="main-ti">Second Home - London Fields</h5>
                                                                <p class="sub-ti">Shoreditch, London</p>
                                                                <p class="sub-ti">Hackney Central (12 mins walk)</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="bot-info">
                                                <div class="separator clear-left">
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office office-type">Hot Disk</p>
                                                        <p class="office office-price">&pound;203</p>
                                                        <p class="office office-time">Per month</p>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office off-color">Fixed Disk</p>
                                                        <p class="office auto-margin off-color">&nbsp;</p>
                                                        <p class="office off-color">Per month</p>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office off-color">Private Office</p>
                                                        <p class="office auto-margin off-color">&nbsp;</p>
                                                        <p class="office off-color">Per month</p>
                                                    </div>
                                                </div>
                                                <div class="shortlist">

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal"> <i class="fa fa-heart"></i>Shortlist </button>
                                                    <!-- Button trigger modal -->
                                                    <!-- Modal -->
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Agent box end -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <!-- Agent box start -->
                                <div class="agent-box">
                                    <!-- Agent img -->
                                    <div class="">
                                        <div class="photo"> <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" /> </div>
                                        <div class="info">
                                            <div class="top-info">
                                                <div class="container-fluid">
                                                    <a href="#"><div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="main-ti">Second Home - London Fields</h5>
                                                                <p class="sub-ti">Shoreditch, London</p>
                                                                <p class="sub-ti">Hackney Central (12 mins walk)</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="bot-info">
                                                <div class="separator clear-left">
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office office-type">Hot Disk</p>
                                                        <p class="office office-price">&pound;203</p>
                                                        <p class="office office-time">Per month</p>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office off-color">Fixed Disk</p>
                                                        <p class="office auto-margin off-color">&nbsp;</p>
                                                        <p class="office off-color">Per month</p>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office off-color">Private Office</p>
                                                        <p class="office auto-margin off-color">&nbsp;</p>
                                                        <p class="office off-color">Per month</p>
                                                    </div>
                                                </div>
                                                <div class="shortlist">

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal"> <i class="fa fa-heart"></i>Shortlist </button>
                                                    <!-- Button trigger modal -->
                                                    <!-- Modal -->
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Agent box enx -->
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <!-- Agent box start -->
                                <div class="agent-box">
                                    <!-- Agent img -->
                                    <div class="">
                                        <div class="photo"> <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" /> </div>
                                        <div class="info">
                                            <div class="top-info">
                                                <div class="container-fluid">
                                                    <a href="#"><div class="row">
                                                            <div class="col-md-12">
                                                                <h5 class="main-ti">Second Home - London Fields</h5>
                                                                <p class="sub-ti">Shoreditch, London</p>
                                                                <p class="sub-ti">Hackney Central (12 mins walk)</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="bot-info">
                                                <div class="separator clear-left">
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office office-type">Hot Disk</p>
                                                        <p class="office office-price">&pound;203</p>
                                                        <p class="office office-time">Per month</p>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office off-color">Fixed Disk</p>
                                                        <p class="office auto-margin off-color">&nbsp;</p>
                                                        <p class="office off-color">Per month</p>
                                                    </div>
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office off-color">Private Office</p>
                                                        <p class="office auto-margin off-color">&nbsp;</p>
                                                        <p class="office off-color">Per month</p>
                                                    </div>
                                                </div>
                                                <div class="shortlist">

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal"> <i class="fa fa-heart"></i>Shortlist </button>
                                                    <!-- Button trigger modal -->
                                                    <!-- Modal -->
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Agent box enx -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Agent section end -->

    <div class="categories">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1><span>Popular</span>Co-working Spaces</h1>
            </div>
            <div class="clearfix"></div>
            <div class="row wow">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="row">
                        <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                            <div class="category">
                                <div class="category_bg_box cat-1-bg">
                                    <div class="category-overlay">
                                    <span class="category-content">
                                        <span class="category-title">Florida</span>
                                        <br>
                                        <span class="category-subtitle">14 Properties</span>
                                        <br>
                                        <a href="#" class="btn button-sm button-theme">View All</a>
                                    </span><!-- /.category-content -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-pad wow fadeInLeft delay-04s">
                            <div class="category">
                                <div class="category_bg_box cat-2-bg">
                                    <div class="category-overlay">
                                    <span class="category-content">
                                        <span class="category-title">California</span>
                                        <br>
                                        <span class="category-subtitle">14 Properties</span>
                                        <br>
                                         <a href="#" class="btn button-sm button-theme ">View All</a>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-pad wow fadeInUp delay-04s">
                            <div class="category">
                                <div class="category_bg_box cat-3-bg">
                                    <div class="category-overlay">
                                    <span class="category-content">
                                        <span class="category-title">New York</span>
                                        <br>
                                        <span class="category-subtitle">27 Properties</span>
                                        <br>
                                        <a href="#" class="btn button-sm button-theme ">View All</a>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5 col-sm-12 col-pad wow fadeInRight delay-04s">
                    <div class="category">
                        <div class="category_bg_box category_long_bg cat-4-bg">
                            <div class="category-overlay">
                            <span class="category-content">
                                <span class="category-title">San Francisco</span>
                                <br>
                                <span class="category-subtitle">14 Properties</span>
                                <br>
                                 <a href="#" class="btn button-sm button-theme ">View All</a>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial section start-->
    <div class="testimonial-section testimonial-2 testimonial-3">
        <div class="testimonial-section-inner">
            <div class="container">
                <div class="main-title">

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonials">
                            <div id="carouse3-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item content clearfix active">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="avatar">
                                                    <img src="{{asset('front/img/avatar/avatar-1.jpg')}}" alt="avatar-1" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="testimonials-info">
                                                    <div class="text">
                                                        <sup>
                                                            <i class="fa fa-quote-left"></i>
                                                        </sup>
                                                        Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                                        <sub>
                                                            <i class="fa fa-quote-right"></i>
                                                        </sub>
                                                    </div>
                                                    <div class="author-name">
                                                        John Antony
                                                    </div>
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star-half-full"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item content clearfix">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="avatar">
                                                    <img src="{{asset('front/img/avatar/avatar-2.jpg')}}" alt="avatar-2" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="testimonials-info">
                                                    <div class="text">
                                                        <sup>
                                                            <i class="fa fa-quote-left"></i>
                                                        </sup>
                                                        Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                                        <sub>
                                                            <i class="fa fa-quote-right"></i>
                                                        </sub>
                                                    </div>
                                                    <div class="author-name">
                                                        John Mery
                                                    </div>
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star-half-full"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item content clearfix">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="avatar">
                                                    <img src="{{asset('front/img/avatar/avatar-4.jpg')}}" alt="avatar-4" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="testimonials-info">
                                                    <div class="text">
                                                        <sup>
                                                            <i class="fa fa-quote-left"></i>
                                                        </sup>
                                                        Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                                        <sub>
                                                            <i class="fa fa-quote-right"></i>
                                                        </sub>
                                                    </div>
                                                    <div class="author-name">
                                                        John Top
                                                    </div>
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star-half-full"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item content clearfix">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="avatar">
                                                    <img src="" alt="avatar-3" class="img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 ">
                                                <div class="testimonials-info">
                                                    <div class="text">
                                                        <sup>
                                                            <i class="fa fa-quote-left"></i>
                                                        </sup>
                                                        Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa eu porta ultricies.
                                                        <sup>
                                                            <i class="fa fa-quote-right"></i>
                                                        </sup>

                                                    </div>
                                                    <div class="author-name">
                                                        John Pitarshon
                                                    </div>
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star-half-full"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carouse3-example-generic" role="button" data-slide="prev">
                                <span class="slider-mover-left" aria-hidden="true">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carouse3-example-generic" role="button" data-slide="next">
                                 <span class="slider-mover-right" aria-hidden="true">
                                      <i class="fa fa-angle-right"></i>
                                 </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial section end -->
    <div class="clearfix"></div>
@endsection

