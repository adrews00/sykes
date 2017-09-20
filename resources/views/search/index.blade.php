@extends('layouts.master') @section('content')

<div class="container ">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-white bg-secondary">
                    <h4>Search</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('search') }}" method="GET">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inputLocation">Location</label>
                            <input name="location" value="{{ old('location') }}" type="text" class="form-control {{ ($errors->has('location'))? 'is-invalid' : '' }}" id="inputLocation" placeholder="Enter location">
                            <div class="invalid-feedback">
                                    <strong>{{ $errors->first('location') }}</strong>
                                </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputBeds">Beds</label>
                                <input name="beds" type="text" value="{{ old('beds') }}" class="form-control {{ ($errors->has('beds'))? 'is-invalid' : '' }}" id="inputBeds" placeholder="Minimum number of beds">
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('beds') }}</strong>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputSleeps">Sleeps</label>
                                <input name="sleeps" type="text" value="{{ old('sleeps') }}" class="form-control {{ ($errors->has('sleeps'))? 'is-invalid' : '' }}" id="inputBeds" placeholder="Minimum number of beds">
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('sleeps') }}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputBeach">Near Beach</label>
                                <select name="nearbeach" class="form-control  {{ ($errors->has('nearbeach'))? 'is-invalid' : '' }}" id="inputBeach" >
                                    <option value="" {{ (old('nearbeach')) ? '' : 'selected' }}  >Does not matter</option>
                                    <option value="1" {{ (old('nearbeach') == '1')? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ (old('nearbeach') == '0')? 'selected' : '' }}>No</option>
                                </select>
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('nearbeach') }}</strong>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPets">Allows Pets</label>
                                <select name="pets" class="form-control {{ ($errors->has('pets'))? 'is-invalid' : '' }}" id="inputPets" >
                                    <option value="" {{ (old('pets')) ? '' : 'selected' }}  >Does not matter</option>
                                    <option value="1" {{ (old('pets') == '1')? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ (old('pets') == '0')? 'selected' : '' }}>No</option>
                                </select>
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('pets') }}</strong>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCheckIn">Check In</label>
                                <input name="checkin" type="date" value="{{ old('checkin') }}" class="form-control {{ ($errors->has('checkin'))? 'is-invalid' : '' }}" id="inputCheckIn">
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('checkin') }}</strong>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCheckOut">Check Out</label>
                                <input name="checkout" type="date" value="{{ old('checkout') }}" class="form-control {{ ($errors->has('checkout'))? 'is-invalid' : '' }}" id="inputCheckOut">
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('checkout') }}</strong>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn float-right btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection