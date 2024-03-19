@extends('layout.layout')

@section('content')

<!-- -------- START HEADER 7 w/ text and video ------- -->
<header class="bg-gradient-dark">
  <div class="page-header min-vh-75" style="background-image: url('https://i.ibb.co/qkXJCWM/pcr.jpg'); background-size: cover;">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center mx-auto my-auto">
          <h1 class="text-white">Selamat Datang</h1>
          <p class="lead mb-4 text-white opacity-8">Laboratorium Computer Networking</p>
          <!-- <button type="submit" class="btn bg-white text-dark">klik disini</button> -->
          <a href="/" class="btn bg-white text-dark">Klik disini</a>
          <h6 class="text-white mb-2 mt-5">Jangkau Kami</h6>
          <div class="d-flex justify-content-center">
            <a href="https://pcr.ac.id/"><i class="fab fa-chrome text-lg text-white me-4"></i></a>
            <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
            <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
            <a href="javascript:;"><i class="fas fa-envelope text-lg text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- -------- END HEADER 7 w/ text and video ------- -->
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
  <!-- Section with four info areas left & one card right with image and waves -->
  <section class="py-7">
    <div class="container">
      <div class="row align-items-center">
        <div class="col">
          <div class="row justify-content-start">
            <div class="col">
              <div class="info">
                <i class="material-icons text-3xl text-gradient text-dark mb-3">public</i>
                <h5 class="">Tentang Kami</h5>
                <hr style="background-color: black; height: 15px;">
                <p class="text-bold text-dark">Jaringan komputer atau jejaring komputer (computer network) adalah jejaring telekomunikasi yang memungkinkan antar komputer untuk saling berkomunikasi dengan bertukar data. Tujuan dari jejaring komputer adalah agar dapat mencapai tujuannya, setiap bagian dari jejaring komputer dapat meminta dan memberikan layanan (service). Pihak yang meminta/menerima layanan disebut kelayan (client) dan yang memberikan/mengirim layanan disebut peladen (server). Desain ini disebut dengan sistem client-server, dan digunakan pada hampir seluruh aplikasi jejaring komputer. Jejaring komputer terbagi menjadi beberapa macam yaitu Local Area Network (LAN), Metropolitan Area Network (MAN), dan Wide Area Network (WAN).</p>
                <p class="text-bold text-dark">Dua buah komputer yang masing-masing memiliki sebuah kartu jejaring, kemudian dihubungkan melalui kabel maupun nirkabel sebagai medium transmisi data, dan terdapat perangkat lunak sistem operasi jejaring akan membentuk sebuah jejaring komputer yang sederhana. Jejaring nirkabel beroperasi menggunakan standar 802.11b/g untuk frekuensi 2,4 GHz, standar 802.11a/ac beroperasi pada frekuensi 5 GHz, dan 802.11n/ax yang beroperasi pada kedua frekuensi. Perbedaan frekuensi 2,4GHz dan 5 GHz terdapat pada kecepatan transmisi data, bandwidth, dan daya cakupan. Pada 2,4GHz memiliki daya cakupan yang lebih jauh dibandingkan dengan 5 GHz, namun 5 GHz memiliki sinyal yang lebih kuat[3]. Apabila ingin membuat jejaring komputer yang lebih luas lagi jangkauannya, maka diperlukan peralatan tambahan seperti hub, bridge, switch, router, gateway sebagai peralatan antarsambungannya.</p>
              </div>
            </div>
            <div class="col-md-5">
              <div class="text-center mt-5 p-5">
                <img src="https://www.bhinneka.com/blog/wp-content/uploads/2022/10/Jenis-Jenis-Jaringan-Komputer.webp" width="460" height="480" alt="">
              </div>
              <div class="info text-center">
                <p class="text-bold text-dark">Computer Networking</p>
              </div>
            </div>
          </div>
          <!-- <div class="row justify-content-start mt-4">
            <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-3xl text-gradient text-info mb-3">apps</i>
                <h5>TEST</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias sequi illo incidunt, earum a quas minus, sint obcaecati asperiores eaque assumenda! Minima cum sunt alias repudiandae omnis suscipit temporibus excepturi?</p>
              </div>
            </div> -->
          <!-- <div class="col-md-6">
              <div class="info">
                <i class="material-icons text-3xl text-gradient text-info mb-3">3p</i>
                <h5>TEST</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor ipsum ipsam, laborum voluptatem hic ex iure distinctio, assumenda vero facilis magnam. Repellat, autem repellendus adipisci illo doloribus aut molestiae modi!</p>
              </div>
            </div> -->
        </div>
      </div>
      <!-- <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
          <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <a class="d-block blur-shadow-image">
                <img src="" alt="img-colored-shadow" class="img-fluid border-radius-lg">
              </a>
            </div>
            <div class="card-body text-center">
              <h5 class="font-weight-normal">
                <a href="javascript:;">Lab</a>
              </h5>
              <p class="mb-0">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quibusdam magni rerum. Laudantium impedit iure repudiandae aliquid deleniti vero quisquam incidunt, fugiat in sapiente doloribus non dicta numquam molestias iste.
              </p>
              <button type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3">Lorem.</button>
            </div>
          </div>
        </div> -->
    </div>
</div>
</section>
<!-- END Section with four info areas left & one card right with image and waves -->
<!-- -------- START Features w/ pattern background & stats & rocket -------- -->
<section class="pb-5 position-relative bg-gradient-dark mx-n3">
  <div class="container">
    <div class="row">
      <div class="col-md-8 text-start mb-5 mt-5">
        <h3 class="text-white z-index-1 position-relative">Tim Kami</h3>
        <p class="text-white opacity-8 mb-0">Deskripsi</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="card card-profile mt-4">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-n5">
              <a href="javascript:;">
                <div class="p-3 pe-md-0">
                  <img class="w-100 border-radius-md shadow-lg" src="data:image/png;base64,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" alt="image">
                </div>
              </a>
            </div>
            <div class="col-lg-8 col-md-6 col-12 my-auto">
              <div class="card-body ps-lg-0">
                <h5 class="mb-0">Harumin, S.S.T</h5>
                <h6 class="text-info">Jabatan</h6>
                <p class="mb-0">Deskripsi</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <div class="card card-profile mt-lg-4 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-n5">
              <a href="javascript:;">
                <div class="p-3 pe-md-0">
                  <img class="w-100 border-radius-md shadow-lg" src="data:image/png;base64,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" alt="image">
                </div>
              </a>
            </div>
            <div class="col-lg-8 col-md-6 col-12 my-auto">
              <div class="card-body ps-lg-0">
                <h5 class="mb-0">Nama</h5>
                <h6 class="text-info">Jabatan</h6>
                <p class="mb-0">Deskripsi</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-6 col-12">
        <div class="card card-profile mt-4 z-index-2">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-n5">
              <a href="javascript:;">
                <div class="p-3 pe-md-0">
                  <img class="w-100 border-radius-md shadow-lg" src="data:image/png;base64,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" alt="image">
                </div>
              </a>
            </div>
            <div class="col-lg-8 col-md-6 col-12 my-auto">
              <div class="card-body ps-lg-0">
                <h5 class="mb-0">Nama</h5>
                <h6 class="text-info">Jabatan</h6>
                <p class="mb-0">Deskripsi</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <div class="card card-profile mt-lg-4 mt-5 z-index-2">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-n5">
              <a href="javascript:;">
                <div class="p-3 pe-md-0">
                  <img class="w-100 border-radius-md shadow-lg" src="data:image/png;base64,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" alt="image">
                </div>
              </a>
            </div>
            <div class="col-lg-8 col-md-6 col-12 my-auto">
              <div class="card-body ps-lg-0">
                <h5 class="mb-0">Nama</h5>
                <h6 class="text-info">Jabatan</h6>
                <p class="mb-0">Deskripsi</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="my-5 pt-5">
  <div class="container" id="kontakkami">
    <div class="row">
      <div class="col-md-6 m-auto">
        <h4>Kontak Kami</h4>
        <p class="mb-4">
          Deskripsi
        </p>
        <div class="row">
          <div class="col-8">
            <div class="input-group input-group-outline">
              <label class="form-label">Pesan</label>
              <input type="text" class="form-control mb-sm-0">
            </div>
          </div>
          <div class="col-4 ps-0">
            <button type="button" class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2">Kirim</button>
          </div>
        </div>
      </div>
      <div class="col-md-5 ms-auto">
        <div class="position-relative">
          <img class="max-width-50 w-100 position-relative z-index-2" src="data:image/jpeg;base64,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" alt="image">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
</div>

<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="{{asset('assets/js/plugins/countup.min.js')}}"></script>
<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script> -->
<script src="{{asset('assets/js/material-kit.min.js?v=3.0.4')}}" type="text/javascript"></script>
<script>
  // get the element to animate
  var element = document.getElementById('count-stats');
  //var elementHeight = element.clientHeight;

  // listen for scroll event and call animate function

  document.addEventListener('scroll', animate);

  // check if element is in view
  function inView() {
    // get window height
    var windowHeight = window.innerHeight;
    // get number of pixels that the document is scrolled
    var scrollY = window.scrollY || window.pageYOffset;
    // get current scroll position (distance from the top of the page to the bottom of the current viewport)
    var scrollPosition = scrollY + windowHeight;
    // get element position (distance from the top of the page to the bottom of the element)
    var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

    // is scroll position greater than element position? (is element in view?)
    if (scrollPosition > elementPosition) {
      return true;
    }

    return false;
  }

  var animateComplete = true;
  // animate element when it is in view
  function animate() {

    // is element in view?
    if (inView()) {
      if (animateComplete) {
        if (document.getElementById('state1')) {
          const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
          if (!countUp.error) {
            countUp.start();
          } else {
            console.error(countUp.error);
          }
        }
        if (document.getElementById('state2')) {
          const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
          if (!countUp1.error) {
            countUp1.start();
          } else {
            console.error(countUp1.error);
          }
        }
        if (document.getElementById('state3')) {
          const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
          if (!countUp2.error) {
            countUp2.start();
          } else {
            console.error(countUp2.error);
          };
        }
        animateComplete = false;
      }
    }
  }

  if (document.getElementById('typed')) {
    var typed = new Typed("#typed", {
      stringsElement: '#typed-strings',
      typeSpeed: 90,
      backSpeed: 90,
      backDelay: 200,
      startDelay: 500,
      loop: true
    });
  }
</script>
<script>
  if (document.getElementsByClassName('page-header')) {
    window.onscroll = debounce(function() {
      var scrollPosition = window.pageYOffset;
      var bgParallax = document.querySelector('.page-header');
      var oVal = (window.scrollY / 3);
      bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
    }, 6);
  }
</script>

@endsection