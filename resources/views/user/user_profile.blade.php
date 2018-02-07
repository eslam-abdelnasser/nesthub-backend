@extends('layout')

@section('content')


    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>My Profile</h1>
                    <ul class="breadcrumbs">
                        <li><a href="">Home</a></li>
                        <li class="active">My Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- My profile start -->
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
                    <!-- My address start-->
                    <div class="my-address">
                        <div class="main-title-2">
                            <h1><span>Advanced</span> Search</h1>
                        </div>

                        <form action="{{route('update.user_profile',[ 'id' => Auth::user()->id])}}" method="post" id="user_profile_data">
                            <input type="hidden" name="_method" value="PUT"/>
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="input-text" name="name" value="{{Auth::user()->name}}" placeholder="John Antony">
                            </div>
                            <div class="form-group">
                                <label>Your Title</label>
                                <input type="text" class="input-text" name="title" value="{{Auth::user()->title}}" placeholder="Your title">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="input-text" name="mobile_number" value="{{Auth::user()->mobile_number}}" placeholder="+55 4XX-634-7071">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="input-text" name="email" value="{{Auth::user()->email}}" placeholder="johndoe@gmail.com">
                            </div>
                            <div class="form-group">
                                <label>About Me</label>
                                <textarea class="input-text" name="about_me" placeholder="Etiam luctus malesuada quam eu aliquet. Donec eget mollis tortor. Donec pellentesque eros a nisl euismod, ut congue orci ultricies. Fusce aliquet metus non arcu varius ullamcorper a sit amet nunc. Donec in lacus neque. Vivamus ullamcorper sed ligula vitae ">{{Auth::user()->about_me}}</textarea>
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
    <!-- My profile end -->

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

                    alert(data.success)
                    // console.log(data); // show response from the php script.
                }
            });


            e.preventDefault() ;
        });
    </script>
@endpush