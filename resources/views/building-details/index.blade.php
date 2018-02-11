@extends('layout')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/rentcss.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/custom-slider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/owl.carousel.min.css')}}" />
@endpush
@section('content')

    <!-- Sub banner start -->
    <div class="building-test">
        <div class="">
            <div class="container">
                <div class="breadcrumb-area">
                    {{--<h1>My Profile</h1>--}}
                    {{--<ul class="breadcrumbs">--}}
                        {{--<li><a href="">Home</a></li>--}}
                        {{--<li class="active">My Profile</li>--}}
                    {{--</ul>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->
    <!-- Main header end -->
    <!-- carousel -->
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{asset('front/img/spin.svg')}}" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-p="170.00">
                <img data-u="image" src="{{asset('front/images/slide-1.jpg')}}" />
                <img data-u="thumb" src="{{asset('front/images/slide-1.jpg')}}" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="{{asset('front/images/slide-2.jpg')}}" />
                <img data-u="thumb" src="{{asset('front/images/slide-2.jpg')}}" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="{{asset('front/images/slide-3.jpg')}}" />
                <img data-u="thumb" src="{{asset('front/images/slide-3.jpg')}}" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="{{asset('front/images/slide-4.jpg')}}" />
                <img data-u="thumb" src="{{asset('front/images/slide-4.jpg')}}" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="{{asset('front/images/slide-5.jpg')}}" />
                <img data-u="thumb" src="{{asset('front/images/slide-5.jpg')}}" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="{{asset('front/images/slide-6.jpg')}}" />
                <img data-u="thumb" src="{{asset('front/images/slide-6.jpg')}}" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="{{asset('front/images/slide-2.jpg')}}" />
                <img data-u="thumb" src="{{asset('front/images/slide-2.jpg')}}" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="{{asset('front/images/slide-3.jpg')}}" />
                <img data-u="thumb" src="{{asset('front/images/slide-3.jpg')}}" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="{{asset('front/images/slide-4.jpg')}}" />
                <img data-u="thumb" src="{{asset('front/images/slide-4.jpg')}}" />
            </div>
            <div data-p="170.00">
                <img data-u="image" src="{{asset('front/images/slide-5.jpg')}}" />
                <img data-u="thumb" src="{{asset('front/images/slide-5.jpg')}}" />
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;"
             data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <!-- #endregion Jssor Slider End -->
    <!-- END CAROUSEL -->
    <!-- start first-section-->
    <section class="container">
        <!--  remove style="margin-top:120px; " effect in all style   -->
        <div class="row">
            <div class="container">
                <!--start left part-->
                <div class="col-md-8 ">
                    <div class="left">
                        <div class="Home">
                            <div class="row">
                                <div class="col-md-8 ">
                                    <div class="col-md-12">
                                        <h2 class="home-text">{{$building->name}}</h2>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="home-location">
                                            <i class="fa fa-map-marker" aria-hidden="true">
                                                <!-- add home-location use in  media -->
                                            </i>{{$building->full_address}}
                                        </p>
                                    </div>

                                    <!-- add  home-text resize font in media    -->
                                </div>
                                <div class="col-md-4 ">
                                    <button class="btn btn-lg btn-primary shortlist">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        SHORTLIST</button>
                                </div>
                            </div>

                            <!-- <br> -->
                            <!-- remove one    add margin-bottom in home-location  -->
                            <!-- <br> -->
                            <!-- remove one     -->
                            <span class="home-welcome">Welcome</span>
                            <!-- add home-welcome  use in media     -->
                            <hr>

                            <p class="home-open-p">{{$building->welcome_message}}</p>
                            <br>
                            <br>
                        </div>
                        <!-- LOCATION-->
                        <div class="Location">
                            <span>
                                <b class="home-location">Location</b>
                            </span>
                            <hr class="line-location">
                            <!-- add line-location use in media   -->
                            <div class="col-md-9 mapId   ">
                                <!-- add width 100%  mapid in media -->
                                <a href="https://www.google.com.eg/maps?source=tldsi&hl=ar">
                                    <img src="{{asset('front/images/staticmap.png')}}" />
                                </a>
                            </div>
                            <div class="col-md-3 location-city">
                                <p>Down Town</p>
                                <p>12 min Walk</p>
                            </div>
                        </div>
                        <!--END LOCATION-->
                        <!-- OFFICE-->
                        <div class="office-details clearfix">
                            <br>

                            <br>
                            <!-- remove margin top 300px and use tag clear fix   -->
                            <div class="container">
                                    <span>
                                            <b>Office Details</b>
                                    </span>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6  tabs-area">
                                        <ul class="nav nav-tabs custom-tabs">
                                            <!-- custom tab use in media   -->
                                            @php $found = 0; @endphp
                                            @foreach($building->offices as $office)
                                                @if($office->office_type == 1 and $found == 0)
                                                    @php $found = 1; @endphp
                                                        <li class="active">
                                                            <a data-toggle="tab" href="#home">Hot Desk
                                                                <br>
                                                                <small>{{$office->price}} LE per Month</small>

                                                            </a>
                                                        </li>
                                                @endif
                                            @endforeach

                                            @php $found = 0; @endphp
                                            @foreach($building->offices as $office)
                                                @if($office->office_type == 2 and $found == 0)
                                                    @php $found = 1; @endphp
                                                        <li>
                                                            <a data-toggle="tab" href="#menu1">Fixed Desk
                                                                <br>
                                                                <small>{{$office->price}} LE per Month</small>
                                                            </a>
                                                        </li>
                                                @endif
                                            @endforeach

                                            @php $found = 0; @endphp
                                            @foreach($building->offices as $office)
                                                @if($office->office_type == 0 and $found == 0)
                                                    @php $found = 1; @endphp
                                                        <li>
                                                            <a data-toggle="tab" href="#menu2">Private Office
                                                                <br>
                                                                <small>{{$office->price}} LE per Month</small>
                                                            </a>
                                                        </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="tab-content  col-md-6 clearfix">
                                        <!--tab1-->
                                        @php $found = 0; @endphp
                                        @foreach($building->offices as $office)
                                            @if($office->office_type == 1 and $found == 0)
                                                @php $found = 1; @endphp
                                                    <div id="home" class="tab-pane fade in active ">
                                                        {{--<img src="{{asset('front/images/slide-1.jpg')}}">--}}
                                                        <!-- <br>
                                                            <br> -->
                                                        <!-- remove br   -->
                                                        <div class="main-content">

                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <span>
                                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                                <!-- <div class="container"> -->
                                                                <div class="col-md-10 availableDesk">
                                                                    <b>{{$office->price}} LE per month</b>
                                                                    <br>
                                                                    <small>Desks available: {{$office->desks_available}}</small>
                                                                    <br>
                                                                    <a href="#">HIDE DETAILS</a>

                                                                </div>
                                                                <!-- </div> -->
                                                            </div>

                                                            <br>
                                                            <br>
                                                            <hr>
                                                            <div class="data">
                                                                <div class="col-md-1">
                                                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="col-md-11 Paragraphs">
                                                                    <p>Key Features</p>
                                                                </div>

                                                                <div class="col-md-11 Paragraphs">
                                                                    <p>{{$office->key_features}}</p>
                                                                </div>

                                                            </div>
                                                            <div class="data">
                                                                <br><br><br><br>
                                                                <div class="col-md-1">
                                                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="col-md-11 Paragraphs">
                                                                    <p>Not Include</p>
                                                                </div>

                                                                <div class="col-md-11 Paragraphs">
                                                                    <p>{{$office->not_included}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endif
                                        @endforeach
                                        <!--end tab1-->
                                        <!--tab2-->
                                        @php $found = 0; @endphp
                                        @foreach($building->offices as $office)
                                            @if($office->office_type == 2 and $found == 0)
                                                @php $found = 2; @endphp
                                                     <div id="menu1" class="tab-pane fade">
                                                         <div class="main-content">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <span>
                                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="col-md-10 availableDesk">
                                                                    <b>{{$office->price}} LE per month</b>
                                                                    <br>
                                                                    <small>Desks available: {{$office->desks_available}}</small>
                                                                    <br>
                                                                    <a href="#">HIDE DETAILS</a>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <hr>
                                                             <div class="data">
                                                                 <div class="col-md-1">
                                                                     <i class="fa fa-circle" aria-hidden="true"></i>
                                                                 </div>
                                                                 <div class="col-md-11 Paragraphs">
                                                                     <p>Key Features</p>
                                                                 </div>

                                                                 <div class="col-md-11 Paragraphs">
                                                                     <p>{{$office->key_features}}</p>
                                                                 </div>

                                                             </div>
                                                             <div class="data">
                                                                 <br><br><br><br>
                                                                 <div class="col-md-1">
                                                                     <i class="fa fa-circle" aria-hidden="true"></i>
                                                                 </div>
                                                                 <div class="col-md-11 Paragraphs">
                                                                     <p>Not Include</p>
                                                                 </div>

                                                                 <div class="col-md-11 Paragraphs">
                                                                     <p>{{$office->not_included}}</p>
                                                                 </div>
                                                             </div>
                                                          </div>
                                                     </div>
                                            @endif
                                        @endforeach
                                        <!-- end tab2-->
                                        <!--tab3-->
                                        @php $found = 0; @endphp
                                        @foreach($building->offices as $office)
                                            @if($office->office_type == 0 and $found == 0)
                                                @php $found = 2; @endphp
                                                <div id="menu2" class="tab-pane fade">
                                                    <div class="main-content">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                    <span>
                                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                                    </span>
                                                            </div>
                                                            <div class="col-md-10 availableDesk">
                                                                <b>{{$office->price}} LE per month</b>
                                                                <br>
                                                                <small>Desks available: {{$office->desks_available}}</small>
                                                                <br>
                                                                <a href="#">HIDE DETAILS</a>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <hr>
                                                        <div class="data">
                                                            <div class="col-md-1">
                                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="col-md-11 Paragraphs">
                                                                <p>Key Features</p>
                                                            </div>

                                                            <div class="col-md-11 Paragraphs">
                                                                <p>{{$office->key_features}}</p>
                                                            </div>

                                                        </div>
                                                        <div class="data">
                                                            <br><br><br><br>
                                                            <div class="col-md-1">
                                                                <i class="fa fa-circle" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="col-md-11 Paragraphs">
                                                                <p>Not Include</p>
                                                            </div>

                                                            <div class="col-md-11 Paragraphs">
                                                                <p>{{$office->not_included}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        <!-- end tab3-->
                                        <!--end tabContent -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end office-->

                    </div>
                    <!-- end left part-->
                </div>



                <!--rigth part-->
                <div class="col-md-4 custom-right">
                    <div class="right ">
                        <!-- dropdown-->
                        <div class="part1">
                            <div class="row ">
                                <div class="col-md-12 btn-group">
                                    <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown">
                                        <small class="sm" style="float: left;">
                                            @if($building->offices[0]->office_type === 2)
                                                <b>Hot Desk |{{$building->offices[0]->price}} LE p/m</b>
                                            @endif
                                            @if($building->offices[0]->office_type === 1)
                                                <b>Fixed Desk |{{$building->offices[0]->price}}LE p/m</b>
                                            @endif
                                            @if($building->offices[0]->office_type === 0)
                                                <b>Private Office|{{$building->offices[0]->price}}LE p/m</b>
                                            @endif

                                        </small>
                                        <br>
                                        <small>Desks available:{{$building->offices[0]->desks_available}}</small>
                                        <span>Available Now </span>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        @for($i=1;$i<$building->offices->count();$i++)
                                        <li>
                                            <a href="#">
                                                <small>
                                                    @if($building->offices[$i]->office_type === 2)
                                                        <b>Hot Desk |{{$building->offices[0]->price}} LE p/m</b>
                                                    @endif
                                                    @if($building->offices[$i]->office_type === 1)
                                                        <b>Fixed Desk |{{$building->offices[$i]->price}}LE p/m</b>
                                                    @endif
                                                    @if($building->offices[$i]->office_type === 0)
                                                        <b>Private Office|{{$building->offices[$i]->price}}LE p/m</b>
                                                    @endif
                                                </small>
                                                <br>
                                                <small>Desks available:{{$building->offices[$i]->desks_available}} </small>
                                                <span>Available Now</span>
                                            </a>
                                        </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                            <!--end first button-->
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-default btn-lg colored second" type="button" value="Show/Hide" onClick="showHideDiv('form1')">Request more Info</button>

                                    <div class="form1" id="form1" data-wow-delay="0.4s" style="display: none;">
                                        <div class="loginmodal-container">
                                            <h1>Create an account to request more info</h1>
                                            <br>
                                            <form>
                                                <input type="email" name="email" placeholder="Email">
                                                <input type="text" name="name" placeholder="Full Name">
                                                <input type="password" name="pass" placeholder="Password">
                                            </form>
                                            <small>Or continue with:</small>
                                            <br>
                                            <div class="social">
                                                <div class="col-lg-4 col-md-4 ">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                    <small> Facebook</small>

                                                </div>
                                                <div class="col-lg-4 col-md-4 ">
                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                    <small> linkedIn</small>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                    <small> Google</small>
                                                </div>
                                            </div>
                                            <br/>
                                            <button class="btn btn-default btn-md slide-button" type="button">Request more Info</button>
                                            <br/>
                                            <div class="help">Already have a Hubble account?
                                                <a href="#">login</a>
                                            </div>
                                            <br>
                                            <div class="help">Forgot your password?
                                                <a href="#">Reset </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end second button-->
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-default btn-lg n-colored third" type="button">Request more Info</button>
                                </div>
                            </div>
                        </div>
                        <!--end part1-->
                        <!--part2-->
                        <div class="part2 row">
                            <div class="col-md-12">
                                <p>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <b>100% free service</b>
                                </p>
                                <p>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <b> Zero commitment</b>
                                </p>
                                <p>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <b> Schedule a viewing instantly</b>
                                </p>
                            </div>
                        </div>
                        <!--end part2-->
                        <!--part3-->
                        <div class="part3 row">
                            <div class="col-md-12">
                                <span>
                                    <i class="fa fa-tags" aria-hidden="true"></i>&nbsp; &nbsp;
                                    <b> Exclusive Offer</b>
                                </span>
                                <p>
                                    {{$building->addtionals->exclusive_office}}
                                </p>
                            </div>
                        </div>
                        <!--end part4-->
                        <div class="part5 ">
                            <div class="col-md-12">
                                <h4> Take Tour</h4>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                    <video width="100%" controls>
                                        <source src="{{asset('front/images/Co-working and space design - Hub Australia.mp4')}}" type="video/mp4">
                                        <source src="{{asset('front/mov_bbb.ogg')}}" type="video/ogg">
                                    </video>
                                </div>
                            </div>
                        </div>
                        <!--end part5-->
                        <div class="part6 row">
                            <div class=" row">
                                <div class="col-md-12 ">
                                    <h4>Gellary</h4>
                                    <hr>
                                </div>
                                @for($i = 0 ; $i < $building->images->count(); $i+=3)
                                    <div class="row">
                                        @for($j = $i ; $j < $i+3 ; $j++)
                                            @if($j < $building->images->count())
                                                <div class="col-md-4  col-xs-4 col-sm-4 wow fadeInLeft" data-wow-delay="1.8s">
                                                     <img src="{{asset('front/images/slide-1.jpg')}}">
                                                </div>
                                            @endif
                                        @endfor
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <!--end part6-->
                    </div>
                </div>
                <!--end right part  -->
            </div>
        </div>
    </section>
    <!-- ------------------------------------------------------------------------------------------- -->
    <!-- start Facilites-->
    <div class="Facilies">
        <div class="container">
            <div class="col-md-12">
                <span>
                    <b>Facilities</b>
                </span>
                <hr>
                <!-- start busines-->
                <div class="bussines">
                    <div>
                        <span>
                            <b>Business</b>
                        </span>
                    </div>
                    <br>
                    @for($i = 0 ; $i < $B_facilities->count() ; $i+=4)
                        <div class="col-md-3 bus1">
                            @for($j = $i; $j<$i+4; $j++)
                                @if($j < $B_facilities->count())
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        <span >{{$B_facilities[$j]->name}}</span>
                                    </div>
                                    <br>
                                @endif
                            @endfor
                        </div>
                    @endfor
                </div>
                <!--end busines-->
                <!-- start Additional-->

                <div class="addtional">
                    <div>
                        <span>
                            <b>Additional</b>
                        </span>
                    </div>
                    <br>
                    @for($i = 0 ; $i < $A_facilities->count() ; $i+=4)
                        <div class="col-md-3 bus1">
                            @for($j = $i  ; $j<$i+4; $j++)
                                @if($j < $A_facilities->count())
                                    <div>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        <span >{{$A_facilities[$j + $B_facilities->count()]->name}}</span>
                                    </div>
                                    <br>
                                @endif
                            @endfor
                        </div>
                    @endfor
                </div>
                <!--end Additional-->
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------------------------------------- -->
    <!-- start highlights-->
    <div class="highlights">
        <div class="container">
            <!-- <div> -->
            <span>
                    <p>Highlights{{$highlights->description[0]}}</p>
                </span>
            <hr>
            <!-- </div> -->
            <br>
            @php $i=0; @endphp
            @foreach($highlights->highlight as $highlight)
            <div class="row">
                <div class=" ICONIC wow rollIn " data-wow-delay="1s">

                    <div class="col-md-1  col-xs-4 col-sm-4 ">
                        <div class="numbers">
                            <div> {{$i + 1}}</div>
                        </div>
                    </div>
                    <div class="col-md-11 col-xs-8 col-sm-8  arch">
                        <h4>{{$highlight}}</h4>
                        <p>{{$highlights->description[$i]}}  </p>
                    </div>
                </div>
            </div>
            <br>
            <br>
                @php $i++; @endphp
            @endforeach



        </div>
    </div>
    <!-- end highlights-->
    <!-- start about us-->
    <div class="AboutUs">
        <div class="container">
            <div>
                <h4>About Us</h4>
                <hr>
            </div>
            <br>
            <p>
                {{$building->about_us}}
            </p>
        </div>
    </div>
    <!-- end about us-->
    <!--start question part-->
    <div class="question">

        <div class="middel-div">
            <b>Questions about this space?</b> Chat to our
            <a href="#">Customer Support Team </a>or call Hubble on
            <a href="#"> +44 20 3608 0215</a>
        </div>
    </div>
    <!--end question-->
    <!--start neighbour part   -->
    <div class="Neighbourhood">
        <div class="container">
            <h3>Neighbourhood Guide</h3>
            <div class="row ">
                <div class="col-md-4 image ">
                    <a href="https://www.google.com.eg/maps?source=tldsi&hl=ar">
                        <img src="{{asset('front/images/map.png')}}">
                    </a>
                </div>
                <div class="col-md-4 neighbours wow lightSpeedIn " data-wow-delay="1s">
                    <div class="row">
                        <div class="col-md-2 col-xs-2 col-sm-2">
                            <div class="numbers">
                                <div>1</div>
                            </div>
                        </div>
                        <div class="col-md-10 col-xs-10 col-sm-10">
                            <b>MORTY & BOB'S</b>
                            <br/>
                            <p>Breakfast Spot</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 neighbours wow lightSpeedIn " data-wow-delay="1s">
                    <div class="row">
                        <div class="col-md-2 col-xs-2 col-sm-2">
                            <div class="numbers">
                                <div>3</div>
                            </div>
                        </div>
                        <div class="col-md-10 col-xs-10 col-sm-10">
                            <b>MORTY & BOB'S</b>
                            <br/>
                            <p>Breakfast Spot</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 neighbours wow lightSpeedIn " data-wow-delay="1s">
                    <div class="row">
                        <div class="col-md-2 col-xs-2 col-sm-2">
                            <div class="numbers">
                                <div>2</div>
                            </div>
                        </div>
                        <div class="col-md-10 col-xs-10 col-sm-10">
                            <b>MORTY & BOB'S</b>
                            <br/>
                            <p>Breakfast Spot</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 neighbours wow lightSpeedIn " data-wow-delay="1s">
                    <div class="row">
                        <div class="col-md-2 col-xs-2 col-sm-2">
                            <div class="numbers">
                                <div>4</div>
                            </div>
                        </div>
                        <div class="col-md-10 col-xs-10 col-sm-10">
                            <b>MORTY & BOB'S</b>
                            <br/>
                            <p>Breakfast Spot</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end neighbour-->
    <!-- Featured properties start -->
    <div class="content-area featured-properties">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h3>Other Recommended Workspaces</h3>
            </div>
            <div class="row">
                <div class="container owl-carousel owl-theme">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  item wow pulse " data-wow-delay="1s">
                        <div class="col-item property">
                            <div class="photo">
                                <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" /> </div>
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
                                        <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-heart"></i>Shortlist </button>
                                        <!-- Button trigger modal -->
                                        <!-- Modal -->
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  item wow pulse " data-wow-delay="1s">
                        <div class="col-item property">
                            <div class="photo">
                                <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" />
                            </div>
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
                                        <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-heart"></i>Shortlist </button>
                                        <!-- Button trigger modal -->
                                        <!-- Modal -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  item wow pulse " data-wow-delay="1s">
                        <div class="col-item property">
                            <div class="photo">
                                <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" />
                            </div>
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
                                        <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-heart"></i>Shortlist </button>
                                        <!-- Button trigger modal -->
                                        <!-- Modal -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  item wow pulse " data-wow-delay="1s">
                        <div class="col-item property">
                            <div class="photo">
                                <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" />
                            </div>
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
                                        <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-heart"></i>Shortlist </button>
                                        <!-- Button trigger modal -->
                                        <!-- Modal -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured properties end -->
@endsection

@push('scripts')
    <script type="text/javascript" src="{{asset('front/scripts/jquery.mousewheel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/scripts/jquery.carousel-1.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/scripts/sample01.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    {{--<script type="text/javascript" src="{{asset('front/scripts/rent.js')}}"></script>--}}
    <!-- Source: https://www.jssor.com -->
    <script src="{{asset('front/js/jssor.slider-26.9.0.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('front/js/custom-slider.js')}}" type="text/javascript"></script>
    <script type="text/javascript">jssor_1_slider_init();</script>


    <script src="{{asset('front/js/wow.min.js')}}"></script>

    <script>
        new WOW().init();

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })
    </script>

    <script type="text/javascript">
        function showHideDiv(ele) {
            var srcElement = document.getElementById(ele);
            if (srcElement != null) {
                if (srcElement.style.display == "block") {
                    srcElement.style.display = 'none';
                }
                else {
                    srcElement.style.display = 'block';
                }
                return false;
            }
        }
    </script>
@endpush
