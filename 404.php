<?php
$pageTitle = '404 - Page Not Found | Renova';
$metaDescription = 'Page not found. Return to Renova Creative home or contact us.';
$metaRobots = 'noindex, follow';
include 'includes/head.php';
include 'includes/navbar.php';
?>
<main>
  <section class="max-w-7xl mx-auto px-5 py-24">
    <div class="flex flex-col items-center justify-center text-center space-y-8 min-h-[60vh]">
      <!-- 404 Number -->
      <div class="relative">
        <h1 class="text-9xl md:text-[12rem] font-bold text-renovaBlue opacity-20 leading-none">
          404
        </h1>
        <div class="absolute inset-0 flex items-center justify-center">
          <h1 class="text-9xl md:text-[12rem] font-bold text-renovaBlue leading-none">
            404
          </h1>
        </div>
      </div>

      <!-- Error Message -->
      <div class="space-y-4 max-w-2xl">
        <h2 class="text-renovaBlue text-4xl font-bold">
          Page Not Found
        </h2>
        <p class="text-renovaBlue text-xl">
          Oops! The page you're looking for doesn't exist. It might have been moved, deleted, or the link you followed may be incorrect.
        </p>
      </div>

      <!-- Action Buttons -->
      <div class="flex flex-col md:flex-row md:space-x-6 pt-4">
        <a
          href="/home"
          class="p-3 px-8 mb-6 text-renovaBlue bg-renovaGreen rounded-full text-xl md:mb-0 hover:bg-renovaBrightGreen transition-colors duration-200 transform-gpu active:scale-95 transition-transform duration-150 focus:outline-none focus:ring-2 focus:ring-renovaGreen focus:ring-offset-2 text-center">
          Go Back Home
        </a>
        <a
          href="/contact"
          class="p-3 px-8 text-renovaBlue border-2 border-renovaGreen rounded-full text-xl hover:bg-renovaGreen hover:text-renovaBlue transition-colors duration-200 transform-gpu active:scale-95 transition-transform duration-150 focus:outline-none focus:ring-2 focus:ring-renovaGreen focus:ring-offset-2 text-center">
          Contact Us
        </a>
      </div>

      <!-- Decorative Elements -->
      <div class="pt-8">
        <div class="flex items-center justify-center space-x-2 text-renovaPaleWhite">
          <i class="fas fa-circle text-xs"></i>
          <i class="fas fa-circle text-sm"></i>
          <i class="fas fa-circle text-base"></i>
          <i class="fas fa-circle text-sm"></i>
          <i class="fas fa-circle text-xs"></i>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
