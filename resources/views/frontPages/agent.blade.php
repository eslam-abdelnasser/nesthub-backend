<!-- Agent section start -->
<div class="content-area agent-section chevron-icon">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Our</span> Agent</h1> </div>
        <div class="row">
            <div class="carousel our-partners slide" id="ourPartners3">
                <div class="col-lg-12 mrg-btm-30"> <a class="right carousel-control" href="#ourPartners3" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a> <a class="right carousel-control" href="#ourPartners3" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a> </div>
                <div class="carousel-inner">
                    <div class="item active">
                        @foreach($L_buildings as $building)
                           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <!-- Agent box start -->
                        <div class="agent-box">
                            <div class="">
                                <div class="photo">
                                    <img src="{{asset('front/img/properties/properties-4.jpg')}}" class="img-responsive" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="top-info">
                                        <div class="container-fluid">
                                            <a href="#"><div class="row">
                                                    <div class="col-md-12">
                                                        <h5 class="main-ti">{{$building->name}}</h5>
                                                        <p class="sub-ti">{{$building->full_adress}}</p>
                                                        <p class="sub-ti">Hackney Central (12 mins walk)</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="bot-info">
                                        @foreach($building->offices as $office)
                                            <?php $fixed = 0;$private = 0;$hot = 0 ?>
                                            <div class="separator clear-left">
                                                @if($office->office_type == 2 and $fixed == 0)
                                                    <?php $fixed = 1 ?>
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office off-color">Fixed Disk</p>
                                                        <p class="office auto-margin off-color">{{$office->price}}&nbsp;</p>
                                                        <p class="office off-color">Per month</p>
                                                    </div>
                                                @endif
                                                @if($office->office_type == 0 and $private == 0)
                                                    <?php $private = 1 ?>
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office off-color">Private Office</p>
                                                        <p class="office auto-margin off-color">{{$office->price}}&nbsp;</p>
                                                        <p class="office off-color">Per month</p>
                                                    </div>
                                                @endif
                                                @if($office->office_type == 1 and $hot == 0)
                                                    <?php $hot = 1 ?>
                                                    <div class="col-md-4 col-xs-4 ">
                                                        <p class="office off-color">Hot Disk</p>
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
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <!-- Agent box end -->
                    </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Agent section end -->
