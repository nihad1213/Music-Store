<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <!--Bootstrap link start-->
      <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
         crossorigin="anonymous"
      />
      <script
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
         crossorigin="anonymous"
      ></script>
      <!--Bootstrap link ends-->

      <!--Font Awesome link starts-->
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
         integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
         crossorigin="anonymous"
         referrerpolicy="no-referrer"
      />
      <!--Font Awesome link ends-->

      <!--CSS link starts-->
      <link rel="stylesheet" href="style/style.css">
      <!--CSS link ends-->

      <!--Favicon link starts-->
      <link rel="icon" href="./assets/logos/favicon.png" type="image/x-icon" />
      <!--Favicon link ends-->

      <!--Swiper JS link starts-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
      <!--Swiper JS link ends-->
      <title>Rhythm Republic</title>
   </head>
   <body>
      <header>
         <div class="first-header">
            <div class="container">
               <div class="row">
                  <div class="col">
                     <a href="index.php">Main Page</a>
                  </div>

                  <div class="col">
                     <a href="partials/shipping-delivery.php">Shipping and Delivery</a>
                  </div>

                  <div class="col">
                     <a href="partials/privacy-security.php">Privacy and Security</a>
                  </div>

                  <div class="col">
                     <a href="partials/order-conditions.php">Order Conditions</a>
                  </div>

                  <div class="col">
                     <a href="partials/communication.php">Communication</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="second-header">
            <div class="second-header-navbar">
               <div class="second-header-nav">
                  <nav>
                     <div class="nav-logo">
                        <a href="index.php">Rhythm<span>Republic</span></a>
                     </div>

                     <div class="nav-list">
                        <a class="nav-item nav-item-active" href="index.php"
                           >Main Page</a
                        >
                        <a class="nav-item" href="partials/music.php">Music</a>
                        <a class="nav-item" href="partials/poster.php">Poster</a>
                        <a class="nav-item" href="partials/book.php">Magazine/Book</a>
                     </div>
                  </nav>
               </div>

               <div class="second-header-icons">
                  <a id="search-icon" class="fas fa-search searh-icon" href="partials/search.php"></a>
                  <a href="partials/login.php" class="fas fa-user"></a>
                  <a href="partials/cart.php.php" class="fas fa-shopping-cart"></a>
               </div>
            </div>
            <div id="search-input" class="search-bar hidden">
                <input
                   type="text"
                   name="search-bar-input"
                   class="search-bar-input"
                   placeholder="Search..."
                   id="submitInput"
                />
                <form action="search.php">
                  <button type="submit" class="search-submit" id="submitButton" value="Submit">
                     <i class="fas fa-search"></i>
                  </button>
               </form>
            </div>
         </div>
         
      </header>

      <main>

         <div class="main-new-products-div">
            <div class="main-new-products">
               <h2 class="main-new-products-text"><strong>New Products</strong></h2>
            </div>

            <div class="card-slider-part">
               <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    
                     <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test1.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test2.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test3.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test4.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test5.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test6.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test7.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test8.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>

                  </div>
                </div>
            </div>
         </div>

         <div class="main-best-seller-div">
            <div>
               <h2 class="main-best-seller-text"><strong>Best Seller</strong></h2>
            </div>

            <div class="card-slider-part">
               <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    
                     <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test8.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test9.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test10.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test11.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test13.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test14.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test2.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test5.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test10.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>

                  </div>
                </div>
               </div>
            </div>
         </div>

         <div class="main-discounted-items">
            <div class="main-discounted-items-div">
               <h2 class="main-discounted-items-text"><strong>Discounted Albums</strong></h2>
            </div>

            <div class="card-slider-part">
               <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    
                     <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test3.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test2.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test10.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test5.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test1.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test10.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test2.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>
                    
                    <div class="swiper-slide">
                     <div class="elements-card-slider" style="text-align: center;">
                        <img src="assets/test images/test14.jpg" style="width: 50%;" alt="cover">
                        <p>Sagopa Kajmer - BPG</p>
                        <p>$ 12</p>
                        <p style="color: rgb(38, 38, 119);">Hammer Muzik</p>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                    </div>

                  </div>
                </div>
               </div>
            </div>
         </div>

      </main>

      <footer class="text-center text-lg-start bg-body-tertiary text-muted">
         <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
         >
            <div class="me-5 d-none d-lg-block">
               <span>Get connected with us on social networks:</span>
            </div>

            <div class="icons">
               <a href="#" class="me-4 text-reset">
                  <i class="fab fa-facebook-f"></i>
               </a>

               <a href="#" class="me-4 text-reset">
                  <i class="fab fa-twitter"></i>
               </a>

               <a href="#" class="me-4 text-reset">
                  <i class="fab fa-google"></i>
               </a>

               <a href="#" class="me-4 text-reset">
                  <i class="fab fa-instagram"></i>
               </a>

               <a href="#" class="me-4 text-reset">
                  <i class="fab fa-linkedin"></i>
               </a>

               <a
                  href="https://github.com/nihad1213"
                  target="_blank"
                  class="me-4 text-reset"
               >
                  <i class="fab fa-github"></i>
               </a>
            </div>
         </section>

         <section class="#">
            <div class="container text-center text-md-start mt-5">
               <div class="row mt-3">
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                     <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fa-solid fa-record-vinyl"></i> Rhythm Republic
                     </h6>
                     <p>
                        Rhythm Republic music stop is an online music store that
                        was launched on March, 2nd 2024.
                     </p>
                  </div>

                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 products">
                     <h6 class="text-uppercase fw-bold mb-4">Products</h6>

                     <p>
                        <a href="#!" class="text-reset">CD</a>
                     </p>

                     <p>
                        <a href="#!" class="text-reset">Vinyl</a>
                     </p>

                     <p>
                        <a href="#!" class="text-reset">Tape</a>
                     </p>

                     <p>
                        <a href="#!" class="text-reset">Poster</a>
                     </p>
                  </div>

                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 links">
                     <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>

                     <p>
                        <a href="#!" class="text-reset">Pricing</a>
                     </p>

                     <p>
                        <a href="#!" class="text-reset">Settings</a>
                     </p>

                     <p>
                        <a href="#!" class="text-reset">Orders</a>
                     </p>

                     <p>
                        <a href="#!" class="text-reset">Help</a>
                     </p>
                  </div>

                  <div
                     class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 con"
                  >
                     <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                     <p>
                        <i class="fas fa-home me-3"></i> San Francisco Boring Lane US
                     </p>
                     <p>
                        <i class="fas fa-envelope me-3"></i
                        ><a href="mailto:rhythm@republic.com"
                           >rhythm@republic.com</a
                        >
                     </p>
                     <p>
                        <i class="fas fa-phone me-3"></i
                        ><a href="tel:+ 01 234 567 88"> + 01 234 567 88</a>
                     </p>
                     <p>
                        <i class="fas fa-print me-3"></i
                        ><a href="tel: + 01 234 567 89"> + 01 234 567 89</a>
                     </p>
                  </div>
               </div>
            </div>
         </section>

         <div
            class="text-center p-4"
            style="background-color: rgba(0, 0, 0, 0.05)"
         >
            © 2024 Copyright:
            <a class="text-reset fw-bold" href="index.html">Rhythm Republic</a>
         </div>
      </footer>

      <script src="script/index.js"></script>
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script>
         var swiper = new Swiper(".mySwiper", {
           slidesPerView: 3,
           spaceBetween: 30,
           pagination: {
             el: ".swiper-pagination",
             clickable: true,
           },
         });
      </script>
   </body>
</html>
