@extends('layout')



@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/search_office.css')}}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush
@section('content')

    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>Add Your Space</h1>
                    <ul class="breadcrumbs">
                        <li><a href="">Home</a></li>
                        <li class="active">Add Your Space</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->
    <!-- Search Office -->
    <div class="search_taps">
        <div class="container">
            <!--office search input-->
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 office_search">
                    <div class = "btn-group">
                        <input type="text" id="search_id"  name="search_field" placeholder="     Search by location or office name........">
                        <label for="search_id" class="fa fa-search input-icon"></label>
                    </div>

                </div>
                <!--office_prefrence button-->
                <div class=" col-md-3 col-sm-12 col-xs-12 office_prefrence">
                    <div class = "btn-group">
                        <button type = "button"  data-target="show_modal" id="office_type_size" class = "btn  btn-primary">Any Office Type and Size
                            <span class = "caret"></span>
                        </button>
                        {{--<ul class = "dropdown-menu" role = "menu">--}}
                            {{--<h2>Select Your Office Preferences </h2>--}}
                            {{--<div class="first">--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<span class="nest_head">NO. OF PEOPLE : </span>--}}
                                    {{--<input type="number" id="desks">--}}
                                    {{--<li><a href = "#">Show range of desks</a></li>--}}
                                {{--</div>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<span class="nest_head">OFFICE TYPE : </span>--}}
                                    {{--<br>--}}
                                    {{--<br>--}}
                                    {{--<form >--}}
                                        {{--<div class="form-check" >--}}
                                            {{--<label>--}}
                                                {{--<input type="checkbox" name="check" checked> <span class="label-text"> Hot Desk <p class="sub-heading">--}}
                                                      {{--Access to a range of desks </p></span>--}}
                                            {{--</label>--}}
                                            {{--<br>--}}
                                            {{--<label>--}}
                                                {{--<input type="checkbox" name="check" checked> <span class="label-text"> Fixed Desk <p class="sub-heading">--}}
                                                      {{--Your own dedicated desk</p></span>--}}
                                            {{--</label>--}}
                                            {{--<br>--}}
                                            {{--<label>--}}
                                                {{--<input type="checkbox" name="check" checked> <span class="label-text"> Private Offic<p class="sub-heading">--}}
                                                        {{--An office just for your team</p></span>--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="row">--}}
                                {{--<div class="col-md-6 col-sm-6 col-xs-6">--}}
                                    {{--<a href = "#" class="office_footer1" >Cancel</a>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-6 col-sm-6 col-xs-6">--}}
                                    {{--<a href = "#" class="office_footer2"  >Apply</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                        {{--</ul>--}}
                    </div>
                </div>
                <!--office_price button-->
                <div class=" col-md-3 col-sm-12 col-xs-12 price">
                    <div class = "btn-group">
                        <button type = "button" data-target  id="price" class = "btn  btn-primary dropdown-toggle" data-toggle = "dropdown"> Any Price
                            <span class = "caret"></span>
                        </button>
                        <ul class = "dropdown-menu" role = "menu" >
                            <div class="prices">
                                <div class="row">
                                    <h2>Select Price</h2>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <p>FROM : </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <p>TO : </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label for="amount" style="margin-left:30px !important;" > Price range:</label>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <label  id="amount" readonly style="border:0;color:#f6931f;font-weight:bold;"></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="slider-range" style="margin:20px 20px !important;"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <a href = "#" class="office_footer1" >Cancel</a>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <a href = "#" class="office_footer2"  >Apply</a>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
                <!--advanced_filterbutton-->
                <div class="col-md-3 col-sm-12 col-xs-12  advanced_filter">
                    <div class = "btn-group">
                        <button type = "button" class = "btn  btn-primary dropdown-toggle" data-toggle = "dropdown">Advanced Filter
                            <span class = "caret"></span>
                        </button>
                        <ul class = "dropdown-menu " role = "menu">
                            <h2>Advanced Filters</h2>
                            <div class="row" >
                                <div class="col-md-2 col-sm-3  col-xs-3" >
                                    <p class="business">BUSINESS FACILITIES</p>
                                </div>
                                <div class="col-md-3 col-sm-9 col-xs-9">
                                    <form >
                                        <div class="form-check" >
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"   >
                                                <span class="label-text"  class="col-md-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"   >
                                                <span class="label-text"  class="col-md-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"  unchecked >
                                                <span class="label-text"  class="col-md-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"  unchecked >
                                                <span class="label-text"  class="col-md-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"  unchecked >
                                                <span class="label-text"  class="col-md-10"> Breakout Space</span>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <form >
                                        <div class="form-check" >
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"  unchecked  >
                                                <span class="label-text"  class="col-md-10" > Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"  unchecked >
                                                <span class="label-text"  class="col-md-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"  unchecked >
                                                <span class="label-text"  class="col-md-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"  unchecked >
                                                <span class="label-text"  class="col-md-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"  unchecked >
                                                <span class="label-text"  class="col-md-10"> Breakout Space</span>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <form >
                                        <div class="form-check" >
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"  unchecked >
                                                <span class="label-text"  class="col-md-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"  unchecked >
                                                <span class="label-text"  class="col-md-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"  unchecked >
                                                <span class="label-text"  class="col-md-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"  unchecked >
                                                <span class="label-text"  class="col-md-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2"  unchecked >
                                                <span class="label-text"  class="col-md-10"> Breakout Space</span>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <a href = "#" style="text-decoration:underline; margin-left:40% !important;">Clear All Section</a>
                            </div>

                            <div class="row" style="margin-top:30px !important;">
                                <div class="col-md-2 col-sm-3 col-xs-3" >
                                    <p class="business">BUSINESS FACILITIES</p>
                                </div>
                                <div class="col-md-3 col-sm-9 col-xs-9 ">
                                    <form >
                                        <div class="form-check" >
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"   >
                                                <span class="label-text"  class="col-md-10 col-sm-10 col-xs-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"   >
                                                <span class="label-text"  class="col-md-10 col-sm-10 col-xs-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"  unchecked >
                                                <span class="label-text"  class="col-md-10 col-sm-10 col-xs-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"  unchecked >
                                                <span class="label-text"  class="col-md-10  col-sm-10 col-xs-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"  unchecked >
                                                <span class="label-text"  class="col-md-10 col-sm-10 col-xs-10"> Breakout Space</span>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <form >
                                        <div class="form-check" >
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"  unchecked  >
                                                <span class="label-text"  class="col-md-10 col-sm-10 col-xs-10 " > Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"  unchecked >
                                                <span class="label-text"  class="col-md-10 col-sm-10 col-xs-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"  unchecked >
                                                <span class="label-text"  class="col-md-10 col-sm-10 col-xs-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"  unchecked >
                                                <span class="label-text"  class="col-md-10 col-sm-10 col-xs-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"  unchecked >
                                                <span class="label-text"  class="col-md-10 col-sm-10 col-xs-10"> Breakout Space</span>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <form >
                                        <div class="form-check" >
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"  unchecked >
                                                <span class="label-text"  class="col-md-10 col-sm-10 col-xs-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"  unchecked >
                                                <span class="label-text"  class="col-md-10 col-sm-10 col-xs-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"  unchecked >
                                                <span class="label-text"  class="col-md-10 col-sm-10 col-xs-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"  unchecked >
                                                <span class="label-text"  class="col-md-10 col-sm-10 col-xs-10"> Breakout Space</span>
                                            </label>
                                            <label>
                                                <input type="checkbox" name="check" class="col-md-2 col-sm-2 col-xs-2"  unchecked >
                                                <span class="label-text"  class="col-md-10 col-sm-10 col-xs-10"> Breakout Space</span>
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>



                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search office -->
    <!-- Map content start -->
    <div class="map-content content-area container-fluid" >
        <div class="col-xs-12 col-sm-12 col-md-5 col-md-push-7 col-lg-6 col-lg-push-6">
            <div class="row">
                <div id="map"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 col-md-pull-5 col-lg-6 col-lg-pull-6 map-content-sidebar">
            <div class="title-area">
                <h2 class="pull-left">Search</h2>
                <a class="show-more-options pull-right" data-toggle="collapse" data-target="#options-content">
                    <i class="fa fa-plus-circle"></i> Show More Options
                </a>
                <div class="clearfix"></div>
            </div>
            <div class="properties-map-search">
                <div class="properties-map-search-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Area From</option>
                                    <option>1000</option>
                                    <option>800</option>
                                    <option>600</option>
                                    <option>400</option>
                                    <option>200</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Location</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>United Kingdom</option>
                                    <option>American Samoa</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Property Types</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Land</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="range-slider">
                                <label>Area</label>
                                <div data-min="0" data-max="10000" data-unit="Sq ft" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="range-slider">
                                <label>Price</label>
                                <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div id="options-content" class="collapse">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Bathroom</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Balcony</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Garage</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <label class="margin-t-10">Features</label>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">
                                        Free Parking
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2">
                                        Air Condition
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">
                                        Places to seat
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">
                                        Swimming Pool
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox5" type="checkbox">
                                    <label for="checkbox5">
                                        Laundry Room
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">
                                        Window Covering
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox7" type="checkbox">
                                    <label for="checkbox7">
                                        Central Heating
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox8" type="checkbox">
                                    <label for="checkbox8">
                                        Alarm
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map-content-separater hidden-sm hidden-xs"></div>
            <div class="clearfix"></div>

            <div class="title-area hidden-sm hidden-xs">
                <h2 class="pull-left">Properties</h2>
                <div class="pull-right btns-area">
                    <a href="properties-list-rightside.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                    <a href="properties-grid-leftside.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="fetching-properties hidden-sm hidden-xs"></div>
        </div>
    </div>
    <!-- Map content end -->

    {{--<div class="clearfix"></div>--}}


    <div data-target="#office_type_size"  class="hidden">
        <h2>Select Your Office Preferences </h2>
        <div class="first">
            <div class="col-md-6">
                <span class="nest_head">NO. OF PEOPLE : </span>
                <input type="number" id="desks">
                <li><a href = "#">Show range of desks</a></li>
            </div>

            <div class="col-md-6">
                <span class="nest_head">OFFICE TYPE : </span>
                <form >
                    <div class="form-check" >
                        <label>
                            <input type="checkbox" name="check" checked> <span class="label-text"> Hot Desk <p class="sub-heading">
            Access to a range of desks </p></span>
                        </label>
                        <br>
                        <label>
                            <input type="checkbox" name="check" checked> <span class="label-text"> Fixed Desk <p class="sub-heading">
            Your own dedicated desk</p></span>
                        </label>
                        <br>
                        <label>
                            <input type="checkbox" name="check" checked> <span class="label-text"> Private Offic<p class="sub-heading">
            An office just for your team</p></span>
                        </label>
                    </div>
                </form>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <a href = "#" class="office_footer1" >Cancel</a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <a href = "#" class="office_footer2"  >Apply</a>
            </div>
        </div>
    </div>



@endsection



@push('scripts')
    <script>
        var latitude = 51.541216;
        var longitude = -0.095678;
        var providerName = 'Hydda.Full';
        generateMap(latitude, longitude, providerName);
    </script>

    <script type="text/javascript">
        $( document ).ready(function () {
            $('[data-target]').click(function () {
                $('[data-target="#'+$(this).attr('id')+'"]').toggleClass('hidden') ;
            });
        });
    </script>
@endpush