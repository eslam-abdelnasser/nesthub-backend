<div class="page_loader"></div>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-right" style="display:none;right:0;z-index: 99999999; margin-top: 0px;" id="rightMenu">
    <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large closee" style="background: #ffb400;
        height: 40px;"> <img src="{{asset('front/img/close-white.png')}}" alt=""></button>
    <br>
    <div class="container padding-head">

            <div class="head-items">
                <p class="side-head">TENANTS</p>
                <ul class="list-head list-group">
                    <li><a href="login.html" class="w3-bar-item w3-button list-group-item">Login</a></li>
                    <li><a href="signup.html" class="w3-bar-item w3-button list-group-item">Signup</a></li>
                </ul>
             </div>
            <br>
            <br>
            <br>
            <br>
            <div class="head-items">
                <p class="side-head">HOSTS</p>
                <ul class="list-head list-group">
                    <li><a href="listing.html" class="w3-bar-item w3-button list-group-item">Listing Your Space</a></li>
                </ul>
            </div>
        <br>
        <br>
            <div class="head-items">
                <p class="side-head">Nesthub</p>
                <ul class="list-head list-group">
                    <li><a href="listing.html" class="w3-bar-item w3-button list-group-item">How NestHub Works</a></li>
                    <li><a href="listing.html" class="w3-bar-item w3-button list-group-item">FAQs</a></li>
                    <li><a href="listing.html" class="w3-bar-item w3-button list-group-item">Contact</a></li>
                    <li><a href="listing.html" class="w3-bar-item w3-button list-group-item">Blog</a></li>
                    <li><a href="listing.html" class="w3-bar-item w3-button list-group-item">Log out</a></li>
                    <li> <a href="index-3" class="w3-bar-item w3-button list-group-item">Go To NESTHUB.net  <i class="fa fa-arrow-right" aria-hidden="true"></i></a></li>
                </ul>
            </div>
    </div>
</div>
<!-- Top header start -->
<div id='overlay'></div>
<div class="content">

    <!-- Top header end -->
    <!-- Main header start -->
    <header class="main-header">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button class="w3-button w3-teal w3-xlarge w3-right hidden-lg hidden-md" onclick="openRightMenu()" style="
                        color: #f8f7f5!important;
                        background-color: #ffb400!important;
                        border: 2px solid;
                        height: 33px;
                        line-height: 1px;
                        border-radius: 3px;
                        margin-left: 5px;
                        top: 8px;
                        position: relative;
                     ">&#9776;</button>
                    <a href="index-3.html" class="logo"><img src="{{asset('front/img/logos/logo.png')}}" alt="logo"> </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation" >
                    <ul class="nav navbar-nav">
                        <li class="dropdown" ><a href="index-3.html" tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">Cairo <i class="fa fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Giza</a></li>
                                <li><a href="index.html">6th of October</a></li>

                            </ul>
                        </li>

                        <li> <a href="login.html" class="sign-in"><i class="fa fa-sign-in"></i> Login</a> </li>
                        <li> <a href="signup.html" class="sign-in"><i class="fa fa-user"></i> Register</a> </li>
                        <li> <a href="listing.html" class="Listing"><i class="fa fa-list"></i> Listing Your Space  </a> </li>
                        <li> <a href="signup.html" class="sign-in"><i class="fa fa-search"></i> Search for office</a> </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right rightside-navbar">
                        <li> <a href="{{route('add-building')}}" class="button">
                                Submit Property
                            </a> </li>

                        <li>
                            <button class="w3-button w3-teal w3-xlarge w3-right"  style="z-index: 999999;" onclick="openRightMenu()">&#9776;</button>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <!-- /.container -->
            </nav>
        </div>
    </header>
    <!-- Main header end -->