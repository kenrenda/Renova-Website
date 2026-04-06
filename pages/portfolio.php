<?php
$pageTitle = 'Renova | Portfolio';
$metaDescription = 'View Renova portfolio: web development, brand identity, and design projects including Careline Courier, Omni Furniture, Metricore Systems, and more.';
$metaKeywords = 'Renova portfolio, web development projects, brand identity, case studies, Careline Courier, Omni Furniture, Metricore Systems';
$additionalScripts = '<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>';
include '../includes/head.php';
include '../includes/navbar.php';
?>
<!--Hero-->
<section id="hero" class=" mx-auto px-5">
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
    <div class="bg-renovaPaleWhite px-7 py-2 border-2 rounded-full border-solid border-white mb-10 animate-on-scroll fade-in-up max-w-[200px] mx-auto">
      <h2 class="text-center text-white text-3xl">Our Work</h2>
    </div>
    <img loading="lazy" src="../assets/images/Ellipse 8.svg" alt="Ellipse"
      class="absolute z-50 top-0 ml-16 mt-7 md:ml-56 md:mt-20 left-0 pointer-events-none animate-on-scroll fade-in" />
    <img loading="lazy" src="../assets/images/Group 6.svg" alt="Ellipse"
      class="absolute z-50 bottom-0 mr-20 mb-10 md:mr-40 md:mb-14 right-0 pointer-events-none animate-on-scroll fade-in" />
    <h1 class="text-white text-center justify-center text-4xl font-bold animate-on-scroll fade-in-up">
     Solutions in Action
    </h1>
</div>
  </div>
</section>
<section id="portfolio"
    x-data="
      {
        showCards: 'all',
        activeClasses: 'bg-renovaBlue text-white',
        inactiveClasses: 'text-renovaBlue hover:bg-renovaBlue hover:text-white',
      }
    "
    class="max-w-7xl mx-auto pb-12 pt-20 lg:pb-[90px] lg:pt-[120px]"
  >
    <div class="max-w-6xl mx-auto px-4">
      <div class="-mx-4 flex flex-wrap justify-center">
        <div class="w-full px-4">
          <ul class="mb-12 flex flex-wrap justify-center gap-2">
            <li class="mb-1">
              <button
                @click="showCards = 'all' "
                :class="showCards == 'all' ? activeClasses : inactiveClasses "
                class="inline-block rounded-lg px-5 py-2 text-center text-base font-semibold transition md:py-3 lg:px-8"
              >
                All Projects
              </button>
            </li>
            <li class="mb-1">
              <button
                @click="showCards = 'development' "
                :class="showCards == 'development' ? activeClasses : inactiveClasses "
                class="inline-block rounded-lg px-5 py-2 text-center text-base font-semibold transition md:py-3 lg:px-8"
              >
                Development
              </button>
            </li>
            <li class="mb-1">
              <button
                @click="showCards = 'design' "
                :class="showCards == 'design' ? activeClasses : inactiveClasses "
                class="inline-block rounded-lg px-5 py-2 text-center text-base font-semibold transition md:py-3 lg:px-8"
              >
                UI/UX Design
              </button>
            </li>
            <li class="mb-1">
              <button
                @click="showCards = 'branding' "
                :class="showCards == 'branding' ? activeClasses : inactiveClasses "
                class="inline-block rounded-lg px-5 py-2 text-center text-base font-semibold transition md:py-3 lg:px-8"
              >
                Branding
              </button>
            </li>
          </ul>
        </div>
      </div>
      <div class="-mx-4 flex flex-wrap animate-card-container">
        <div
          :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden' "
          class="w-full px-2 md:w-1/2 lg:w-1/3 animate-card"
        >
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-2xl h-[300px]">
              <img loading="lazy"
                src="../assets/images/portfolio/Free_Square_Sticker_Mockup_6 Omni furniture.jpg"
                alt="Branding Design"
                class="w-full h-full object-cover rounded-2xl"
              />
            </div>
            <div
              class="relative z-10 mx-4 -mt-16 rounded-2xl bg-renovaBlue px-3 py-6 text-center shadow-lg"
            >
              <span class="mb-2 block text-sm font-medium text-renovaGreen">
                Branding
              </span>
              <h3 class="mb-4 text-lg font-bold text-white">
                Omni Furniture
              </h3>
              <a
                href="/project-omni-furniture"
                class="inline-block rounded-xl border border-renovaGreen px-5 py-2 text-xs font-medium text-white transition hover:border-renovaGreen hover:bg-renovaGreen hover:text-renovaBlue"
              >
                View Details
              </a>
            </div>
          </div>
        </div>
        <div
          :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden' "
          class="w-full px-2 md:w-1/2 lg:w-1/3 animate-card"
        >
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-2xl h-[300px]">
              <img
                src="../assets/images/portfolio/first_car_hire.jpg"
                alt="First Car Hire"
                class="w-full h-full object-cover rounded-2xl"
              />
            </div>
            <div
              class="relative z-10 mx-4 -mt-16 rounded-2xl bg-renovaBlue px-3 py-6 text-center shadow-lg"
            >
              <span class="mb-2 block text-sm font-medium text-renovaGreen">
                Branding
              </span>
              <h3 class="mb-4 text-lg font-bold text-white">
                First Car Hire
              </h3>
              <a
                href="/project-first-car-hire"
                class="inline-block rounded-xl border border-renovaGreen px-5 py-2 text-xs font-medium text-white transition hover:border-renovaGreen hover:bg-renovaGreen hover:text-renovaBlue"
              >
                View Details
              </a>
            </div>
          </div>
        </div>
        
          
        <div
          :class="showCards == 'all' || showCards == 'development' ? 'block' : 'hidden' "
          class="w-full px-2 md:w-1/2 lg:w-1/3 animate-card"
        >
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-2xl h-[300px]">
              <img loading="lazy"
                src="../assets/images/portfolio/careline Free Website Presentation Mockup.jpg"
                alt="Careline Courier"
                class="w-full h-full object-cover rounded-2xl"
              />
            </div>
            <div
              class="relative z-10 mx-4 -mt-16 rounded-2xl bg-renovaBlue px-3 py-6 text-center shadow-lg"
            >
              <span class="mb-2 block text-sm font-medium text-renovaGreen">
                Development
              </span>
              <h3 class="mb-4 text-lg font-bold text-white">
                Careline Courier
              </h3>
              <a
                href="/project-careline-courier"
                class="inline-block rounded-xl border border-renovaGreen px-5 py-2 text-xs font-medium text-white transition hover:border-renovaGreen hover:bg-renovaGreen hover:text-renovaBlue"
              >
                View Details
              </a>
            </div>
          </div>
        </div>
        <div
          :class="showCards == 'all' || showCards == 'design' ? 'block' : 'hidden' "
          class="w-full px-2 md:w-1/2 lg:w-1/3 animate-card"
        >
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-2xl h-[300px]">
              <img loading="lazy"
                src="../assets/images/portfolio/Renova Website Presentation Mockup PSD.jpg"
                alt="Renova UI/UX Design"
                class="w-full h-full object-cover rounded-2xl"
              />
            </div>
            <div
              class="relative z-10 mx-4 -mt-16 rounded-2xl bg-renovaBlue px-3 py-6 text-center shadow-lg"
            >
              <span class="mb-2 block text-sm font-medium text-renovaGreen">
                UI/UX Design
              </span>
              <h3 class="mb-4 text-lg font-bold text-white">
                Renova
              </h3>
              <a
                href="/project-renova"
                class="inline-block rounded-xl border border-renovaGreen px-5 py-2 text-xs font-medium text-white transition hover:border-renovaGreen hover:bg-renovaGreen hover:text-renovaBlue"
              >
                View Details
              </a>
            </div>
          </div>
        </div>
        <div
          :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden' "
          class="w-full px-2 md:w-1/2 lg:w-1/3 animate-card"
        >
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-2xl h-[300px]">
              <img
                src="../assets/images/portfolio/metricore_systems.jpg"
                alt="Metricore Systems"
                class="w-full h-full object-cover rounded-2xl"
              />
            </div>
            <div
              class="relative z-10 mx-4 -mt-16 rounded-2xl bg-renovaBlue px-3 py-6 text-center shadow-lg"
            >
              <span class="mb-2 block text-sm font-medium text-renovaGreen">
                Branding
              </span>
              <h3 class="mb-4 text-lg font-bold text-white">
                Metricore Systems
              </h3>
              <a
                href="project-metricore-systems.php"
                class="inline-block rounded-xl border border-renovaGreen px-5 py-2 text-xs font-medium text-white transition hover:border-renovaGreen hover:bg-renovaGreen hover:text-renovaBlue"
              >
                View Details
              </a>
            </div>
          </div>
        </div>
        <div
          :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden' "
          class="w-full px-2 md:w-1/2 lg:w-1/3 animate-card"
        >
          <div class="relative mb-12">
            <div class="overflow-hidden rounded-2xl h-[300px]">
              <img loading="lazy"
                src="../assets/images/portfolio/Castle_Gremu.jpg"
                alt="Castle Gremu"
                class="w-full h-full object-cover rounded-2xl"
              />
            </div>
            <div
              class="relative z-10 mx-4 -mt-16 rounded-2xl bg-renovaBlue px-3 py-6 text-center shadow-lg"
            >
              <span class="mb-2 block text-sm font-medium text-renovaGreen">
                Branding
              </span>
              <h3 class="mb-4 text-lg font-bold text-white">
                Castle Gremu
              </h3>
              <a
                href="/project-castle-gremu"
                class="inline-block rounded-xl border border-renovaGreen px-5 py-2 text-xs font-medium text-white transition hover:border-renovaGreen hover:bg-renovaGreen hover:text-renovaBlue"
              >
                View Details
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include '../includes/call-to-action.php'; include '../includes/footer.php'; ?>
