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
        <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="/">Hotel ter Duin</a></div>
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
                      <li class="active"><a href="/rooms">Rooms</a></li>
                      <li><a href="/about">About</a></li>
                      <li><a href="/events">Events</a></li>
                      <li><a href="/contact">Contact</a></li>
                      <li><a href="/reservation">Reservation</a></li>
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

  <section class="site-hero inner-page overlay" style="background-image: url(images/back_rooms.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row site-hero-inner justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade">
          <h1 class="heading mb-3">Rooms</h1>
          <ul class="custom-breadcrumbs mb-4">
            <li><a href="/">Home</a></li>
            <li>&bullet;</li>
            <li>Rooms</li>
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

  <section class="section pb-4">
    <div class="container">

      <div class="row check-availabilty" id="next">
        <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

          <form action="#">
            <div class="row">
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="text" id="checkin_date" class="form-control">
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="text" id="checkout_date" class="form-control">
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                <div class="row">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label for="adults" class="font-weight-bold text-black">Adults</label>
                    <div class="field-icon-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="adults" class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label for="children" class="font-weight-bold text-black">Children</label>
                    <div class="field-icon-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="children" class="form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4+">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 align-self-end">
                <button class="btn btn-primary btn-block text-white">Check Availabilty</button>
              </div>
            </div>
          </form>
        </div>


      </div>
    </div>
  </section>


  <section class="section">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
          <a href="/reservation" class="room">
            <figure class="img-wrap">
              <img src="images/singel_1.jpg" alt="no iamge found" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Single Economic</h2>
              <span class="text-uppercase letter-spacing-1">40€ / per night</span>
              <p>A Single Economic hotel room is a compact and budget-friendly accommodation option designed for solo travelers, offering essential amenities and a comfortable stay at an affordable price.</p>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
          <a href="/reservation" class="room">
            <figure class="img-wrap">
              <img src="images/family_1.jpg" alt="no iamge found" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Family Economic</h2>
              <span class="text-uppercase letter-spacing-1">80€ / per night</span>
              <p>A Family Economic hotel room is a budget-friendly accommodation option tailored for families, offering essential amenities and a comfortable, spacious environment that caters to the needs of multiple guests while keeping costs affordable.</p>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
          <a href="/reservation" class="room">
            <figure class="img-wrap">
              <img src="images/luxe_1.jpg" alt="no iamge found" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Presidential Economic</h2>
              <span class="text-uppercase letter-spacing-1">120€ / per night</span>
            </div>
            <p>A Presidential Economic room is a cost-effective and luxurious accommodation option designed for discerning guests, providing upscale amenities and a refined environment that blends elegance with affordability, creating an exceptional stay experience.</p>
          </a>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="/reservation" class="room">
              <figure class="img-wrap">
                <img src="images/singel_2.jpg" alt="no iamge found" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Single Standard</h2>
                <span class="text-uppercase letter-spacing-1">60€ / per night</span>
              </div>
              <p>A Single Standard room is a budget-friendly yet comfortable accommodation option designed for solo travelers, providing essential amenities such as a TV and complimentary beverages, in addition to a straightforward setting that balances affordability with a satisfactory stay experience.</p>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="/reservation" class="room">
              <figure class="img-wrap">
                <img src="images/family_3.jpg" alt="no iamge found" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Family Standard</h2>
                <span class="text-uppercase letter-spacing-1">100€ / per night</span>
                <p>A Family Standard room is a budget-friendly and accommodating option designed for families, providing essential amenities, such as a TV and complimentary beverages, along with a comfortable setting that caters to the needs of multiple guests while keeping costs affordable.</p>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="/reservation" class="room">
              <figure class="img-wrap">
                <img src="images/luxe_3.jpg" alt="no iamge found" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Presidential Standard </h2>
                <span class="text-uppercase letter-spacing-1">150€ / per night</span>
              </div>
              <p>A Presidential Standard room is a luxurious yet affordable accommodation option designed for discerning guests, offering upscale amenities including a TV and complimentary beverages, alongside a refined setting that blends elegance with affordability, creating an exceptional stay experience.</p>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="#" class="room">
              <figure class="img-wrap">
                <img src="images/singel_3.jpg" alt="no iamge found" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Single comfort</h2>
                <span class="text-uppercase letter-spacing-1">90€ / per night</span>
                <p>A Single Comfort room is the finest and most luxurious type of accommodation we offer, providing exceptional comfort and convenience to solo travelers. It includes complimentary food and beverages, top-notch amenities, exquisite design, and a serene atmosphere that guarantees the utmost comfort and satisfaction during your stay.</p>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="#" class="room">
              <figure class="img-wrap">
                <img src="images/family_2.jpg" alt="no iamge found" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Family comfort</h2>
                <p>A Comfort Family room is the ultimate in luxurious and spacious accommodation, tailored specifically for families, offering top-notch comfort, convenience, and indulgence. This room type includes complimentary food and beverages, ensuring a memorable and enjoyable stay for the whole family.</p>
                <span class="text-uppercase letter-spacing-1">140€ / per night</span>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="#" class="room">
              <figure class="img-wrap">
                <img src="images/luxe_2.jpg" alt="no iamge found" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>Presidential comfort</h2>
                <span class="text-uppercase letter-spacing-1">250€ / per night</span>
                <p>A Presidential Comfort room represents the epitome of opulence and luxury, providing unparalleled comfort and sophistication to discerning guests. This room type offers lavish amenities, including complimentary food and beverages, ensuring an extraordinary and indulgent stay experience for those seeking the highest level of accommodation.</p>
              </div>
            </a>
          </div>

          <div id="lastDiv" class="ja col-md-6 col-lg-4 mb-5" data-aos="fade-up">
            <a href="#" class="room">
              <figure class="img-wrap">
                <img src="images/GOD_Room.jpg" alt="no iamge found" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2>The God Room</h2>
                <span class="text-uppercase letter-spacing-1">500€ / per night</span>
                <p>Our God room is the epitome of extravagance and luxury, meticulously designed for royalty, offering an unparalleled experience that surpasses all expectations. This room provides an array of lavish amenities, including exquisite furnishings, personalized services, and an extensive range of premium offerings, ensuring an unforgettable stay that caters to the utmost desires and needs of our esteemed guests.</p>
              </div>
            </a>
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

  <style>
    *::-webkit-scrollbar {
    display: none;
    }
  </style>

</body>

</html>