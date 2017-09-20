@extends('layouts.master') @section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h4>{{ $properties->total() }} properties found.</h4>
                </div>
                @if(count($properties) == 0)
                <div class="col text-center">
                    <h4>We have not found any property with those parameters.</h4>
                </div>
                @endif
                @foreach ( $properties as $property )
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-header text-white bg-secondary">
                            <h5 class="float-left">{{ $property->property_name }}</h5>
                            <small class="float-right">{{ $property->location->location_name}}</small>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <p>Pets: {{ $property->accepet_pets }}</p>
                                    <p>Near Beach: {{ $property->near_beach }}</p>
                                </div>
                                <div class="col-6">
                                    <p>Beds: {{ $property->beds }}</p>
                                    <p>Sleeps: {{ $property->sleeps }}</p>
                                </div>
                            </div>
                            {{--  <div class="row">
                                <div class="col">
                                    @foreach ( $property->bookings as $booking )
                                    <p><div>Already reserved</div> <div>from: {{ $booking->start_date->toDateString() }} to: {{ $booking->end_date->toDateString()  }} </div></p>
                                    @endforeach
                                </div>
                            </div>  --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-md-center">
            {{ $properties->links() }}
            </div>
        </div>
    </div>
</div>@endsection