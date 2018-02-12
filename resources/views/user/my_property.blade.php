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

