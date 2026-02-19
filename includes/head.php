<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CK9JXXQQNE"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-CK9JXXQQNE');
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <?php
    // Determine asset path based on where head.php is included from
    // Use SCRIPT_FILENAME or __FILE__ to get actual file path for more reliable detection
    $scriptPath = isset($_SERVER['SCRIPT_FILENAME']) ? $_SERVER['SCRIPT_FILENAME'] : '';
    $phpSelf = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : '';
    
    // Check if we're in pages directory or if this is 404.php (which is in root)
    $is404 = (basename($phpSelf) === '404.php' || basename($scriptPath) === '404.php');
    $isInPagesDir = (!$is404) && ((strpos($scriptPath, DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR) !== false) || 
                    (strpos($phpSelf, '/pages/') !== false));
    
    // For 404 page served via ErrorDocument, use absolute path from document root
    if ($is404) {
      $documentRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
      $scriptDir = str_replace('\\', '/', dirname($scriptPath));
      $relativePath = str_replace($documentRoot, '', $scriptDir);
      $baseUrl = 'http' . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $relativePath;
      $assetPath = $baseUrl . '/assets';
    } else {
      $assetPath = $isInPagesDir ? '../assets' : 'assets';
    }
    // Base URL for canonical, OG, sitemap (production-ready)
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
    $baseUrl = $protocol . '://' . $host;
    $canonicalUrl = $baseUrl . (isset($_SERVER['REQUEST_URI']) ? strtok($_SERVER['REQUEST_URI'], '?') : '/');
    // SEO defaults (pages can override via $metaDescription, $metaKeywords, $metaRobots, $ogImage)
    if (!isset($metaDescription)) $metaDescription = 'Renova Creative – Technology and design partner. We build systems, web development, and brand identity for ambitious businesses.';
    if (!isset($metaKeywords)) $metaKeywords = 'Renova, Renova Creative, web development, systems development, brand identity, technology partner, Malawi, software, design, business solutions';
    if (!isset($metaRobots)) $metaRobots = 'index, follow';
    if (!isset($ogImage)) $ogImage = '/assets/images/we-are.jpg';
    $ogImageUrl = (strpos($ogImage, 'http') === 0) ? $ogImage : $baseUrl . (strpos($ogImage, '/') === 0 ? $ogImage : '/' . $ogImage);
    $pageTitleForMeta = isset($pageTitle) ? $pageTitle : 'Renova | Technology & Design Partner';
    ?>
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>" />
    <meta name="keywords" content="<?php echo htmlspecialchars($metaKeywords); ?>" />
    <meta name="robots" content="<?php echo htmlspecialchars($metaRobots); ?>" />
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>" />
    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Renova Creative" />
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitleForMeta); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>" />
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>" />
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImageUrl); ?>" />
    <meta property="og:locale" content="en_US" />
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitleForMeta); ?>" />
    <meta name="twitter:description" content="<?php echo htmlspecialchars($metaDescription); ?>" />
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImageUrl); ?>" />
    <link rel="icon" type="image/svg+xml" href="<?php echo $assetPath; ?>/images/icons/Renova R.svg" />
    <link href="<?php echo $assetPath; ?>/css/main.css" rel="stylesheet" />
    <?php if (isset($additionalCSS)): ?>
      <?php echo $additionalCSS; ?>
    <?php endif; ?>
    <?php if (isset($additionalScripts)): ?>
      <?php echo $additionalScripts; ?>
    <?php endif; ?>
    <style>
      /* Navbar button slide effect */
      .nav-button-slide {
        position: relative;
        overflow: hidden;
      }
      .nav-button-slide::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background-color: hsl(70, 93%, 44%);
        transition: left 0.5s ease-out;
        z-index: 0;
        border-radius: 9999px;
      }
      .nav-button-slide:hover::before {
        left: 0;
      }
      .nav-button-slide > span {
        position: relative;
        z-index: 1;
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
      
      /* Tech pattern backgrounds */
      .tech-pattern-bg {
        background-image: 
          linear-gradient(45deg, transparent 25%, rgba(70, 93%, 44%, 0.05) 25%),
          linear-gradient(-45deg, transparent 25%, rgba(70, 93%, 44%, 0.05) 25%),
          linear-gradient(45deg, rgba(70, 93%, 44%, 0.05) 75%, transparent 75%),
          linear-gradient(-45deg, rgba(70, 93%, 44%, 0.05) 75%, transparent 75%);
        background-size: 40px 40px;
        background-position: 0 0, 0 20px, 20px -20px, -20px 0px;
      }
      
      .code-glow {
        box-shadow: 0 0 20px rgba(70, 93%, 44%, 0.3);
      }
      
      /* Hexagon pattern */
      .hexagon-pattern {
        background-image: 
          radial-gradient(circle at 50% 50%, rgba(70, 93%, 44%, 0.1) 1px, transparent 1px);
        background-size: 30px 30px;
      }
      
      /* Other Hero Background - for services, portfolio, chronicles, contact, insideRenova pages */
      .other-hero-bg {
        background-image: url('<?php echo $assetPath; ?>/images/other heros.jpg');
      }
      
      /* Mobile Menu Animations */
      .mobile-menu-item {
        opacity: 0;
        transform: translateX(-20px);
        transition: opacity 0.4s ease-out, transform 0.4s ease-out;
      }
      
      .mobile-menu-item.animate-in {
        opacity: 1;
        transform: translateX(0);
      }
      
      .mobile-menu-link {
        opacity: 0;
        transform: translateX(-20px);
        transition: opacity 0.4s ease-out, transform 0.4s ease-out;
      }
      
      .mobile-menu-link.animate-in {
        opacity: 1;
        transform: translateX(0);
      }
    </style>
    <script>
      // Navbar shadow on scroll
      window.addEventListener('DOMContentLoaded', function() {
        const navbar = document.getElementById('main-navbar');
        if (navbar) {
          window.addEventListener('scroll', function() {
            if (window.scrollY > 10) {
              navbar.classList.add('shadow-md');
            } else {
              navbar.classList.remove('shadow-md');
            }
          });
        }
      });
    </script>
    <!-- JSON-LD for Google -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "<?php echo htmlspecialchars($baseUrl); ?>/#organization",
          "name": "Renova Creative",
          "url": "<?php echo htmlspecialchars($baseUrl); ?>",
          "description": "Technology and design partner for ambitious businesses. Systems development, web development, and brand identity.",
          "sameAs": []
        },
        {
          "@type": "WebSite",
          "name": "Renova Creative",
          "url": "<?php echo htmlspecialchars($baseUrl); ?>",
          "description": "<?php echo htmlspecialchars($metaDescription); ?>",
          "publisher": { "@id": "<?php echo htmlspecialchars($baseUrl); ?>/#organization" }
        }
      ]
    }
    </script>
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Renova | Technology & Design Partner'; ?></title>
  </head>
  <body>
