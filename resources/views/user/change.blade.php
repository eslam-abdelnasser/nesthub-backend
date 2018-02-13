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

    @include('user.user_part')
                <div class="col-lg-8 col-md-8 col-sm-7">
                    <!-- My address start -->
                    <div class="my-address">
                        <div class="main-title-2">
                            <h1><span>Change</span> Password</h1>
                        </div>

                        <form action="{{route('post.change_password')}}" method="post"  id="user_profile_data" >
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Current Password</label>
                                <input type="password" class="input-text" name="current-password"  placeholder="Current Password"  required>

                            </div>
                            <div class="form-group ">
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
