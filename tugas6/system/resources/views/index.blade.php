<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mine Shope</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ url('public') }}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ url('public') }}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ url('public') }}/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
        <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-folder"></i>
                            <a class="navbar-brand" href="/">
                            <span>Mine Shope</span>
                        </div>
                    </div>
                </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('about')}}"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('watch')}}"> Our Watches </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('contact')}}">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('login')}}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('register')}}">Register</a>
                </li>
              </ul>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="slider_img-box">
                        <div>
                          <img src="{{ url('public') }}/images/watch.png" alt="" class="" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Stylish watches
                          </h1>
                          <p>
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco l
                          </p>
                          <div class="d-flex">
                            <a href="" class="slider-btn1 mr-3">
                              Read More
                            </a>
                            <a href="" class="slider-btn2">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="slider_img-box">
                        <div>
                          <img src="{{ url('public') }}/images/watch2.jpg" alt="" class="" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Stylish watches
                          </h1>
                          <p>
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco l
                          </p>
                          <div class="d-flex">
                            <a href="" class="slider-btn1 mr-3">
                              Read More
                            </a>
                            <a href="" class="slider-btn2">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="slider_img-box">
                        <div>
                          <img src="{{ url('public') }}/images/watch3.jpg" alt="" class="" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="slider_item-detail">
                        <div>
                          <h1 class="">
                            Stylish watches
                          </h1>
                          <p>
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco l
                          </p>
                          <div class="d-flex">
                            <a href="" class="slider-btn1 mr-3">
                              Read More
                            </a>
                            <a href="" class="slider-btn2">
                              Contact Us
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="custom_carousel-control">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <h3 class="custom_heading">
        Testimonial
      </h3>
      <p class="font-weight-bold">
        It is a long established fact that a reader will be distracted by the readable content of a page
      </p>
    </div>
    <div class="container"></div>
    <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="detail_box">
                  <div class="img_box">
                    <img src="{{ url('public') }}/images/client.jpg" alt="">
                  </div>
                  <div class="name_box">
                    <h5>
                      Sandy Den
                    </h5>
                    <h6>
                      Many Variations
                    </h6>
                  </div>
                </div>
                <div class="detail_text">
                  <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration
                    in some form, by injected humour, or randomised words which don't look even slightly believable. If
                    you
                    are going to use a passage of Lorem Ipsum, you need to beThere are many variations of passages
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="detail_box">
                  <div class="img_box">
                    <img src="{{ url('public') }}/images/client.jpg" alt="">
                  </div>
                  <div class="name_box">
                    <h5>
                      Sandy Den
                    </h5>
                    <h6>
                      Many Variations
                    </h6>
                  </div>
                </div>
                <div class="detail_text">
                  <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration
                    in some form, by injected humour, or randomised words which don't look even slightly believable. If
                    you
                    are going to use a passage of Lorem Ipsum, you need to beThere are many variations of passages
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="detail_box">
                  <div class="img_box">
                    <img src="{{ url('public') }}/images/client.jpg" alt="">
                  </div>
                  <div class="name_box">
                    <h5>
                      Sandy Den
                    </h5>
                    <h6>
                      Many Variations
                    </h6>
                  </div>
                </div>
                <div class="detail_text">
                  <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration
                    in some form, by injected humour, or randomised words which don't look even slightly believable. If
                    you
                    are going to use a passage of Lorem Ipsum, you need to beThere are many variations of passages
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>

    </div>
  </section>


  <!-- end client section -->

  

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; 2020 @if(date("Y") > '2020') - {{date("Y")}} @endif <a href="https://ncit.com">Neo Culture Thecnology</a>.</span>All rights reserved
    </div>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="{{ url('public') }}/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="{{ url('public') }}/js/bootstrap.js"></script>
</body>

</html>