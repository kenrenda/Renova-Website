<!--Navbar-->
<?php
$currentPath = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
$currentPath = $currentPath ?: 'home';

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
  $assetPath = $baseUrl . '/assets';
} else {
  $assetPath = $isInPagesDir ? '../assets' : 'assets';
}

$navLinks = [
    'home' => ['href' => '/home', 'path' => 'home', 'text' => 'Home'],
    'insideRenova' => ['href' => '/inside', 'path' => 'inside', 'text' => 'Inside Renova'],
    'services' => ['href' => '/services', 'path' => 'services', 'text' => 'Services'],
    'portfolio' => ['href' => '/portfolio', 'path' => 'portfolio', 'text' => 'Portfolio'],
    'chronicles' => ['href' => '/chronicles', 'path' => 'chronicles', 'text' => 'Chronicles']
];
?>
<nav id="main-navbar" class="sticky top-0 z-50 bg-white transition-shadow duration-300">
  <div class="max-w-7xl mx-auto flex items-center justify-between py-4 md:py-6 px-4 sm:px-5 md:px-20">
    <div class="flex-shrink-0">
      <a href="/home" class="block">
        <img loading="lazy"
          class="w-24 sm:w-28 md:w-32 h-auto transition-opacity duration-200 hover:opacity-80"
          src="<?php echo $assetPath; ?>/images/Renova logo horizontal 1.svg"
          alt="Renova Logo"
        />
      </a>
    </div>
    <div class="hidden lg:flex lg:items-center lg:space-x-6 xl:space-x-7 h-auto">
      <?php foreach ($navLinks as $key => $link): ?>
        <a
          href="<?php echo $link['href']; ?>"
          class="<?php echo ($currentPath === $link['path']) ? 'text-renovaGreen' : 'hover:text-renovaBrightBlue'; ?> text-base lg:text-lg transition-colors duration-200 whitespace-nowrap"
          ><?php echo $link['text']; ?></a
        >
      <?php endforeach; ?>
    </div>
    <div class="hidden lg:flex lg:items-center lg:ml-4">
      <a
        href="/contact"
        class="nav-button-slide p-2 px-6 xl:px-8 text-white bg-renovaBlue rounded-full text-base lg:text-lg font-semibold active:scale-95 focus:outline-none focus:ring-2 focus:ring-renovaGreen focus:ring-offset-2 whitespace-nowrap"
        >
        <span class="transition-colors duration-300 hover:text-renovaBlue">Get in Touch</span>
      </a>
    </div>
    
    <!-- Mobile Hamburger Button -->
    <button
      id="mobile-menu-toggle"
      class="lg:hidden text-renovaBlue focus:outline-none focus:ring-2 focus:ring-renovaGreen rounded p-2 flex-shrink-0"
      aria-label="Toggle menu"
      aria-expanded="false"
    >
      <svg id="hamburger-icon" class="w-9 h-9 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
      <svg id="close-icon" class="w-9 h-9 transition-transform duration-300 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>
  </div>
  
  <!-- Mobile Menu -->
  <div id="mobile-menu" class="fixed inset-y-0 left-0 w-[280px] sm:w-80 bg-white shadow-xl transform -translate-x-full transition-transform duration-300 ease-in-out z-50 lg:hidden overflow-y-auto">
    <div class="flex flex-col h-full pt-6 px-5 pb-6">
      <div id="mobile-menu-logo" class="mb-6 pb-6 border-b border-gray-200 flex-shrink-0 mobile-menu-item">
        <a href="/home" class="block">
          <img loading="lazy"
            class="w-28 h-auto"
            src="<?php echo $assetPath; ?>/images/Renova logo horizontal 1.svg"
            alt="Renova Logo"
          />
        </a>
      </div>
      <div class="flex-1">
        <?php foreach ($navLinks as $key => $link): ?>
          <a
            href="<?php echo $link['href']; ?>"
            class="mobile-menu-link <?php echo ($currentPath === $link['path']) ? 'text-renovaGreen' : 'text-renovaBlue hover:text-renovaBrightBlue'; ?> block py-4 text-lg sm:text-xl transition-colors duration-200"
            ><?php echo $link['text']; ?></a
          >
        <?php endforeach; ?>
      </div>
      <div id="mobile-menu-button" class="mt-auto pt-4 flex-shrink-0 mobile-menu-item">
        <a
          href="/contact"
          class="block p-3 text-center text-white bg-renovaBlue rounded-full text-base sm:text-lg font-semibold hover:bg-renovaGreen hover:text-renovaBlue transition-colors duration-200"
        >
          Get in Touch
        </a>
      </div>
    </div>
  </div>
  
  <!-- Mobile Menu Overlay -->
  <div id="mobile-menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden lg:hidden transition-opacity duration-300"></div>
</nav>

<script>
  // Mobile menu toggle
  window.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileOverlay = document.getElementById('mobile-menu-overlay');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');
    
    if (menuToggle && mobileMenu) {
      // Prevent body scroll when menu is open
      function toggleBodyScroll(disable) {
        if (disable) {
          document.body.style.overflow = 'hidden';
        } else {
          document.body.style.overflow = '';
        }
      }
      
      // Reset menu animations
      function resetMenuAnimations() {
        const logo = document.getElementById('mobile-menu-logo');
        const links = document.querySelectorAll('.mobile-menu-link');
        const button = document.getElementById('mobile-menu-button');
        
        if (logo) logo.classList.remove('animate-in');
        links.forEach(function(link) {
          link.classList.remove('animate-in');
        });
        if (button) button.classList.remove('animate-in');
      }
      
      // Animate menu items when opening
      function animateMenuItems() {
        const logo = document.getElementById('mobile-menu-logo');
        const links = document.querySelectorAll('.mobile-menu-link');
        const button = document.getElementById('mobile-menu-button');
        
        // Reset first
        if (logo) {
          logo.classList.remove('animate-in');
        }
        links.forEach(function(link) {
          link.classList.remove('animate-in');
        });
        if (button) {
          button.classList.remove('animate-in');
        }
        
        // Animate logo first
        setTimeout(function() {
          if (logo) logo.classList.add('animate-in');
        }, 100);
        
        // Animate links with stagger
        links.forEach(function(link, index) {
          setTimeout(function() {
            link.classList.add('animate-in');
          }, 150 + (index * 80));
        });
        
        // Animate button last
        setTimeout(function() {
          if (button) button.classList.add('animate-in');
        }, 150 + (links.length * 80) + 100);
      }
      
      // Close menu function
      function closeMobileMenu() {
        mobileMenu.classList.add('-translate-x-full');
        mobileOverlay.classList.add('hidden');
        hamburgerIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
        menuToggle.setAttribute('aria-expanded', 'false');
        toggleBodyScroll(false);
        // Reset animations
        resetMenuAnimations();
      }
      
      menuToggle.addEventListener('click', function() {
        const isOpen = !mobileMenu.classList.contains('-translate-x-full');
        
        if (isOpen) {
          // Close menu
          mobileMenu.classList.add('-translate-x-full');
          mobileOverlay.classList.add('hidden');
          hamburgerIcon.classList.remove('hidden');
          closeIcon.classList.add('hidden');
          menuToggle.setAttribute('aria-expanded', 'false');
          toggleBodyScroll(false);
          // Reset animations
          resetMenuAnimations();
        } else {
          // Open menu
          mobileMenu.classList.remove('-translate-x-full');
          mobileOverlay.classList.remove('hidden');
          hamburgerIcon.classList.add('hidden');
          closeIcon.classList.remove('hidden');
          menuToggle.setAttribute('aria-expanded', 'true');
          toggleBodyScroll(true);
          // Trigger animations
          animateMenuItems();
        }
      });
      
      // Close menu when clicking overlay
      mobileOverlay.addEventListener('click', closeMobileMenu);
      
      // Close menu when clicking a link
      const menuLinks = mobileMenu.querySelectorAll('a');
      menuLinks.forEach(function(link) {
        link.addEventListener('click', closeMobileMenu);
      });
      
      // Close menu on Escape key
      document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && !mobileMenu.classList.contains('-translate-x-full')) {
          closeMobileMenu();
        }
      });
    }
  });
</script>
