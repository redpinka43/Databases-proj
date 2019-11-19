@extends('layouts.app')

@section('title', 'RSO Index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">RSO Index</div>

                <div class="card-body">
                    <p>Here are the Registered Student Organizations (RSOs) for your university.</p>

                    <ul>
                    <!-- Loop through RSOs returned from controller -->
                    @foreach ($rsos as $rso)
                    <li style="list-style-type:none;"><a class="nav-item nav-link" href="/rso/{{ $rso->rso_id }}">
                        {{ $rso->name }}                    
                    </a></li>
                    @endforeach
                    </ul>
        
                    <p><a class="nav-item nav-link" href="/home">Back to home</a></p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
