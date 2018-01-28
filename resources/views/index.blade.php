@extends('layout')

@section('content')

    <div class="container" style="margin-top: 200px;">
        <div class="row">

            <div class="col-md-9">
                @if(count($buildings))
                <ul>


                   @foreach($buildings as $building)
                    <li>
                        {{$building->name}}
                    </li>
                    @endforeach

                </ul>
                @else
                    <h1> no building added</h1>
                @endif
            </div>
            <div class="col-md-3">

                <h5>Hello: {{Auth::user()->name}}</h5>
            </div>

        </div>

    </div>

@endsection