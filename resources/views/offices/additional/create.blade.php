@extends('layout')




@section('content')

    <!-- start feature building-->
    <div class="feature-building">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-12" >
                    <a href="Listing.html"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go To Building</a>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h3><b>Add Building</b></h3>
                </div>
                <div class="col-md-6 col-sm-12">
                    <button class="btn btn-danger Continue" id="Continue99">Save&Continue</button>
                </div>
            </div>

        </div>

    </div>
    <!-- end feature building-->
    <!-- start tabs of building-->
    <div class="tab">
        <div class="container">
            <div class="row">
                <div class="wizard">

                    <ul class="nav nav-wizard">

                        <li class="disabled">
                            <a href="#step1" data-toggle="tab">BASIC INFO</a>
                        </li>

                        <li class="disabled">
                            <a href="#step2" data-toggle="tab">OFFICES</a>
                        </li>

                        <li class="disabled">
                            <a href="#step3" data-toggle="tab">IMAGES</a>
                        </li>

                        <li class="active">
                            <a href="#step4" data-toggle="tab">ADDITIONAL</a>
                        </li>
                    </ul>
                    {{--<form novalidate>--}}
                    <div class="tab-content">

                    {{--<form action="{{route('post.building')}}" method="post" id="form_building">--}}
                    {{--{!! csrf_field() !!}--}}
                    {{--<div class="tab-pane active" id="step1">--}}
                    {{--<div class="container">--}}
                    {{--<div class="row">--}}
                    {{--<div class=" name col-md-12 col-sm-12">--}}
                    {{--<small><b>BUILDING NAME*</b></small>--}}
                    {{--<p>Tenants will be able to search for you by this name.</p>--}}
                    {{--<input type="text" id="name" name="name" placeholder="Enter  Building name........" required>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="container">--}}
                    {{--<div class="row">--}}
                    {{--<div class=" address col-md-8 col-sm-8">--}}
                    {{--<small><b>FULL ADDRESS*</b></small>--}}
                    {{--<p>Number and Street Address</p>--}}
                    {{--<input type="text" id="address" name="full_address" placeholder="Enter  Building Address.......">--}}
                    {{--</div>--}}
                    {{--<div class=" postal col-md-4 col-sm-4">--}}
                    {{--<small><b>Postcode</b></small>--}}
                    {{--<input type="text" id="postal" name="postcode" size="8" placeholder="EX. AA9-AAAA" >--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="container">--}}
                    {{--<div class="row">--}}
                    {{--<div class="welcom-message col-md-8 col-sm-8">--}}
                    {{--<small><b>WELCOME MESSAGE*</b></small>--}}
                    {{--<p>Give prospective tenants an introduction to your space.</p>--}}
                    {{--<textarea id="text1" name="welcome_message"></textarea>--}}
                    {{--</div>--}}
                    {{--<div class="tips col-md-4 col-sm-4">--}}
                    {{--<b>Some Tips</b>--}}
                    {{--<p>- Give it some personality!</p>--}}
                    {{--<p>- Describe what kind of companies would be best suited for your space. </p>--}}
                    {{--<p>- Include any social or work events you organise.</p>--}}
                    {{--<p>- Do not include information on price and availiblity. This comes later.</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="container">--}}
                    {{--<div class="row">--}}
                    {{--<div class="about-us col-md-8 col-sm-8">--}}
                    {{--<small><b>ABOUT US</b></small>--}}
                    {{--<p>Tell us more about you as a company.</p>--}}
                    {{--<textarea name="about_us"></textarea>--}}
                    {{--</div>--}}
                    {{--<div class=" tips col-md-4 col-sm-4">--}}

                    {{--<b>Some Tips</b>--}}
                    {{--<p>- What kind of company are you?</p>--}}
                    {{--<p>- What is your vision and mission? What are your values?</p>--}}
                    {{--<p>- How would you describe the culture of your space?</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="container">--}}
                    {{--<div class="row">--}}
                    {{--<div class=" facilities col-md-12 col-sm-12">--}}
                    {{--<small><b>FACILITIES*</b></small>--}}
                    {{--<p>Select all available facilities in your building.</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="checking">--}}
                    {{--<div class="row">--}}
                    {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<input type="checkbox" name="facilities[]" value="furniture" class="cb" id="check1">--}}
                    {{--<label> Furniture</label><hr></br>--}}
                    {{--<input type="checkbox" nama="facilities[]" value="pets-allowed" class="cb" id="check2">--}}
                    {{--<label>Pets Allowed </label><hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="kitchen" class="cb" id="check3">--}}
                    {{--<label>Kitchen</label><hr> </br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="cleaning" class="cb" id="check4">--}}
                    {{--<label>Cleaning </label><hr> </br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="phone-booths" class="cb" id="check5">--}}
                    {{--<label> Phone Booths</label><hr> </br>--}}
                    {{--<input type="checkbox"  name="furniture[]" value="utilities" class="cb" id="check6">--}}
                    {{--<label> Utilities </label><hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="fruit&snacks" class="cb" id="check7">--}}
                    {{--<label> Fruit & Snacks </label><hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="24hr-access" class="cb" id="check8">--}}
                    {{--<label> 24 hr Access </label><hr></br>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<input type="checkbox" name="facilities[]" value="breakout-space" class="cb" id="check9">--}}
                    {{--<label> Breakout Space</label><hr> </br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="lockers" class="cb" id="check10">--}}
                    {{--<label> Lockers</label><hr> </br>--}}
                    {{--<input type="checkbox" name="facilities[]"  value="bike-storage"  class="cb" id="check11">--}}
                    {{--<label> Bike Storage </label><hr></br>--}}
                    {{--<input type="checkbox"  name="facilities[]"  value="gym" class="cb" id="check12">--}}
                    {{--<label> Gym </label><hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="printing" class="cb" id="check13">--}}
                    {{--<label> Printing </label><hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="cafe" class="cb" id="check14">--}}
                    {{--<label> Cafe </label><hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]"  value="coffee-tea" class="cb" id="check15">--}}
                    {{--<label> Coffee & Tea </label><hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="roof-terrace" class="cb" id="check16">--}}
                    {{--<label> Roof Terrace</label><hr> </br>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<input type="checkbox" name="facilities[]" value="mailing-address" class="cb" id="check17">--}}
                    {{--<label> Mailing Address</label><hr> </br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="showers" class="cb" id="check18">--}}
                    {{--<label> Showers </label><hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="event-space" class="cb" id="check19">--}}
                    {{--<label> Event Space </label><hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="inventory-storage" class="cb" id="check20">--}}
                    {{--<label> Inventory Storage</label><hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]"  value="reception" class="cb" id="check21">--}}
                    {{--<label> Reception</label><hr> </br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="trading-address" class="cb" id="check22">--}}
                    {{--<label>  Trading Address</label><hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="events-talks" class="cb" id="check23">--}}
                    {{--<label>Events & Talks</label><hr></br>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<input type="checkbox" name="facilities[]" value="disabled-access" class="cb" id="check24">--}}
                    {{--<label>Disabled Access</label><hr> </br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="meeting-rooms" class="cb" id="check25">--}}
                    {{--<label>Meeting Rooms </label> <hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="childcare" class="cb" id="check26">--}}
                    {{--<label>Childcare</label><hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="parking" class="cb" id="check27">--}}
                    {{--<label>Parking</label><hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="secure-access" class="cb" id="check28">--}}
                    {{--<label>Secure Access</label><hr>  </br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="beer-wine" class="cb" id="check29">--}}
                    {{--<label>Beer & Wine</label><hr></br>--}}
                    {{--<input type="checkbox" name="facilities[]" value="wifi" class="cb" id="check30">--}}
                    {{--<label> Wifi </label><hr></br>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</form>--}}
                    <!--end tab-->

                        {{--<div class="tab-pane" id="step2">--}}
                        {{--<div class="row">--}}
                        {{--<section class=" office col-md-12 ">--}}
                        {{--<div class="office-btn">--}}
                        {{--<a class="btn btn-warning" id="addOffice" href="#warningModal" data-toggle="modal" ><i class="fa fa-plus-circle" aria-hidden="true"></i> ADD NEW OFFICE</a>--}}
                        {{--</div>--}}
                        {{--<!-- Modal -->--}}
                        {{--<div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
                        {{--<div class="modal-dialog">--}}
                        {{--<div class="modal-content">--}}
                        {{--<div class="modal-header modal-header-warning">--}}
                        {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                        {{--<h2> ADD  OFFICE</h2>--}}
                        {{--</div>--}}
                        {{--<div class="modal-body">--}}
                        {{--<div class="col-md-12 radio-choices">--}}

                        {{--<small><b>Office Type*</b></small> </br>--}}

                        {{--<!-- start office tabs-->--}}
                        {{--<ul class="nav nav-tabs">--}}
                        {{--<li class="active"><a data-toggle="tab" href="#home"><h4>Private Office</h4></br>--}}
                        {{--<small>The tenant gets the wd chole office, not shared with other tenants</small></a></li>--}}
                        {{--<li><a data-toggle="tab" href="#menu1"><h4>Hot Desk</h4></br>--}}
                        {{--<small>Assign ,fixed desks with muiltiple tenants in the same office</small></a></li>--}}
                        {{--<li><a data-toggle="tab" href="#menu2"><h4>Fixed Desk</h4></br>--}}
                        {{--<small>No assigned seating  with many tenant in same office--}}
                        {{--</small></a></li>--}}
                        {{--</ul>--}}

                        {{--<div class="tab-content">--}}
                        {{--<div id="home" class="tab-pane fade in active">--}}
                        {{--<div class="row">--}}
                        {{--<div class="Av-desk  col-md-6 col-sm-6">--}}
                        {{--<small><b>DESKS AVAILABLE<span class="mand">*</span></b></small>--}}
                        {{--<p>How many desks would you like to rent out.</p>--}}
                        {{--<input type="number" name="desks_available_office">--}}
                        {{--</div>--}}
                        {{--<div class=" Av-desk col-md-6 col-sm-6">--}}
                        {{--<small><b>SQUARE FOOTAGE<span class="mand">*</span></b></small>--}}
                        {{--<p>If exact size is unknown, please provide an estimate.</p>--}}
                        {{--<input type="Number" id="footage" name="square_footage_office">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                        {{--<div class="PRICE col-md-12 col-sm-12">--}}
                        {{--<small><b>PRICE (EX. VAT)<span class="mand">*</span></b></small>--}}
                        {{--<p>Price per office per month. Do not include VAT.</p>--}}
                        {{--<input type="number" id="price" name="price_office">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                        {{--<div class="Av-desk  col-md-6 col-sm-6">--}}
                        {{--<small><b>MIN. TERM (MONTHS)</b></small>--}}
                        {{--<input type="number" name="min_office">--}}
                        {{--</div>--}}
                        {{--<div class=" Av-desk col-md-6 col-sm-6">--}}
                        {{--<small><b>MAX. TERM (MONTHS)</b></small>--}}
                        {{--<input type="number" name="max_office">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                        {{--<div class="welcom-message col-md-8 col-sm-8">--}}
                        {{--<small><b>KEY FEATURES</b></small>--}}
                        {{--<p>Please list this in bullet form by adding - followed by a space.</p>--}}
                        {{--<textarea class="KEY-FEATURES" name="key_features_office"></textarea>--}}
                        {{--</div>--}}
                        {{--<div class="tips col-md-4 col-sm-4">--}}
                        {{--<b>Some Tips</b>--}}
                        {{--<p>- List out what's included in the monthly rent (rates, service charge, utilities, etc.).</p>--}}
                        {{--<p>- Tell tenants about your Internet connection speed. </p>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                        {{--<div class="welcom-message col-md-8 col-sm-8">--}}
                        {{--<small><b>NOT INCLUDED</b></small>--}}
                        {{--<p>Please list this in bullet form by adding - followed by a space.</p>--}}
                        {{--<textarea class="KEY-FEATURES" name="not_included_office"></textarea>--}}
                        {{--</div>--}}
                        {{--<div class="tips col-md-4 col-sm-4">--}}
                        {{--<b>Some Tips</b>--}}
                        {{--<p>- List out what's not included in the monthly rent (rates, internet, phone, etc.).</p>--}}
                        {{--<p>- If you charge for meeting room use, please indicate the price here.</p>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--tab2-->    <div id="menu1" class="tab-pane fade">--}}
                        {{--<div class="row">--}}
                        {{--<div class="Av-desk2  col-md-12 col-sm-12">--}}
                        {{--<small><b>DESKS AVAILABLE<span class="mand">*</span></b></small>--}}
                        {{--<p>How many desks would you like to rent out.</p>--}}
                        {{--<input type="number" id="available" name="desks-available_hot">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                        {{--<div class="PRICE col-md-12 col-sm-12">--}}
                        {{--<small><b>PRICE (EX. VAT)*</b></small>--}}
                        {{--<p>Price per office per month. Do not include VAT.</p>--}}
                        {{--<input type="number" id="price"  name="price_hot">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                        {{--<div class="Av-desk  col-md-6 col-sm-6">--}}
                        {{--<small><b>MIN. TERM (MONTHS)</b></small>--}}
                        {{--<input type="number" name="min_hot">--}}
                        {{--</div>--}}
                        {{--<div class=" Av-desk col-md-6 col-sm-6">--}}
                        {{--<small><b>MAX. TERM (MONTHS)</b></small>--}}
                        {{--<input type="number" name="max_hot">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                        {{--<div class="welcom-message col-md-8 col-sm-8">--}}
                        {{--<small><b>KEY FEATURES</b></small>--}}
                        {{--<p>Please list this in bullet form by adding - followed by a space.</p>--}}
                        {{--<textarea class="KEY-FEATURES" name="key_features_hot"></textarea>--}}
                        {{--</div>--}}
                        {{--<div class="tips col-md-4 col-sm-4">--}}
                        {{--<b>Some Tips</b>--}}
                        {{--<p>- List out what's included in the monthly rent (rates, service charge, utilities, etc.).</p>--}}
                        {{--<p>- Tell tenants about your Internet connection speed. </p>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                        {{--<div class="welcom-message col-md-8 col-sm-8">--}}
                        {{--<small><b>NOT INCLUDED</b></small>--}}
                        {{--<p>Please list this in bullet form by adding - followed by a space.</p>--}}
                        {{--<textarea class="KEY-FEATURES" name="not_included_hot"></textarea>--}}
                        {{--</div>--}}
                        {{--<div class="tips col-md-4 col-sm-4">--}}
                        {{--<b>Some Tips</b>--}}
                        {{--<p>- List out what's not included in the monthly rent (rates, internet, phone, etc.).</p>--}}
                        {{--<p>- If you charge for meeting room use, please indicate the price here.</p>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div id="menu2" class="tab-pane fade">--}}
                        {{--<div class="row">--}}
                        {{--<div class="Av-desk2  col-md-12 col-sm-12">--}}
                        {{--<small><b>DESKS AVAILABLE*</b></small>--}}
                        {{--<p>How many desks would you like to rent out.</p>--}}
                        {{--<input type="number" name="desks-available_fixed">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                        {{--<div class="PRICE col-md-12 col-sm-12">--}}
                        {{--<small><b>PRICE (EX. VAT)*</b></small>--}}
                        {{--<p>Price per office per month. Do not include VAT.</p>--}}
                        {{--<input type="number" name="price_fixed">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                        {{--<div class="Av-desk  col-md-6 col-sm-6">--}}
                        {{--<small><b>MIN. TERM (MONTHS)</b></small>--}}
                        {{--<input type="number" name="min_fixed">--}}
                        {{--</div>--}}
                        {{--<div class=" Av-desk col-md-6 col-sm-6">--}}
                        {{--<small><b>MAX. TERM (MONTHS)</b></small>--}}
                        {{--<input type="number" name="max_fixed">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                        {{--<div class="welcom-message col-md-8 col-sm-8">--}}
                        {{--<small><b>KEY FEATURES</b></small>--}}
                        {{--<p>Please list this in bullet form by adding - followed by a space.</p>--}}
                        {{--<textarea class="KEY-FEATURES" name="key_features_fixed"></textarea>--}}
                        {{--</div>--}}
                        {{--<div class="tips col-md-4 col-sm-4">--}}
                        {{--<b>Some Tips</b>--}}
                        {{--<p>- List out what's included in the monthly rent (rates, service charge, utilities, etc.).</p>--}}
                        {{--<p>- Tell tenants about your Internet connection speed. </p>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                        {{--<div class="welcom-message col-md-8 col-sm-8">--}}
                        {{--<small><b>NOT INCLUDED</b></small>--}}
                        {{--<p>Please list this in bullet form by adding - followed by a space.</p>--}}
                        {{--<textarea class="KEY-FEATURES" name="not_included_fixed"></textarea>--}}
                        {{--</div>--}}
                        {{--<div class="tips col-md-4 col-sm-4">--}}
                        {{--<b>Some Tips</b>--}}
                        {{--<p>- List out what's not included in the monthly rent (rates, internet, phone, etc.).</p>--}}
                        {{--<p>- If you charge for meeting room use, please indicate the price here.</p>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div id="menu3" class="tab-pane fade">--}}
                        {{--<h3>Menu 3</h3>--}}
                        {{--<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--end office tabs-->--}}
                        {{--</div><!-- ends col-12 -->--}}
                        {{--</div>--}}
                        {{--<div class="clearfix"></div>--}}
                        {{--<div class="modal-footer">--}}
                        {{--<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>--}}
                        {{--<button type="submit" id="save" class="btn btn-primary pull-right">Save</button>--}}
                        {{--</div>--}}
                        {{--</div><!-- /.modal-content -->--}}
                        {{--</div><!-- /.modal-dialog -->--}}
                        {{--</div><!-- /.modal -->--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="tab-pane active" id="step3">--}}
                            {{--<div class="row">--}}
                                {{--<div class="office col-md-12 col-sm-12">--}}
                                    {{--<div class="container p-y-1">--}}
                                        {{--<div class="row m-b-1">--}}
                                            {{--<div class="col-sm-12 offset-sm-12">--}}
                                                {{--<div class="form-group inputDnD">--}}
                                                    {{--<small ><b>IMAGES*</b></small>--}}
                                                    {{--<p>We recommend you add at least 3 images.</p>--}}
                                                    {{--<br>--}}
                                                    {{--<form action="{{route('post.images',['id'=>$id])}}"  method="post" enctype="multipart/form-data" id="form-upload">--}}
                                                        {{--{!! csrf_field() !!}--}}
                                                        {{--<div class="imgUpload" >--}}
                                                            {{--<div class="form-group">--}}
                                                                {{--<div class="file-loading">--}}
                                                                    {{--<label>Preview File Icon</label>--}}
                                                                    {{--<input id="file-3" type="file" name="images[]" multiple>--}}
                                                                {{--</div>--}}

                                                                {{--<input type="hidden" name="building_id" value="{{$id}}"/>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</form>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<script type="text/javascript">--}}
                                        {{--function readUrl(input) {--}}

                                            {{--if (input.files && input.files[0]) {--}}
                                                {{--let reader = new FileReader();--}}
                                                {{--reader.onload = (e) => {--}}
                                                    {{--let imgData = e.target.result;--}}
                                                    {{--let imgName = input.files[0].name;--}}
                                                    {{--input.setAttribute("data-title", imgName);--}}
                                                    {{--console.log(e.target.result);--}}
                                                {{--}--}}
                                                {{--reader.readAsDataURL(input.files[0]);--}}
                                            {{--}--}}

                                        {{--}--}}
                                    {{--</script>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        <div class="tab-pane active" id="step4">
                        <!-- start feature building-->
                        <div class="feature-building">
                            <form method="post" action="{{route('post.additional',['id'=>$id])}}" id="form-additional">
                                {!! csrf_field() !!}
                                <div class="container">
                                    <div class="row">
                                    <div class=" guid col-md-12 col-md-12" >
                                    <h3>Guidance on listing highlights:</h3>
                                    <p>- Give it some personality!</p>
                                    <p>- What 3 things make your space unique?</p>
                                    <p>- Don't add info about price or availability.</p>
                                    <br>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="highlight col-md-12 col-md-12" >
                                    <small><b>HIGHLIGHT ONE*</b></small>
                                    <p>Title</p>
                                    <input type="text" id="highlight1" name="highlight[]">
                                    <p>Description</p>
                                    <input type="text" id="desc1" name="description[]">
                                    <br>
                                    <br>
                                    <br>
                                    <small><b>HIGHLIGHT Two*</b></small>
                                    <p>Title</p>
                                    <input type="text" id="highlight2_two" name="highlight[]">
                                    <p>Description</p>
                                    <input type="text" id="desc2" name="description[]">
                                    <br>
                                    <br>
                                    <br>
                                    <small><b>HIGHLIGHT Three*</b></small>
                                    <p>Title</p>
                                    <input type="text" id="highlight3" name="highlight[]">
                                    <p>Description</p>
                                    <input type="text" id="desc3" name="description[]">
                                    <br>
                                    <br>
                                    <br>
                                    <small><b>HIGHLIGHT Four*</b></small>
                                    <p>Title</p>
                                    <input type="text" id="highlight4" name="highlight[]">
                                    <p>Description</p>
                                    <input type="text" id="desc4" name="description[]">
                                    <br>
                                    <br>
                                    <br>
                                    <small><b>HIGHLIGHT Five*</b></small>
                                    <p>Title</p>
                                    <input type="text" id="highlight5" name="highlight[]">
                                    <p>Description</p>
                                    <input type="text" id="desc5" name="description[]">
                                    <br>
                                    <br>
                                    <br>
                                    <small><b>EXCLUSIVE OFFER</b></small>
                                    <p>A special offer with Hubble helps you get more prospective tenants (e.g. 10% off your first three months of rent and free welcome breakfast).</p>
                                    <input type="text" id="ExcOffer" name="exlusive_office">
                                    </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                        {{--<!-- end feature building-->--}}
                        {{--</div>--}}
                        <div class="clearfix"></div>
                    </div>
                    {{--</form>--}}
                </div>

            </div>
        </div>
    </div>
    <!-- end building tabs-->
    <!-- start feature building-->
    <div class="feature-building">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6" >
                    <br>
                    <a href="Listing.html"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go To Building</a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <button class="btn btn-danger Continue" id="Continue">Save&Continue</button>
                </div>
            </div>


        </div>
    </div>
    <br>
    <br>
    <br>
    <!-- end feature building-->





    <script type="text/javascript" >

        $('.Continue').click(function () {
            $('#form-additional').submit();
        });

    </script>










@endsection