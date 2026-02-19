<?php
$pageTitle = 'Renova | Inside Renova';
$metaDescription = 'Inside Renova Creative: our story, mission, vision, goals, and the team. A technology and design partner for ambitious businesses.';
$metaKeywords = 'about Renova, our story, mission vision, technology company, design studio, Malawi';
include '../includes/head.php';
include '../includes/navbar.php';
?>
<main>
    <!--Hero-->
    <section id="hero" class="px-5">
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
                <div class="bg-renovaPaleWhite px-7 py-2 border-2 rounded-full border-solid border-white mb-10 animate-on-scroll fade-in-up max-w-[300px] mx-auto">
                    <h2 class="text-center text-white text-3xl">Inside Renova</h2>
                </div>
                <img loading="lazy" src="../assets/images/Ellipse 8.svg" alt="Ellipse"
                    class="absolute z-50 top-0 ml-16 mt-7 md:ml-56 md:mt-20 left-0 pointer-events-none animate-on-scroll fade-in" />
                <img loading="lazy" src="../assets/images/Group 6.svg" alt="Ellipse"
                    class="absolute z-50 bottom-0 mr-20 mb-10 md:mr-40 md:mb-14 right-0 pointer-events-none animate-on-scroll fade-in" />
                <h1 class="text-white text-center justify-center text-4xl font-bold animate-on-scroll fade-in-up">
                    Connecting the Future, Together.
                </h1>
            </div>
        </div>
    </section>
    <!--About us-->
    <section id="About Us">
        <div class="max-w-7xl mx-auto">
            <div
                class="flex flex-col md:flex-row items-center md:items-start justify-center md:justify-start w-full px-5 md:px-32 md:space-x-10 space-y-6 mt-20">
                <div class="w-full md:w-2/5 flex justify-center md:justify-end px-5 md:px-0 mx-auto animate-on-scroll fade-in-left">
                    <div><img loading="lazy" src="<?php echo $assetPath; ?>/images/about.jpg" alt="About Image"></div>
                </div>

                <div class="flex flex-col space-y-6 items-center  md:items-start w-full md:w-3/5 text-center md:text-left animate-on-scroll fade-in-right">
                    <h3 class="text-renovaGreen text-center text-xl font-semibold">
                        About Us
                    </h3>
                    <h2 class="text-3xl font-semibold text-center md:text-left text-renovaBlue">
                        The Story Behind Renova Creative.
                    </h2>
                    <p class="text-xl px-5 md:px-0 text-justify md:text-left px-5 md:px-0"
                        style="text-align:justify; text-align-last:left; -moz-text-align-last:left; -webkit-text-align-last:left;">
                        Renova began its journey in 2020 as Renda Graphics, offering creative design services that helped businesses
                        shape their visual identities. After five years of growth, learning, and collaboration with clients, we
                        rebranded in 2025 to become Renova, a technology and design agency. Today, we specialize in web platforms and
                        enterprise systems, building scalable solutions that power businesses. We combine cutting-edge technology with
                        strategic design to deliver comprehensive solutions that drive growth and innovation.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--Mission cards-->
    <section id="Mission Vision Goals">
        <div class="max-w-7xl mx-auto flex justify-center my-20 px-5">
            <div class="flex flex-col space-x-0 space-y-6 md:space-y-0 md:space-x-4 md:flex-row animate-card-container">
                <div class="w-full md:w-1/2">
                    <!--Cardleft-->
                    <div
                        class="bg-renova-gradient from-renovaBlue to-renovaBrightBlue flex flex-col w-full max-w-[550px] p-8 md:p-12 rounded-[40px] mx-auto md:h-full space-y-4 md:pb-28"
                        style="aspect-ratio: 1 / 1;">
                        <div class="flex flex-col md:flex-row items-start md:items-center w-full">
                            <div class="w-full md:w-1/5 flex justify-start md:justify-start mb-4 md:mb-0">
                                <div class="bg-renovaGreen rounded-full w-20 h-20 flex items-center justify-center flex-shrink-0 md:mr-12 aspect-square">
                                    <i class="fas fa-bullseye text-white text-4xl"></i>
                                </div>
                            </div>
                            <div class="w-full md:w-4/5">
                                <h2 class="text-3xl font-semibold text-left md:ml-10 text-renovaGreen">
                                    Our Goals
                                </h2>
                            </div>
                        </div>
                        <div class="w-full flex flex-row">
                            <div class="w-1/5 flex items-center justify-center mx-auto h-full">
                                <img loading="lazy" src="../assets/images/icons/Polygon 1.svg" alt="Bullet" class="max-w-full h-auto" />
                            </div>
                            <div class="w-4/5">
                                <p class="text-xl text-white ml-10">
                                    Deliver solution-focused systems tailored to each client’s unique context.
                                </p>
                            </div>
                        </div>
                        <div class="w-full flex flex-row">
                            <div class="w-1/5 flex items-center justify-center mx-auto h-full">
                                <img loading="lazy" src="../assets/images/icons/Polygon 1.svg" alt="Bullet" class="max-w-full h-auto" />
                            </div>
                            <div class="w-4/5">
                                <p class="text-xl text-white ml-10">
                                    Build trusted, long-term partnerships with businesses across Malawi and beyond.
                                </p>
                            </div>
                        </div>
                        <div class="w-full flex flex-row">
                            <div class="w-1/5 flex items-center justify-center mx-auto h-full">
                                <img loading="lazy" src="../assets/images/icons/Polygon 1.svg" alt="Bullet" class="max-w-full h-auto" />
                            </div>
                            <div class="w-4/5">
                                <p class="text-xl text-white ml-10">
                                    Expand into a full-service digital agency rooted in collaboration, offering not only design and strategy but also robust execution.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <!--cardRight-->
                    <div class="flex flex-col w-full max-w-[550px] rounded-[40px] mx-auto space-y-4 animate-card"
                        style="aspect-ratio: 1 / 1;">
                        <!--Card top-->
                        <div class="bg-renovaGreen rounded-[40px] p-8 md:p-10">
                            <div class="flex flex-col md:flex-row items-start md:items-center w-full">
                                <div class="w-full md:w-1/5 flex justify-start md:justify-start mb-4 md:mb-0">
                                    <div class="bg-renovaBlue rounded-full w-20 h-20 flex items-center justify-center flex-shrink-0 md:mr-12 aspect-square">
                                        <i class="fas fa-rocket text-white text-4xl"></i>
                                    </div>
                                </div>
                                <div class="w-full md:w-4/5">
                                    <h2 class="text-3xl font-semibold text-left md:ml-10 text-renovaBlue">
                                        Our Mission
                                    </h2>
                                </div>
                            </div>
                            <div class="w-full flex flex-row">
                                <div class="w-1/5 flex items-center justify-center mx-auto h-full">
                                </div>
                                <div class="w-4/5">
                                    <p class="text-xl text-renovaBlue ml-10 mt-5 md:mt-0">
                                        To engineer systems and craft designs that empower businesses to grow, connect, and thrive by solving real challenges, strengthening identity, and delivering lasting value.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--Card bottom-->
                        <div class="bg-renova-gradient from-renovaBlue to-renovaBrightBlue rounded-[40px] p-8 md:p-10">
                            <div class="flex flex-col md:flex-row items-start md:items-center w-full">
                                <div class="w-full md:w-1/5 flex justify-start md:justify-start mb-4 md:mb-0">
                                    <div class="bg-renovaGreen flex items-center justify-center rounded-full w-20 h-20 flex-shrink-0 md:mr-12 aspect-square">
                                        <i class="fas fa-eye text-white text-4xl"></i>
                                    </div>
                                </div>
                                <div class="w-full md:w-4/5">
                                    <h2 class="text-3xl font-semibold text-left md:ml-10 text-renovaGreen">
                                        Our Vision
                                    </h2>
                                </div>
                            </div>
                            <div class="w-full flex flex-row">
                                <div class="w-1/5 flex items-center justify-center mx-auto h-full">
                                </div>
                                <div class="w-4/5">
                                    <p class="text-xl text-white ml-10 mt-5 md:mt-0">
                                        To be a catalyst for digital transformation in Malawi, building inclusive systems and designs that drive innovation, trust, and long-term value.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include '../includes/call-to-action.php'; ?>
    <!--tagline section-->
    <section id="Tagline">
        <div class="max-w-7xl mx-auto mt-20">
            <div class="flex flex-col space-y-6 justify-center mx-auto max-w-[950px] text-center p-5 mb-20 animate-on-scroll fade-in-up">
                <h3 class="text-renovaGreen text-center text-xl font-semibold">
                    Our Tagline
                </h3>
                <h2 class="text-3xl font-semibold text-center text-renovaBlue">
                    Future. Connected.
                </h2>
                <p class="text-xl px-5 md:px-0  px-5 md:px-0">
                    This isn’t just a phrase, it’s our technology philosophy. We build systems with the future in mind, connecting people, platforms and processes so businesses can operate smarter and scale faster. Every solution is designed to integrate seamlessly, adapt over time and create meaningful, reliable connections that last.
                </p>
            </div>
        </div>
    </section>
    <section id="statistics" class="max-w-7xl mx-auto relative z-20 px-4 md:px-0">
        <div class="w-full">
            <div class="flex flex-col md:flex-row w-full max-w-[1100px] mx-auto bg-renova-gradient from-renovaBlue to-renovaBrightBlue justify-center items-center py-8 md:py-12 rounded-3xl gap-6 md:gap-12 lg:gap-18">
                <div class="flex flex-col md:flex-row items-center text-center md:text-left">
                    <p class="text-5xl font-semibold text-white md:mr-5 mb-2 md:mb-0">
                        <span class="stat-number" data-target="6" data-suffix="+">0</span><span class="stat-suffix">+</span>
                    </p>
                    <h3 class="text-renovaGreen text-lg md:text-xl font-semibold">Years of Experience</h3>
                </div>

                <div class="flex flex-col md:flex-row items-center text-center md:text-left">
                    <p class="text-5xl font-semibold text-white md:mr-5 mb-2 md:mb-0">
                        <span class="stat-number" data-target="50" data-suffix="+">0</span><span class="stat-suffix">+</span>
                    </p>
                    <h3 class="text-renovaGreen text-lg md:text-xl font-semibold">Clients Served</h3>
                </div>

                <div class="flex flex-col md:flex-row items-center text-center md:text-left">
                    <p class="text-5xl font-semibold text-white md:mr-5 mb-2 md:mb-0">
                        <span class="stat-number" data-target="90" data-suffix="%">0</span><span class="stat-suffix">%</span>
                    </p>
                    <h3 class="text-renovaGreen text-lg md:text-xl font-semibold">Satisfaction Rate</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="Clients Partners" class="mx-auto relative z-0 -mt-18 bg-renovaPaleWhite">
        <div class="  pt-38 pb-20 max-w-7xl mx-auto">
            <div class="flex flex-col justify-center mx-auto max-w-[950px] text-center p-5 mb-20">
                <div class="flex flex-col space-y-6 justify-center mx-auto">
                    <h3 class="text-renovaGreen text-center text-xl font-semibold">
                        Our Clients, Our Partners
                    </h3>
                    <h2 class="text-3xl font-semibold text-center text-renovaBlue mx-auto max-w-[750px]">
                        Collaboration is at the heart of everything we do. Here are some of the brands we've had the honour to work with.
                    </h2>
                </div>
                <div class="mt-20 overflow-hidden">
                    <div class="logo-carousel">
                        <div class="logo-track">
                            <!-- Logo items - duplicate for seamless loop -->
                            <div class="logo-item">
                                <div class="logo-placeholder"><img loading="lazy" src="../assets/images/logos/First Car Hire.svg" alt="Logo" class="w-full h-full object-contain logo-img-sm"></div>
                            </div>
                            <div class="logo-item">
                                <div class="logo-placeholder"><img loading="lazy" src="../assets/images/logos/Legend Motors logo.svg" alt="Logo" class="w-full h-full object-contain"></div>
                            </div>
                            <div class="logo-item">
                                <div class="logo-placeholder"><img loading="lazy" src="../assets/images/logos/Anivet Pharma logo.svg" alt="Logo" class="w-full h-full object-contain"></div>
                            </div>
                            <div class="logo-item">
                                <div class="logo-placeholder"><img loading="lazy" src="<?php echo $assetPath; ?>/images/logos/careline.svg" alt="Logo" class="w-full h-full object-contain"></div>
                            </div>
                            <div class="logo-item">
                                <div class="logo-placeholder"><img loading="lazy" src="../assets/images/logos/hazon logo PNG.png" alt="Logo" class="w-full h-full object-contain"></div>
                            </div>
                            <div class="logo-item">
                                <div class="logo-placeholder"><img loading="lazy" src="../assets/images/logos/Omni Furniture vertical green.svg" alt="Logo" class="w-full h-full object-contain logo-img-sm"></div>
                            </div>
                            <!-- Duplicate for seamless loop -->
                            <div class="logo-item">
                                <div class="logo-placeholder"><img loading="lazy" src="../assets/images/logos/First Car Hire.svg" alt="Logo" class="w-full h-full object-contain logo-img-sm"></div>
                            </div>
                            <div class="logo-item">
                                <div class="logo-placeholder"><img loading="lazy" src="../assets/images/logos/Legend Motors logo.svg" alt="Logo" class="w-full h-full object-contain"></div>
                            </div>
                            <div class="logo-item">
                                <div class="logo-placeholder"><img loading="lazy" src="../assets/images/logos/Anivet Pharma logo.svg" alt="Logo" class="w-full h-full object-contain"></div>
                            </div>
                            <div class="logo-item">
                                <div class="logo-placeholder"><img loading="lazy" src="<?php echo $assetPath; ?>/images/logos/careline.svg" alt="Logo" class="w-full h-full object-contain"></div>
                            </div>
                            <div class="logo-item">
                                <div class="logo-placeholder"><img loading="lazy" src="../assets/images/logos/hazon logo PNG.png" alt="Logo" class="w-full h-full object-contain"></div>
                            </div>
                            <div class="logo-item">
                                <div class="logo-placeholder"><img loading="lazy" src="../assets/images/logos/Omni Furniture vertical green.svg" alt="Logo" class="w-full h-full object-contain logo-img-sm"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Infinite Circular Logo Carousel */
        .logo-carousel {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .logo-track {
            display: flex;
            width: fit-content;
            animation: scroll-logos 30s linear infinite;
        }

        .logo-item {
            flex-shrink: 0;
            width: 200px;
            height: 120px;
            margin: 0 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(259, 73%, 28%, 0.1), rgba(259, 80%, 39%, 0.1));
            border: 2px solid rgba(259, 73%, 28%, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(259, 73%, 28%, 0.5);
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .logo-item img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            filter: grayscale(100%);
            opacity: 0.6;
            transition: all 0.3s ease;
        }

        .logo-placeholder .logo-img-sm {
            max-width: 75%;
            max-height: 75%;
        }

        .logo-item:hover img {
            filter: grayscale(0%);
            opacity: 1;
        }

        @keyframes scroll-logos {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Pause animation on hover */
        .logo-carousel:hover .logo-track {
            animation-play-state: paused;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .logo-item {
                width: 150px;
                height: 90px;
                margin: 0 20px;
            }
        }
    </style>

    <script>
        // Statistics counter animation
        window.addEventListener('DOMContentLoaded', function() {
            const statNumbers = document.querySelectorAll('.stat-number');
            let hasAnimated = false;

            function animateValue(element, start, end, duration, suffix) {
                const isPercentage = suffix === '%';
                let startTimestamp = null;

                function step(timestamp) {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);

                    // Easing function for smooth animation
                    const easeOutQuart = 1 - Math.pow(1 - progress, 4);

                    const current = Math.floor(start + (end - start) * easeOutQuart);

                    if (isPercentage) {
                        element.textContent = current;
                    } else {
                        element.textContent = current;
                    }

                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    } else {
                        element.textContent = end;
                    }
                }

                window.requestAnimationFrame(step);
            }

            function checkIfInView() {
                const statsSection = document.getElementById('statistics');
                if (!statsSection || hasAnimated) return;

                const rect = statsSection.getBoundingClientRect();
                const windowHeight = window.innerHeight || document.documentElement.clientHeight;

                // Check if section is in view (when top of section is visible)
                if (rect.top < windowHeight && rect.bottom > 0) {
                    hasAnimated = true;

                    statNumbers.forEach(function(element) {
                        const target = parseInt(element.getAttribute('data-target'));
                        const suffix = element.getAttribute('data-suffix');
                        animateValue(element, 0, target, 2000, suffix); // 2 second animation
                    });
                }
            }

            // Check on scroll
            window.addEventListener('scroll', checkIfInView);

            // Initial check (in case section is already visible)
            checkIfInView();
        });
    </script>

    <?php include '../includes/footer.php'; ?>