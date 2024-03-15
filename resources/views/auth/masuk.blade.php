@extends('layout.layout')

@section('content')
<div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');" loading="lazy">
  <span class="mask bg-gradient-dark opacity-6"></span>
  <div class="container my-auto">
    <div class="row">
      <div class="col-lg-4 col-md-8 col-12 mx-auto">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-dark shadow border-radius-lg py-3 pe-1">
              <h4 class="text-white font-weight-bolder text-center mt-5">Masuk</h4>
              <div class="row mt-3">
                <div class="col-2 text-center ms-auto">
                  <a class="btn btn-link px-3" href="javascript:;">
                    <i class="fa fa-facebook text-white text-lg"></i>
                  </a>
                </div>
                <div class="col-2 text-center px-1">
                  <a class="btn btn-link px-3" href="javascript:;">
                    <i class="fa fa-github text-white text-lg"></i>
                  </a>
                </div>
                <div class="col-2 text-center me-auto">
                  <a class="btn btn-link px-3" href="javascript:;">
                    <i class="fa fa-google text-white text-lg"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form role="form" class="text-start">
              <div class="input-group input-group-outline my-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control">
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control">
              </div>
              <div class="text-center">
                <!-- <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button> -->
                <a href="/" class="btn btn-success w-100">Masuk</a>
              </div>
              <p class="mt-4 text-sm text-center">
                Lorem ipsum dolor sit?
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</div>
<!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>

@endsection