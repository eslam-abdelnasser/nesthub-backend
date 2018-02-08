@extends('layout')
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
<div class="container">
    <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="main-title-2">
            <h1><span>My</span> Properties</h1>
        </div>

        <!-- table start -->
        <table class="manage-table responsive-table">
            <tbody>
            @if(count($buildings))
                <ul>


                    @foreach($buildings as $building)
                        <tr>
                            <td class="title-container">
                                <img src="{{asset('front/img/my-properties/my-properties-1.jpg')}}" alt="my-properties-1" class="img-responsive hidden-xs">
                                <div class="title">
                                    <h4><a href="#"> {{$building->name}} </a></h4>
                                    <span><i class="fa fa-map-marker"></i> {{$building->full_address}} </span>
                                    <span class="table-property-price">$900 / monthly</span>
                                </div>
                            </td>
                            <td class="expire-date hidden-xs">{{$building->created_at}}</td>
                            <td class="action">
                                <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                                <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                                <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </ul>
            @else
                <h1> no building added</h1>
            @endif
            </tbody>
        </table>
    </div>
</div>
@endsection