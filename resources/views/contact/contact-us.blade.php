@extends('layout.layout')

@section('content')
<!-- -------- START HEADER 8 w/ card over right bg image ------- -->
<section>
  <div class="page-header min-vh-100">
    <div class="container">
      <div class="row">
        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
          <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url(''); background-size: cover;" loading="lazy"></div>
        </div>
        <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
          <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
                <h3 class="text-white text-primary mb-0">Kontak Kami</h3>
              </div>
            </div>
            <div class="card-body">
              <p class="pb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque iure a, fugiat autem enim sunt. Numquam laborum provident deleniti dicta error accusamus quibusdam asperiores, at voluptatum quo atque totam in!
              </p>
              <form id="contact-form" method="post" autocomplete="off">
                <div class="card-body p-0 my-3">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-static mb-4">
                        <label>Full Name</label>
                        <input type="email" class="form-control" placeholder="Full Name">
                      </div>
                    </div>
                    <div class="col-md-6 ps-md-2">
                      <div class="input-group input-group-static mb-4">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="hello@creative-tim.com">
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-0 mt-md-0 mt-4">
                    <div class="input-group input-group-static mb-4">
                      <label>How can we help you?</label>
                      <textarea name="message" class="form-control" id="message" rows="6" placeholder="Describe your problem in at least 250 characters"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- -------- END HEADER 8 w/ card over right bg image ------- -->
<!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>
@endsection