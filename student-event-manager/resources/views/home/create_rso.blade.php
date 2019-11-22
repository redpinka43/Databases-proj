@extends('layouts.app')

@section('title', 'Create RSO')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
            
                    <h2>Create RSO</h2>
                    <p>Please fill out the following.</p>

                    <form action="{{ route('rso_events.store') }}" method="POST">
                        @csrf
                    
                        <input name="type" type="hidden" value="blank">
                        <input name="event_category" type="hidden" value="blank">

                        <div class="form-group row">
                            <div class="col-sm-8">
                                <label for="room">RSO Name</label>

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
                                <label for="room">Email of RSO Member 1</label>

                                <input id="email_1" type="text" class="form-control @error('email_1') is-invalid @enderror" name="email_1" value="{{ old('email_1') }}" required autocomplete="email_1" autofocus>
                                @error('email_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

								<div class="form-group row">
                            <div class="col-sm-8">
                                <label for="room">Email of RSO Member 2</label>

                                <input id="email_1" type="text" class="form-control @error('email_1') is-invalid @enderror" name="email_1" value="{{ old('email_1') }}" required autocomplete="email_1" autofocus>
                                @error('email_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

								<div class="form-group row">
                            <div class="col-sm-8">
                                <label for="room">Email of RSO Member 3</label>

                                <input id="email_1" type="text" class="form-control @error('email_1') is-invalid @enderror" name="email_1" value="{{ old('email_1') }}" required autocomplete="email_1" autofocus>
                                @error('email_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

								<div class="form-group row">
                            <div class="col-sm-8">
                                <label for="room">Email of RSO Member 4</label>

                                <input id="email_1" type="text" class="form-control @error('email_1') is-invalid @enderror" name="email_1" value="{{ old('email_1') }}" required autocomplete="email_1" autofocus>
                                @error('email_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

								<div class="form-group row">
                            <div class="col-sm-8">
                                <label for="room">Email of RSO Member 5</label>

                                <input id="email_1" type="text" class="form-control @error('email_1') is-invalid @enderror" name="email_1" value="{{ old('email_1') }}" required autocomplete="email_1" autofocus>
                                @error('email_1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


     
                        <!-- We need: Name, description, Time, phone_num, and email address-->    
                        <button type="submit" class="btn btn-primary">Create</button>
                        <p><a class="nav-item nav-link" href="/home">Cancel</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
