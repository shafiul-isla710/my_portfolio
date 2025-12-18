@extends('layout.app')

@section('content')
    <!-- Resume Section -->
    <section id="resume" class="resume py-5 bg-light">
        <!-- Section Title -->
        <div class="container text-center">
            <h2 class="fw-bold">Resume</h2>
            <p class="text-muted">
                A quick overview of my professional experience and skills
            </p>
        </div>

        <!-- End Section Title -->
        <div class="container">
            <div class="row justify-content-center">
                <!-- Resume Card -->
                <div class="col-lg-8 col-md-10">
                    <div class="card shadow-sm border-0 rounded-4">
                        <div class="card-body p-4">
                            <!-- Resume Image -->
                            <div class="text-center">
                                <img src="{{ asset('assets/img/resume.jpg') }}" alt="Resume" class="img-fluid rounded-3">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Resume Card -->
            </div>
        </div>
    </section>
    <!-- /Resume Section -->
@endsection
