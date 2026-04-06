<?php
$pageTitle = 'Renova | Castle Gremu - Branding Project';
$metaDescription = 'Castle Gremu brand identity project by Renova Creative. Branding and design case study.';
$metaKeywords = 'Castle Gremu, branding project, brand identity, Renova portfolio';
$additionalScripts = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>';
include '../includes/head.php';
include '../includes/navbar.php';
?>

<!-- Project Header -->
<section class="max-w-7xl mx-auto px-5 py-12">
  <div class="max-w-4xl mx-auto">
    <div class="mb-6">
      <a href="/portfolio" class="text-renovaBlue hover:text-renovaGreen transition-colors inline-flex items-center gap-2 mb-4">
        <i class="fas fa-arrow-left"></i>
        <span>Back to Portfolio</span>
      </a>
    </div>
    <h1 class="text-4xl md:text-5xl font-bold text-renovaBlue mb-6 animate-on-scroll fade-in-up">
      Castle Gremu
    </h1>
    <div class="bg-renovaGreen text-renovaBlue px-4 py-2 rounded-full inline-block mb-6">
      <span class="font-semibold">Branding</span>
    </div>
    <div class="prose max-w-none animate-on-scroll fade-in-up">
      <h2 class="text-2xl font-semibold text-renovaBlue mb-4">Project Aim</h2>
      <p class="text-gray-700 text-lg leading-relaxed">
        To create a distinctive and memorable brand identity for Castle Gremu that captures their unique character and values. The branding should establish a strong visual presence that communicates quality, authenticity, and professionalism while creating a lasting impression in their market.
      </p>
    </div>
  </div>
</section>

<!-- PDF Preview Section -->
<section class="max-w-7xl mx-auto px-5 pb-20">
  <div class="max-w-6xl mx-auto">
    <div id="pdf-preview-container" class="bg-white rounded-2xl shadow-lg overflow-hidden animate-on-scroll fade-in-up cursor-pointer" onclick="openPdfModal()">
      <div class="bg-renovaBlue text-white px-4 py-3 text-center">
        <p class="font-semibold">Click to view full presentation</p>
      </div>
      <div id="pdf-preview" class="bg-gray-100 flex items-center justify-center min-h-[600px] p-4">
        <div id="pdf-preview-loading" class="text-center">
          <div class="inline-block animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-renovaGreen"></div>
          <p class="mt-4 text-gray-600">Loading preview...</p>
        </div>
        <canvas id="pdf-preview-canvas" class="max-w-full shadow-lg hidden"></canvas>
      </div>
    </div>
  </div>
</section>

<!-- PDF Modal -->
<div id="pdf-modal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden overflow-y-auto">
  <div class="min-h-screen py-8 px-4">
    <div class="max-w-6xl mx-auto">
      <!-- Modal Toolbar -->
      <div id="pdf-toolbar" class="bg-renovaBlue text-white px-4 py-3 flex flex-col md:flex-row items-center justify-between gap-3 mb-4 rounded-t-2xl sticky top-0 z-10">
        <div class="flex items-center gap-2 md:gap-4 w-full md:w-auto justify-between md:justify-start">
          <button id="pdf-prev" class="px-3 md:px-4 py-2 bg-renovaGreen text-renovaBlue rounded-lg hover:bg-renovaBrightGreen transition-colors font-semibold text-sm md:text-base">
            <i class="fas fa-chevron-left"></i> <span class="hidden md:inline">Previous</span>
          </button>
          <span class="text-xs md:text-sm">
            Page <span id="pdf-page-num">1</span> of <span id="pdf-page-count">-</span>
          </span>
          <button id="pdf-next" class="px-3 md:px-4 py-2 bg-renovaGreen text-renovaBlue rounded-lg hover:bg-renovaBrightGreen transition-colors font-semibold text-sm md:text-base">
            <span class="hidden md:inline">Next</span> <i class="fas fa-chevron-right"></i>
          </button>
        </div>
        <div class="flex items-center gap-2">
          <button id="pdf-zoom-out" class="hidden md:block px-3 py-2 bg-renovaGreen text-renovaBlue rounded-lg hover:bg-renovaBrightGreen transition-colors">
            <i class="fas fa-search-minus"></i>
          </button>
          <button id="pdf-zoom-in" class="hidden md:block px-3 py-2 bg-renovaGreen text-renovaBlue rounded-lg hover:bg-renovaBrightGreen transition-colors">
            <i class="fas fa-search-plus"></i>
          </button>
          <a id="pdf-download" href="../assets/images/portfolio/Castle_Gremu/Castle Gremu Brand Identity Designs.pdf" download class="px-3 py-2 bg-renovaGreen text-renovaBlue rounded-lg hover:bg-renovaBrightGreen transition-colors">
            <i class="fas fa-download"></i>
          </a>
          <button id="pdf-close" class="px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- Modal Content - Vertical Scroll -->
      <div id="pdf-modal-content" class="bg-white rounded-b-2xl p-4 md:p-8">
        <div id="pdf-pages-container" class="space-y-4">
          <!-- PDF pages will be rendered here vertically -->
        </div>
        <div id="pdf-modal-loading" class="text-center py-12">
          <div class="inline-block animate-spin rounded-full h-12 w-12 border-t-2 border-b-2 border-renovaGreen"></div>
          <p class="mt-4 text-gray-600">Loading PDF...</p>
        </div>
        <div id="pdf-modal-error" class="hidden text-center py-12 text-red-600">
          <i class="fas fa-exclamation-triangle text-4xl mb-4"></i>
          <p>Failed to load PDF. Please try again later.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  #pdf-preview-canvas {
    border: 1px solid #e5e7eb;
  }
  .pdf-page-canvas {
    width: 100%;
    height: auto;
    border: 1px solid #e5e7eb;
    margin-bottom: 1rem;
    display: block;
  }
  #pdf-modal {
    backdrop-filter: blur(4px);
  }
  body.modal-open {
    overflow: hidden;
  }
</style>

<script>
  // Set up PDF.js worker
  pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

  let pdfDoc = null;
  let currentPageNum = 1;
  let scale = 1.5;
  const pdfPath = '../assets/images/portfolio/Castle_Gremu/Castle Gremu Brand Identity Designs.pdf';

  // Load PDF and render preview (first page only)
  function loadPdfPreview() {
    pdfjsLib.getDocument(pdfPath).promise.then(function(pdf) {
      pdfDoc = pdf;
      // Render first page as preview
      pdf.getPage(1).then(function(page) {
        const viewport = page.getViewport({ scale: 1.0 });
        const canvas = document.getElementById('pdf-preview-canvas');
        const context = canvas.getContext('2d');
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        const renderContext = {
          canvasContext: context,
          viewport: viewport
        };
        page.render(renderContext).promise.then(function() {
          document.getElementById('pdf-preview-loading').classList.add('hidden');
          canvas.classList.remove('hidden');
        });
      });
    }).catch(function(error) {
      console.error('Error loading PDF preview:', error);
    });
  }

  // Render all pages vertically in modal
  function renderAllPages() {
    if (!pdfDoc) return;
    
    const container = document.getElementById('pdf-pages-container');
    container.innerHTML = '';
    document.getElementById('pdf-modal-loading').classList.remove('hidden');
    document.getElementById('pdf-modal-error').classList.add('hidden');

    const renderPromises = [];
    for (let i = 1; i <= pdfDoc.numPages; i++) {
      renderPromises.push(
        pdfDoc.getPage(i).then(function(page) {
          const viewport = page.getViewport({ scale: scale });
          const canvas = document.createElement('canvas');
          canvas.className = 'pdf-page-canvas';
          canvas.id = 'pdf-page-' + i;
          const context = canvas.getContext('2d');
          canvas.height = viewport.height;
          canvas.width = viewport.width;

          const renderContext = {
            canvasContext: context,
            viewport: viewport
          };
          return page.render(renderContext).promise.then(function() {
            container.appendChild(canvas);
          });
        })
      );
    }

    Promise.all(renderPromises).then(function() {
      document.getElementById('pdf-modal-loading').classList.add('hidden');
      updatePageIndicator();
    }).catch(function(error) {
      console.error('Error rendering pages:', error);
      document.getElementById('pdf-modal-loading').classList.add('hidden');
      document.getElementById('pdf-modal-error').classList.remove('hidden');
    });
  }

  function updatePageIndicator() {
    if (!pdfDoc) return;
    const viewportHeight = window.innerHeight;
    const scrollTop = document.getElementById('pdf-modal-content').scrollTop || window.pageYOffset;
    
    // Find which page is currently in view
    let currentPage = 1;
    const pages = document.querySelectorAll('.pdf-page-canvas');
    pages.forEach(function(page, index) {
      const rect = page.getBoundingClientRect();
      if (rect.top <= viewportHeight / 2 && rect.bottom >= viewportHeight / 2) {
        currentPage = index + 1;
      }
    });
    
    currentPageNum = currentPage;
    document.getElementById('pdf-page-num').textContent = currentPageNum;
    document.getElementById('pdf-page-count').textContent = pdfDoc.numPages;
  }

  function openPdfModal() {
    if (!pdfDoc) {
      // Load PDF if not loaded
      pdfjsLib.getDocument(pdfPath).promise.then(function(pdf) {
        pdfDoc = pdf;
        document.getElementById('pdf-page-count').textContent = pdf.numPages;
        renderAllPages();
        document.getElementById('pdf-modal').classList.remove('hidden');
        document.body.classList.add('modal-open');
      }).catch(function(error) {
        console.error('Error loading PDF:', error);
        document.getElementById('pdf-modal-error').classList.remove('hidden');
      });
    } else {
      renderAllPages();
      document.getElementById('pdf-modal').classList.remove('hidden');
      document.body.classList.add('modal-open');
    }
  }

  function closePdfModal() {
    document.getElementById('pdf-modal').classList.add('hidden');
    document.body.classList.remove('modal-open');
  }

  function scrollToPage(pageNum) {
    const pageElement = document.getElementById('pdf-page-' + pageNum);
    if (pageElement) {
      pageElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
      currentPageNum = pageNum;
      updatePageIndicator();
    }
  }

  function onPrevPage() {
    if (currentPageNum <= 1) return;
    scrollToPage(currentPageNum - 1);
  }

  function onNextPage() {
    if (!pdfDoc || currentPageNum >= pdfDoc.numPages) return;
    scrollToPage(currentPageNum + 1);
  }

  function onZoomIn() {
    scale += 0.25;
    renderAllPages();
  }

  function onZoomOut() {
    if (scale <= 0.5) return;
    scale -= 0.25;
    renderAllPages();
  }

  // Event listeners
  document.addEventListener('DOMContentLoaded', function() {
    loadPdfPreview();
    
    document.getElementById('pdf-close').addEventListener('click', closePdfModal);
    document.getElementById('pdf-prev').addEventListener('click', onPrevPage);
    document.getElementById('pdf-next').addEventListener('click', onNextPage);
    document.getElementById('pdf-zoom-in').addEventListener('click', onZoomIn);
    document.getElementById('pdf-zoom-out').addEventListener('click', onZoomOut);
    
    // Close modal on backdrop click
    document.getElementById('pdf-modal').addEventListener('click', function(e) {
      if (e.target === this) {
        closePdfModal();
      }
    });
    
    // Close modal on Escape key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && !document.getElementById('pdf-modal').classList.contains('hidden')) {
        closePdfModal();
      }
    });
    
    // Update page indicator on scroll
    const modalContent = document.getElementById('pdf-modal-content');
    if (modalContent) {
      modalContent.addEventListener('scroll', updatePageIndicator);
    }
  });
</script>

<?php include '../includes/call-to-action.php'; ?>
<?php include '../includes/footer.php'; ?>
