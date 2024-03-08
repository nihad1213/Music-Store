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
      <link rel="stylesheet" href="../style/style.css" />
      <!--CSS link ends-->

      <!--Favicon link starts-->
      <link rel="icon" href="../assets/logos/favicon.png" type="image/x-icon" />
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
                     <a href="../index.php">Main Page</a>
                  </div>

                  <div class="col">
                     <a href="shipping-delivery.php">Shipping and Delivery</a>
                  </div>

                  <div class="col">
                     <a href="privacy-security.php">Privacy and Security</a>
                  </div>

                  <div class="col">
                     <a href="order-conditions.php">Order Conditions</a>
                  </div>

                  <div class="col">
                     <a href="communication.php">Communication</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="second-header">
            <div class="second-header-navbar">
               <div class="second-header-nav">
                  <nav>
                     <div class="nav-logo">
                        <a href="../index.php">Rhythm<span>Republic</span></a>
                     </div>

                     <div class="nav-list">
                        <a class="nav-item" href="../index.php">
                           Main Page
                        </a>
                        <a class="nav-item" href="music.php">Music</a>
                        <a class="nav-item" href="poster.php">Poster</a>
                        <a class="nav-item" href="book.php">Magazine/Book</a>
                     </div>
                  </nav>
               </div>

               <div class="second-header-icons">
                  <a id="search-icon" class="fas fa-search searh-icon"></a>
                  <a href="userprofile.php" class="fas fa-user nav-item-active"></a>
                  <a href="cart.php" class="fas fa-shopping-cart"></a>
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
                <form action="index.html">
                  <button type="submit" class="search-submit" id="submitButton" value="Submit">
                     <i class="fas fa-search"></i>
                  </button>
               </form>
            </div>
         </div>
         
      </header>