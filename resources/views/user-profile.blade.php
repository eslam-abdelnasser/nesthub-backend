@extends('user_layout')

@section('content')
    <!-- /.navbar-collapse -->
    <!-- /.container -->
    </nav>
    </div>
    </header>
    <!-- Main header end -->

    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>My Profile</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">My Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->
    <!-- My profile start  'name', 'email', 'password','mobile_number','type','title','about_me'-->
    <div class="content-area my-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <!-- User account box start -->
                    <div class="user-account-box">

                        <div class="header clearfix">
                            <h3>{{$users->name}}</h3>
                            <p>{{$users->email}}</p>
                            <div class="edit-profile-photo">
                                <img src="img/avatar/avatar-3.jpg" alt="agent-1" class="img-responsive">
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" class="upload">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>
                                    <a href="user-profile.html" class="active">
                                        <i class="flaticon-social"></i>Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="my-properties.html">
                                        <i class="flaticon-apartment"></i>My Properties
                                    </a>
                                </li>
                                <li>
                                    <a href="favorited-properties.html">
                                        <i class="fa fa-heart"></i>Favorited Properties
                                    </a>
                                </li>
                                <li>
                                    <a href="submit-property.html">
                                        <i class="fa fa-plus"></i>Submit New Property
                                    </a>
                                </li>
                                <li>
                                    <a href="change-password.html">
                                        <i class="flaticon-security"></i>Change Password
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="flaticon-sign-out-option"></i>Log Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- User account box end -->
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <!-- My address start 'name', 'email', 'password','mobile_number','type','title','about_me-->
                    <div class="my-address">
                        <div class="main-title-2">
                            <h1><span>Advanced</span> Search</h1>
                        </div>

                        <form action="{{route('user.update',[$users->id])}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="input-text" name="" value="{{$users->name}}">
                            </div>
                            <div class="form-group">
                                <label>Your Title</label>
                                <input type="text" class="input-text" name="" value="{{$users->title}}">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="input-text" name="" value="{{$users->mobile_number}}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="input-text"  name="" value="{{$users->email}}" >
                            </div>
                            <div class="form-group">
                                <label>About Me</label>
                                <textarea class="input-text" value="{{$users->about_me }}" ></textarea>
                            </div>
                            <input type="submit" class="btn button-md button-theme" value="Save Changes">

                        </form>
                    </div>
                    <!-- My address end -->
                </div>
            </div>
        </div>
    </div>
    <!-- My profile end -->

@endsection