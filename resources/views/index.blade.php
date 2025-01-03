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

  @include('section.header') <!-- Header Include -->



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

            <a href="/oraclesunrise" class="btn" style="color:black; ">Know more</a>

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
                  <a href="#">Commercial Project</a>
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





<!-- project -->

<section class="property" id="property">
  <div class="container">
    <p class="section-subtitle">Properties</p>
    <h2 class="h2 section-title">Our Project</h2>

    <div id="scroll-container">
      <div class="scroll-slider">
        <!-- Property Card 1 -->
        <div class="scroll-slide">
          <figure class="card-banner">
            <a href="/oraclesunrise">
              <img src="{{ asset('photo/images/sunrise.jpg') }}" alt="Modern Apartment">
            </a>
          </figure>
          <div class="card-content">
            <h3 class="card-title"><a href="/oraclesunrise">VBC Oracle Sunrise</a></h3>
            <p class="card-text">Discover 2 & 3 BHK homes near Sarjapur, blending comfort, 
              elegance, and prime location convenience</p>
           
          </div>
        </div>

        <!-- Property Card 2 -->
        <div class="scroll-slide">
          <figure class="card-banner">
            <a href="#project2">
              <img src="{{ asset('photo/images/icon.jpg') }}" alt="Elegant Villa">
            </a>
          </figure>
          <div class="card-content">
            <h3 class="card-title"><a href="#project2">Oracle Icon </a></h3>
            <p class="card-text">Premium commercial spaces crafted for modern businesses with unmatched elegance.</p>
          </div>
        </div>

        <!-- Property Card 3 -->


        <!-- <div class="scroll-slide">
          <figure class="card-banner">
            <a href="#project3">
              <img src="{{ asset('photo/images/property-3.jpg') }}" alt="Cozy House">
            </a>
          </figure>
          <div class="card-content">
            <h3 class="card-title"><a href="#project3">Cozy House</a></h3>
            <p class="card-text">A place to call home.</p>
          </div>
        </div> -->

        <div class="scroll-slide">
          <figure class="card-banner">
            <a href="#project3">
              <img src="{{ asset('photo/images/rain.jpg') }}" alt="Cozy House">
            </a>
          </figure>
          <div class="card-content">
            <h3 class="card-title"><a href="#project3">Rainbow 
            Children Hospital</a></h3>
            <p class="card-text">World-class pediatric care with expert doctors, advanced tech, and compassionate support for children.</p>
          </div>
        </div>

        <!-- Add more property cards as needed -->
      </div>
    </div>
  </div>
</section>



<!-- project  -->










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

                <h3 class="card-title">Gym & Track</h3>

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

                <h3 class="card-title">King Size Room</h3>

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




      <!-- gallary -->
      <section class="project-gallery" id="project-gallery">
  <div class="container">
    <p class="section-subtitle">Gallery</p>
    <h2 class="h2 section-title">Project Gallery</h2>

    <div id="gallery-container" class="gallery-scroll">
      <div class="gallery-item" onclick="openFullscreen('{{ asset('photo/photos/a.jpg') }}')">
        <img src="{{ asset('photo/photos/a.jpg') }}" alt="Project 1">
        <div class="image-title">Swimming pool</div>
      </div>

      <div class="gallery-item" onclick="openFullscreen('{{ asset('photo/photos/b.jpg') }}')">
        <img src="{{ asset('photo/photos/b.jpg') }}" alt="Project 2">
        <div class="image-title">Main Gate</div>
      </div>

      <div class="gallery-item" onclick="openFullscreen('{{ asset('photo/photos/c.jpg') }}')">
        <img src="{{ asset('photo/photos/c.jpg') }}" alt="Project 3">
        <div class="image-title">Bed Room</div>
      </div>

      <div class="gallery-item" onclick="openFullscreen('{{ asset('photo/photos/d.jpg') }}')">
        <img src="{{ asset('photo/photos/d.jpg') }}" alt="Project 4">
        <div class="image-title">Kings Size bed Room</div>
      </div>

      <div class="gallery-item" onclick="openFullscreen('{{ asset('photo/photos/e.jpg') }}')">
        <img src="{{ asset('photo/photos/e.jpg') }}" alt="Project 5">
        <div class="image-title">Kitchen Room</div>
      </div>

      <div class="gallery-item" onclick="openFullscreen('{{ asset('photo/photos/f.jpg') }}')">
        <img src="{{ asset('photo/photos/f.jpg') }}" alt="Project 5">
        <div class="image-title"> Main Hall</div>
      </div>

      <!-- Add more items as needed -->
    </div>
  </div>

  <div id="fullscreen-container" class="fullscreen-container">
    <span class="close" onclick="closeFullscreen()">&times;</span>
    <img id="fullscreen-image" src="" alt="Fullscreen View">
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

  @include('section.footer') <!-- Footer Include -->




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




<script>
  const scrollContainer = document.getElementById('scroll-container');

  scrollContainer.addEventListener('wheel', (event) => {
    event.preventDefault();
    scrollContainer.scrollLeft += event.deltaY;
  });
</script>


<script>
  function openFullscreen(imageSrc) {
    const fullscreenContainer = document.getElementById('fullscreen-container');
    const fullscreenImage = document.getElementById('fullscreen-image');

    fullscreenImage.src = imageSrc;
    fullscreenContainer.style.display = 'flex';
  }

  function closeFullscreen() {
    const fullscreenContainer = document.getElementById('fullscreen-container');
    fullscreenContainer.style.display = 'none';
  }
</script>




</html>
