<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VBC Group</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('photo/photos/vbclogo.png') }}" type="image/png">

  <!-- Open Graph Meta Tags for Social Sharing -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://vbcgroup.in"> <!-- Replace with your website URL -->
  <meta property="og:title" content="VBC Group -Growing with care">
  <meta property="og:description" content="Discover innovative construction solutions with VBC Group. Your trusted partner in construction, research, and design.">
  <meta property="og:image" content="{{ asset('photo/photos/ads.png') }}"> <!-- Replace with your thumbnail image URL -->
  <meta property="og:image:alt" content="VBC Group Logo">

  <!-- Twitter Meta Tags for Sharing -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="https://yourwebsite.com"> <!-- Replace with your website URL -->
  <meta name="twitter:title" content="VBC Group - Construction and Innovation">
  <meta name="twitter:description" content="Discover innovative construction solutions with VBC Group. Your trusted partner in construction, research, and design.">
  <meta name="twitter:image" content="{{ asset('photo/photos/ads.png') }}"> <!-- Replace with your thumbnail image URL -->

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">




    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11510318988">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11510318988');
</script>


</head>


<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    

    <div class="header-bottom">
      <div class="container">

        <a href="/" class="logo">
          <img src="{{ asset('photo/photos/vbclogo.png') }}"  alt="VBC logo">
        </a>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="/" class="logo">
              <img src="{{ asset('photo/photos/vbclogo.png') }}" alt="VBC logo">
            </a>

            <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <div class="navbar-bottom">
            <ul class="navbar-list">

              <li>
                <a href="/" class="navbar-link" data-nav-link>WHO WE ARE</a>
              </li>

              <li>
                <a href="/" class="navbar-link" data-nav-link>WHAT WE DO</a>
              </li>

              <li>
                <a href="/" class="navbar-link" data-nav-link>CONTACT US</a>
              </li>

              <li>
                <a href="/" class="navbar-link" data-nav-link>BLOG</a>
              </li>         

              <li>
                <a href="/" class="navbar-link" data-nav-link>MEDIA CENTRE</a>
              </li>

            </ul>
          </div>

        </nav>

        <div class="header-bottom-actions">

  <!-- Call Button -->
  <button class="header-bottom-actions-btn" aria-label="Call" onclick="window.location.href='tel:7033879015';">
    <ion-icon name="call-outline"></ion-icon>
    <span>Call</span>
  </button>

  <!-- Enquiries Button -->
  <button class="header-bottom-actions-btn" aria-label="Enquiries" onclick="window.location.href='https://vbcgroup.in/marketing';">
    <ion-icon name="chatbubbles-outline"></ion-icon>
    <span>Enquiries</span>
  </button>

  <!-- Gallery Button -->
  <button class="header-bottom-actions-btn" aria-label="Gallery" onclick="window.location.href='https://vbcgroup.in/marketing';">
    <ion-icon name="image-outline"></ion-icon>
    <span>Gallery</span>
  </button>

  <!-- Menu Button -->
  <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
    <ion-icon name="menu-outline"></ion-icon>
    <span>Menu</span>
  </button>

</div>


      </div>
    </div>

  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">


      <video autoplay loop muted plays-inline class="herovideo" > 
        
        <source src="{{ asset('photo/video/hero2.mp4') }}" type="video/mp4"> </video>
  
       
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">
              <ion-icon name="home"></ion-icon>

              <span style="color:white;" > VBC: VIJAYA BHASKARA
CONSTRUCTIONS </span>
            </p>

            <h2 class="h1 hero-title" style="color:white;" >Where Trust Meets Timeless Quality</h2>

            <p class="hero-text" style="color:white;">
            Crafting Opulent Living Spaces with International Quality, Precision, and Careful Aesthetics.
            </p> 

            <a href="/marketing" class="btn">Make An Enquiry</a>
<div style="display: flex; justify-content: space-between;">

    <!-- Popup content -->
    <div id="popup" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
        <div style="display: flex; justify-content: flex-end;">
            <button onclick="closePopup()" style="background: none; border: none; cursor: pointer;">&#10006;</button>
        </div>
        <h2>Enquire Now</h2>
        <form>
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="email">Email Id</label><br>
            <input type="email" id="email" name="buildingBlock" required><br><br>
            
            <label for="mobile">Mobile number</label><br>
            <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}"><br><br>


   
            
            <button type="submit" style="padding: 8px 16px; background-color: #000; color: white; border: none; border-radius: 4px; cursor: pointer;">Save and Continue</button>
        </form>
    </div>




          </div>

         

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="about" id="about">
        <div class="container">

          <figure class="about-banner">
            <img src="{{ asset('photo/images/about-banner-1.png') }}" alt="House interior">

            <img src="{{ asset('photo/images/about-banner-2.jpg') }}" alt="House interior" class="abs-img">
          </figure>

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">Building Dreams, Creating Futures</h2>

            <p class="about-text">
            VBC Group is a trusted name in real estate, delivering premium residential and commercial projects with excellence. Known for innovation, quality, 
            and transparency, we create spaces that blend comfort, elegance, and functionality to match modern lifestyles.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="home-outline"></ion-icon>
                </div>

                <p class="about-item-text">Smart Home Design</p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="leaf-outline"></ion-icon>
                </div>

                <p class="about-item-text">Beautiful Scene Around</p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="wine-outline"></ion-icon>
                </div>

                <p class="about-item-text">Exceptional Lifestyle</p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="shield-checkmark-outline"></ion-icon>
                </div>

                <p class="about-item-text">Complete 24/7 Security</p>
              </li>

            </ul>

            <p class="callout">
              "Elevating Urban Living Responsibly: VBC Innovates with Sustainable Solutions, Technology, 
              and People-Driven Excellence, Setting New Standards in Real Estate."
            </p>

            <a href="/marketing" class="btn" style="color:black; ">Know more</a>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="service" id="service">
        <div class="container">

          <p class="section-subtitle">Our Services</p>

          <h2 class="h2 section-title">Our Main Focus</h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="{{ asset('photo/images/service-1.png') }}" alt="Service icon">
                </div>

                <h3 class="h3 card-title">
                  <a href="#">Commercial Construction</a>
                </h3>

                <p class="card-text">
                Expert services in designing and constructing state-of-the-art commercial buildings.
                </p>

                <a href="/marketing" class="card-link">
                  <span>Find A office</span>

                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="{{ asset('photo/images/service-2.png') }}" alt="Service icon">
                </div>

                <h3 class="h3 card-title">
                  <a href="/marketing">Residential Construction</a>
                </h3>

                <p class="card-text">
                Crafting modern, sustainable, and luxurious residential spaces for comfortable living.
                </p>

                <a href="/marketing" class="card-link">
                  <span>Find A Home</span>

                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="{{ asset('photo/images/service-3.png') }}" alt="Service icon">
                </div>

                <h3 class="h3 card-title">
                  <a href="/marketing">Interior Renovation </a>
                </h3>

                <p class="card-text">
                Transforming interiors with elegant designs and premium-quality materials for all spaces.
                </p>

                <a href="/marketing" class="card-link">
                  <span>Find A Home</span>

                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <section class="service" id="service" Style="back">
        <div class="container">

          <p class="section-subtitle">Our Gallary</p>

          <!-- <h2 class="h2 section-title">Slides</h2> -->

      <div id="slider-container">
  <div class="slider">
    <div class="slide"><img src="{{ asset('photo/photos/1.png') }}" alt="Slide 1"></div>
    <div class="slide"><img src="{{ asset('photo/photos/2.png') }}" alt="Slide 2"></div>
    <div class="slide"><img src="{{ asset('photo/photos/3.png') }}" alt="Slide 3"></div>
    <div class="slide"><img src="{{ asset('photo/photos/4.png') }}" alt="Slide 4"></div>
    <div class="slide"><img src="{{ asset('photo/photos/5.png') }}" alt="Slide 5"></div>
  </div>
  <button class="prev" onclick="prevSlide()">&#10094;</button>
  <button class="next" onclick="nextSlide()">&#10095;</button>
</div>

</section>







      <!-- 
        - #PROPERTY
      -->
<!-- 
      <section class="property" id="property">
        <div class="container">

          <p class="section-subtitle">Properties</p>

          <h2 class="h2 section-title">Featured Listings</h2>

          <ul class="property-list has-scrollbar">

            <li>
              <div class="property-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="{{ asset('photo/images/property-1.jpg') }}" alt="New Apartment Nice View" class="w-100">
                  </a>

                  <div class="card-badge green">For Rent</div>

                  <div class="banner-actions">

                    <button class="banner-actions-btn">
                      <ion-icon name="location"></ion-icon>

                      <address>Rampally, Hyderabad</address>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="camera"></ion-icon>

                      <span>4</span>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="film"></ion-icon>

                      <span>2</span>
                    </button>

                  </div>

                </figure>

                <div class="card-content">

                  <div class="card-price">
                    <strong>₹34,900</strong>/Month
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">New Apartment Nice View</a>
                  </h3>

                  <p class="card-text">
                  Escape to Serene Haven: VBC Group's 4-BHK Luxury Villa - A Symphony of Comfort and Elegance
                  </p>

                  <ul class="card-list">

                    <li class="card-item">
                      <strong>3</strong>

                      <ion-icon name="bed-outline"></ion-icon>

                      <span>Bedrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>2</strong>

                      <ion-icon name="man-outline"></ion-icon>

                      <span>Bathrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>3450</strong>

                      <ion-icon name="square-outline"></ion-icon>

                      <span>Square Ft</span>
                    </li>

                  </ul>

                </div>

                <div class="card-footer">

                  <div class="card-author">

                    <figure class="author-avatar">
                      <img src="{{ asset('photo/images/author.jpg') }} " alt="Sonu Sah" class="w-100">
                    </figure>

                    <div>
                      <p class="author-name">
                        <a href="#">Sonu Sah</a>
                      </p>

                      <p class="author-title">Estate Agents</p>
                    </div>

                  </div>

                  <div class="card-footer-actions">

                    <button class="card-footer-actions-btn">
                      <ion-icon name="resize-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="property-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="{{ asset('photo/images/property-2.jpg') }}" alt="Modern Apartments" class="w-100">
                  </a>

                  <div class="card-badge orange">For Sales</div>

                  <div class="banner-actions">

                    <button class="banner-actions-btn">
                      <ion-icon name="location"></ion-icon>

                      <address>Rampally, hyderabad</address>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="camera"></ion-icon>

                      <span>4</span>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="film"></ion-icon>

                      <span>2</span>
                    </button>

                  </div>

                </figure>

                <div class="card-content">

                  <div class="card-price">
                    <strong>₹34,000</strong>/Month
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">Modern Apartments</a>
                  </h3>

                  <p class="card-text">
                  Indulge in Opulence: Royal Retreat Villa by VBC Group - Where Panoramic Views Meet Luxurious Living.
                  </p>

                  <ul class="card-list">

                    <li class="card-item">
                      <strong>3</strong>

                      <ion-icon name="bed-outline"></ion-icon>

                      <span>Bedrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>2</strong>

                      <ion-icon name="man-outline"></ion-icon>

                      <span>Bathrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>3450</strong>

                      <ion-icon name="square-outline"></ion-icon>

                      <span>Square Ft</span>
                    </li>

                  </ul>

                </div>

                <div class="card-footer">

                  <div class="card-author">

                    <figure class="author-avatar">
                      <img src=".{{ asset('photo/images/author.jpg') }} " alt="Sonu Sah" class="w-100">
                    </figure>

                    <div>
                      <p class="author-name">
                        <a href="#">Sonu Sah</a>
                      </p>

                      <p class="author-title">Estate Agents</p>
                    </div>

                  </div>

                  <div class="card-footer-actions">

                    <button class="card-footer-actions-btn">
                      <ion-icon name="resize-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="property-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="{{ asset('photo/images/property-3.jpg') }}" alt="Comfortable Apartment" class="w-100">
                  </a>

                  <div class="card-badge green">For Rent</div>

                  <div class="banner-actions">

                    <button class="banner-actions-btn">
                      <ion-icon name="location"></ion-icon>

                      <address>Rampally, Hyderabad</address>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="camera"></ion-icon>

                      <span>4</span>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="film"></ion-icon>

                      <span>2</span>
                    </button>

                  </div>

                </figure>

                <div class="card-content">

                  <div class="card-price">
                    <strong>₹34,900</strong>/Month
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">Comfortable Apartment</a>
                  </h3>

                  <p class="card-text">
                  Nature's Embrace: VBC Group's Tranquil Oasis Villa - 3-BHK Bliss in a Serene, Idyllic Setting.
                  </p>

                  <ul class="card-list">

                    <li class="card-item">
                      <strong>3</strong>

                      <ion-icon name="bed-outline"></ion-icon>

                      <span>Bedrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>2</strong>

                      <ion-icon name="man-outline"></ion-icon>

                      <span>Bathrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>3450</strong>

                      <ion-icon name="square-outline"></ion-icon>

                      <span>Square Ft</span>
                    </li>

                  </ul>

                </div>

                <div class="card-footer">

                  <div class="card-author">

                    <figure class="author-avatar">
                      <img src="{{ asset('photo/images/author.jpg') }} " alt="Sonu Sah" class="w-100">
                    </figure>

                    <div>
                      <p class="author-name">
                        <a href="#">Sonu Sah</a>
                      </p>

                      <p class="author-title">Estate Agents</p>
                    </div>

                  </div>

                  <div class="card-footer-actions">

                    <button class="card-footer-actions-btn">
                      <ion-icon name="resize-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="property-card">

                <figure class="card-banner">

                  <a href="#">
                    <img src="{{ asset('photo/images/property-4.png') }}" alt="Luxury villa in Rego Park" class="w-100">
                  </a>

                  <div class="card-badge green">For Rent</div>

                  <div class="banner-actions">

                    <button class="banner-actions-btn">
                      <ion-icon name="location"></ion-icon>

                      <address>Rampally, Hyderabad</address>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="camera"></ion-icon>

                      <span>4</span>
                    </button>

                    <button class="banner-actions-btn">
                      <ion-icon name="film"></ion-icon>

                      <span>2</span>
                    </button>

                  </div>

                </figure>

                <div class="card-content">

                  <div class="card-price">
                    <strong>₹34,900</strong>/Month
                  </div>

                  <h3 class="h3 card-title">
                    <a href="#">Luxury villa in Rego Park</a>
                  </h3>

                  <p class="card-text">
                  Unleash Luxury: VBC Group's 6-BHK Elegant Bliss Villa - Modern Marvel for Sophisticated Living.

                  </p>

                  <ul class="card-list">

                    <li class="card-item">
                      <strong>3</strong>

                      <ion-icon name="bed-outline"></ion-icon>

                      <span>Bedrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>2</strong>

                      <ion-icon name="man-outline"></ion-icon>

                      <span>Bathrooms</span>
                    </li>

                    <li class="card-item">
                      <strong>3450</strong>

                      <ion-icon name="square-outline"></ion-icon>

                      <span>Square Ft</span>
                    </li>

                  </ul>

                </div>

                <div class="card-footer">

                  <div class="card-author">

                    <figure class="author-avatar">
                      <img src="{{ asset('photo/images/author.jpg') }} " alt="Sonu Sah" class="w-100">
                    </figure>

                    <div>
                      <p class="author-name">



                        <a href="#">Sonu Sah</a>
                      </p>

                      <p class="author-title">Estate Agents</p>
                    </div>

                  </div>

                  <div class="card-footer-actions">

                    <button class="card-footer-actions-btn">
                      <ion-icon name="resize-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>

                    <button class="card-footer-actions-btn">
                      <ion-icon name="add-circle-outline"></ion-icon>
                    </button>

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>
 -->




      <!-- 
        - #FEATURES
      -->

      <section class="features">
        <div class="container">

          <p class="section-subtitle">Our Aminities</p>

          <h2 class="h2 section-title">Building Aminities</h2>

          <ul class="features-list">

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="car-sport-outline"></ion-icon>
                </div>

                <h3 class="card-title">Parking Space</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="water-outline"></ion-icon>
                </div>

                <h3 class="card-title">Swimming Pool</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="shield-checkmark-outline"></ion-icon>
                </div>

                <h3 class="card-title">Private Security</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="fitness-outline"></ion-icon>
                </div>

                <h3 class="card-title">Medical Center</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="library-outline"></ion-icon>
                </div>

                <h3 class="card-title">Library Area</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="bed-outline"></ion-icon>
                </div>

                <h3 class="card-title">King Size Beds</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="home-outline"></ion-icon>
                </div>

                <h3 class="card-title">Smart Homes</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="football-outline"></ion-icon>
                </div>

                <h3 class="card-title">Kid’s Playland</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->
<!-- 
      <section class="blog" id="blog">
        <div class="container">

          <p class="section-subtitle">News & Blogs</p>

          <h2 class="h2 section-title">Leatest News Feeds</h2>

          <ul class="blog-list has-scrollbar">

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="{{ asset('photo/images/blog-1.png') }}" alt="The Most Inspiring Interior Design Of 2021" class="w-100">
                </figure>

                <div class="blog-content">

                  <div class="blog-content-top">

                    <ul class="card-meta-list">

                      <li>
                        <a href="#" class="card-meta-link">
                          <ion-icon name="person"></ion-icon>

                          <span>by: Kesav Reddy</span>
                        </a>
                      </li>

                      <li>
                        <a href="#" class="card-meta-link">
                          <ion-icon name="pricetags"></ion-icon>

                          <span>Interior</span>
                        </a>
                      </li>

                    </ul>

                    <h3 class="h3 blog-title">
                      <a href="#">The Most Inspiring Interior Design Of 2023</a>
                    </h3>

                  </div>

                  <div class="blog-content-bottom">
                    <div class="publish-date">
                      <ion-icon name="calendar"></ion-icon>

                      <time datetime="2023-02-04">Apr 2, 2023</time>
                    </div>

                    <a href="#" class="read-more-btn">Read More</a>
                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="{{ asset('photo/images/blog-2.jpg') }}" alt="Recent Commercial Real Estate Transactions" class="w-100">
                </figure>

                <div class="blog-content">

                  <div class="blog-content-top">

                    <ul class="card-meta-list">

                      <li>
                        <a href="#" class="card-meta-link">
                          <ion-icon name="person"></ion-icon>

                          <span>by: E Sonai</span>
                        </a>
                      </li>

                      <li>
                        <a href="#" class="card-meta-link">
                          <ion-icon name="pricetags"></ion-icon>

                          <span>Estate</span>
                        </a>
                      </li>

                    </ul>

                    <h3 class="h3 blog-title">
                      <a href="#">Recent Commercial Real Estate Transactions</a>
                    </h3>

                  </div>

                  <div class="blog-content-bottom">
                    <div class="publish-date">
                      <ion-icon name="calendar"></ion-icon>

                      <time datetime="2022-27-04">Apr 30, 2023</time>
                    </div>

                    <a href="#" class="read-more-btn">Read More</a>
                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <img src="{{ asset('photo/images/blog-3.jpg') }}" alt="Renovating a Living Room? Experts Share Their Secrets"
                    class="w-100">
                </figure>

                <div class="blog-content">

                  <div class="blog-content-top">

                    <ul class="card-meta-list">

                      <li>
                        <a href="#" class="card-meta-link">
                          <ion-icon name="person"></ion-icon>

                          <span>by: Sonu Sah</span>
                        </a>
                      </li>

                      <li>
                        <a href="#" class="card-meta-link">
                          <ion-icon name="pricetags"></ion-icon>

                          <span>Room</span>
                        </a>
                      </li>

                    </ul>

                    <h3 class="h3 blog-title">
                      <a href="#">Renovating a Living Room? Experts Share Their Secrets</a>
                    </h3>

                  </div>

                  <div class="blog-content-bottom">
                    <div class="publish-date">
                      <ion-icon name="calendar"></ion-icon>

                      <time datetime="2022-27-04">Apr 27, 2023</time>
                    </div>

                    <a href="#" class="read-more-btn">Read More</a>
                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>
 -->




      <!-- 
        - #CTA
      -->

      <section class="cta">
        <div class="container">

          <div class="cta-card">
            <div class="card-content">
              <h2 class="h2 card-title">Looking for a dream home?</h2>

              <p class="card-text">We can help you realize your dream of a new home</p>
            </div>

            <button class="btn cta-btn">
              <span>Explore Properties</span>

              <ion-icon name="arrow-forward-outline"></ion-icon>
            </button>
          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="{{ asset('photo/photos/vbclogo.png') }}" class="w-100" alt="VBC logo">
          </a>

          <p class="section-text">
          VBC: Elevating Living Standards with Precision and Care.
           Experience the epitome of opulence as we celebrate life through meticulously crafted,
            internationally acclaimed spaces. Your home, our commitment – VBC: Growing with Care.
        </p>

          <ul class="contact-list">

            <li>
              <a href="#" class="contact-link">
                <ion-icon name="location-outline"></ion-icon>

                <address>Beretana Agrahara, Hosur Main Road, Beretana Agrahara, Bangalore, Karnataka, India 560100</address>
              </a>
            </li>

            <li>
              <a href="tel:+91 94944 68858" class="contact-link">
                <ion-icon name="call-outline"></ion-icon>

                <span>+91 94944 68858</span>
              </a>
            </li>

            <li>
              <a href="mailto:potla.rama@gmail.com" class="contact-link">
                <ion-icon name="mail-outline"></ion-icon>

                <span>marketing.vbcgroup.in</span>
              </a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="/marketing" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="/marketing" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="/marketing" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="/marketing" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Company</p>
            </li>

        <li>
              <a href="/marketing" class="footer-link">Who we are</a>
            </li>

            <li>
              <a href="/marketing" class="footer-link">What we do</a>
            </li>

            <li>
              <a href="/marketing" class="footer-link">Contact Us</a>
            </li>

            <li>
              <a href="/marketing" class="footer-link">Blog</a>
            </li>

            <li>
              <a href="/marketing" class="footer-link">Career</a>
            </li>

           

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Services</p>
            </li>

            <li>
              <a href="/marketing" class="footer-link">Projects</a>
            </li>

            <li>
              <a href="/marketing" class="footer-link">Wish List</a>
            </li>

            <li>
              <a href="/marketing" class="footer-link">Login</a>
            </li>

            <li>
              <a href="/marketing" class="footer-link">My account</a>
            </li>

            <li>
              <a href="/marketing" class="footer-link">Terms & Conditions</a>
            </li>

            <li>
              <a href="/marketing" class="footer-link">Promotional Offers</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Project location</p>
            </li>

            <li>
              <a href="/marketing" class="footer-link">Hyderabad</a>
            </li>

            <li>
              <a href="/marketing" class="footer-link">Banglore</a>
            </li>

            <li>
              <a href="/marketing" class="footer-link">Mysore</a>
            </li>

            <li>
              <a href="/marketing" class="footer-link">Vizag</a>
            </li>

            <li>
              <a href="/marketing" class="footer-link">Kochi</a>
            </li>

            <li>
              <a href="/marketing" class="footer-link">Pune</a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 <a href="/">VBC Group</a>. All Rights Reserved
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->


  <!-- 
    - ionicon link
  -->

  <script src="{{ asset('js/index.js') }}"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  
  <script>
        // Function to open the popup
        function openPopup() {
            document.getElementById('popup').style.display = 'block';
        }

        // Function to close the popup
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }
    </script>
<script>
  let currentSlide = 0;

  function showSlide(index) {
    const slider = document.querySelector('.slider');
    currentSlide = index;
    slider.style.transform = `translateX(${-index * 100}%)`;
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % 5;
    showSlide(currentSlide);
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + 5) % 5;
    showSlide(currentSlide);
  }

  setInterval(nextSlide, 3000); // Auto slide every 3 seconds
</script>



</body>

<script>
   
  fetch('https://api.ipify.org?format=json')
  .then(response => response.json())
  .then(data => {
      console.log('Client IP:', );
      fetch('/track/'+data.ip)
      .then(data => {
          console.log('success' );
         
      })
      .catch(error => console.error('Error fetching IP:', error));
  })
  .catch(error => console.error('Error fetching IP:', error));
</script>
</html>
