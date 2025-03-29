@extends('layouts.app')

@section('content')
<!-- Landing Page Section -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4">Welcome to Job Portal</h1>
            <p class="lead">Find your dream job or explore top companies looking for talent.</p>

            <!-- Buttons for Navigation -->
            <div class="mt-4">
                <a href="{{ route('jobs.index') }}" class="btn btn-primary btn-lg">View Job Listings</a>
                <a href="{{ route('companies.index') }}" class="btn btn-secondary btn-lg ml-3">Add Companies</a>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="row mt-5">
        <div class="col-md-6">
            <h3>Why Choose Us?</h3>
            <p>We connect talented candidates with the best job opportunities across various industries. Whether you're looking for your next job or searching for the perfect candidate for your team, we've got you covered!</p>
        </div>
        <div class="col-md-6">
            <h3>Our Mission</h3>
            <p>Our mission is to provide an easy-to-use platform where companies and candidates can seamlessly connect and thrive. Explore a wide variety of job listings and companies today!</p>
        </div>
    </div>
</div>

<!-- Footer Section -->
<div class="footer mt-5 text-center">
    <p>&copy; {{ date('Y') }} Job Portal. All rights reserved.</p>
</div>
@endsection
