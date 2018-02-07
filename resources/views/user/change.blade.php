@extends('layout')

@section('content')
    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>My Properties</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">My Properties</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->
    <!-- My Propertiess start -->
    <div class="content-area my-profile">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <!-- User account box start -->
                    <div class="user-account-box">
                        <div class="header clearfix">
                            <h3>{{Auth::user()->name}}</h3>
                            <p>{{Auth::user()->email}}</p>
                            <div class="edit-profile-photo">
                                @if(Auth::user()->img_url == null)
                                    <img src="{{asset('front/img/avatar/avatar-3.jpg')}}" id="user_image" alt="agent-1" class="img-responsive">
                                @else
                                    <img src="{{asset('uploads/user_image')}}/{{Auth::user()->img_url}}" id="user_image" alt="agent-1" class="img-responsive">
                                @endif
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <form action="{{route('post.user_image')}}" method="post" id="image_profile">
                                            {{--<input type="hidden" value="PUT" name="_method"/>--}}
                                            <input type="file" class="upload" id="user_image" name="image">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <ul>
                                <li>
                                    <a href="{{route('user_profile')}}">
                                        <i class="flaticon-social"></i>Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('my_property')}}" class="active">
                                        <i class="flaticon-apartment"></i>My Properties
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

                <div class="col-lg-8 col-md-8 col-sm-7">
                    <!-- My address start -->
                    <div class="my-address">
                        <div class="main-title-2">
                            <h1><span>Change</span> Password</h1>
                        </div>

                        <form action="{{route('post.change_password')}}" method="post" id="user_profile_data" >
                            <div class="form-group">
                                <label>Current Password</label>
                                <input type="password" class="input-text" name="current-password"  placeholder="Current Password"  required>
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="input-text" name="new-password" placeholder="New Password" required>
                            </div>
                            <button class="btn button-md button-theme" id="form_submit">
                                Save Changes
                            </button>
                        </form>
                    </div>
                    <!-- My address end -->
                </div>
            </div>
        </div>
    </div>

        <!-- Counters strat -->
        <div class="counters">
            <div class="container">

                <div class="row">
                    <div class="col-md-3 col-sm-6 bordered-right">
                        <div class="counter-box">
                            <i class="flaticon-tag"></i>
                            <h1 class="counter">967</h1>
                            <p>Listings For Sale</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 bordered-right">
                        <div class="counter-box">
                            <i class="flaticon-symbol-1"></i>
                            <h1 class="counter">1276</h1>
                            <p>Listings For Rent</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 bordered-right">
                        <div class="counter-box">
                            <i class="flaticon-people"></i>
                            <h1 class="counter">396</h1>
                            <p>Agents</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter-box">
                            <i class="flaticon-people-1"></i>
                            <h1 class="counter">177</h1>
                            <p>Brokers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counters end -->

        @endsection
        @push('scripts')
        <script>

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(":file").on("change", function(e) {

                $.ajax({
                    type: $('#image_profile').attr('method'),
                    url: $('#image_profile').attr('action'),
                    data: new FormData($('#image_profile')[0]),
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        $('#user_image').attr("src","{{asset('uploads/user_image')}}/" + data);
                    }
                });
            });
            $('#user_profile_data').submit(function (e) {


                var url = $(this).attr('action'); // the script where you handle the form input.
                var method =$(this).attr('method');

                $.ajax({
                    type: method,
                    url: url,
                    dataType: "json",
                    data: $(this).serialize(), // serializes the form's elements.
                    success: function(data)
                    {

                        alert(data)
                        // console.log(data); // show response from the php script.
                    }
                });


                e.preventDefault() ;
            });

        </script>
    @endpush