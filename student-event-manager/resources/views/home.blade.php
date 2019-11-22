@extends('layouts.app')

@section('title', 'Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You are logged in!</p>

                    <p>Welcome to {{ $uniName }}'s event manager! Explore events in the categories below.</p>
                    <ul>
                        <li><a class="nav-item nav-link" href="/public-events">Public events</a></li>  
                        <!-- link = "/private-events" -->
                        <li><a class="nav-item nav-link" href="/public-events">Private events</a></li>
                        <li><a class="nav-item nav-link" href="/my-rso-events">My RSO events</a></li> 
                        <li><a class="nav-item nav-link" href="/../rso">RSO Index</a></li>
								<li><a class="nav-item nav-link" href="create-rso">Create RSO</a></li>
                    </ul>

						 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
