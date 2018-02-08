<!-- Featured properties start -->
<div class="content-area featured-properties">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Featured</span> Properties</h1> </div>
        <ul class="list-inline-listing filters filters-listing-navigation">
            <li data-filter="1" class="btn btn-inline filtr-button filtr">Startups</li>
            <li data-filter="2" class="btn btn-inline filtr-button filtr">Freelancers</li>
            <li data-filter="3" class="btn btn-inline filtr-button filtr">AGENCIES</li>
            <li data-filter="4" class="btn btn-inline filtr-button filtr">BUSINESSES</li>
        </ul>
        <div class="row">
            <div class="filtr-container">
                @foreach($P_buildings as $building)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 3">
                    <div class="col-item property">
                        <div class="photo">
                            @if(!$building->images->count())

                                <img src="{{asset('front/img/my-properties/my-properties-1.jpg')}}" alt="my-properties-1" class="img-responsive hidden-xs">
                            @else
                                <img src="{{asset('images')}}/{{$building->images->first()->image_url}}" alt="my-properties-1" class="img-responsive hidden-xs">
                            @endif
                        </div>
                        <div class="info">
                            <div class="top-info">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="main-ti">{{$building->name}}</h5>
                                            <p class="sub-ti">{{$building->full_address}}</p>
                                            <p class="sub-ti">Hackney Central (12 mins walk)</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <hr>
                                <div class="bot-info">
                                @php $fixed = 0;$private = 0; @endphp
                                @foreach($building->offices as $office)
                                        <div class="separator clear-left">
                                            @if($office->office_type == 2 and $fixed == 0)
                                                @php $fixed = 1; @endphp
                                                <div class="col-md-4 col-xs-4 ">
                                                    <p class="office off-color">Fixed Disk</p>
                                                    <p class="office auto-margin off-color">{{$office->price}}&nbsp;</p>
                                                    <p class="office off-color">Per month</p>
                                                </div>
                                            @endif
                                            @if($office->office_type == 0 and $private == 0)
                                                    @php $private = 1; @endphp
                                                <div class="col-md-4 col-xs-4 ">
                                                    <p class="office off-color">Private Office</p>
                                                    <p class="office auto-margin off-color">{{$office->price}}&nbsp;</p>
                                                    <p class="office off-color">Per month</p>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach

                                    <div class="shortlist">
                                        <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal"> <i class="fa fa-heart"></i>Shortlist </button>
                                    </div>
                                </div>
                               <div class="clearfix">
                               </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach($H_buildings as $building)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2">
                        <div class="col-item property">
                            <div class="photo"> <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" /> </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="main-ti">{{$building->name}}</h5>
                                                <p class="sub-ti">{{$building->full_address}}</p>
                                                <p class="sub-ti">Hackney Central (12 mins walk)</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="bot-info">
                                @php $fixed = 0;$hot = 0; @endphp
                                @foreach($building->offices as $office)
                                        <div class="separator clear-left">
                                            @if($office->office_type == 2 and $fixed == 0)
                                                @php $fixed=1; @endphp
                                                <div class="col-md-4 col-xs-4 ">
                                                    <p class="office off-color">Fixed Disk</p>
                                                    <p class="office auto-margin off-color">{{$office->price}}&nbsp;</p>
                                                    <p class="office off-color">Per month</p>
                                                </div>
                                            @endif
                                            @if($office->office_type == 1 and $hot == 0)
                                                @php $hot = 1; @endphp
                                                <div class="col-md-4 col-xs-4 ">
                                                    <p class="office off-color">Hot Desk</p>
                                                    <p class="office auto-margin off-color">{{$office->price}}&nbsp;</p>
                                                    <p class="office off-color">Per month</p>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach

                                    <div class="shortlist">
                                        <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal"> <i class="fa fa-heart"></i>Shortlist </button>
                                    </div>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($P_buildings as $building)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="4">
                        <div class="col-item property">
                            <div class="photo"> <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" /> </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="main-ti">{{$building->name}}</h5>
                                                <p class="sub-ti">{{$building->full_address}}</p>
                                                <p class="sub-ti">Hackney Central (12 mins walk)</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="bot-info">
                                @php $private = 0; @endphp
                                @foreach($building->offices as $office)
                                        <div class="separator clear-left">
                                            @if($office->office_type == 0 and $private == 0)
                                                @php $private=1; @endphp
                                                <div class="col-md-4 col-xs-4 ">
                                                    <p class="office off-color">Private Office</p>
                                                    <p class="office auto-margin off-color">{{$office->price}}&nbsp;</p>
                                                    <p class="office off-color">Per month</p>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach

                                    <div class="shortlist">
                                        <button type="button" class="short-btn" data-toggle="modal" data-target="#myModal"> <i class="fa fa-heart"></i>Shortlist </button>
                                    </div>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->
