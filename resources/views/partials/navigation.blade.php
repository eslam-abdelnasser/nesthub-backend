<!-- Main header start -->
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
                <div class="navbar-header">
                    <button class="w3-button w3-teal w3-xlarge w3-right hidden-lg hidden-md" onclick="openRightMenu()">&#9776;</button>
                    <a href="{{route('hola')}}" class="logo"> <img src="{{asset('front/img/footer-logo.png')}}" alt="logo"> </a>
                </div>
                {{--<div class="header-title">--}}
                    {{--<p>for <b>OFFICE PROVIDERS</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index-3">Go To NESTHUB.net  <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>--}}

                {{--</div>--}}
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">

                <ul class="nav navbar-nav navbar-right rightside-navbar">
                    {{--<li> <a href="inbox.html" class="sign-in" style="color: black !important;"> <i class="fa fa-inbox" aria-hidden="true"></i> INBOX</a> </li>--}}
                    <li> <a href="{{route('add-building')}}" class="sign-in" style="color: black !important;"> <i class="fa fa-list" aria-hidden="true"></i>LIsting</a> </li>
                    <li>
                    {{--<li> <a href="signup.html" class="sign-in" style="color: black !important;"> <i class="fa fa-address-card-o" aria-hidden="true"></i> Profile</a> </li>--}}
                    <li>
                        {{--<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()">&#9776;</button>--}}
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</header>
<!-- Main header end -->