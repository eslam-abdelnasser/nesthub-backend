<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from template.themevessel.com/the-nest/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Nov 2017 15:29:56 GMT -->
<head>
    <title>The Nest - Real Estate HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/leaflet.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('front/css/map.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('front/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('front/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('front/css/dropzone.css')}}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('front/css/skins/default.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('front/img/favicon.ico')}}" type="image/x-icon" >

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

    {{--to upload image using ajex--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5MJCCG"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>


<!-- Top header start -->
<header class="top-header hidden-xs" id="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="list-inline">
                    <a href="tel:1-8X0-666-8X88"><i class="fa fa-phone"></i>1-8X0-666-8X88</a>
                    <a href="#"><i class="fa fa-envelope"></i>info@themevessel.com</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <ul class="top-social-media pull-right">
                    <li>
                        <a href="#" class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
                    </li>
                    <li>
                        <a href="#" class="sign-in"><i class="fa fa-user"></i> Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start -->
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="logo">
                    <img src="{{asset('front/img/logos/logo.png')}}" alt="logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                <ul class="nav navbar-nav">
                    <li class="dropdown ">
                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            Cairo<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Cairo</a></li>
                            <li><a href="#">Giza</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right rightside-navbar">
                    <li>
                        <a href="#" class="button">
                            Submit Property
                        </a>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</header>
<!-- Main header end -->

</body>
</html>
<script>
    $(document).ready(function () {
        $(document).on('change','#file',function () {
            var property=document.getElementById("file").filles[0];
            var image_name=property.name;
            var image_extension=image_name.split(".").pop().toLowerCase();
            if(jQuery.inArray(image_extension,['gif','png','jpg','jpeg']) == -1){
              alert("Invalid Image File");
            }
            var image_size=property.size;
            if(image_size > 2000000){
                alert("image file Size is vary big");
            }
            else {
                var form_data=new FormData();
                form_data.append("file",property);
                $.ajax({
                    url:"./upload_image",
                    method:"POST",
                    data:form_data,
                    contentType:false,
                    cache:false,
                    processData:false,
                    beforeSend:function () {
                        $('#upload_image').html("<label class='text-seccess'>Image " +
                            "Uploading ..</label>");
                    },
                    success:function(data){
                        $('#upload_image').html(data);
                    }
                })
            }
        })
    })







</script>