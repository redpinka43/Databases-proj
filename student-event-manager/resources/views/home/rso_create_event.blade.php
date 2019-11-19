@extends('layouts.app')

@section('title', 'Create Event')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <!-- <div class="card-header">RSO Index</div> -->

                <div class="card-body">
            
                    <h2>Create Event — {{ $rso->name }}</h2>
                    <p>Please fill out the following.</p>

                    <form action="{{ route('rso_events.store') }}" method="POST">
                        @csrf
                    
                        <input name="type" type="hidden" value="blank">
                        <input name="event_category" type="hidden" value="blank">
                        <input name="rso_id" type="hidden" value="{{ $rso->rso_id}}">

                        <div class="form-group row">
                            <div class="col-sm-8">
                                <label for="room">Title of event</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-8">
                                <label for="description">Description</label>

                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-8">
                                <label for="time">Date and time</label>

                                <input id="time" type="datetime-local" class="form-control @error('time') is-invalid @enderror" name="time" value="{{ old('time') }}" required autocomplete="time">
                                @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-8">
                                <label for="phone_num">Contact phone number</label>

                                <input id="phone_num" type="tel" class="form-control @error('phone_num') is-invalid @enderror" name="phone_num" value="{{ old('phone_num') }}" autocomplete="phone" required>
                                @error('phone_num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-8">
                                <label for="email_address">Contact email address</label>

                                <input id="email_address" type="email" class="form-control @error('email_address') is-invalid @enderror" name="email_address" value="{{ old('email_address') }}" autocomplete="email" required>
                                @error('email_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                            
                        <!-- We need: Name, description, Time, phone_num, and email address-->    
                        <button type="submit" class="btn btn-primary">Create</button>
                        <p><a class="nav-item nav-link" href="/rso/{{ $rso->rso_id }}">Cancel</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
