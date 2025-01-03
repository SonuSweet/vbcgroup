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



<style>



 
*, *::before, *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  li { list-style: none; }
  
  a { text-decoration: none; }
  
  a,
  img,
  span,
  button,
  ion-icon { display: block; }
  
  button {
    border: none;
    background: none;
    font: inherit;
    text-align: left;
    cursor: pointer;
  }
  
  address { font-style: normal; }
  
  ion-icon { pointer-events: none; }
  
  html {
    font-family: var(--ff-nunito-sans);
    scroll-behavior: smooth;
  }
  
  body {
    background: var(--white);
    overflow-x: hidden;
  }
  
  ::-webkit-scrollbar {
    width: 10px;
    height: 8px;
  }
  
  ::-webkit-scrollbar-track { background: var(--white); }
  
  ::-webkit-scrollbar-thumb {
    background: var(--cadet);
    border-left: 2px solid var(--white);
  }
  
  




.herovideo {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: -1;
}

.hero {
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}

.container {
  position: relative;
  z-index: 1;
}

.btn {
  border: 2px solid white;
  background: transparent; 
  font-size: 1em;
  font-weight: normal;
  padding: 10px 40px;
  background-color:rgba(112, 112, 112, 0.42);
  color: white;
  text-transform: uppercase;
 
  border-radius: 3px;
  cursor: pointer;
  text-decoration: none;
}
.btn:hover {
  background-color:rgb(203, 81, 0);
}



/* Mobile View Adjustments */
@media (max-width: 768px) {
  .herovideo {
    height: 100vh;
  }

  .container {
    position: relative;
  }

  .container div {
    font-size: 14px;
    line-height: 1.4;
  }

  .container div p {
    margin: 0;
  }

  /* Adjust Bottom Left Content */
  .container div[style*="bottom: 20px; left: 20px;"] {
    bottom: 10px;
    left: 10px;
  }


  .features .container {
    flex-direction: column;
    gap: 15px;
  }

  .feature-item {
    flex: 1 1 100%;
  }
}

  /* Adjust Enquire Now Button */
  .container div[style*="bottom: 20px; right: 20px;"] a {
    padding: 8px 16px;
    font-size: 14px;
  }






/* feature */



.features {
  padding: 50px 20px;
  background-color: #f9f9f9;
}

.features .container {
  max-width: 1200px;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.feature-item {
  flex: 1 1 calc(33.33% - 20px);
  padding: 20px;
  text-align: center;
  background: white;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s;
}

.feature-item:hover {
  transform: translateY(-10px);
  box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
}

.feature-item .icon {
  width: 80px;
  height: 80px;
  background:rgba(112, 112, 112, 0.77);
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 15px;
  margin: auto;
}

.feature-item h3 {
  color: #0056b3;
  margin: 10px 0;
  font-weight: bold;
}








/* plan */

.section-container {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding: 40px;
            background-color: #f9f9f9;
            flex-wrap: wrap;
        }

        .image {
            flex: 1;
            padding: 20px;
        }

        .image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .image img:hover {
            transform: scale(1.05);
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .content h2 {
            color: #333;
            margin-bottom: 20px;
            transition: color 0.3s ease;
        }

        .content h2:hover {
            color: #007BFF;
        }

        .boxes {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 20px;
        }

        .box {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .box:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(91, 90, 90, 0.2);
        }

        .box-icon {
            font-size: 40px;
            color: #007BFF;
            margin-bottom: 10px;
        }

        .box-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .box ul {
            list-style: none;
            padding: 0;
            font-size: 14px;
            color: #555;
        }

        .box ul li {
            margin-bottom: 8px;
        }

        @media (max-width: 768px) {
            .section-container {
                flex-direction: column;
            }

            .content, .image {
                padding: 10px;
            }

            .boxes {
                grid-template-columns: 1fr;
            }
        }





</style>





</head>

<body>


<main>


<!-- hero -->
 
@include('section.header') <!-- Header Include -->



<section class="hero" id="project" style="margin-top: -130px;">

  <video autoplay loop muted plays-inline class="herovideo" style="object-fit: cover; width: 100%; height: calc(100vh + 70px); position: absolute; top: 0; left: 0; z-index: -1;">
    <source src="{{ asset('photo/video/herosunrise.mp4') }}" type="video/mp4">
  </video>

  <div class="container" style="position: relative; height: 100%;">
    
    <!-- Bottom Left Content -->
    <div style="position: absolute; bottom: 20px; left: 20px; color: white; font-size: 16px; line-height: 1.5;">
      <p style="margin: 0; font-size:30px;">VBC ORACLE SUNRISE</p>
      <p style="margin: 0;">Rayasandra, Hosa Road</p>
      <p style="margin: 0;">1232 - 1660 sq. ft. | 2 & 3 BHK</p>
    </div>

    <!-- Enquire Now Button -->
    <div style="position: absolute; bottom: 20px; right: 20px;">
    <p style="margin: 0; color: white;">Starting From INR 80 lac*</p>
      <a href="/marketing" class="btn">Enquire Now</a>
    </div>

  </div>

</section>





      <!-- 
        - #Resource
      -->

      <section class="service" id="service">
        <div class="container">

          <!-- <p class="section-subtitle">Our Services</p> -->

          <h2 class="h2 section-title">Project Resources</h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="{{ asset('photo/images/brochure.png') }}" alt="Service icon" style="width: 200px; height: auto;">
                </div>

                <h3 class="h3 card-title"> 
                <a href="{{ asset('photo/pdf/vbc_brochure.pdf') }}" target="_blank" rel="noopener noreferrer">BROCHURE</a> 
                   </h3>
                <p class="card-text">
               
                </p>

                <a href="{{ asset('photo/pdf/vbc_brochure.pdf') }}" class="card-link">
                  <span>Download Now</span>

                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="{{ asset('photo/images/master.png') }}" alt="Service icon" style="width: 200px; height: auto;">
                </div>

                <h3 class="h3 card-title"> 
                <a href="{{ asset('photo/pdf/masterplan.pdf') }}" target="_blank" rel="noopener noreferrer">MASTER PLAN</a> 
                   </h3>
                <p class="card-text">

              
                
                </p>

                <a href="{{ asset('photo/pdf/masterplan.pdf') }}" class="card-link">
                  <span>Download Now</span>

                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="{{ asset('photo/images/floor.png') }}" alt="Service icon" style="width: 200px; height: auto;">
                </div>

                <h3 class="h3 card-title"> 
                <a href="{{ asset('photo/pdf/floorplan.pdf') }}" target="_blank" rel="noopener noreferrer">FLOOR PLAN</a> 
                   </h3>
                <p class="card-text">
              
                </p>

                <a href="{{ asset('photo/pdf/floorplan.pdf') }}" class="card-link">
                  <span>Download Now</span>

                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>



      <div class="section-container">
    <div class="image">
        <a href="https://maps.app.goo.gl/s425HL3whbCwx44h7"><img src="{{ asset('photo/photos/map.jpg') }}" alt="Sunrise Map"></a>
    </div>
    <div class="content">
        <h2>Unbeatable Location Conveniences</h2>
        <div class="boxes">
            <div class="box">
                <div class="box-icon">🎓</div>
                <div class="box-title">Educational Institutes</div>
                <ul>
                    <li>Orchids the International School</li>
                    <li>Cambridge School</li>
                    <li>Notre Dame Academy</li>
                    <li>VIBGYOR High School</li>
                    <li>PES University</li>
                    <li>Amrita University</li>
                </ul>
            </div>
            <div class="box">
                <div class="box-icon">🏥</div>
                <div class="box-title">Hospitals</div>
                <ul>
                    <li>Apollo Hospital</li>
                    <li>Manipal Hospital</li>
                    <li>Narayana Hrudayalaya</li>
                    <li>Spring Leaf Hospital</li>
                </ul>
            </div>
            <div class="box">
                <div class="box-icon">💼</div>
                <div class="box-title">Business Hubs</div>
                <ul>
                    <li>Infosys</li>
                    <li>Biocon</li>
                    <li>Wipro</li>
                    <li>Behive</li>
                    <li>Hustle Hub</li>
                    <li>Electronic City</li>
                </ul>
            </div>
            <div class="box">
                <div class="box-icon">🎮</div>
                <div class="box-title">Fun and Entertainment</div>
                <ul>
                    <li>Play Arena</li>
                    <li>Play Factory</li>
                    <li>HSR Layout</li>
                    <li>Sarjapur</li>
                </ul>
            </div>
        </div>
    </div>
</div>










<!-- feature -->

<section class="features">
  <div class="container">
    <div class="feature-item">
      <div class="icon"><ion-icon name="school-outline"></ion-icon></div>
      <h3>Nearby</h3>
      <p>Educational Institutes, hospitals, Business Hubs</p>
    </div>
    <div class="feature-item">
      <div class="icon"><ion-icon name="business-outline"></ion-icon></div>
      <h3>Structure</h3>
      <p>Stilt Floor +4 story</p>
    </div>
    <div class="feature-item">
      <div class="icon"><ion-icon name="fitness-outline"></ion-icon></div>
      <h3>Club House</h3>
      <p>Swimming pool, Gym, Indoor games, Multipurpose Hall, Jogging track</p>
    </div>
    <div class="feature-item">
      <div class="icon"><ion-icon name="grid-outline"></ion-icon></div>
      <h3>Ceramic Tiling</h3>
      <p>Ceramic flooring and wall tiling up to the ceiling</p>
    </div>
    <div class="feature-item">
      <div class="icon"><ion-icon name="leaf-outline"></ion-icon></div>
      <h3>Landscape Design</h3>
      <p>Designer Landscape environment</p>
    </div>
    <div class="feature-item">
      <div class="icon"><ion-icon name="car-outline"></ion-icon></div>
      <h3>Parking</h3>
      <p>Covered parking in stilt levels</p>
    </div>
  </div>
</section>





      <!-- gallary -->
     
      <!-- gallary -->
      <section class="project-gallery" id="project-gallery">
  <div class="container">
    <!-- <p class="section-subtitle">Gallery</p> -->
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
        <div class="image-title">Hall</div>
      </div>

      <div class="gallery-item" onclick="openFullscreen('{{ asset('photo/photos/g.jpg') }}')">
        <img src="{{ asset('photo/photos/g.jpg') }}" alt="Project 5">
        <div class="image-title">Kid room</div>
      </div>
      <div class="gallery-item" onclick="openFullscreen('{{ asset('photo/photos/h.jpg') }}')">
        <img src="{{ asset('photo/photos/h.jpg') }}" alt="Project 5">
        <div class="image-title">volloy ball</div>
      </div>
      <div class="gallery-item" onclick="openFullscreen('{{ asset('photo/photos/i.jpg') }}')">
        <img src="{{ asset('photo/photos/i.jpg') }}" alt="Project 5">
        <div class="image-title">Swimming</div>
      </div>
      <div class="gallery-item" onclick="openFullscreen('{{ asset('photo/photos/j.jpg') }}')">
        <img src="{{ asset('photo/photos/j.jpg') }}" alt="Project 5">
        <div class="image-title">kid Room</div>
      </div>
      <div class="gallery-item" onclick="openFullscreen('{{ asset('photo/photos/12.jpg') }}')">
        <img src="{{ asset('photo/photos/12.jpg') }}" alt="Project 5">
        <div class="image-title">Jogging</div>
      </div>
      <!-- Add more items as needed -->
    </div>
  </div>

  <div id="fullscreen-container" class="fullscreen-container">
    <span class="close" onclick="closeFullscreen()">&times;</span>
    <img id="fullscreen-image" src="" alt="Fullscreen View">
  </div>
</section>









</main>




@include('section.footer') <!-- Header Include -->

</body>





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
