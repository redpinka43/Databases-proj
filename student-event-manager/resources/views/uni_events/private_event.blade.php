@extends('layouts.app')

@section('title', 'Public event')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
            
                    <h2>{{ $event->name }}</h2>
    
                    <div class="card-body">

                    <ul>
                        <li>Time: {{ $event->time }}</li>
                        <li>Phone number: {{ $event->phone_num }}</li>
                        <li>Email address: {{ $event->email_address }}</li>
                    </ul>

                    <p>{{ $event->description }}</p>
                    <p><a class="nav-item nav-link" href="/public-events">Back to Public Events Page</a></p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
