@extends('layout.layout')

@section('content')

<!-- -------- START HEADER 4 w/ search book a ticket form ------- -->
<header>
  <div class="page-header min-height-400" style="background-image: url('https://i.ibb.co/qkXJCWM/pcr.jpg');" loading="lazy">
    <span class="mask bg-gradient-dark opacity-8"></span>
  </div>
</header>
<!-- -------- END HEADER 4 w/ search book a ticket form ------- -->
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
  <!-- START Testimonials w/ user image & text & info -->
  <section class="py-sm-7 py-5 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-12 mx-auto">
          <div class="mt-n8 mt-md-n9 text-center">
            <img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src="data:image/png;base64,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" alt="bruce" loading="lazy">
          </div>
          <div class="row py-5">
            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h3 class="mb-0">Laboratorium 281</h3>
                <div class="d-block">
                  <button type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0">Lorem.</button>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-auto">
                  <span class="h6">323</span>
                  <span>Lorem.</span>
                </div>
                <div class="col-auto">
                  <span class="h6">3.5k</span>
                  <span>Lorem.</span>
                </div>
                <div class="col-auto">
                  <span class="h6">260</span>
                  <span>Lorem.</span>
                </div>
              </div>
              <p class="text-lg mb-0">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem a dignissimos quam in perspiciatis recusandae, sunt, aliquid earum nam explicabo natus error nostrum, omnis at officiis architecto maiores quo doloremque veniam optio accusamus minus culpa asperiores? Quisquam voluptate at adipisci perspiciatis quo dolores quod magni, sequi officia perferendis accusamus dolore saepe pariatur delectus numquam consequuntur temporibus quam quos sit sed ea quibusdam inventore. Rem iusto eos, quam illum, corrupti numquam blanditiis dolor vero in optio ex itaque reiciendis eaque at aliquam nisi velit, quo necessitatibus possimus voluptate? Eum quod, qui, ut odit, delectus aperiam error optio architecto ex porro accusamus?<br><a href="javascript:;" class="text-info icon-move-right">More about me
                  <i class="fas fa-arrow-right text-sm ms-1"></i>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END Testimonials w/ user image & text & info -->
  <!-- START Blogs w/ 4 cards w/ image & text & link -->
  <section class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, ratione!</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/463px-Question_mark_alternate.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Lorem ipsum dolor sit amet.</a>
              </h5>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat, saepe sapiente aut beatae ullam eos vero molestias eaque officiis molestiae suscipit alias perferendis harum, aperiam fuga assumenda rerum unde quia?
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/463px-Question_mark_alternate.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Lorem ipsum dolor sit.</a>
              </h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur odit alias dolores quidem, facilis dicta illum itaque incidunt nemo asperiores perferendis autem voluptatibus doloribus at aut veritatis voluptates corporis error!
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card card-plain">
            <div class="card-header p-0 position-relative">
              <a class="d-block blur-shadow-image">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/463px-Question_mark_alternate.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
              </a>
            </div>
            <div class="card-body px-0">
              <h5>
                <a href="javascript:;" class="text-dark font-weight-bold">Lorem ipsum dolor sit.</a>
              </h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, tempore! Unde eaque reiciendis odio, quo asperiores tenetur consectetur! Cumque eligendi qui maiores quis porro perferendis repudiandae, hic explicabo corporis id.
              </p>
              <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12 col-12">
          <div class="card card-blog card-background cursor-pointer">
            <div class="full-background" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/463px-Question_mark_alternate.png')" loading="lazy"></div>
            <div class="card-body">
              <div class="content-left text-start my-auto py-4">
                <h2 class="card-title text-white">Lorem, ipsum dolor.</h2>
                <p class="card-description text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam consequuntur impedit minus ratione alias porro ipsa dicta fugit adipisci nobis blanditiis consectetur expedita ducimus cum nesciunt, quibusdam corrupti, totam eligendi!</p>
                <a href="javascript:;" class="text-white text-sm icon-move-right">Read More
                  <i class="fas fa-arrow-right text-xs ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END Blogs w/ 4 cards w/ image & text & link -->
</div>
<section class="py-lg-5">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card box-shadow-xl overflow-hidden mb-5">
          <div class="row">
            <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Question_mark_alternate.png/463px-Question_mark_alternate.png')" loading="lazy">
              <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                <div class="mask bg-gradient-dark opacity-8"></div>
                <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                  <h3 class="text-white">Lorem, ipsum.</h3>
                  <p class="text-white opacity-8 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eaque itaque saepe nulla explicabo dolorem consectetur perspiciatis non dolorum necessitatibus maiores nobis culpa, molestias accusantium quia esse fuga magnam eius.</p>
                  <div class="d-flex p-2 text-white">
                    <div>
                      <i class="fas fa-phone text-sm"></i>
                    </div>
                    <div class="ps-3">
                      <span class="text-sm opacity-8">+62 882 1292 5193</span>
                    </div>
                  </div>
                  <div class="d-flex p-2 text-white">
                    <div>
                      <i class="fas fa-envelope text-sm"></i>
                    </div>
                    <div class="ps-3">
                      <span class="text-sm opacity-8">lorem@gmail.com</span>
                    </div>
                  </div>
                  <div class="d-flex p-2 text-white">
                    <div>
                      <i class="fas fa-map-marker-alt text-sm"></i>
                    </div>
                    <div class="ps-3">
                      <span class="text-sm opacity-8">Indonesia</span>
                    </div>
                  </div>
                  <div class="mt-4">
                    <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                      <i class="fab fa-facebook"></i>
                    </button>
                    <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Twitter">
                      <i class="fab fa-twitter"></i>
                    </button>
                    <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Dribbble">
                      <i class="fab fa-dribbble"></i>
                    </button>
                    <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram">
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <form class="p-3" id="contact-form" method="post">
                <div class="card-header px-4 py-sm-5 py-3">
                  <h2>Lorem, ipsum.</h2>
                  <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente facere repudiandae impedit aliquid veniam alias earum, eius iste amet pariatur, ducimus, voluptatum modi assumenda expedita in id. Explicabo, pariatur corrupti.</p>
                </div>
                <div class="card-body pt-1">
                  <div class="row">
                    <div class="col-md-12 pe-2 mb-3">
                      <div class="input-group input-group-static mb-4">
                        <label>My name is</label>
                        <input type="text" class="form-control" placeholder="Full Name">
                      </div>
                    </div>
                    <div class="col-md-12 pe-2 mb-3">
                      <div class="input-group input-group-static mb-4">
                        <label>I'm looking for</label>
                        <input type="text" class="form-control" placeholder="What you love">
                      </div>
                    </div>
                    <div class="col-md-12 pe-2 mb-3">
                      <div class="input-group input-group-static mb-4">
                        <label>Your message</label>
                        <textarea name="message" class="form-control" id="message" rows="6" placeholder="I want to say that..."></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 text-end ms-auto">
                      <button type="submit" class="btn bg-gradient-info mb-0">Send Message</button>
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
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="{{asset('assets/js/material-kit.min.js?v=3.0.4')}}" type="text/javascript"></script>

@endsection