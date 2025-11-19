@extends('layout.app')


@section('content')

<!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="assets/img/portfolio1.jpg" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <a href="about.html" class="btn-get-started">About Me</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

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