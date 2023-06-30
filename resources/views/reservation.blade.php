<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hotel ter Duin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/fancybox.min.css">

  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <header class="site-header js-site-header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="/">Hotel Ter Duin

          @if (session()->has('success'))
          <div x-data="{ show: true }"
          x-init="setTimeout(() => show = false, 3000)"
          x-show="show"
              class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
                <script>alert('Succesvol gereserveerd')</script>
              </div>
          @endif


        </a></div>
        <div class="col-6 col-lg-8">


          <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- END menu-toggle -->

          <div class="site-navbar js-site-navbar">
            <nav role="navigation">
              <div class="container">
                <div class="row full-height align-items-center">
                  <div class="col-md-6 mx-auto">
                    <ul class="list-unstyled menu">
                      <li><a href="/">Home</a></li>
                      <li><a href="/rooms">Rooms</a></li>
                      <li><a href="/about">About</a></li>
                      <li><a href="/contact">Contact</a></li>
                      <li class="active"><a href="/reservation">Reservation</a></li>
                      <li><a href="/login">Login</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- END head -->

  <section class="site-hero inner-page overlay" style="background-image: url(images/netherlands_1.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row site-hero-inner justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade">
          <h1 class="heading mb-3">Reservation Form</h1>
          <ul class="custom-breadcrumbs mb-4">
            <li><a href="/">Home</a></li>
            <li>&bullet;</li>
            <li>Reservation</li>
          </ul>
        </div>
      </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
      <div class="mouse-icon">
        <span class="mouse-wheel"></span>
      </div>
    </a>
  </section>
  <!-- END section -->

  <section class="section contact-section" id="next">
    <div class="container">
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">

          <form action="/reservation" method="post" class="bg-white p-md-5 p-4 mb-5 border">
            @csrf


            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="room">Room Type</label>
                <select id="room" name="room" class="form-control">
                  <option value="0">Single Room</option>
                  <option value="1">Family Room</option>
                  <option value="2">presidental Room</option>
                </select>
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control ">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="checkin_date">Date Check In</label>
                <input type="date" name="checkin" id="checkin_date" class="form-control">
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="checkout_date">Date Check Out</label>
                <input type="date" name="checkout" id="checkout_date" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <label for="adults" class="font-weight-bold text-black">Adults</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="adults" id="adults" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4+</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 form-group">
                <label for="children" class="font-weight-bold text-black">Children</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="children" id="children" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4+</option>
                  </select>
                </div>
              </div>
            </div>



            <div class="row mb-4">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="message">Notes</label>
                <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Reserve Now" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
              </div>
            </div>
          </form>

        </div>
        <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
          <div class="row">
            <div class="col-md-10 ml-auto contact-info">
              <p><span class="d-block">Address:</span> <span class="text-black"> Kon. Wilhelmina Boulevard 4, 2202 GR Noordwijk</span></p>
              {{-- Noah vroeg om deze telefoon nummer --}}
              <p><span class="d-block">Phone:</span> <span class="text-black"> (+31) 69 666 420</span></p>
              <p><span class="d-block">Email:</span> <span class="text-black"> info@HotelderTuin.com</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section testimonial-section bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade-up">People Says</h2>
        </div>
      </div>
      <div class="row">
        <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">

          <div class="testimonial text-center slider-item">
            <div class="author-image mb-3">
              <img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
            </div>
            <blockquote>

              <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
            </blockquote>
            <p><em>&mdash; Jean Smith</em></p>
          </div>

          <div class="testimonial text-center slider-item">
            <div class="author-image mb-3">
              <img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
            </div>
            <blockquote>
              <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
            </blockquote>
            <p><em>&mdash; John Doe</em></p>
          </div>

          <div class="testimonial text-center slider-item">
            <div class="author-image mb-3">
              <img src="images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
            </div>
            <blockquote>

              <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.&rdquo;</p>
            </blockquote>
            <p><em>&mdash; John Doe</em></p>
          </div>


          <div class="testimonial text-center slider-item">
            <div class="author-image mb-3">
              <img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
            </div>
            <blockquote>

              <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
            </blockquote>
            <p><em>&mdash; Jean Smith</em></p>
          </div>

          <div class="testimonial text-center slider-item">
            <div class="author-image mb-3">
              <img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
            </div>
            <blockquote>
              <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
            </blockquote>
            <p><em>&mdash; John Doe</em></p>
          </div>

          <div class="testimonial text-center slider-item">
            <div class="author-image mb-3">
              <img src="images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
            </div>
            <blockquote>

              <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.&rdquo;</p>
            </blockquote>
            <p><em>&mdash; John Doe</em></p>
          </div>

        </div>
        <!-- END slider -->
      </div>

    </div>
  </section>



  <section class="section bg-image overlay" style="background-image: url('images/hero_4.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
          <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
        </div>
        <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
          <a href="reservation.html" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
        </div>
      </div>
    </div>
  </section>





  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>


  <script src="js/aos.js"></script>

  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>



  <script src="js/main.js"></script>
</body>

</html>
