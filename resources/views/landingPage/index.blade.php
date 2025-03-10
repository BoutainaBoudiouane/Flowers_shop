<!DOCTYPE html>
<html>

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Garden Glow</title>
   <link rel="icon" type="image/png" href="images/logo_onglet.png">
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- font css -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
      .gallery img {
         width: 100%;
         height: auto;
         object-fit: cover;
         border-radius: 10px;
      }

      .started_text a {
         display: inline-block;
         padding: 10px 20px;
         background-color: #E5187B;
         color: white;
         text-decoration: none;
         border-radius: 30px;
         font-weight: bold;
         cursor: pointer;
         transition: all 0.3s ease;
      }

      .started_text a:hover {
         background-color: #c01267;
         transform: translateY(-3px);
         box-shadow: 0 5px 15px rgba(229, 24, 123, 0.3);
      }
   </style>

</head>

<body>
   <div class="container ">
      <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top w-75 mx-auto">
         <a class="navbar-brand" href="#home"><img src="images/logo_app.png"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
               <li class="nav-item active">
                  <a class="nav-link" href="#home">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#flower">Flowers</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#event">Events</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#testimonial">Testimonial</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
               </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
               <div class="login_bt"><a href="#">Login <span style="color: #222222;"><i class="fa fa-user" aria-hidden="true"></i></span></a></div>
            </form>
         </div>
      </nav>
   </div>
   <!-- banner section start -->
   <div class="header_section" id="home">
      <div class="banner_section layout_padding">
         <div class="container">
            <div class="carousel-item active">
               <div class="row">
                  <div class="col-sm-6">
                     <h1 class="banner_taital">A simple flower can light up someone's world with happiness.</h1>

                     <div class="started_text"><a href="#flower">Browse Flowers</a></div>
                  </div>
                  <div class="col-sm-6">
                     <div class="banner_img"><img src="images/img_home.png"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- banner section end -->

   <!-- about section start -->
   <div class="about_section layout_padding" id="about">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="about_img"><img src="images/img_about.jpg"></div>
            </div>
            <div class="col-md-6">
               <h1 class="about_taital">About Our Shop</h1>
               <p class="about_text">Garden Glow is more than just a flower shop – we're passionate storytellers who believe in the power of nature's most beautiful creations. Founded by a family of flower enthusiasts, we carefully craft each bouquet with love, selecting the freshest blooms from local growers to create arrangements that speak directly to the heart. From celebrating life's joyous moments to offering comfort during challenging times, our flowers are designed to transform emotions into living, breathing art that connects people and creates memories that last far beyond the petals.</p>
               <div class="read_bt_1 " style="display: flex; gap: 20px; align-items: center;">
                  <div style="display: flex; align-items: center;">
                     <i class="fa-solid fa-users fa-2x text-gradient flex-shrink-0 mt-1" style="color: #E5187B; font-size:50px"></i>
                     <span style="color: black; font-weight: bold; font-size:40px; margin-left:10px; font-family: Gill Sans ">25</span><br>
                     <span style="color: green;font-size:17px; margin-left:4px; font-family: Gill Sans; font-weight: bold;margin-left:10px ">Loyal Customer</span>
                  </div>
                  <div style="display: flex; align-items: center; margin-left:70px">
                     <i class="fa-solid fa-clipboard-check fa-2x text-gradient flex-shrink-0 mt-1" style="color: #E5187B; font-size:50px"></i>
                     <span style="color: black; font-weight: bold; font-size:40px; margin-left:10px; font-family: Gill Sans ">+150</span><br>
                     <span style="color: green;font-size:17px; margin-left:4px; font-family: Gill Sans; font-weight: bold;margin-left:10px ">Delivery Realize</span>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section end -->
   <!-- product section start -->
   <div class="cream_section layout_padding" id="flower">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="cream_taital">Our Bouquets</h1>
               <p class="cream_text">A bouquet of joy, crafted just for you.</p>
            </div>
         </div>
         <div class="cream_section_2">
            <div class="row">
               <div class="col-md-4">
                  <div class="card shadow-sm border-0 text-center" style="width: 18rem; height: 500px; overflow: hidden;">
                     <img src="images/p2_mini.png" class="card-img-top p-3" style="height: 350px; object-fit: contain;">
                     <div class="card-body d-flex flex-column justify-content-between">
                        <h6 class="card-title fw-bold mb-2 " style="font-family: Gill Sans;font-size:17px">Blossoms of Joy</h6>
                        <p class="card-text text-danger fw-bold fs-5 mb-2">100DH</p>
                        <a href="#" class="btn w-51 text-black" style="background-color:rgb(255, 255, 255); border-radius: 20px;border-color:#E5187B">Send Message</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card shadow-sm border-0 text-center" style="width: 18rem; height: 500px; overflow: hidden;">
                     <img src="images/p4_mini.png" class="card-img-top p-3" style="height: 350px; object-fit: contain;">
                     <div class="card-body d-flex flex-column justify-content-between">
                        <h6 class="card-title fw-bold mb-2" style="font-family: Gill Sans;font-size:17px">Elegance in Pink</h6>
                        <p class="card-text text-danger fw-bold fs-5 mb-2">100DH</p>
                        <a href="#" class="btn w-51 text-black" style="background-color:rgb(255, 255, 255); border-radius: 20px;border-color:#E5187B">Send Message</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card shadow-sm border-0 text-center" style="width: 18rem; height: 500px; overflow: hidden;">
                     <img src="images/p1_mini.png" class="card-img-top p-3" style="height: 350px; object-fit: contain;">
                     <div class="card-body d-flex flex-column justify-content-between">
                        <h6 class="card-title fw-bold mb-2" style="font-family: Gill Sans;font-size:17px">Summer Bliss Bouquet</h6>
                        <p class="card-text text-danger fw-bold fs-5 mb-2">100DH</p>
                        <a href="#" class="btn w-51 text-black" style="background-color:rgb(255, 255, 255); border-radius: 20px;border-color:#E5187B">Send Message</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="cream_section_2">
            <div class="row">
               <div class="col-md-4">
                  <div class="card shadow-sm border-0 text-center" style="width: 18rem; height: 500px; overflow: hidden;">
                     <img src="images/p3.png" class="card-img-top p-3" style="height: 350px; object-fit: contain;">
                     <div class="card-body d-flex flex-column justify-content-between">
                        <h6 class="card-title fw-bold mb-2" style="font-family: Gill Sans;font-size:17px">Sunshine Blossom Bouquet</h6>
                        <p class="card-text text-danger fw-bold fs-5 mb-2">300DH</p>
                        <a href="#" class="btn w-51 text-black" style="background-color:rgb(255, 255, 255); border-radius: 20px;border-color:#E5187B">Send Message</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card shadow-sm border-0 text-center" style="width: 18rem; height: 500px; overflow: hidden;">
                     <img src="images/p1.png" class="card-img-top p-3" style="height: 350px; object-fit: contain;">
                     <div class="card-body d-flex flex-column justify-content-between">
                        <h6 class="card-title fw-bold mb-2" style="font-family: Gill Sans;font-size:17px">Royal Violet Bouquet</h6>
                        <p class="card-text text-danger fw-bold fs-5 mb-2">300DH</p>
                        <a href="#" class="btn w-51 text-black" style="background-color:rgb(255, 255, 255); border-radius: 20px;border-color:#E5187B">Send Message</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card shadow-sm border-0 text-center" style="width: 18rem; height: 500px; overflow: hidden;">
                     <img src="images/p4.png" class="card-img-top p-3" style="height: 350px; object-fit: contain;">
                     <div class="card-body d-flex flex-column justify-content-between">
                        <h6 class="card-title fw-bold mb-2" style="font-family: Gill Sans;font-size:17px">Pretty in Pastels Bouquet</h6>
                        <p class="card-text text-danger fw-bold fs-5 mb-2">300DH</p>
                        <a href="#" class="btn w-51 text-black" style="background-color:rgb(255, 255, 255); border-radius: 20px;border-color:#E5187B">Send Message</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="seemore_bt"><a href="#">See More</a></div>
      </div>
   </div>
   <!-- product section end -->
   <!-- services section start -->
   <div class="services_section layout_padding" id="event">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="services_taital">Events</h1>
               <p class="services_text">The best occasions to buy flowers to your lover.</p>
            </div>
         </div>
         <div class="services_section_2">
            <div class="row">
               <div class="col-md-4">
                  <div class="services_box">
                     <h2 class="tasty_text" style="font-family: Gill Sans;font-weight: bold;"><span class="icon_img"><img src="images/heart_icon.png"></span>Valentine's Day</h2>
                     <p class="lorem_text">Romance, joy, and surprises await in Garden Glow don’t miss our Valentine’s event!</p>
                     <img src="images/v_event.jpg" class="img-fluid rounded mt-3">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="services_box">
                     <h5 class="tasty_text" style="font-family: Gill Sans;font-weight: bold;"><span class="icon_img"><img src="images/ring_icon.png"></span>Wedding</h5>
                     <p class="lorem_text">With Garden Glow Celebrate love and unity of your wedding day don't miss out this occasion. </p>
                     <img src="images/w_event.jpg" class="img-fluid rounded mt-3">

                  </div>
               </div>
               <div class="col-md-4">
                  <div class="services_box">
                     <h5 class="tasty_text" style="font-family: Gill Sans;font-weight: bold;"><span class="icon_img"><img src="images/crown_icon.png"></span>Mother's Day</h5>
                     <p class="lorem_text">A special day for the special women who made us who we are—Happy Mother’s Day!</p>
                     <img src="images/m_event.jpg" class="img-fluid rounded mt-3">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- services section end -->
   <!-- testimonial section start -->
   <div class="testimonial_section layout_padding" id="testimonial">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1 class="testimonial_taital">Testimonial</h1>
            </div>
         </div>
         <div class="testimonial_section_2">
            <div class="row">
               <div class="col-md-12">
                  <div class="testimonial_box">
                     <div id="main_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <p class="testimonial_text">Fast delivery and excellent customer service! I needed a last-minute bouquet for a special occasion, and they made it happen effortlessly. So grateful!</p>
                              <h4 class="client_name">Mahmoud</h4>

                           </div>
                           <div class="carousel-item">
                              <p class="testimonial_text">Absolutely stunning flowers! I ordered a bouquet for my mom's birthday, and she was overjoyed. Fresh, vibrant, and delivered right on time. Highly recommend!</p>
                              <h4 class="client_name">Ghita</h4>

                           </div>
                           <div class="carousel-item">
                              <p class="testimonial_text">I ordered roses for my anniversary, and they were perfect. The arrangement was elegant, and the flowers lasted longer than I expected. Thank you for the amazing service</p>
                              <h4 class="client_name">Mohamed</h4>

                           </div>
                        </div>
                        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                           <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                           <i class="fa fa-angle-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- testimonial section end -->
   <div class=" mt-6">
      <div class="row g-1 gallery">
         <div class="col-12 col-sm-6 col-md-2">
            <img src="images/gal_1.jpg" class="img-fluid rounded" alt="Image 1">
         </div>
         <div class="col-12 col-sm-6 col-md-2">
            <img src="images/gal_2.jpg" class="img-fluid rounded" alt="Image 2">
         </div>
         <div class="col-12 col-sm-6 col-md-2">
            <img src="images/gal_3.jpg" class="img-fluid rounded" alt="Image 3">
         </div>
         <div class="col-12 col-sm-6 col-md-2">
            <img src="images/gal_4.jpg" class="img-fluid rounded" alt="Image 4">
         </div>
         <div class="col-12 col-sm-6 col-md-2">
            <img src="images/gal_6.jpg" class="img-fluid rounded" alt="Image 5">
         </div>
         <div class="col-12 col-sm-6 col-md-2">
            <img src="images/gal_5.jpg" class="img-fluid rounded" alt="Image 6">
         </div>

      </div>
   </div>

   <!-- contact section start -->
   <div class="contact_section layout_padding" id="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="contact_main">
                  <h1 class="contact_taital">Add Testimonial</h1>
                  <form action="/action_page.php">
                     <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Name" name="Name">
                     </div>
                     <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Email" name="Name">
                     </div>
                     <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Phone Number" name="Email">
                     </div>
                     <div class="form-group">
                        <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="Massage"></textarea>
                     </div>
                  </form>
                  <div class="main_bt"><a href="#">SEND</a></div>
               </div>
            </div>
            <div class="col-md-8">
               <div class="location_text">
                  <ul>
                     <li>
                        <a href="#">
                           <span class="padding_left_10 active"><i class="fa fa-map-marker" aria-hidden="true"></i></span>Boulvard Anfa Casablanca</a>
                     </li>
                     <li>
                        <a href="#">
                           <span class="padding_left_10"><i class="fa fa-phone" aria-hidden="true"></i></span>Call : +212 678894556
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <span class="padding_left_10"><i class="fa fa-envelope" aria-hidden="true"></i></span>Email : gardenglow@gmail.com
                        </a>
                     </li>
                  </ul>
               </div>

               <div class="footer_social_icon">
                  <ul>
                     <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                     <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                  </ul>
               </div>
               <div>
                  <img src="images/contact_img.png" style="margin-left: 500px; " alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- contact section end -->

   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <!-- javascript -->
</body>

</html>