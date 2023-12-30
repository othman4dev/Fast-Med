<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <title>Tale SEO Agency CSS Template by TemplateMo website</title>

  <!-- Bootstrap core CSS -->
  <link href="user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="user/assets/css/fontawesome.css">
  <link rel="stylesheet" href="user/assets/css/templatemo-tale-seo-agency.css">
  <link rel="stylesheet" href="user/assets/css/owl.css">
  <link rel="stylesheet" href="user/assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="user/assets/css/style.css">
  <!--

TemplateMo 582 Tale SEO Agency

https://templatemo.com/tm-582-tale-seo-agency

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Pre-Header Area Start ***** -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i>+000 1234 5678</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i>infocompany@email.com</a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i>St. London 54th Bull</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3">
          <div class="social-icons">
            <ul>
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="user/assets/images/logo.svg" alt="" style="max-width: 100px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#projects">Projects</a></li>
              <li class="has-sub">
                <a href="javascript:void(0)">Pages</a>
                <ul class="sub-menu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="faqs.html">FAQs</a></li>
                </ul>
              </li>
              <li class="scroll-to-section"><a href="#infos">Infos</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <div class="projects section" id="projects">
    <div class="container">
      <div class="section-heading">
        <h2>Discover Our <em>Products </em> &amp; <span>Medications</span></h2>
        <div class="line-dec"></div>
        <div class="search">
          <p>Find Best Quality Medications</p>
          <div class="search_box">
            <img src="user/assets/images/search.svg" alt="search_icon">
            <input type="search" class="form-control" oninput="search(event)">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="cards">
      </div>
    </div>
  </div>

  <!-- BOOTSTRAP MODAL : -->
  <!-- Button trigger modal -->
  <button type="button" id="modal_btn" class="btn btn-primary hidden" data-bs-toggle="modal" data-bs-target="#medicamentModal">
  </button>

  <!-- Modal -->
  <div class="modal fade" id="medicamentModal" tabindex="-1" aria-labelledby="medicamentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="medicamentModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h4></h4>
          <p></p>
          <span></span>
          <input type="hidden" id="med_id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="buy(event)">Buy Now</button>
        </div>
      </div>
    </div>
  </div>

  <!-- BOOTSTRAP TOAST : -->
  <!-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> -->

  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <strong class="me-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
      </div>
    </div>
  </div>


  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2036 <a href="#">Tale SEO Agency</a>. All rights reserved.

          <br>Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a>
        </p>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="user/vendor/jquery/jquery.min.js"></script>
  <script src="user/vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="user/assets/js/isotope.min.js"></script>
  <!-- <script src="user/assets/js/owl-carousel.js"></script> -->
  <script src="user/assets/js/tabs.js"></script>
  <script src="user/assets/js/popup.js"></script>
  <script src="user/assets/js/custom.js"></script>

  <script>
    const cards = document.querySelector('.cards');
    const toastBody = document.querySelector('.toast-body');
    const toast = new bootstrap.Toast(document.getElementById('liveToast'));
    const modal = new bootstrap.Modal(document.getElementById('medicamentModal'));
    // Modal Elements :
    const modalH4 = document.querySelector('.modal-body h4');
    const modalP = document.querySelector('.modal-body p');
    const modalSpan = document.querySelector('.modal-body span');
    const ModalInput = document.getElementById('med_id');

    async function showModal(e) {
      const medId = e.currentTarget.querySelector('.med_id').value;
      const res = await fetch('/medicament', {
        method: 'POST',
        headers: {
          "Content-Type": "Application/json"
        },
        body: JSON.stringify({
          med_id: medId
        })
      })
      const results = await res.json();

      // load data to modal :
      modalH4.textContent = results.name;
      modalP.textContent = results.description;
      modalSpan.textContent = results.price;
      ModalInput.value = results.med_id;

      modal.show();
    }

    const loadHTML = (data) => {
      return `
        <div class="item" onclick="showModal(event)">
            <img src="user/assets/images/med2.jpg" alt="">
            <div class="down-content">
              <h4>${data.name}</h4>
              <span>${data.price} DH</span>
              <input class="med_id" type="hidden" value="${data.med_id}">
            </div>
        </div>
      `
    }

    async function search(e = {}) {
      cards.innerHTML = '';
      name = e.currentTarget?.value || '';
      const res = await fetch(`/search?name=${name}`);
      const results = await res.json();
      results.forEach(item => cards.insertAdjacentHTML('beforeend', loadHTML(item)));
    }
    search();

    async function buy(e) {
      const medId = ModalInput.value;
      const res = await fetch('/buy', {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          id: medId
        })
      });
      const result = await res.json();
      toastBody.textContent = result.msg;

      // Close Toast :
      modal.hide();

      // Show Toast :
      toast.show();
    }
  </script>


</body>

</html>