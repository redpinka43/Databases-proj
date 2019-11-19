@extends('layouts.app')

@section('title', 'Public events')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
            
                    <h2>Public events</h2>

                    <!-- Loop through Public events returned from controller -->
                    <h4>Events</h4>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Date and Time</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($public_events as $public_event)
                        <tr>
                            <td>
                                <a href="public-events/{{ $public_event->event_id }}">
                                    {{ $public_event->name }}
                                </a>
                            </td>   
                            <td>
                                <a href="public-events/{{ $public_event->event_id }}">
                                    {{ $public_event->time }}
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
    
                    @if ($isSuperAdmin)
                        <a href="public-events/create-event">
                            <button type="button" class="btn btn-primary">Create event</button>
                        </a>
                        <p></p>
                    @endif                

                    <p><a class="nav-item nav-link" href="/home">Back to Home</a></p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
