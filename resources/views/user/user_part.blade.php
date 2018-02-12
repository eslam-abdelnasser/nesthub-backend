
<!-- My Propertiess start -->
<div class="content-area my-profile">
    <div id="app">
        @include('flash-message')
    </div>
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
                                <a href="{{route('add-building')}}">
                                    <i class="fa fa-plus"></i>Submit New Property
                                </a>
                            </li>
                            <li>
                                <a href="{{route('change_password')}}">
                                    <i class="flaticon-security"></i>Change Password
                                </a>
                            </li>
                            <li>
                                <a href="{{route('logout')}}">
                                    <i class="flaticon-sign-out-option"></i>Log Out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- User account box end -->
            </div>

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


            </script>
@endpush