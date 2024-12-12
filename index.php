<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>This is Earl's Food and Whatnot</title>
</head>
<body>

        <!-- Header -->
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo"><a href="#">This is Earl's Food and Whatnot</a></span>
            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="#">This is Earl's Food and Whatnot</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#about-section">About</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="search">
                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                   </div>

                    <div class="search-field">
                        <input type="text" id="searching" placeholder="Search...">
                        <i class='bx bx-search'></i> 
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- Main, Home Page -->

    <section class="homepage" id="home">
        <div class="content">
          <div class="text">
            <h1>This is Earl's Food and Whatnot</h1>
            <p style=>This Is Earl's is here to work with people to achieve and appreciate<br> good, richer, more flavorful food</p>
          </div>
          <a href="#about-section">Order Now</a>
        </div>
      </section>



<!-- menu page -->


<section class="product-section">
  <h1 class="title">Featured <span>Menu Items</span></h1>
  <p class="under">Choose from our selection of delicious items and make your day tasty!</p>
  <div class="product-container">
    <div class="product-card">
      <img src="cssbg/3.png" alt="Product Image" class="product-image">
      <div class="product-details">
        <h2 class="product-title">Spicy Cheesy Big Breast Sandwich</h2>
        <p class="product-price">₱234.00</p>
        <p class="product-description">Big Breaded Chicken Breast in a customized bun with homemade SPICY melted cheese sauce and coleslaw</p>
        <button class="product-button">View Menu</button>
      </div>
    </div>
    <div class="product-card">
      <img src="cssbg/2.png" alt="Product Image" class="product-image">
      <div class="product-details">
        <h2 class="product-title">French Fries with Melted Cheese</h2>
        <p class="product-price">₱189.00</p>
        <p class="product-description">Crispy French Fries generously topped with rich, gooey melted cheese, creating the perfect savory indulgence.</p>
        <button class="product-button">View Menu</button>
      </div>
    </div>
    <div class="product-card">
      <img src="cssbg/1.png" alt="Product Image" class="product-image">
      <div class="product-details">
        <h2 class="product-title">Citrus Mango</h2>
        <p class="product-price">₱145.00</p>
        <p class="product-description">Refreshing Citrus Mango Drink, blending zesty citrus with sweet, tropical mango, served chilled for the ultimate fruity boost.</p>
        <button class="product-button">View Menu</button>
      </div>
    </div>
  </div>
</section>


    <!-- about sextion -->
 
      <section class="about-section" id="about">
        <div class="section-content">
          <div class="about-details">
            <h2 class="section-title">About Us</h2>
            <p class="text">This is Earl's Food & Whatnot, serving the best burgers, sandwiches, chicken wings, milkshakes, and fruitshakes since 2005. This business has a unique appeal because of its squared burger patties with melted cheese and customized chicken wings. The loyal customer base of young professionals, students, and families appreciate the great value and excellent food. Visit this place if you're in Camarines Norte.</p>
            <div class="social-link-list">
              <a href="https://www.facebook.com/thisisearls" class="social-link"><i class='bx bxl-facebook-square'></i></a>
              <a href="https://www.instagram.com/thisisearls_emmitts/" class="social-link"><i class='bx bxl-instagram' ></i></a>
              <a href="https://www.google.com/maps/place/ThisisEarl's+Food+%26+Whatnot/@14.1122358,122.9513864,17z/data=!4m16!1m9!3m8!1s0x3398af7c2ca90c05:0x8450d4f8ded80e49!2sThisisEarl's+Food+%26+Whatnot!8m2!3d14.1122306!4d122.9539613!9m1!1b1!16s%2Fg%2F11c1qw0d4h!3m5!1s0x3398af7c2ca90c05:0x8450d4f8ded80e49!8m2!3d14.1122306!4d122.9539613!16s%2Fg%2F11c1qw0d4h?entry=ttu&g_ep=EgoyMDI0MTIwNC4wIKXMDSoASAFQAw%3D%3D" class="social-link"><i class='bx bxs-map' ></i></a>
            </div>
          </div>
          <div class="about-image-wrapper">
            <img   src="cssbg/aboutburger.jpg" alt="About" class="about-image" />
          </div>
        </div>
      </section>


    <!-- gallery section -->
     
    
<section class="section-gallery">
  <div class="gallery-container">
    <h2 class="gallery-title">Our Gallery</h2>
  </div>
    <ul class="gallery-showcase clearfix">
        <li>
          <figure class="gallery-photo">
            <img src="images/earls/pic.jpg">
          </figure>
        </li>
        <li>
          <figure class="gallery-photo">
            <img src="images/burgers/burg1.jpg">
          </figure>
        </li>
        <li>
          <figure class="gallery-photo">
            <img src="images/earls/pic2.jpg">
          </figure>
        </li>
        <li>
          <figure class="gallery-photo">
            <img src="images/others/bsteak.jpg">
          </figure>
        </li>
      </ul>
      <ul class="gallery-showcase clearfix">
        <li>
          <figure class="gallery-photo">
            <img src="images/earls/inter.jpg">
          </figure>
        </li>
        <li>
          <figure class="gallery-photo">
            <img src="images/drinks/citruso.jpg">
          </figure>
        </li>
        <li>
          <figure class="gallery-photo">
            <img src="images/earls/pic4.jpg">
          </figure>
        </li>
        <li>
          <figure class="gallery-photo">
            <img src="images/fries/23786398.jpg">
          </figure>
        </li>
    </ul>
</section>

  

  <!-- footer sextion -->


<footer class="footer-container">
    <div class="footer-content">
        <div class="footer-main">
            <div class="footer-logo-section">
                <a href="#" class="footer-logo">
                    <img src="cssbg/earlogo.png" class="footer-logo-img" alt="earls logo" />
                    <span class="footer-logo-text">This is Earls Food and Whatnot</span>
                </a>
            </div>
            <div class="footer-links">
                <div>
                    <h2 class="footer-heading">Site links</h2>
                    <ul class="footer-list">
                        <li class="footer-list-item">
                            <a href="" class="footer-link">About</a>
                        </li>
                        <li class="footer-list-item">
                            <a href="" class="footer-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="footer-heading">Follow us</h2>
                    <ul class="footer-list">
                        <li class="footer-list-item">
                            <a href="https://www.facebook.com/thisisearls" class="footer-link">Facebook</a>
                        </li>
                        <li class="footer-list-item">
                            <a href="https://www.instagram.com/thisisearls_emmitts/" class="footer-link">Instagram</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="footer-heading">FAQS</h2>
                    <ul class="footer-list">
                        <li class="footer-list-item">
                            <a href="#" class="footer-link">Privacy Policy</a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#" class="footer-link">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="footer-divider" />
        <div class="footer-bottom">
            <span class="footer-copy-text">© 2024 <a class="footer-link">This is Earl's Food and Whatnot™</a>. All Rights Reserved.</span>
            <div class="footer-social-links">
                <a href="#" class="social-icon">
                    <i class="bx bxl-facebook"></i>
                    <span href="https://www.facebook.com/thisisearls" class="sr-only">Facebook page</span>
                </a>
                <a href="#" class="social-icon">
                    <i class="bx bx-map-alt"></i>
                    <span href="https://www.google.com/maps/place/ThisisEarl's+Food+%26+Whatnot/@14.1122358,122.9513864,17z/data=!3m1!4b1!4m6!3m5!1s0x3398af7c2ca90c05:0x8450d4f8ded80e49!8m2!3d14.1122306!4d122.9539613!16s%2Fg%2F11c1qw0d4h?entry=ttu&g_ep=EgoyMDI0MTIwOS4wIKXMDSoASAFQAw%3D%3D"" class="sr-only">Location</span>
                </a>
                <a href="#" class="social-icon">
                    <i class="bx bxl-instagram"></i>
                    <span href="https://www.instagram.com/thisisearls_emmitts/" class="sr-only" >instagram page</span>
                </a>
            </div>
        </div>
    </div>
</footer>



<script src="script.js"></script>
</body>
</html>