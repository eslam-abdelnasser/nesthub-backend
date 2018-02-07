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

                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="main-title-2">
                        <h1><span>My</span> Properties</h1>
                    </div>
                @foreach($buildings as $building)
                    <!-- table start -->
                        <table class="manage-table responsive-table">
                            <tbody>
                            @if(count($buildings))
                                <ul>


                                    <tr>
                                        <td class="title-container">
                                            @if(!$building->images->count())

                                            <img src="{{asset('front/img/my-properties/my-properties-1.jpg')}}" alt="my-properties-1" class="img-responsive hidden-xs">
                                            @else
                                                <img src="{{asset('images')}}/{{$building->images->first()->image_url}}" alt="my-properties-1" class="img-responsive hidden-xs">
                                            @endif
                                            <div class="title">
                                                <h4><a href="#"> {{$building->name}} </a></h4>
                                                <span><i class="fa fa-map-marker"></i> {{$building->full_address}} </span>
                                                <span class="table-property-price">$900 / monthly</span>
                                            </div>
                                        </td>
                                        <td class="expire-date hidden-xs">{{

                                      // $date=date("d", $building->created_at)
                                        date('l jS \of F Y', strtotime($building->created_at))
                                        }}</td>
                                        <td class="action">
                                            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                                        </td>
                                    </tr>

                                </ul>
                            @else
                                <h1> no building added</h1>
                            @endif
                            </tbody>
                        </table>


                    @endforeach
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


        </script>
    @endpush