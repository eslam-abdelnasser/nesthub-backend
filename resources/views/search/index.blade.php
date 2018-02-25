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
                    </div>
                </div>
                <!--office_price button-->
                <div class=" col-md-3 col-sm-12 col-xs-12 price">
                    <div class = "btn-group">
                        <button type = "button" data-target  id="price" class = "btn  btn-primary dropdown-toggle" data-toggle = "dropdown"> Any Price
                            <span class = "caret"></span>
                        </button>
                    </div>
                </div>
                <!--advanced_filterbutton-->
                <div class="col-md-3 col-sm-12 col-xs-12  advanced_filter">
                    <div class = "btn-group">
                        <button type = "button" data-target  id="advanced_filter" class = "btn  btn-primary dropdown-toggle" data-toggle = "dropdown">Advanced Filter
                            <span class = "caret"></span>
                        </button>
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
                <div class="clearfix"></div>
            </div>
            <div class="properties-map-search">
                <div class="properties-map-search-content">
                </div>
            </div>

            <div class="map-content-separater hidden-sm hidden-xs"></div>
            <div class="clearfix"></div>


            <div class="fetching-properties hidden-sm hidden-xs"></div>
        </div>
    </div>
    <!-- Map content end -->

    {{--<div class="clearfix"></div>--}}

    {{-- office type --}}
    <div data-target="#office_type_size"  class="advanced-filteration">
        <div class="container" style="padding: 3%">
            <div class="advanced-search-box">
                <div class="row inner-search-box">
                    <h2>Select Your Office Preferences </h2>
                    <div class="first">
                        <div class="col-md-6">
                            <span class="nest_head">NO. OF PEOPLE : </span>
                            <input type="number" id="desks">
                            <div class="row">
                                <a href = "#">Show range of desks</a>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <span class="nest_head">OFFICE TYPE : </span>
                            <form >
                                <div class="form-check" >
                                    <label>
                                        <input type="checkbox" class="office_type" value="hot_desk" name="check" checked> <span class="label-text"> Hot Desk <p class="sub-heading">
                Access to a range of desks </p></span>
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox"  class="office_type" value="fixed_desk" name="check" checked> <span class="label-text"> Fixed Desk <p class="sub-heading">
                Your own dedicated desk</p></span>
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" class="office_type" value="private_office" name="check" checked> <span class="label-text"> Private Offic<p class="sub-heading">
                An office just for your team</p></span>
                                    </label>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a data-popup-close="office_type_size" href = "#" class="office_footer1 pull-left" >Cancel</a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href = "#" class="office_footer2 pull-right"  >Apply</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- price filteration --}}
    <div data-target="#price" class="advanced-filteration">
        <div class="container" style="padding: 3%">
            <div class="advanced-search-box">
                <div class="row inner-search-box">
                    <h2 class="text-center">Add your price range</h2>
                    <div class="col-sm-12 range-slider">
                        <label>Price</label>
                        <div data-min="0" data-max="150000" data-unit="EGP" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>

                    </div>


                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href = "#" data-popup-close="price" class="office_footer1 pull-left" >Cancel</a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href = "#" class="office_footer2 pull-right"  >Apply</a>
                        </div>

                </div>

            </div>
        </div>
    </div>

    {{-- Advanced filtration --}}

    <div data-target="#advanced_filter" class="advanced-filteration">
        <div class="container" style="padding: 3%">
            <div class="advanced-search-box">
                <div class="row inner-search-box">
                    <h2>Advanced Filters</h2>
                    <div class="row" >
                        <div class="col-md-2 col-sm-12  col-xs-12" >
                            <p class="business">BUSINESS FACILITIES</p>
                        </div>
                        <div class="col-md-10">
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                        </div>



                    </div>
                    <div class="row">
                        <a href = "#" style="text-decoration:underline; margin-left:40% !important;">Clear All Section</a>
                    </div>

                    <div class="row" style="margin-top:30px !important;">
                        <div class="col-md-2 col-sm-12 col-xs-12" >
                            <p class="business">Additional FACILITIES</p>
                        </div>
                        <div class="col-md-10">
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check"> <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                            <div class="col-sm-4 form-check">
                                <label>
                                    <input type="checkbox" name="check" > <span class="label-text">Option 01</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <a href = "#" style="text-decoration:underline; margin-left:40% !important;">Clear All Section</a>
                        </div>

                    </div>
                        <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a  data-popup-close="advanced_filter" href = "#" class="office_footer1 pull-left" >Cancel</a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href = "#" class="office_footer2 pull-right"  >Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

       {{--<input type="text" value="" id="t"/>--}}




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
                $('[data-target="#'+$(this).attr('id')+'"]').fadeIn(350) ;
            });

            $('[data-popup-close]').on('click', function(e)  {
                var targeted_popup_class = jQuery(this).attr('data-popup-close');
                $('[data-target="#' + targeted_popup_class + '"]').fadeOut(350);
                e.preventDefault();
            });


            /*
              $('.office_type:checkbox:checked').each(function() {
                    $('#t').val($('#t').val()+', ' +$(this).val());
                });
             */
        });




        // TODO ajax  to retrive data from database and
        // filteration all results using underscore liberrary and
        // any filteration javascript
    </script>
@endpush