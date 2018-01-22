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

                        <li >
                            <a href="http://www.google.com" >BASIC INFO</a>
                        </li>

                        <li class="active">
                            <a href="#step2" data-toggle="tab">OFFICES</a>
                        </li>

                        <li class="disabled">
                            <a href="#step3" data-toggle="tab">IMAGES</a>
                        </li>

                        <li class="disabled">
                            <a href="#step4" data-toggle="tab">ADDITIONAL</a>
                        </li>
                    </ul>
                    {{--<form novalidate>--}}
                    <div class="tab-content">


                        <!--end tab-->

                        <div class="tab-pane step2-tab" id="step2">
                          <div class="row">
                            <section class=" office col-md-12 ">
                                <div class="office-btn">
                                <a class="btn btn-warning" id="addOffice" href="#warningModal" data-toggle="modal"><i class="fa fa-plus-circle" aria-hidden="true"></i> ADD NEW OFFICE</a>
                                </div>
                        <!-- Modal -->
                                <div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header modal-header-warning">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h2> ADD  OFFICE</h2>
                                </div>
                                <div class="modal-body">
                                <div class="col-md-12 radio-choices">

                                <small><b>Office Type*</b></small> </br>

                        <!-- start office tabs-->
                        <ul class="nav nav-tabs">
                        <li class="active" id="private"><a data-toggle="tab" href="#home"><h4>Private Office</h4></br>
                        <small>The tenant gets the wd chole office, not shared with other tenants</small></a></li>
                        <li><a data-toggle="tab" id="hot" href="#menu1"><h4>Hot Desk</h4></br>
                        <small>Assign ,fixed desks with muiltiple tenants in the same office</small></a></li>
                        <li><a data-toggle="tab"  id="fixed" href="#menu2"><h4>Fixed Desk</h4></br>
                        <small>No assigned seating  with many tenant in same office
                        </small></a></li>
                        </ul>
                            <form data-parsley-validate="" action="{{route('post.offices',['id'=>$id])}}"  method="post"/>
                                   {!! csrf_field() !!}
                        <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                        <div class="row">
                        <div class="Av-desk  col-md-6 col-sm-6">
                        <small><b>DESKS AVAILABLE<span class="mand">*</span></b></small>
                        <p>How many desks would you like to rent out.</p>
                        <input type="number" name="desks_available" value="" required="">
                        </div>
                        <div class=" Av-desk col-md-6 col-sm-6" id="footage">
                        <small><b>SQUARE FOOTAGE<span class="mand">*</span></b></small>
                        <p>If exact size is unknown, please provide an estimate.</p>
                        <input type="Number"  name="square_footage" required="">
                        </div>
                        </div>
                            <input type="hidden" name="office_type"  value="private" id="office_type" />
                        <div class="row">
                        <div class="PRICE col-md-12 col-sm-12">
                        <small><b>PRICE (EX. VAT)<span class="mand">*</span></b></small>
                        <p>Price per office per month. Do not include VAT.</p>
                        <input type="number" id="price" name="price" required="">
                        </div>
                        </div>
                        <div class="row">
                        <div class="Av-desk  col-md-6 col-sm-6">
                        <small><b>MIN. TERM (MONTHS)</b></small>
                        <input type="number" name="min" required="">
                        </div>
                        <div class=" Av-desk col-md-6 col-sm-6">
                        <small><b>MAX. TERM (MONTHS)</b></small>
                        <input type="number" name="max" required="">
                        </div>
                        </div>
                        <div class="row">
                        <div class="welcom-message col-md-8 col-sm-8">
                        <small><b>KEY FEATURES</b></small>
                        <p>Please list this in bullet form by adding - followed by a space.</p>
                        <textarea class="KEY-FEATURES" name="key_features" required=""></textarea>
                        </div>
                        <div class="tips col-md-4 col-sm-4">
                        <b>Some Tips</b>
                        <p>- List out what's included in the monthly rent (rates, service charge, utilities, etc.).</p>
                        <p>- Tell tenants about your Internet connection speed. </p>
                        </div>
                        </div>
                        <div class="row">
                        <div class="welcom-message col-md-8 col-sm-8">
                        <small><b>NOT INCLUDED</b></small>
                        <p>Please list this in bullet form by adding - followed by a space.</p>
                        <textarea class="KEY-FEATURES" name="not_included" required=""></textarea>
                        </div>
                        <div class="tips col-md-4 col-sm-4">
                        <b>Some Tips</b>
                        <p>- List out what's not included in the monthly rent (rates, internet, phone, etc.).</p>
                        <p>- If you charge for meeting room use, please indicate the price here.</p>
                        </div>
                        </div>
                        </div>

                        </div>
                        <!--end office tabs-->

                        </div><!-- ends col-12 -->
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                        <button type="submit" id="save" class="btn btn-primary pull-right">Save</button>
                        </div>
                        </div><!-- /.modal-content -->
                                    </form>
                        </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        </div>
                        </div>


                        <div class="tab-pane" id="step4">
                        <!-- start feature building-->
                        <div class="feature-building">
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
                        <input type="text" id="highlight1" name="highlight_one" required="">
                        <p>Description</p>
                        <input type="text" id="desc1" name="description_one" required="">
                        <br>
                        <br>
                        <br>
                        <small><b>HIGHLIGHT Two*</b></small>
                        <p>Title</p>
                        <input type="text" id="highlight2_two" required="">
                        <p>Description</p>
                        <input type="text" id="desc2" name="description_two" required="">
                        <br>
                        <br>
                        <br>
                        <small><b>HIGHLIGHT Three*</b></small>
                        <p>Title</p>
                        <input type="text" id="highlight3" name="highlight_three" required="">
                        <p>Description</p>
                        <input type="text" id="desc3" name="description_three" required="">
                        <br>
                        <br>
                        <br>
                        <small><b>HIGHLIGHT Four*</b></small>
                        <p>Title</p>
                        <input type="text" id="highlight4" name="highlight_four" required="">
                        <p>Description</p>
                        <input type="text" id="desc4" name="description_four" required="">
                        <br>
                        <br>
                        <br>
                        <small><b>HIGHLIGHT Five*</b></small>
                        <p>Title</p>
                        <input type="text" id="highlight5" name="highlight_five" required="">
                        <p>Description</p>
                        <input type="text" required="" id="desc5" name="description_five">
                        <br>
                        <br>
                        <br>
                        <small><b>EXCLUSIVE OFFER</b></small>
                        <p>A special offer with Hubble helps you get more prospective tenants (e.g. 10% off your first three months of rent and free welcome breakfast).</p>
                        <input required="" type="text" id="ExcOffer" name="exlusive_office">
                        </div>
                        </div>

                        </div>
                        </div>

                        <!-- end feature building-->
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    {{--</form>--}}
                </div>

            </div>
        </div>



    </div>
@if(count($offices))
    <section class='show-offices'>

        <div class="container">
            <div class="row">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Office type</th>
                            <th>Number of desks</th>
                            <th>City</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($offices as $office)
                        <tr>

                                <td>{{$loop->iteration}}</td>
                                <td>
                                @if($office->office_type ==  0)
                                    Private office
                                @elseif($office->office_type == 1)
                                        Hot desk
                                 @else
                                    Fixed desk
                                @endif
                                </td>

                                <td>{{$office->desks_available}}</td>
                                <td>Cairo</td>


                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            </div>

        </div>


    </section>

@endif
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
                    <button class="btn btn-danger"  onclick="window.location='{{route("create.images",["id"=>$id])}}'">Save&Continue</button>
                </div>
            </div>


        </div>
    </div>
    <br>
    <br>
    <br>
    <!-- end feature building-->





    <script type="text/javascript" >

      $('#private').click(function () {

          $('#office_type').val('private');
          $('#footage').show();

      });

      $('#hot').click(function () {

          $('#office_type').val('hot');
          $('#footage').hide();


      });
      $('#fixed').click(function () {

          $('#office_type').val('fixed');
          $('#footage').hide();

      });

    </script>










@endsection