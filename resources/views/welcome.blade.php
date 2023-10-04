@extends('MasterLayout') {{-- Include your master layout if you have one --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Microservices Ready</div>

                <div class="card-box">
                    <div class="row">
                        <!-- <div class="col-md-4">
                            <a href="/user_dash" class="text-decoration-none">
                                <div class="card mb-3">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Intents</h5>
                                    </div>
                                </div>
                            </a>
                        </div> -->
                        <!-- Add more service cards here -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/welcome-banner.png') }}" class="card-img-top" alt="Welcome Image">
                <!-- <h3 class="card-title">Welcome!</h3>
                <p class="card-text">You are ready to go!</p> -->
                <div class="card-body text-center">
                    <p class="card-title">Welcome!</p>
                    <p class="card-text">You are ready to go!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h4 class="card-title">REST API Ready</h4>
            <p class="card-text underline">e.g. Authentication</p>
            <p class="card-text">POST http://localhost:3030/authentication { "email": "example@email.com", "password": "123456" }</p>
            <p class="card-text underline">e.g. CRUD</p>
            <p class="card-text">GET =&gt; GET http://localhost:3030/users/&lt;userId&gt;</p>
            <p class="card-text">CREATE =&gt; POST http://localhost:3030/users { "email": "example2@email.com", "password": "456789" }</p>
            <p class="card-text">PATCH =&gt; PATCH http://localhost:3030/users/&lt;userId&gt; { "name": "Thomas Smith" }</p>
            <p class="card-text">DELETE =&gt; DELETE http://localhost:3030/users/&lt;userId&gt;</p>
        </div>
    </div>
</div>
@endsection