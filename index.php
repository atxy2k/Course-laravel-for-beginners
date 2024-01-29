<?php
    $title = 'Business | Bootstrap 5 Business Template';
    $menu_items = ['Home','Services','Pricing','Contact'];
    $social_networks = ['lni lni-facebook-filled','lni lni-twitter-original','lni lni-linkedin-original','lni lni-youtube'];
    $quick_links = ['About us','Our team','Latest News','Contact Us'];
    $pricings = [
        [
            'title' => 'Starter',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and industry.',
            'price' => 0,
            'items' => [
                ['title' => 'Cras justo odio.','active' => true],
                ['title' => 'Dapibus ac facilisis in.','active' => true],
                ['title' => 'Morbi leo risus.','active' => false],
                ['title' => 'Excepteur sint occaecat velit.','active' => false]
            ]
        ],
        [
            'title' => 'Exclusive',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and industry.',
            'price' => 99,
            'items' => [
                ['title' => 'Cras justo odio.','active' => true],
                ['title' => 'Dapibus ac facilisis in.','active' => true],
                ['title' => 'Morbi leo risus.','active' => true],
                ['title' => 'Excepteur sint occaecat velit.','active' => false]
            ]
        ],
        [
            'title' => 'Premium',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and industry.',
            'price' => 150,
            'items' => [
                ['title' => 'Cras justo odio.','active' => true],
                ['title' => 'Dapibus ac facilisis in.','active' => true],
                ['title' => 'Morbi leo risus.','active' => true],
                ['title' => 'Excepteur sint occaecat velit.','active' => true]
            ]
        ]
    ];
    $clients = [
        '/template/assets/images/client-logo/graygrids.svg',
        '/template/assets/images/client-logo/uideck.svg',
        '/template/assets/images/client-logo/ayroui.svg',
        '/template/assets/images/client-logo/lineicons.svg',
        '/template/assets/images/client-logo/tailwindtemplates.svg',
        '/template/assets/images/client-logo/ecomhtml.svg'
    ];
    function printSingleService(string $title, string $description, string $icon){
        return vsprintf('
        <div class="single-services">
            <div class="service-icon">
                <i class="%s"></i>
            </div>
            <div class="service-content">
                <h4>%s</h4>
                <p>%s</p>
            </div>
        </div>
        ',[$icon, $title, $description]);
    }
    include './partials/pricing.php';
    $contact_info = [
        'phone_number' => '+52 981-147-8076',
        'email' => 'ivan.alvarado@studiogeek.com.mx',
        'address' => 'Calle Xtampak Mzna B Lote 7. Fraccionamiento Valle Dorado',
        'schedule' => '24 Hours / 7 Dias a la semana <br/>Horario de oficina: 10 AM - 5:30 PM'
    ];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <!--====== Required meta tags ======-->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!--====== Title ======-->
  <title><?= $title ?></title>
  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="<?= '/template/assets/images/favicon.svg' ?>" type="image/svg" />
  <!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="<?= 'template/assets/css/bootstrap.min.css' ?>" />
  <!--====== Line Icons css ======-->
  <link rel="stylesheet" href="<?= 'template/assets/css/lineicons.css' ?>" />
  <!--====== Tiny Slider css ======-->
  <link rel="stylesheet" href="<?= 'template/assets/css/tiny-slider.css' ?>" />
  <!--====== gLightBox css ======-->
  <link rel="stylesheet" href="<?= 'template/assets/css/glightbox.min.css' ?>" />
  <link rel="stylesheet" href="<?= 'template/style.css'  ?>" />
</head>
<body>
  <!--====== NAVBAR NINE PART START ======-->
  <section class="navbar-area navbar-nine">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
              <img src="<?= '/template/assets/images/white-logo.svg' ?>" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
              aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav me-auto">
                <?php foreach($menu_items as $index => $item){ ?>
                    <li class="nav-item">
                        <a class="page-scroll <?= $index === 0 ? 'active' : '' ?>" href="#<?= strtolower($item) ?>"><?= $item ?></a>
                    </li>
                <?php } ?>
              </ul>
            </div>
            <div class="navbar-btn d-none d-lg-inline-block">
              <a class="menu-bar" href="#side-menu-left"><i class="lni lni-menu"></i></a>
            </div>
          </nav>
          <!-- navbar -->
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </section>

  <!--====== NAVBAR NINE PART ENDS ======-->

  <!--====== SIDEBAR PART START ======-->

  <div class="sidebar-left">
    <div class="sidebar-close">
      <a class="close" href="#close"><i class="lni lni-close"></i></a>
    </div>
    <div class="sidebar-content">
      <div class="sidebar-logo">
        <a href="/"><img src="<?= '/template/assets/images/logo.svg' ?>" alt="Logo" /></a>
      </div>
      <p class="text">Lorem ipsum dolor sit amet adipisicing elit. Sapiente fuga nisi rerum iusto intro.</p>
      <!-- logo -->
      <div class="sidebar-menu">
        <h5 class="menu-title">Quick Links</h5>
        <ul>
            <?php foreach($quick_links as $link){ ?>
                <li><a href="javascript:void(0)"><?= $link ?></a></li>
            <?php } ?>
        </ul>
      </div>
      <!-- menu -->
      <div class="sidebar-social align-items-center justify-content-center">
        <h5 class="social-title">Follow Us On</h5>
        <ul>
            <?php foreach($social_networks as $social_network){ ?>
                <li>
                    <a href="javascript:void(0)"><i class="<?= $social_network ?>"></i></a>
                </li>
            <?php } ?>
        </ul>
      </div>
      <!-- sidebar social -->
    </div>
    <!-- content -->
  </div>
  <div class="overlay-left"></div>

  <!--====== SIDEBAR PART ENDS ======-->

  <!-- Start header Area -->
  <section id="home" class="header-area header-eight">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-content">
            <h1>Corporate & Business Site Template by Ayro UI.</h1>
            <p>
              We are a digital agency that helps brands to achieve their
              business outcomes. We see technology as a tool to create amazing
              things.
            </p>
            <div class="button">
              <a href="javascript:void(0)" class="btn primary-btn">Get Started</a>
              <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                class="glightbox video-button">
                <span class="btn icon-btn rounded-full">
                  <i class="lni lni-play"></i>
                </span>
                <span class="text">Watch Intro</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-image">
            <img src="<?= '/template/assets/images/header/hero-image.jpg' ?>" alt="#" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End header Area -->

  <!--====== ABOUT FIVE PART START ======-->

  <section class="about-area about-five">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-12">
          <div class="about-image-five">
            <svg class="shape" width="106" height="134" viewBox="0 0 106 134" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <circle cx="1.66654" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="1.66654" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="16.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="16.333" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="30.9998" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="74.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="31" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="74.6668" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="45.6665" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="89.3333" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="1.66679" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="16.3335" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="31.0001" r="1.66667" fill="#DADADA" />
              <circle cx="60.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="45.6668" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="60.3335" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="88.6668" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="117.667" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="74.6668" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="103" r="1.66667" fill="#DADADA" />
              <circle cx="60.333" cy="132" r="1.66667" fill="#DADADA" />
              <circle cx="104" cy="132" r="1.66667" fill="#DADADA" />
            </svg>
            <img src="<?= '/template/assets/images/about/about-img1.jpg' ?>" alt="about" />
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="about-five-content">
            <h6 class="small-title text-lg">OUR STORY</h6>
            <h2 class="main-title fw-bold">Our team comes with the experience and knowledge</h2>
            <div class="about-five-tab">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab" data-bs-target="#nav-who"
                    type="button" role="tab" aria-controls="nav-who" aria-selected="true">Who We Are</button>
                  <button class="nav-link" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision"
                    type="button" role="tab" aria-controls="nav-vision" aria-selected="false">our Vision</button>
                  <button class="nav-link" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#nav-history"
                    type="button" role="tab" aria-controls="nav-history" aria-selected="false">our History</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab">
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page
                    when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, look like readable English.</p>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have in some
                    form,
                    by injected humour.</p>
                </div>
                <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page
                    when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, look like readable English.</p>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have in some
                    form,
                    by injected humour.</p>
                </div>
                <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page
                    when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, look like readable English.</p>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have in some
                    form,
                    by injected humour.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- container -->
  </section>

  <!--====== ABOUT FIVE PART ENDS ======-->

  <!-- ===== service-area start ===== -->
  <section id="services" class="services-area services-eight">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h6>Services</h6>
              <h2 class="fw-bold">Our Best Services</h2>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
            <?= printSingleService(
                'Refreshing Design',
                'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                eirmod tempor ividunt labor dolore magna.',
                'lni lni-capsule'
                ) ?>
        </div>
        <div class="col-lg-4 col-md-6">
            <?= printSingleService(
                'Solid Bootstrap 5',
                'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                eirmod tempor ividunt labor dolore magna.',
                'lni lni-bootstrap'
                ) ?>
        </div>
        <div class="col-lg-4 col-md-6">
            <?= printSingleService(
                '100+ Components',
                'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                eirmod tempor ividunt labor dolore magna.',
                'lni lni-shortcode'
                ) ?>
        </div>
        <div class="col-lg-4 col-md-6">
            <?= printSingleService(
                    'Speed Optimized',
                    'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                    eirmod tempor ividunt labor dolore magna.',
                    'lni lni-dashboard'
                    ) ?>
        </div>
        <div class="col-lg-4 col-md-6">
            <?= printSingleService(
                    'Fully Customizable',
                    'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                    eirmod tempor ividunt labor dolore magna.',
                    'lni lni-layers'
                    ) ?>
        </div>
        <div class="col-lg-4 col-md-6">
            <?= printSingleService(
                    'Regular Updates',
                    'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                    eirmod tempor ividunt labor dolore magna.',
                    'lni lni-reload'
                    ) ?>
        </div>
      </div>
    </div>
  </section>
  <!-- ===== service-area end ===== -->


  <!-- Start Pricing  Area -->
  <section id="pricing" class="pricing-area pricing-fourteen">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h6>Pricing</h6>
              <h2 class="fw-bold">Pricing & Plans</h2>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
      <div class="row">
        <?php foreach($pricings as $pricing){ 
            printPricing($pricing);
         } ?>
      </div>
    </div>
  </section>
  <!--/ End Pricing  Area -->



  <!-- Start Cta Area -->
  <section id="call-action" class="call-action">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
          <div class="inner-content">
            <h2>We love to make perfect <br />solutions for your business</h2>
            <p>
              Why I say old chap that is, spiffing off his nut cor blimey
              guvnords geeza<br />
              bloke knees up bobby, sloshed arse William cack Richard. Bloke
              fanny around chesed of bum bag old lost the pilot say there
              spiffing off his nut.
            </p>
            <div class="light-rounded-buttons">
              <a href="javascript:void(0)" class="btn primary-btn-outline">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Cta Area -->



  <!-- Start Latest News Area -->
  <div id="blog" class="latest-news-area section">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h6>latest news</h6>
              <h2 class="fw-bold">Latest News & Blog</h2>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
      <div class="row">
        <?php include './partials/blog.php'; ?>
      </div>
    </div>
  </div>
  <!-- End Latest News Area -->

  <!-- Start Brand Area -->
  <div id="clients" class="brand-area section">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h6>Meet our Clients</h6>
              <h2 class="fw-bold">Our Awesome Clients</h2>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    
    <!--======  End Section Title Five ======-->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
          <div class="clients-logos">
            <?php foreach($clients as $client){ ?>
            <div class="single-image">
              <img src="<?= $client ?>" alt="Brand Logo Images" />
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Brand Area -->

  <!-- ========================= contact-section start ========================= -->
  <section id="contact" class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <div class="contact-item-wrapper">
            <div class="row">
              <div class="col-12 col-md-6 col-xl-12">
                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="lni lni-phone"></i>
                  </div>
                  <div class="contact-content">
                    <h4>Contact</h4>
                    <p><?= $contact_info['phone_number'] ?></p>
                    <p><?= $contact_info['email'] ?></p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-12">
                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="lni lni-map-marker"></i>
                  </div>
                  <div class="contact-content">
                    <h4>Address</h4>
                    <p><?= $contact_info['address'] ?></p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-12">
                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="lni lni-alarm-clock"></i>
                  </div>
                  <div class="contact-content">
                    <h4>Schedule</h4>
                    <p><?= $contact_info['schedule'] ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="contact-form-wrapper">
            <div class="row">
              <div class="col-xl-10 col-lg-8 mx-auto">
                <div class="section-title text-center">
                  <span> Ponte en contacto </span>
                  <h2>
                    Ready to Get Started
                  </h2>
                </div>
              </div>
            </div>
            <?php include './partials/form.php' ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========================= contact-section end ========================= -->

  <!-- ========================= map-section end ========================= -->
  <section class="map-section map-style-9">
    <div class="map-container">
      <object style="border:0; height: 500px; width: 100%;"
        data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7887109309127!2d-77.44196278417968!3d38.95165507956235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDU3JzA2LjAiTiA3N8KwMjYnMjMuMiJX!5e0!3m2!1sen!2sbd!4v1545420879707"></object>
    </div>
    </div>
  </section>
  <!-- ========================= map-section end ========================= -->

  <?php include './partials/footer.php'; ?>

	<div class="made-in-ayroui mt-4">
		<a href="https://ayroui.com" target="_blank" rel="nofollow">
		  <img style="width:220px" src="<?= '/template/assets/images/ayroui.svg' ?>">
		</a>
	</div>

  <a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
  </a>

  <!--====== js ======-->
  <script src="<?= '/template/assets/js/bootstrap.bundle.min.js' ?>"></script>
  <script src="<?= '/template/assets/js/glightbox.min.js' ?>"></script>
  <script src="<?= '/template/assets/js/main.js' ?>"></script>
  <script src="<?= '/template/assets/js/tiny-slider.js' ?>"></script>
  <script>

    //===== close navbar-collapse when a  clicked
    let navbarTogglerNine = document.querySelector(
      ".navbar-nine .navbar-toggler"
    );
    navbarTogglerNine.addEventListener("click", function () {
      navbarTogglerNine.classList.toggle("active");
    });

    // ==== left sidebar toggle
    let sidebarLeft = document.querySelector(".sidebar-left");
    let overlayLeft = document.querySelector(".overlay-left");
    let sidebarClose = document.querySelector(".sidebar-close .close");

    overlayLeft.addEventListener("click", function () {
      sidebarLeft.classList.toggle("open");
      overlayLeft.classList.toggle("open");
    });
    sidebarClose.addEventListener("click", function () {
      sidebarLeft.classList.remove("open");
      overlayLeft.classList.remove("open");
    });

    // ===== navbar nine sideMenu
    let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

    sideMenuLeftNine.addEventListener("click", function () {
      sidebarLeft.classList.add("open");
      overlayLeft.classList.add("open");
    });

    //========= glightbox
    GLightbox({
      'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
      'type': 'video',
      'source': 'youtube', //vimeo, youtube or local
      'width': 900,
      'autoplayVideos': true,
    });

  </script>
</body>

</html>