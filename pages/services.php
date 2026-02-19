<?php
$pageTitle = 'Renova | Services';
$metaDescription = 'Renova services: web development, systems development, graphic design, UI/UX design, and brand identity. Technology and design solutions for your business.';
$metaKeywords = 'web development, systems development, graphic design, UI/UX, brand identity, software development, Renova services';
$additionalCSS = '<style>
    .hover-slide {
      position: relative;
      overflow: hidden;
    }
    .hover-slide::before {
      content: \'\';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background-color: hsl(70, 93%, 44%);
      transition: left 0.3s ease-in-out;
      z-index: 0;
      border-radius: 28px;
    }
    .hover-slide:hover::before {
      left: 0;
    }
    .hover-slide > * {
      position: relative;
      z-index: 1;
    }
  </style>';

include '../includes/head.php';
include '../includes/navbar.php';
?>
  
  <!--Hero-->
  <section id="hero" class="mx-auto px-5">
    <div
      class="relative flex flex-col bg-renova-gradient from-renovaBlue to-renovaBrightBlue justify-center items-center py-19 mx-auto w-full rounded-2xl overflow-hidden">
      <!-- Mobile background image overlay -->
      <div class="md:hidden absolute inset-0 bg-cover bg-center bg-no-repeat rounded-2xl other-hero-bg"></div>
      <!-- Gradient overlay for mobile -->
      <div class="md:hidden absolute inset-0 bg-renova-gradient from-renovaBlue to-renovaBrightBlue opacity-70 rounded-2xl z-0"></div>
      <!-- Desktop background image overlay -->
      <div class="hidden md:block absolute inset-0 bg-cover bg-center bg-no-repeat rounded-2xl other-hero-bg"></div>
      <!-- Gradient overlay for desktop -->
      <div class="hidden md:block absolute inset-0 bg-renova-gradient from-renovaBlue to-renovaBrightBlue opacity-70 rounded-2xl z-0"></div>
      <div class="max-w-7xl mx-auto">

            <div class="bg-renovaPaleWhite px-7 py-2 border-2 rounded-full border-solid border-white mb-10 animate-on-scroll fade-in-up max-w-[250px] mx-auto">

        <h2 class="text-center text-white text-3xl">What We Do</h2>
      </div>
      <img loading="lazy" src="../assets/images/Ellipse 8.svg" alt="Ellipse"
        class="absolute z-50 top-0 ml-16 mt-7 md:ml-56 md:mt-20 left-0 pointer-events-none animate-on-scroll fade-in" />
      <img loading="lazy" src="../assets/images/Group 6.svg" alt="Ellipse"
        class="absolute z-50 bottom-0 mr-20 mb-10 md:mr-40 md:mb-14 right-0 pointer-events-none animate-on-scroll fade-in" />
      <h1 class="text-white text-center justify-center text-4xl font-bold animate-on-scroll fade-in-up">
        Tech & Creative Solutions That Drive Impact
      </h1>
      </div>
  </section>
  <section id="services" class="mb-24">
    <div class="max-w-7xl mx-auto">
      <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-20 justify-items-center animate-card-container">
          <!--Card 1-->
          <div
            class="group hover-slide bg-renovaBlue w-full min-w-[340px] min-h-[400px] rounded-[28px] p-10 flex flex-col space-y-5 animate-card">
            <div
              class="h-18 w-18 rounded-full bg-renovaGreen flex items-center justify-center group-hover:bg-renovaBlue transition-colors duration-200">
              <img loading="lazy" class="w-3/5 h-3/5 object-contain" src="../assets/images/icons/coding.png" alt="Graphic Design Icon" />
            </div>
            <h4
              class="font-bold text-renovaGreen text-xl w-3/5 group-hover:text-renovaBlue transition-colors duration-200">
              Software Development
            </h4>
            <div class="w-full space-y-4">
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    Web Applications
                  </p>
                </div>
              </div>
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    Mobile Applications
                  </p>
                </div>
              </div>
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    Desktop Application
                  </p>
                </div>
              </div>
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    System Maintenance &
                    Support
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--Card 2-->
          <div
            class="group hover-slide bg-renovaBlue w-full min-w-[340px] min-h-[400px] rounded-[28px] p-10 flex flex-col space-y-5 animate-card">
            <div
              class="h-18 w-18 rounded-full bg-renovaGreen flex items-center justify-center group-hover:bg-renovaBlue transition-colors duration-200">
              <img loading="lazy" class="w-3/5 h-3/5 object-contain" src="../assets/images/icons/browser.png" alt="Graphic Design Icon" />
            </div>
            <h4
              class="font-bold text-renovaGreen text-xl w-3/5 group-hover:text-renovaBlue transition-colors duration-200">
              Web Development
            </h4>
            <div class="w-full space-y-4">
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    Web development
                  </p>
                </div>
              </div>
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    Content Management Systems
                  </p>
                </div>
              </div>
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    Hosting & Launch Support
                  </p>
                </div>
              </div>
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    Social Media Branding
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--Card 3-->
          <div
            class="group hover-slide bg-renovaBlue w-full min-w-[340px] min-h-[400px] rounded-[28px] p-10 flex flex-col space-y-5 animate-card">
            <div
              class="h-18 w-18 rounded-full bg-renovaGreen flex items-center justify-center group-hover:bg-renovaBlue transition-colors duration-200">
              <img loading="lazy" class="w-3/5 h-3/5 object-contain" src="../assets/images/icons/picture.png" alt="Graphic Design Icon" />
            </div>
            <h4
              class="font-bold text-renovaGreen text-xl w-2/5 group-hover:text-renovaBlue transition-colors duration-200">
              UI/UX Design
            </h4>
            <div class="w-full space-y-4">
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    Website Interface Design
                  </p>
                </div>
              </div>
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    Mobile App Interface Design
                  </p>
                </div>
              </div>
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    Design Wireframing & Design Systems
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--Card 4-->
          <div
            class="group hover-slide bg-renovaBlue w-full min-w-[340px] min-h-[400px] rounded-[28px] p-10 flex flex-col space-y-5 animate-card">
            <div
              class="h-18 w-18 rounded-full bg-renovaGreen flex items-center justify-center group-hover:bg-renovaBlue transition-colors duration-200">
              <img loading="lazy" class="w-3/5 h-3/5 object-contain" src="../assets/images/icons/paint.png" alt="Graphic Design Icon" />
            </div>
            <h4
              class="font-bold text-renovaGreen text-xl w-3/5 group-hover:text-renovaBlue transition-colors duration-200">
              Branding & Identity design
            </h4>
            <div class="w-full space-y-4">
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    Logo Design
                  </p>
                </div>
              </div>
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    Visual Identity Systems
                  </p>
                </div>
              </div>
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    Brand Style Guides
                  </p>
                </div>
              </div>
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    Social Media Branding
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!--Card 5-->
          <div
            class="group hover-slide bg-renovaBlue w-full min-w-[340px] min-h-[400px] rounded-[28px] p-10 flex flex-col space-y-5 animate-card">
            <div
              class="h-18 w-18 rounded-full bg-renovaGreen flex items-center justify-center group-hover:bg-renovaBlue transition-colors duration-200">
              <img loading="lazy" class="w-3/5 h-3/5 object-contain" src="../assets/images/icons/layer.png" alt="Graphic Design Icon" />
            </div>
            <h4
              class="font-bold text-renovaGreen text-xl w-3/5 group-hover:text-renovaBlue transition-colors duration-200">
              Printing Solutions
            </h4>
            <div class="w-full space-y-4">
              <div class="w-full flex flex-row">
                <div class="w-1/12 flex items-center justify-center mx-auto h-full">
                  <i class="fas fa-check text-renovaGreen group-hover:text-renovaBlue transition-colors duration-200"></i>
                </div>
                <div class="w-11/12">
                  <p class="text-xl text-white ml-10 group-hover:text-renovaBlue transition-colors duration-200">
                    We bring your brand  to life on paper, from business cards and brochures  to large format prints and  branded packaging.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include '../includes/call-to-action.php'; include '../includes/footer.php'; ?>