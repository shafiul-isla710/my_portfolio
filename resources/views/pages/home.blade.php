@extends('layout.app')

@push('style')
  <style>
    #hero-btn{
      margin-top: 150px;
    }
  </style>
@endpush

@push('script')
  
@endpush

@section('content')
@php 
  $pdf = App\Models\Resume::first();
@endphp

<!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="{{ 'storage/' .$slider->image }}" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="d-flex flex-row gap-5" id="hero-btn">
              <form action="{{ route('resume-download', $pdf->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn-get-started" href="">Download Resume</button>
              </form>
              <p class="d-none">My Name is Shafi</p>
              <a href="{{ url('/about-page') }}" class="btn-get-started">About Me</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    {{-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach($sliders as $slider)
          <div class="carousel-item active">
            <img src="{{ 'storage/' .$slider->image }}" class="d-block w-100" alt="...">
          </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div> --}}

   {{-- about section start --}}
   @include('component.about')
   {{-- about section end --}}

   {{-- skill section start --}}
   @include('component.skill')
   {{-- skill section end --}}

   {{-- contact section start --}}
   @include('component.contact')
   {{-- contact section end --}}
@endsection