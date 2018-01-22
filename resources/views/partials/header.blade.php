<!DOCTYPE html>
<html>
<head>

    <title>Nest Hub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/leaflet.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/map.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/sidenav.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/dropzone.css')}}">
    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('front/css/skins/default.css')}}">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('front/images/logoo.png')}}" type="image/x-icon">
    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/ie10-viewport-bug-workaround.css')}}">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="{{asset('front/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
    <script type="text/javascript" src="{{asset('front/js/ie-emulation-modes-warning.js')}}"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('front/js/html5shiv.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="Stylesheet" type="text/css" href="{{asset('front/css/listing.css')}}" />
    <script type="text/javascript" src="{{asset('front/scripts/Listing.js')}}"></script>
    <link href="{{asset('front/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <script src="{{asset('front/js/plugins/sortable.js')}}" type="text/javascript"></script>
    <script src="{{asset('front/js/fileinput.js')}}" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwuev6Dj8Xvo7fePYs2YJ8KA84xxBCIUo&libraries=places"></script>
    >
    {!! Html::style('css/parsley.css') !!}

    @yield('css')

</head>

<body>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;z-index: 99999999;" id="rightMenu">
    <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large closee" style="background: #ffb400;
    height: 40px;"> <img src="{{asset('front/img/close-white.png')}}" alt=""></button>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-inbox" aria-hidden="true"></i> INBOX</a>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-list" aria-hidden="true"></i> Listing</a>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-address-card-o" aria-hidden="true"></i> Profile</a>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <a href="#">About us</a>
        <br>
        <br>
        <a href="#">How NestHub Works</a>
        <br>
        <br>
        <a href="#">FAQs</a>
        <br>
        <br>
        <a href="#">Contact</a>
        <br>
        <br>
        <a href="#">Blog</a>
        <br>
        <br>
        <br>
        <br>
        <a href="#">Log out</a>
        <br>
        <br>
        <a href="#">Go To NESTHUB.net  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
</div>