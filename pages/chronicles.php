<?php
$pageTitle = 'Renova | Chronicles';
$metaDescription = 'Renova Chronicles – news, updates, and stories from our technology and design studio. Insights on web development and creative solutions.';
$metaKeywords = 'Renova chronicles, company news, tech updates, design studio, Malawi';
include '../includes/head.php';
include '../includes/navbar.php';
?>
<!--Hero-->
<section id="hero" class="mx-auto px-5">
  <div
    class="relative flex flex-col bg-renova-gradient from-renovaBlue to-renovaBrightBlue justify-center items-center py-19 mx-auto w-full rounded-2xl overflow-hidden px-5">
    <!-- Mobile background image overlay -->
    <div class="md:hidden absolute inset-0 bg-cover bg-center bg-no-repeat rounded-2xl other-hero-bg"></div>
    <!-- Gradient overlay for mobile -->
    <div class="md:hidden absolute inset-0 bg-renova-gradient from-renovaBlue to-renovaBrightBlue opacity-70 rounded-2xl z-0"></div>
    <!-- Desktop background image overlay -->
    <div class="hidden md:block absolute inset-0 bg-cover bg-center bg-no-repeat rounded-2xl other-hero-bg"></div>
    <!-- Gradient overlay for desktop -->
    <div class="hidden md:block absolute inset-0 bg-renova-gradient from-renovaBlue to-renovaBrightBlue opacity-70 rounded-2xl z-0"></div>
    <div class="max-w-7xl mx-auto">
    <div class="bg-renovaPaleWhite px-7 py-2 border-2 rounded-full border-solid border-white mb-10 animate-on-scroll fade-in-up max-w-[400px] mx-auto">
      <h2 class="text-center text-white text-3xl">The Renova Chronicles</h2>
    </div>
    <img loading="lazy" src="../assets/images/Ellipse 8.svg" alt="Ellipse"
      class="absolute z-50 top-0 ml-16 mt-7 md:ml-56 md:mt-20 left-0 pointer-events-none animate-on-scroll fade-in" />
    <img loading="lazy" src="../assets/images/Group 6.svg" alt="Ellipse"
      class="absolute z-50 bottom-0 mr-20 mb-10 md:mr-40 md:mb-14 right-0 pointer-events-none animate-on-scroll fade-in" />
    <h1 class="text-white text-center justify-center text-4xl font-bold max-w-3xl animate-on-scroll fade-in-up">
      Stories of Solutions, Creativity and the Impact We Leave Behind
    </h1>
    </div>
  </div>
</section>
<?php
/* Chronicles Section coming soon do not delete code block*/
/*
<section id="chronicles" class="max-w-7xl mx-auto py-20 px-5">
  <div class="max-w-6xl mx-auto">
    <!-- Image Section -->
    <div class="flex flex-col md:flex-row gap-4 mb-8 animate-on-scroll fade-in-up">
      <!-- Main Image -->
      <div class="md:w-2/3 overflow-hidden rounded-2xl h-[200px] md:h-[500px] animate-on-scroll fade-in-left">
        <img loading="lazy"
          src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=600&fit=crop"
          alt="Story Image"
          class="w-full object-cover"
        />
      </div>
      <!-- Two Stacked Images -->
      <div class="hidden md:w-1/3 md:flex flex-col gap-4 animate-on-scroll fade-in-right">
        <div class="overflow-hidden rounded-2xl h-[243px]">
          <img loading="lazy"
            src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=300&fit=crop"
            alt="Story Image 2"
            class="w-full  object-cover"
          />
        </div>
        <div class="overflow-hidden rounded-2xl h-[243px]">
          <img loading="lazy"
            src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=300&fit=crop"
            alt="Story Image 3"
            class="w-full object-cover"
          />
        </div>
      </div>
    </div>

    <!-- Article Content Section -->
    <div class="flex flex-col animate-on-scroll fade-in-up">
      <!-- Title with Category Icons -->
      <div class="flex flex-col md:flex-row md:items-start gap-4 mb-3">
        <h2 class="text-renovaBlue text-3xl font-semibold flex-1 max-w-3xl">
          Stories of Creativity, Solutions, and the Impact We Leave Behind Branding & Identity design
        </h2>
        
        <!-- Category Icons -->
        <div class="flex gap-4 md:pt-2 ml-0 md:ml-auto">
          <div class="w-12 h-12 bg-renovaBlue rounded-full flex items-center justify-center">
            <i class="fas fa-paint-brush text-renovaGreen text-xl"></i>
          </div>
          <div class="w-12 h-12 border border-gray-300 bg-gray-100 rounded-full flex items-center justify-center">
            <i class="fas fa-code text-gray-400 text-xl"></i>
          </div>
          <div class="w-12 h-12 border border-gray-300 bg-gray-100 rounded-full flex items-center justify-center">
            <i class="fas fa-palette text-gray-400 text-xl"></i>
          </div>
        </div>
      </div>
      
      <!-- Article Details -->
      <div>
        <!-- Metadata -->
        <p class="text-gray-500 text-sm mb-6">
          Posted 3 days ago by Renova
        </p>
        
        <!-- Body Text -->
        <p class="text-gray-700 text-xl mb-6 leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
        
        <!-- Read More Button -->
        <button class="bg-renovaBlue text-white px-8 py-3 rounded-2xl font-semibold text-xl hover:bg-renovaGreen hover:text-renovaBlue transition-colors duration-200">
          Read More
        </button>
      </div>
    </div>
  </div>
</section>
*/
?>
<section id="coming-soon" class="max-w-7xl mx-auto py-20 px-5">
  <div class="max-w-6xl mx-auto">
    <h2 id="coming-soon-text" class="text-renovaBlue text-3xl font-semibold text-center"></h2>
    <p class="text-gray-700 text-xl mt-5 leading-relaxed text-center animate-on-scroll fade-in-up">
      We are working hard to bring you the best stories and updates.
    </p>
  </div>
</section>

<style>
  #coming-soon-text {
    min-height: 2.5rem;
  }
  
  .coming-soon-letter {
    display: inline-block;
    opacity: 0;
    transform: translateY(20px);
    animation: letterFadeIn 0.5s ease-out forwards;
  }
  
  @keyframes letterFadeIn {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  .coming-soon-space {
    display: inline-block;
    width: 0.3em;
  }
</style>

<script>
  window.addEventListener('DOMContentLoaded', function() {
    const comingSoonText = document.getElementById('coming-soon-text');
    if (comingSoonText) {
      const text = 'Coming Soon';
      const letters = text.split('');
      
      // Clear the text
      comingSoonText.textContent = '';
      
      // Add each letter with animation delay
      letters.forEach(function(letter, index) {
        const span = document.createElement('span');
        if (letter === ' ') {
          span.className = 'coming-soon-space';
          span.textContent = ' ';
        } else {
          span.className = 'coming-soon-letter';
          span.textContent = letter;
          span.style.animationDelay = (index * 0.1) + 's';
        }
        comingSoonText.appendChild(span);
      });
    }
  });
</script>


<?php include '../includes/call-to-action.php'; include '../includes/footer.php'; ?>
