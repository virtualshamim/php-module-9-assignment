@extends('Layout.app')
@section('content')
<!-- Hero Section -->
<section class="hero-section hero-section-custom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1>Welcome to My Portfolio</h1>
                <p>I'm a passionate web developer creating awesome websites.</p>
                <a href="{{ route('projectsPage') }}" class="btn btn-primary">View Portfolio</a>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/developer.jpeg') }}" alt="Developer Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

@endsection
