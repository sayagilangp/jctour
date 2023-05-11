@extends('layouts.app')

@section('title')
    JC
@endsection

@section('content')
  <!-- Header -->
  <header class="text-center">
    <h1>
      Explore The Beautiful World
      <br />
      As Easy One Click
    </h1>
    <P class="mt-3">
      You will see beautiful
      <br />
      moment you never see before
    </P>
    <a href="#" class="btn btn-ayo-mulai px-4 mt-4">
      Ayo Mulai
    </a>

  </header>

  <main>
    <!-- Pupular -->
    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Wisata Popular</h2>
            <p>
              Something that you never try
              <br />
              before in this world
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Pupular Content -->
    <section class="section-popular-content" id="popularContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
              style="background-image: url('frontend/images/popular1.png');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">DERATAN, BALI</div>
              <div class="travel-button mt-auto">
                <a href="detail" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
              style="background-image: url('frontend/images/popular1.png');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">BROMO, MALANG</div>
              <div class="travel-button mt-auto">
                <a href="detail" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
              style="background-image: url('frontend/images/popular1.png');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">NUSA PENIDA</div>
              <div class="travel-button mt-auto">
                <a href="detail" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
              style="background-image: url('frontend/images/popular1.png');">
              <div class="travel-country">INDONESIA</div>
              <div class="travel-location">NUSA PENIDA</div>
              <div class="travel-button mt-auto">
                <a href="detail" class="btn btn-travel-details px-4">
                  View Details
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!-- Testi -->
    <section class="section-testimonial-heading" id="TestimonialHeading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>
              They Are Loving Us
            </h2>
            <p>Moments were giving them
              <br />
              the best experience
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- testi content -->
    <section class="section section-testimonial-content" id="TestimonialContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frontend/images/testi1.png" alt="user" class="mb-4 rounded-circle">
                <h3 class="mb-4">Salom Agusto</h3>
                <p class="testimonial">“ It was glorious and I could
                  not stop to say wohooo for
                  every single moment
                  Dankeeeeee “
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">Trip to ubud</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frontend/images/testi1.png" alt="user" class="mb-4 rounded-circle">
                <h3 class="mb-4">Salom Agusto</h3>
                <p class="testimonial">“ It was glorious and I could
                  not stop to say wohooo for
                  every single moment
                  Dankeeeeee “
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">Trip to ubud</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-content">
                <img src="frontend/images/testi1.png" alt="user" class="mb-4 rounded-circle">
                <h3 class="mb-4">Salom Agusto</h3>
                <p class="testimonial">“ It was glorious and I could
                  not stop to say wohooo for
                  every single moment
                  Dankeeeeee “
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">Trip to ubud</p>
            </div>
          </div>
        </div>
        <div class="rox">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-need px-4 mt-4 mx-1">
              Butuh Bantuan
            </a>
            <a href="#" class="btn btn-get px-4 mt-4 mx-1">
              Ayo Mulai
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
  
@endsection