@extends('layouts.app')

@section('title', 'RSO Event')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <!-- <div class="card-header">RSO Index</div> -->

                <div class="card-body">
            
                    <h2>{{ $event->name }}</h2>
    
                    <div class="card-body">

                    <ul>
                        <li>Time: {{ $event->time }}</li>
                        <li>Phone number: {{ $event->phone_num }}</li>
                        <li>Email address: {{ $event->email_address }}</li>
                    </ul>

                    <p>{{ $event->description }}</p>
        
                    <div class="fb-share-button" data-href="{{ $_SERVER['REQUEST_URI'] }}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>   
                    <p><a class="nav-item nav-link" href="/rso/{{ $rso_id }}">Back to RSO Page</a></p>


                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
