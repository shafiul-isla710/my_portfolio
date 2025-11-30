 <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>{{ $about->title }}</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="{{ 'storage/' .$about->image }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>{{ $about->designation }}</h2>
            <p class="fst-italic py-3">{{ $about->short_desc }}</p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ date('j F Y', strtotime($about->birth_date)) }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $about->phone }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $about->city }}</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $about->age }} +</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $about->degree }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $about->email }}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ $about->freelance }}</span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">{{ $about->long_desc }}</p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->