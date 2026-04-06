<?php
$pageTitle = 'Renova | Home';
$metaDescription = 'Explore tech and bold creative solutions that empower your business. Renova blends technology with creativity – systems, web development, and design for ambitious businesses.';
$metaKeywords = 'Renova, web development, systems development, technology partner, creative design, business solutions, Malawi';
include '../includes/head.php';
include '../includes/navbar.php';
?>
<main>
  <section id="hero" class="mx-auto px-5">
    <div
      id="hero-container"
      class="relative flex items-center bg-renova-gradient from-renovaBlue to-renovaBrightBlue mx-auto w-full rounded-2xl overflow-hidden"
      style="min-height: 582px">
      <!-- Mobile background image overlay -->
      <div class="md:hidden absolute inset-0 bg-cover bg-center bg-no-repeat rounded-2xl hero-mobile-bg"></div>
      <!-- Gradient overlay for mobile -->
      <div class="md:hidden absolute inset-0 bg-renova-gradient from-renovaBlue to-renovaBrightBlue opacity-70 rounded-2xl z-0"></div>
      <!-- Desktop background image overlay -->
      <div class="hidden md:block absolute inset-0 bg-cover bg-center bg-no-repeat rounded-2xl hero-desktop-bg"></div>
      <!-- Gradient overlay for desktop -->
      <div class="hidden md:block absolute inset-0 bg-renova-gradient from-renovaBlue to-renovaBrightBlue opacity-70 rounded-2xl z-0"></div>
      <!-- R logo: fixed in hero, not part of vertically centered content -->
      <img loading="lazy"
        class="hidden bottom-0 right-0 z-0 min-w-[550px] md:block absolute animate-hero-back-logo"
        src="../assets/images/Renova R inverted 1.svg"
        alt="Renova R" />
      <!-- Centered max-width band so content doesn't sit at far left on large screens -->
      <div class="relative z-10 flex w-full max-w-7xl mx-auto flex-col md:flex-row">
        <div
          class="relative flex justify-center text-center md:justify-start md:text-left flex-col space-y-7 p-12 px-5 md:px-12 md:flex-1 animate-hero-text">
          <h2
            class="text-white text-2xl font-semibold text-center md:text-left">
            Welcome to Renova
          </h2>
          <h1 class="text-white text-4xl font-bold md:text-left">
            Explore tech & bold creative solutions that empower your business
          </h1>
          <p class="text-white text-center md:text-left text-xl">
          Engineering the future of business. From powerful systems to intuitive design, Renova blends technology with creativity.
          </p>
          <div class="flex flex-col md:flex-row md:space-x-6 md:justify-start">
            <button
              class="p-3 px-8 mb-6 text-renovaBlue bg-renovaGreen rounded-full text-xl md:mb-0 hover:bg-renovaBrightGreen transition-colors duration-200 transform-gpu active:scale-95 transition-transform duration-150 focus:outline-none focus:ring-2 focus:ring-renovaGreen focus:ring-offset-2">
              <a href="/contact">Start a Project</a>
            </button>
            <button
              class="p-3 px-8 text-white border-2 border-renovaGreen rounded-full text-xl hover:bg-renovaGreen hover:text-renovaBlue transition-colors duration-200 transform-gpu active:scale-95 transition-transform duration-150 focus:outline-none focus:ring-2 focus:ring-renovaGreen focus:ring-offset-2">
              <a href="/portfolio">Explore Our Work</a>
            </button>
          </div>
        </div>
        <div class="relative ml-auto md:w-1/2 flex justify-end items-end">
        <!-- front image (model) -->
        <img loading="lazy"
          class="hidden z-10 -right-6 -bottom-12 w-[400px] md:block relative animate-hero-model"
          src="../assets/images/freepik__background__89227 1.svg"
          alt="Model" />
        </div>
      </div>
    </div>
  </section>
  <!--About section-->
  <section id="Renova About">
    <div class="max-w-7xl mx-auto">
      <div class="flex flex-col items-center space-y-6 px-5 py-20 animate-on-scroll fade-in-up">
        <h3 class="text-renovaGreen text-center text-xl font-semibold">
          We Are
        </h3>
        <h2 class="text-3xl font-semibold text-center text-renovaBlue max-w-2xl">
        We are a technology and design partner for ambitious businesses
        </h2>
      </div>
      <div
        class="flex flex-col md:flex-row items-center md:items-start justify-center md:justify-start w-full px-5 md:px-32 md:space-x-10 space-y-6">
        <div class="w-full md:w-2/5 flex justify-center md:justify-end animate-on-scroll fade-in-left">
          <div
            class="bg-renovaWhite w-[400px] h-[280px] rounded-[40px] overflow-hidden">
          <img loading="lazy" src="<?php echo $assetPath; ?>/images/we-are.jpg" alt="About Us image" class="w-full h-full object-cover">
          </div>
        </div>

        <div
          class="flex flex-col space-y-6 items-center md:items-start w-full md:w-3/5 text-center md:text-left animate-on-scroll fade-in-right">
          <p class="text-xl text-justify-last-left px-5 md:px-0">
         At Renova, we believe systems aren’t just about efficiency, they’re about enabling connections, driving growth and preparing organizations for tomorrow. Our design expertise ensures these systems don’t just work, they inspire confidence and adoption.
          </p>
          <button
            class="p-3 px-8 w-56 text-white bg-renovaBlue rounded-full text-xl hover:bg-renovaGreen hover:text-renovaBlue font-semibold transition-colors duration-200 transform-gpu active:scale-95 transition-transform duration-150 focus:outline-none focus:ring-2 focus:ring-renovaGreen focus:ring-offset-2 mx-auto md:mx-0">
            <a href="/contact">Start a Project</a>
          </button>
        </div>
      </div>
    </div>
  </section>
  <section id="services" class=" bg-renovaPaleWhite">
    <div class="max-w-7xl mx-auto mt-24 py-24 px-5">
      <div class="flex flex-col items-center space-y-6 animate-on-scroll fade-in-up">
        <h3 class="text-renovaGreen text-center text-xl font-semibold">
          What We Do
        </h3>
        <h2 class="text-3xl font-semibold text-center text-renovaBlue">
          Innovative Solutions Built Around Your Vision
        </h2>
      </div>
      <!-- wrap/replace the grid parent with a centered max-width container -->
      <div class="max-w-6xl mx-auto px-4">
        <div
          class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-20 justify-items-center animate-card-container">
          <!--Card 1-->
          <div
            class="group bg-renovaBlue hover:bg-renovaGreen w-full max-w-[340px] rounded-[28px] p-10 flex flex-col space-y-5 transition-colors duration-200 animate-card">
            <div
              class="h-18 w-18 rounded-full bg-renovaGreen flex items-center justify-center group-hover:bg-renovaBlue transition-colors duration-200">
              <img loading="lazy"
                class="w-3/5 h-3/5 object-contain"
                src="../assets/images/icons/browser.png"
                alt="Web and Systems Development Icon" />
            </div>
            <h4
              class="font-bold text-renovaGreen text-xl w-full md:w-3/5 group-hover:text-renovaBlue transition-colors duration-200">
              Web & Systems Development
            </h4>
            <p
              class="text-white text-xl group-hover:text-renovaBlue transition-colors duration-200">
              Smart systems. Seamless web.
            </p>
            <button
              class="p-3 px-8 w-52 text-renovaBlue rounded-full bg-renovaGreen text-xl font-semibold transition-colors duration-200 cursor-pointer transform-gpu group-hover:bg-renovaBlue group-hover:text-white duration-150 focus:outline-none focus:ring-2 focus:ring-renovaGreen focus:ring-offset-2 btn-primary">
              <a href="/services">Discover More</a>
            </button>
          </div>
          
          <!--card 2-->
          <div
            class="group bg-renovaGreen hover:bg-renovaBlue w-full max-w-[340px] rounded-[28px] p-10 flex flex-col space-y-5 transition-colors duration-200 animate-card">
            <div
              class="h-18 w-18 rounded-full bg-renovaBlue flex items-center justify-center group-hover:bg-renovaGreen transition-colors duration-200">
              <img loading="lazy"
                class="w-3/5 h-3/5 object-contain"
                src="../assets/images/icons/picture.png"
                alt="UI/UX Icon" />
            </div>
            <h4
              class="font-bold text-renovaBlue text-xl w-3/5  group-hover:text-renovaGreen transition-colors duration-200">
              UI/UX Design
            </h4>
            <p
              class="text-renovaBlue text-xl group-hover:text-white transition-colors duration-200">
              Designs that feel right, instantly.
            </p>
            <button
              class="p-3 px-8 w-52 text-white rounded-full text-xl font-semibold transition-colors duration-200 bg-renovaBlue cursor-pointer transform-gpu group-hover:bg-renovaGreen group-hover:text-renovaBlue duration-150 focus:outline-none focus:ring-2 focus:ring-renovaGreen focus:ring-offset-2 btn-primary2">
              <a href="/services">Discover More</a>
            </button>
          </div>
          <!--Card 3-->
          <div
            class="group bg-renovaBlue hover:bg-renovaGreen w-full max-w-[340px] rounded-[28px] p-10 flex flex-col transition-colors duration-200 space-y-5 animate-card">
            <div
              class="h-18 w-18 rounded-full bg-renovaGreen flex items-center justify-center group-hover:bg-renovaBlue transition-colors duration-200">
              <img loading="lazy"
                class="w-3/5 h-3/5 object-contain"
                src="../assets/images/icons/paint.png"
                alt="Graphic Design Icon" />
            </div>
            <h4
              class="font-bold text-renovaGreen text-xl w-full md:w-3/5  group-hover:text-renovaBlue transition-colors duration-200">
              Branding & Identity design
            </h4>
            <p
              class="text-white text-xl group-hover:text-renovaBlue transition-colors duration-200">
              Crafting visuals that speak your brand's truth.
            </p>
            <button
              class="p-3 px-8 w-52 text-renovaBlue rounded-full text-xl font-semibold transition-colors bg-renovaGreen cursor-pointer transform-gpu group-hover:bg-renovaBlue group-hover:text-white duration-150 focus:outline-none focus:ring-2 focus:ring-renovaGreen focus:ring-offset-2 btn-primary">
              <a href="/services">Discover More</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Call to action-->
  <?php include '../includes/call-to-action.php'; ?>
  <!--Featured projects-->
  <section id="Featured Projects">
    <style>
      .featured-project-img-wrap { 
        overflow: hidden; 
        display: block;
        text-decoration: none;
      }
      .featured-project-img-wrap .featured-project-img {
        transition: transform 0.3s ease-out;
      }
      .featured-project-img-wrap:hover .featured-project-img {
        transform: scale(1.1);
      }
    </style>
    <div class="py-24">
      <div
        class="flex flex-col items-center justify-center mx-auto space-y-6 max-w-[700px] px-5 animate-on-scroll fade-in-up">
        <h3 class="text-renovaGreen text-center text-xl font-semibold">
          Featured Projects
        </h3>
        <h2 class="text-3xl font-semibold text-center text-renovaBlue">
        From startups to established brands, we’ve built smart systems and bold identities that inspire trust and growth
        </h2>
      </div>
      <!-- wrap/replace the grid parent with a centered max-width container -->
      <div class="max-w-6xl mx-auto px-4">
        <div
          class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-20 justify-items-center animate-card-container">
          <!--Card 1-->
          <div
            class="bg-renovaBlue w-full max-w-[340px] min-h-[400px] rounded-[28px] p-3 flex flex-col space-y-5 animate-card">
            <a href="/portfolio" class="featured-project-img-wrap min-h-[290px] w-full rounded-[18px] bg-renovaWhite flex items-center justify-center hover:bg-renovaBlue transition-colors duration-200 cursor-pointer">
              <img loading="lazy" class="featured-project-img object-contain object-cover w-full h-full" src="../assets/images/portfolio/careline Free Website Presentation Mockup.jpg" alt="Careline Courier" />
            </a>
            <div class="flex flex-col space-y-2 pb-7">
              <h4
                class="font-semibold text-renovaGreen text-center text-xl">
                Careline Courier
              </h4>
              <p class="text-white text-center text-sm">Web Development</p>
            </div>
          </div>
          <!--Card 2-->
          <div
            class="bg-renovaBlue w-full max-w-[340px] min-h-[400px] rounded-[28px] p-3 flex flex-col space-y-5 animate-card">
            <a href="/portfolio" class="featured-project-img-wrap min-h-[290px] w-full rounded-[18px] bg-renovaWhite flex items-center justify-center hover:bg-renovaBlue transition-colors duration-200 cursor-pointer">
              <img loading="lazy" class="featured-project-img object-contain w-full h-full object-cover" src="../assets/images/portfolio/Free_Square_Sticker_Mockup_6 Omni furniture.jpg  " alt="Omni Furniture" />
            </a>
            <div class="flex flex-col space-y-2 pb-7">
              <h4
                class="font-semibold text-renovaGreen text-center text-xl">
                Omni Furniture
              </h4>
              <p class="text-white text-center text-sm">Company Branding</p>
            </div>
          </div>
          <!--Card 3-->
          <div
            class="bg-renovaBlue w-full max-w-[340px] min-h-[400px] rounded-[28px] p-3 flex flex-col space-y-5 animate-card">
            <a href="/portfolio" class="featured-project-img-wrap min-h-[290px] w-full rounded-[18px] bg-renovaWhite flex items-center justify-center hover:bg-renovaBlue transition-colors duration-200 cursor-pointer ">
              <img loading="lazy" class="featured-project-img object-contain w-full h-full object-cover" src="../assets/images/portfolio/Renova Website Presentation Mockup PSD.jpg" alt="Renova" />
            </a>
            <div class="flex flex-col space-y-2 pb-7">
              <h4
                class="font-semibold text-renovaGreen text-center text-xl">
                Renova
              </h4>
              <p class="text-white text-center text-sm">UI/UX Design</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--testimonials-->
  <section id="Testimonials" class="max-w-7xl mx-auto px-5 mb-24">
    <div
      class="relative flex flex-col bg-renova-gradient from-renovaBlue to-renovaBrightBlue mx-auto w-full rounded-[35px] overflow-hidden md:px-32 py-24">
      <div
        class="flex flex-col items-center justify-center mx-auto space-y-6 max-w-[700px] px-5 mb-20 animate-on-scroll fade-in-up">
        <h3 class="text-renovaGreen text-center text-xl font-semibold">
          Social Proof
        </h3>
        <h2 class="text-3xl font-semibold text-center text-white">
          Trusted by Clients Who Dream Big
        </h2>
      </div>
      <div class="relative flex items-center px-5">
        <!-- Left Arrow - Desktop -->
        <button
          id="testimonial-prev"
          class="hidden md:flex w-12 h-12 rounded-full bg-white text-renovaBlue border-2 border-renovaBlue hover:bg-renovaBlue hover:text-white transition-colors duration-300 items-center justify-center flex-shrink-0 focus:outline-none focus:ring-2 focus:ring-renovaGreen -ml-8 lg:-ml-16 xl:-ml-24"
          aria-label="Previous testimonial">
          <i class="fas fa-chevron-left"></i>
        </button>

        <!-- Cards Container -->
        <div id="testimonials-container" class="flex-1 overflow-hidden w-full md:w-auto">
          <div id="testimonials-wrapper" class="flex transition-transform duration-500 ease-in-out gap-0 md:gap-6" style="width: fit-content;">
            <!--card 1-->
            <div
                  class="bg-renovaPaleWhite border-2 border-solid border-white rounded-3xl w-full max-w-[450px] md:w-[450px] flex-shrink-0 space-y-5 px-6 md:px-10 py-8">
              <div class="flex items-center">
                <div class="h-14 w-14 rounded-full bg-renovaBlue mr-4 overflow-hidden">
                  <img loading="lazy" src="../assets/images/person.jpg" alt="Person Icon" class="w-full h-full object-contain">
                </div>
                <div class="justify-start">
                  <h3 class="text-renovaGreen text-xl font-semibold text-left">
                    Tamanda Msasata
                  </h3>
                  <p class="text-sm text-left text-white">
                    Founder & Therapist, Aegis Room
                  </p>
                </div>
              </div>
              <div class="">
                <p class="text-white text-sm">
                From the very beginning, Renova truly listened to our vision. They created a brand identity that feels safe, professional, and aligned with the heart of our therapy practice
                </p>
              </div>
            </div>
            <!--card 2-->
            <div
                  class="bg-renovaPaleWhite border-2 border-solid border-white rounded-3xl w-full max-w-[450px] md:w-[450px] flex-shrink-0 space-y-5 px-6 md:px-10 py-8">
              <div class="flex items-center">
                <div class="h-14 w-14 rounded-full bg-renovaBlue mr-4 overflow-hidden"><img loading="lazy" src="../assets/images/person.jpg" alt="Person Icon" class="w-full h-full object-contain"></div>
                <div class="justify-start">
                  <h3 class="text-renovaGreen text-xl font-semibold text-left">
                    Eng. John Chingawale
                  </h3>
                  <p class="text-sm text-left text-white">
                    Managing Director, Omni Furniture
                  </p>
                </div>
              </div>
              <div class="">
                <p class="text-white text-sm">
                We wanted a brand presence that matched the quality of our furniture, and Renova delivered exactly that. The results were clean, strong, and positioned us confidently in the market
                </p>
              </div>
            </div>
            <!--card 3-->
            <div
                  class="bg-renovaPaleWhite border-2 border-solid border-white rounded-3xl w-full max-w-[450px] md:w-[450px] flex-shrink-0 space-y-5 px-6 md:px-10 py-8">
              <div class="flex items-center">
                <div class="h-14 w-14 rounded-full bg-renovaBlue mr-4 overflow-hidden">
                  <img loading="lazy" src="../assets/images/person.jpg" alt="Person Icon" class="w-full h-full object-contain">
                </div>
                <div class="justify-start">
                  <h3 class="text-renovaGreen text-xl font-semibold text-left">
                  Evance Chigwenembe
                  </h3>
                  <p class="text-sm text-left text-white">
                    General Manager, Careline Courier & Logistics
                  </p>
                </div>
              </div>
              <div class="">
                <p class="text-white text-sm">
                Renova handled both our logo and website with impressive attention to detail. The result is a professional brand and digital presence that truly represents Careline’s reliability and growth
                </p>
              </div>
            </div>
            <!--card 4-->
            <div
                  class="bg-renovaPaleWhite border-2 border-solid border-white rounded-3xl w-full max-w-[450px] md:w-[450px] flex-shrink-0 space-y-5 px-6 md:px-10 py-8">
              <div class="flex items-center">
                <div class="h-14 w-14 rounded-full bg-renovaBlue mr-4 overflow-hidden ">
                  <img loading="lazy" src="../assets/images/person.jpg" alt="Person Icon" class="w-full h-full object-contain">
                </div>
                <div class="justify-start">
                  <h3 class="text-renovaGreen text-xl font-semibold text-left">
                    Kossam Ngwira
                  </h3>
                  <p class="text-sm text-left text-white">
                    Managing Director, First Car Hire
                  </p>
                </div>
              </div>
              <div class="">
                <p class="text-white text-sm">
                Renova gave our brand a fresh, confident identity that truly reflects who we are. The new look feels modern, trustworthy and perfectly aligned with our vision and mission
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Arrow - Desktop -->
        <button
          id="testimonial-next"
          class="hidden md:flex w-12 h-12 rounded-full bg-white text-renovaBlue border-2 border-renovaBlue hover:bg-renovaBlue hover:text-white transition-colors duration-300 items-center justify-center flex-shrink-0 focus:outline-none focus:ring-2 focus:ring-renovaGreen -mr-8 lg:-mr-16 xl:-mr-24"
          aria-label="Next testimonial">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>

      <!-- Mobile Arrows - Bottom -->
      <div class="md:hidden flex justify-center gap-4 w-full mt-6 px-5">
        <button
          id="testimonial-prev-mobile"
          class="w-12 h-12 rounded-full bg-white text-renovaBlue border-2 border-renovaBlue hover:bg-renovaBlue hover:text-white transition-colors duration-300 items-center justify-center flex focus:outline-none focus:ring-2 focus:ring-renovaGreen"
          aria-label="Previous testimonial">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button
          id="testimonial-next-mobile"
          class="w-12 h-12 rounded-full bg-white text-renovaBlue border-2 border-renovaBlue hover:bg-renovaBlue hover:text-white transition-colors duration-300 items-center justify-center flex focus:outline-none focus:ring-2 focus:ring-renovaGreen"
          aria-label="Next testimonial">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
    </div>
  </section>
</main>

<style>
  /* Hero Mobile Background */
  .hero-mobile-bg {
    background-image: url('../assets/images/hero image.jpg');
  }
  
  /* Hero Desktop Background */
  .hero-desktop-bg {
    background-image: url('../assets/images/hero image 2.jpg');
  }
  
  /* Hero Animations */
  .animate-hero-text {
    animation: fadeInLeft 0.8s ease-out;
  }
  
  .animate-hero-model {
    animation: slideInRight 1s ease-out;
  }
  
  .animate-hero-back-logo {
    animation: fadeIn 1.2s ease-out;
  }
  
  @keyframes fadeInLeft {
    from {
      opacity: 0;
      transform: translateX(-30px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  @keyframes slideInRight {
    from {
      opacity: 0;
      transform: translateX(100px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
  
  /* Scroll-triggered animations */
  .animate-on-scroll {
    opacity: 0;
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
  }
  
  .animate-on-scroll.animated {
    opacity: 1;
  }
  
  .fade-in-up {
    transform: translateY(30px);
  }
  
  .fade-in-up.animated {
    transform: translateY(0);
  }
  
  .fade-in-left {
    transform: translateX(-30px);
  }
  
  .fade-in-left.animated {
    transform: translateX(0);
  }
  
  .fade-in-right {
    transform: translateX(30px);
  }
  
  .fade-in-right.animated {
    transform: translateX(0);
  }
  
  /* Stagger animation for cards */
  .animate-card {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
  }
  
  .animate-card.animated {
    opacity: 1;
    transform: translateY(0);
  }
</style>

<script>
  // Testimonials carousel
  window.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('testimonials-wrapper');
    const prevBtn = document.getElementById('testimonial-prev');
    const nextBtn = document.getElementById('testimonial-next');
    const prevBtnMobile = document.getElementById('testimonial-prev-mobile');
    const nextBtnMobile = document.getElementById('testimonial-next-mobile');
    const cards = container ? container.querySelectorAll('.bg-renovaPaleWhite') : [];

    if (!container || cards.length === 0) return;

    let currentIndex = 0;

    function getCardsPerView() {
      return window.innerWidth < 768 ? 1 : 2;
    }

    function updatePosition() {
      const cardsPerView = getCardsPerView();
      const isMobile = window.innerWidth < 768;
      let cardWidth;
      let gap = 24; // gap-6 = 24px
      
      if (isMobile) {
        // On mobile, use container width directly (it already accounts for parent padding)
        const containerElement = document.getElementById('testimonials-container');
        if (containerElement && cards.length > 0) {
          // Get the actual rendered width of the container
          const containerWidth = containerElement.offsetWidth;
          cardWidth = containerWidth;
        } else {
          // Fallback: window width minus parent padding (px-5 = 20px each side) and some margin
          cardWidth = window.innerWidth - 100;
        }
        gap = 0; // No gap on mobile
      } else {
        // Desktop: fixed 450px width
        cardWidth = 450;
        gap = 24;
      }
      
      const translateX = -(currentIndex * (cardWidth + gap));
      container.style.transform = `translateX(${translateX}px)`;
    }

    function next() {
      const cardsPerView = getCardsPerView();
      const maxIndex = Math.max(0, cards.length - cardsPerView);
      if (currentIndex < maxIndex) {
        currentIndex++;
      } else {
        currentIndex = 0; // Loop back to start
      }
      updatePosition();
    }

    function prev() {
      const cardsPerView = getCardsPerView();
      const maxIndex = Math.max(0, cards.length - cardsPerView);
      if (currentIndex > 0) {
        currentIndex--;
      } else {
        currentIndex = maxIndex; // Loop to end
      }
      updatePosition();
    }

    // Desktop buttons
    if (prevBtn) prevBtn.addEventListener('click', prev);
    if (nextBtn) nextBtn.addEventListener('click', next);

    // Mobile buttons
    if (prevBtnMobile) prevBtnMobile.addEventListener('click', prev);
    if (nextBtnMobile) nextBtnMobile.addEventListener('click', next);

    // Set card widths on mobile after initial render
    function setMobileCardWidths() {
      if (window.innerWidth < 768 && cards.length > 0) {
        const containerElement = document.getElementById('testimonials-container');
        if (containerElement) {
          const containerWidth = containerElement.offsetWidth;
          cards.forEach(function(card) {
            card.style.width = containerWidth + 'px';
            card.style.minWidth = containerWidth + 'px';
            card.style.maxWidth = containerWidth + 'px';
          });
        }
      } else if (cards.length > 0) {
        // Reset to default on desktop
        cards.forEach(function(card) {
          card.style.width = '';
          card.style.minWidth = '';
          card.style.maxWidth = '';
        });
      }
    }
    
    // Handle window resize
    let resizeTimer;
    window.addEventListener('resize', function() {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function() {
        setMobileCardWidths();
        currentIndex = 0;
        updatePosition();
      }, 250);
    });
    
    // Initialize
    setTimeout(function() {
      setMobileCardWidths();
      updatePosition();
    }, 100);
  });
  
  // Scroll-triggered animations
  window.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for scroll animations
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('animated');
          // For staggered cards, observe each one individually
          if (entry.target.classList.contains('animate-card-container')) {
            const cards = entry.target.querySelectorAll('.animate-card');
            cards.forEach(function(card, index) {
              setTimeout(function() {
                card.classList.add('animated');
              }, index * 100); // 100ms delay between each card
            });
          }
        }
      });
    }, observerOptions);
    
    // Observe sections and elements
    const animateElements = document.querySelectorAll('.animate-on-scroll, .fade-in-up, .fade-in-left, .fade-in-right, .animate-card-container');
    animateElements.forEach(function(element) {
      observer.observe(element);
    });
  });
</script>
<?php include '../includes/footer.php'; ?>