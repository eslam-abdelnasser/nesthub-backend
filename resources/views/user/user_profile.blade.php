@extends('layout')

@section('content')


    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>My Profile</h1>
                    <ul class="breadcrumbs">
                        <li><a href="">Home</a></li>
                        <li class="active">My Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    @include('user.user_part')
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <!-- My address start-->
                    <div class="my-address">
                        <div class="main-title-2">
                            <h1><span>Advanced</span> Search</h1>
                        </div>

                        <form action="{{route('update.user_profile',[ 'id' => Auth::user()->id])}}" method="post" id="user_profile_data">
                            <input type="hidden" name="_method" value="PUT"/>
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="input-text" name="name" value="{{Auth::user()->name}}" placeholder="John Antony">
                            </div>
                            <div class="form-group">
                                <label>Your Title</label>
                                <input type="text" class="input-text" name="title" value="{{Auth::user()->title}}" placeholder="Your title">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="input-text" name="mobile_number" value="{{Auth::user()->mobile_number}}" placeholder="+55 4XX-634-7071">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="input-text" name="email" value="{{Auth::user()->email}}" placeholder="johndoe@gmail.com">
                            </div>
                            <div class="form-group">
                                <label>About Me</label>
                                <textarea class="input-text" name="about_me" placeholder="Etiam luctus malesuada quam eu aliquet. Donec eget mollis tortor. Donec pellentesque eros a nisl euismod, ut congue orci ultricies. Fusce aliquet metus non arcu varius ullamcorper a sit amet nunc. Donec in lacus neque. Vivamus ullamcorper sed ligula vitae ">{{Auth::user()->about_me}}</textarea>
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
    <!-- My profile end -->

@endsection



@push('scripts')
    <script>

        $('#user_profile_data').submit(function (e) {


            var url = $(this).attr('action'); // the script where you handle the form input.
            var method =$(this).attr('method');

            $.ajax({
                type: method,
                url: url,
                dataType: "json",
                data: $(this).serialize(), // serializes the form's elements.
                success: function(data)
                {

                    alert(data.success)
                    // console.log(data); // show response from the php script.
                }
            });


            e.preventDefault() ;
        });
    </script>
@endpush