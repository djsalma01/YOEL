@extends('layouts.front')

@section('content')


<!-- Section: Contact v.1 -->
<div class="container" style="position: relative;
    z-index: -1;
    color: #666;
    margin-block-start: 150px;">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5" >Contact us</h2>
  <!-- Section description -->

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 mb-lg-0 mb-4">

      <!-- Form with header -->
      <div class="card">
        <div class="card-body">
          <!-- Header -->
          <div class="form-header blue accent-1">
            <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
          </div>
          <p class="dark-grey-text">We'll write rarely, but only the best content.</p>
          <!-- Body -->
          <div class="md-form">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="form-name" class="form-control">
            <label for="form-name">Your name</label>
          </div>
          <div class="md-form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="text" id="form-email" class="form-control">
            <label for="form-email">Your email</label>
          </div>
          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <input type="text" id="form-Subject" class="form-control">
            <label for="form-Subject">Subject</label>
          </div>
          <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
            <label for="form-text">Send message</label>
          </div>
          <div class="text-center">
            <button class="btn btn-light-blue">Submit</button>
          </div>
        </div>
      </div>
      <!-- Form with header -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.218733868454!2d2.191745114717361!3d41.39105590373199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a31aa83011e3%3A0xc61039e34770d15b!2sEPITECH%20Barcelona!5e0!3m2!1sfr!2ses!4v1639494698642!5m2!1sfr!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      </div>
      <!-- Buttons-->
  

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->
</div>

<!-- Section: Contact v.1 -->

<!-- <div class="container text-center">

<h2>
    This is contact page
</h2>

<p class="mb-4">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus quis tempore ut fuga numquam est, placeat neque?
    Labore commodi consequuntur quae minima dolorum rerum voluptate. Laudantium eligendi voluptatibus officiis labore!
</p>

</div>-->

@endsection
