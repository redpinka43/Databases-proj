@extends('layouts.app')

@section('title', 'RSO Page')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <!-- <div class="card-header">RSO Index</div> -->

                <div class="card-body">
            
                    <h2>{{ $rso_name }} &nbsp
                        
                        @if ($isAdmin)
                            <button type="button" class="btn btn-success">
                            You're admin!
                            </button>
                        @elseif ($isMember)
                            <form action="{{ route('rso_leave.store')}}" method="POST">
                            @csrf
                                <input type="hidden" value="{{ $rso_id }}" name="rso_id">
                                <a href="/rso_join/">
                                <button type="submit" class="btn btn-success">
                                Leave
                                </button></a>
                            </form>
                        @elseif (!$isMember)
                            <form action="{{ route('rso_join.store')}}" method="POST">
                            @csrf
                                <input type="hidden" value="{{ $rso_id }}" name="rso_id">
                                <a href="/rso_join/">
                                <button type="submit" class="btn btn-success">
                                Join
                                </button></a>
                            </form>
                            
                        @endif     
                       
                    </h2>

                    <p>{{ $rso_desc }}</p>

                    <!-- Loop through RSO events returned from controller -->
                    <h4>Events</h4>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Date and Time</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($rso_events as $rso_event)
                        <tr>
                            <td>
                                <a href="/rso/{{ $rso_id }}/{{ $rso_event->event_id }}">
                                    {{ $rso_event->name }}
                                </a>
                            </td>   
                            <td>
                                <a href="/rso/{{ $rso_id }}/{{ $rso_event->event_id }}">
                                    {{ $rso_event->time }}
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    
                    <div class="fb-share-button" data-href="{{ $_SERVER['REQUEST_URI'] }}" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>    

                    @if ($isAdmin)
                        <a href="/rso/{{ $rso_id }}/create-event">
                            <button type="button" class="btn btn-primary">Create event</button>
                        </a>
                        <p></p>
                    @endif                

                    <p><a class="nav-item nav-link" href="/rso">Back to RSO Index</a></p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
