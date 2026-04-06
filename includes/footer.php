<footer>
  <?php
  // Determine asset path based on where footer.php is included from
  $scriptPath = isset($_SERVER['SCRIPT_FILENAME']) ? $_SERVER['SCRIPT_FILENAME'] : '';
  $phpSelf = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : '';
  $is404 = (basename($phpSelf) === '404.php' || basename($scriptPath) === '404.php');
  $isInPagesDir = (!$is404) && ((strpos($scriptPath, DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR) !== false) || 
                  (strpos($phpSelf, '/pages/') !== false));
  
  if ($is404) {
    $documentRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
    $scriptDir = str_replace('\\', '/', dirname($scriptPath));
    $relativePath = str_replace($documentRoot, '', $scriptDir);
    $baseUrl = 'http' . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $relativePath;
    $footerAssetPath = $baseUrl . '/assets';
  } else {
    $footerAssetPath = $isInPagesDir ? '../assets' : 'assets';
  }
  ?>
  <div class="bg-renovaBlue w-full py-24 px-5 md:px-20 flex flex-col">
    <div class="max-w-7xl mx-auto w-full flex flex-col md:flex-row">
      <div class="mx-auto justify-center mb-7 md:mb-0 md:mx-0">
        <img loading="lazy"
          class="w-36 h-auto"
          src="<?php echo $footerAssetPath; ?>/images/Renova logo horizontal green.svg"
          alt="Renova Logo" />
      </div>

      <div class="md:ml-auto self-center text-center">
        <h2 class="text-white text-3xl font-semibold">
          Future. Connected.
        </h2>
      </div>
    </div>
    <div class="bg-renovaGreen w-full h-[2px] mt-7 mb-10 max-w-7xl mx-auto"></div>
    <div class="max-w-7xl mx-auto w-full flex flex-col md:flex-row space-y-4 md:space-y-0">
      <div class="md:w-4/5">
        <h3 class="text-renovaGreen text-xl font-semibold text-center md:text-left">Useful Links</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-7">
          <div class="flex flex-col text-white text-lg">
            <a class="mb-2 text-center md:text-left hover:text-renovaGreen" href="/home">Home</a>
            <a class="text-center md:text-left hover:text-renovaGreen" href="/inside">Inside Renova</a>
          </div>
          <div class="flex flex-col text-white text-lg">
            <a class="mb-2 text-center md:text-left hover:text-renovaGreen" href="/portfolio">Portfolio</a>
            <a class="text-center md:text-left hover:text-renovaGreen" href="/chronicles">Chronicles</a>
          </div>
          <div class="flex flex-col text-white text-lg">
            <a class="mb-2 text-center md:text-left hover:text-renovaGreen" href="/services">Services</a>
            <a class="text-center md:text-left hover:text-renovaGreen" href="/contact">Contact Us</a>
          </div>
        </div>
      </div>
      <div class="md:w-1/5 flex flex-col mx-auto md:ml-auto">
        <h3 class="text-renovaGreen text-xl font-semibold mb-7 text-center md:text-left">Get in Touch</h3>
        <p class="text-white mb-2 text-lg text-center md:text-left">+265 992 353 009</p>
        <a class="text-white mb-2 text-lg text-center md:text-left hover:text-renovaGreen" href="mailto:connect.renova@gmail.com">connect@renovamw.com</a>
        <p class="text-white text-lg text-center md:text-left">Lilongwe, Malawi</p>
      </div>
    </div>
  </div>
  <div class="bg-renovaGreen w-full min-h-[60px] flex flex-col-reverse md:flex-row items-center justify-center md:justify-between px-5 md:px-20 py-3 md:py-0 gap-3 md:gap-0 ">
    <div class="max-w-7xl mx-auto w-full flex flex-col md:flex-row items-center justify-center md:justify-between">
      <p class="text-renovaBlue text-center md:text-start text-sm">Copyright © <?php echo date('Y'); ?> Renova Consolidated Ltd. All Rights Reserved.</p>
      <div class="flex flex-row gap-2 md:ml-auto mt-3 md:mt-0">
        <a href="https://web.facebook.com/renova.creativ" target="_blank" rel="noopener noreferrer" class="group w-8 h-8 border border-solid border-renovaBlue rounded-full flex items-center justify-center hover:bg-renovaBlue transition-colors duration-200" aria-label="Facebook">
          <i class="fab fa-facebook-f text-sm text-renovaBlue group-hover:text-white transition-colors duration-200"></i>
        </a>
        <a href="https://wa.me/265992353009" target="_blank" rel="noopener noreferrer" class="group w-8 h-8 border border-solid border-renovaBlue rounded-full flex items-center justify-center hover:bg-renovaBlue transition-colors duration-200" aria-label="WhatsApp">
          <i class="fab fa-whatsapp text-sm text-renovaBlue group-hover:text-white transition-colors duration-200"></i>
        </a>
        <a href="https://x.com/renova_creative" target="_blank" rel="noopener noreferrer" class="group w-8 h-8 border border-solid border-renovaBlue rounded-full flex items-center justify-center hover:bg-renovaBlue transition-colors duration-200" aria-label="Twitter">
          <i class="fa-brands fa-x-twitter text-sm text-renovaBlue group-hover:text-white transition-colors duration-200"></i>
        </a>
        <a href="https://www.instagram.com/renova_creative_/" target="_blank" rel="noopener noreferrer" class="group w-8 h-8 border border-solid border-renovaBlue rounded-full flex items-center justify-center hover:bg-renovaBlue transition-colors duration-200" aria-label="Instagram">
          <i class="fab fa-instagram text-sm text-renovaBlue group-hover:text-white transition-colors duration-200"></i>
        </a>
        <a href="https://www.linkedin.com/company/renova-creative/" target="_blank" rel="noopener noreferrer" class="group w-8 h-8 border border-solid border-renovaBlue rounded-full flex items-center justify-center hover:bg-renovaBlue transition-colors duration-200" aria-label="LinkedIn">
          <i class="fab fa-linkedin-in text-sm text-renovaBlue group-hover:text-white transition-colors duration-200"></i>
        </a>
      </div>
    </div>
  </div>
</footer>

<!-- Back to Top Button -->
<button id="back-to-top" class="fixed bottom-8 right-8 bg-renovaBlue text-white w-12 h-12 rounded-full shadow-lg hover:bg-renovaGreen hover:text-renovaBlue transition-all duration-300 transform hover:scale-110 focus:outline-none focus:ring-2 focus:ring-renovaGreen focus:ring-offset-2 z-50 hidden items-center justify-center">
  <i class="fas fa-arrow-up"></i>
</button>

<script>
  // Back to top button
  window.addEventListener('DOMContentLoaded', function() {
    const backToTopButton = document.getElementById('back-to-top');
    const sections = document.querySelectorAll('section');
    
    if (backToTopButton && sections.length >= 2) {
      // Get the second section's bottom position
      function updateButtonVisibility() {
        if (sections.length >= 2) {
          const secondSection = sections[1];
          const secondSectionBottom = secondSection.offsetTop + secondSection.offsetHeight;
          
          if (window.scrollY > secondSectionBottom) {
            backToTopButton.classList.remove('hidden');
            backToTopButton.classList.add('flex');
          } else {
            backToTopButton.classList.add('hidden');
            backToTopButton.classList.remove('flex');
          }
        }
      }
      
      // Check on scroll
      window.addEventListener('scroll', updateButtonVisibility);
      
      // Initial check
      updateButtonVisibility();
      
      // Scroll to top on click
      backToTopButton.addEventListener('click', function() {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    }
  });
  
  // Scroll-triggered animations (shared across all pages)
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