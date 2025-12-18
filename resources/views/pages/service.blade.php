@extends('layout.app')


@push('style')
  <style>
   .services .card {
      min-height: 260px;
    }
  </style>
@endpush


@section('content')

{{-- <section id="services" class="services py-5 bg-light ">

  <!-- Section Title -->
  <div class="container text-center mb-5">
    <h2 class="fw-bold">Services</h2>
    <p class="text-muted">
      What I can do for you
    </p>
  </div>
  <!-- End Section Title -->

  <div class="container">
    <div class="row  justify-content-center">

      <!-- Web Design -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 text-center border-0 shadow-sm rounded-4">
          <div class="card-body p-4">
            <div class="mb-3">
              <i class="bi bi-palette fs-1 text-primary"></i>
            </div>
            <h5 class="fw-semibold">Web Design</h5>
            <p class="text-muted small">
              Modern, responsive and user-friendly website design using
              Bootstrap, Tailwind CSS and UI best practices.
            </p>
          </div>
        </div>
      </div>

      <!-- Web Development -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 text-center border-0 shadow-sm rounded-4">
          <div class="card-body p-4">
            <div class="mb-3">
              <i class="bi bi-code-slash fs-1 text-success"></i>
            </div>
            <h5 class="fw-semibold">Web Development</h5>
            <p class="text-muted small">
              Dynamic and secure web applications using Laravel, Vue.js,
              REST API and database-driven systems.
            </p>
          </div>
        </div>
      </div>

      <!-- AI Automation -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 text-center border-0 shadow-sm rounded-4">
          <div class="card-body p-4">
            <div class="mb-3">
              <i class="bi bi-robot fs-1 text-warning"></i>
            </div>
            <h5 class="fw-semibold">AI Automation</h5>
            <p class="text-muted small">
              AI-powered chatbots, workflow automation and integrations
              using tools like n8n and AI APIs.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section> --}}

<section id="services" class="services py-5 bg-light">

  <!-- Section Title -->
  <div class="container text-center mb-5">
    <h2 class="fw-bold">Services</h2>
    <p class="text-muted">
      What I can do for you
    </p>
  </div>
  <!-- End Section Title -->

  <div class="container">
    <div class="row gy-4 justify-content-center">

      <!-- Web Design -->
      <div class="col-lg-6 col-md-6">
        <div class="card h-100 text-center border-0 shadow-sm rounded-4">
          <div class="card-body p-4">
            <div class="mb-3">
              <i class="bi bi-palette fs-1 text-primary"></i>
            </div>
            <h5 class="fw-semibold">Web Design</h5>
            <p class="text-muted small">
              Modern, responsive and user-friendly website design using
              Bootstrap, Tailwind CSS and UI best practices.
            </p>
          </div>
        </div>
      </div>

      <!-- Web Development -->
      <div class="col-lg-6 col-md-6">
        <div class="card h-100 text-center border-0 shadow-sm rounded-4">
          <div class="card-body p-4">
            <div class="mb-3">
              <i class="bi bi-code-slash fs-1 text-success"></i>
            </div>
            <h5 class="fw-semibold">Web Development</h5>
            <p class="text-muted small">
              Dynamic and secure web applications using Laravel, Vue.js,
              REST API and database-driven systems.
            </p>
          </div>
        </div>
      </div>

      <!-- AI Automation -->
      <div class="col-lg-6 col-md-6">
        <div class="card h-100 text-center border-0 shadow-sm rounded-4">
          <div class="card-body p-4">
            <div class="mb-3">
              <i class="bi bi-robot fs-1 text-warning"></i>
            </div>
            <h5 class="fw-semibold">AI Automation</h5>
            <p class="text-muted small">
              AI-powered chatbots, workflow automation and integrations
              using tools like n8n and AI APIs.
            </p>
          </div>
        </div>
      </div>

      <!-- Social Media Marketing -->
      <div class="col-lg-6 col-md-6">
        <div class="card h-100 text-center border-0 shadow-sm rounded-4">
          <div class="card-body p-4">
            <div class="mb-3">
              <i class="bi bi-megaphone fs-1 text-danger"></i>
            </div>
            <h5 class="fw-semibold">Generative AI services</h5>
            <p class="text-muted small">
              Generative AI is a type of artificial intelligence that can create new content such as text, images, code, or audio based on learned patterns from data
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>



@endsection
