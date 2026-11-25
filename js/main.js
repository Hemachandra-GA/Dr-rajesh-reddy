/* ==========================================================================
   Dr. Rajesh Reddy Neurosurgery - Main JavaScript
   ========================================================================== */

function initAll() {
  if (window.__drRajeshReddyInitialized) return;
  window.__drRajeshReddyInitialized = true;

  initFAQ();
  initReviewsSlider();
  initModal();
  initMobileNav();
  initSmoothScroll();
  initSmartHeader();
  initLazyScrollAnimations();
  initSpecTabs();
  initScrollSpy();
  initActiveMenu();
  initImageZoom();
  initStatCounters();
  initMobileFloatTriggers();
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initAll);
} else {
  initAll();
}

/**
 * ScrollSpy: Highlight active section link in left sidebar on scroll
 */
function initScrollSpy() {
  const sidebarLinks = document.querySelectorAll('.pillar-sidebar-nav a[href^="#"], .sidebar-nav-link[href^="#"]');
  if (sidebarLinks.length === 0) return;

  const sections = [];
  sidebarLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (!href || href === '#') return;
    const targetId = href.substring(1);
    const targetSection = document.getElementById(targetId);
    if (targetSection) {
      sections.push({ targetSection, link });
    }
  });

  if (sections.length === 0) return;

  function updateActiveLink() {
    const scrollPos = window.scrollY + 160; // Offset for header height and comfortable top threshold

    let current = sections[0];
    for (let i = 0; i < sections.length; i++) {
      if (scrollPos >= sections[i].targetSection.offsetTop) {
        current = sections[i];
      }
    }

    sections.forEach(item => {
      if (item === current) {
        item.link.classList.add('active');
      } else {
        item.link.classList.remove('active');
      }
    });
  }

  window.addEventListener('scroll', updateActiveLink, { passive: true });
  updateActiveLink(); // Initial check on page load
}

/**
 * Specialization Vertical Tabs Toggle
 */
function initSpecTabs() {
  const tabBtns = document.querySelectorAll('.spec-tab-btn');
  const tabPanels = document.querySelectorAll('.spec-tab-panel');

  if (tabBtns.length === 0) return;

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      // Remove active from all buttons
      tabBtns.forEach(b => {
        b.classList.remove('active');
        const icon = b.querySelector('.icon');
        if (icon) icon.textContent = '+';
      });
      // Remove active from all panels
      tabPanels.forEach(p => p.classList.remove('active'));

      // Add active to clicked button
      btn.classList.add('active');
      const icon = btn.querySelector('.icon');
      if (icon) icon.textContent = '-';

      // Show target panel
      const targetId = btn.getAttribute('data-target');
      const targetPanel = document.getElementById(targetId);
      if (targetPanel) {
        targetPanel.classList.add('active');
      }
    });
  });
}

/**
 * FAQ Accordion Toggle
 */
function initFAQ() {
  const faqItems = document.querySelectorAll('.faq-item, .pillar-faq-item');

  faqItems.forEach(item => {
    const questionBtn = item.querySelector('.faq-question, .pillar-faq-q');
    const answer = item.querySelector('.faq-answer, .pillar-faq-a');
    if (!questionBtn || !answer) return;

    if (questionBtn.dataset.faqBound) return;
    questionBtn.dataset.faqBound = 'true';

    questionBtn.addEventListener('click', (e) => {
      e.preventDefault();
      const isActive = item.classList.contains('active');

      // Close all other FAQ items within the same section/container
      const container = item.closest('.faq-container, .pillar-faq-list, #faq') || document;
      container.querySelectorAll('.faq-item, .pillar-faq-item').forEach(otherItem => {
        otherItem.classList.remove('active');
        const otherAnswer = otherItem.querySelector('.faq-answer, .pillar-faq-a');
        if (otherAnswer) otherAnswer.style.maxHeight = null;
        const icon = otherItem.querySelector('.pillar-faq-q i');
        if (icon) icon.style.transform = 'rotate(0deg)';
      });

      // Toggle current item
      if (!isActive) {
        item.classList.add('active');
        answer.style.maxHeight = (answer.scrollHeight > 0 ? (answer.scrollHeight + 30) : 500) + 'px';
        const icon = item.querySelector('.pillar-faq-q i');
        if (icon) icon.style.transform = 'rotate(180deg)';
      }
    });
  });
}

/**
 * Reviews Slider & Testimonials Carousel with Loop
 */
function initReviewsSlider() {
  const wrappers = document.querySelectorAll('.reviews-carousel-wrapper');
  if (wrappers.length === 0) return;

  wrappers.forEach(wrapper => {
    const track = wrapper.querySelector('.reviews-carousel-track');
    if (!track || track.dataset.sliderInitialized) return;
    track.dataset.sliderInitialized = 'true';

    const parentSection = wrapper.closest('section') || wrapper.parentElement;
    const prevBtn = parentSection ? parentSection.querySelector('#prevReviewBtn, .prev-review-btn') : null;
    const nextBtn = parentSection ? parentSection.querySelector('#nextReviewBtn, .next-review-btn') : null;

    const originalCards = track.querySelectorAll('.review-card');
    if (originalCards.length === 0) return;

    // Clone cards for infinite loop effect
    originalCards.forEach(card => {
      const clone = card.cloneNode(true);
      clone.classList.add('clone');
      track.appendChild(clone);
    });

    let currentIndex = 0;
    const originalCount = originalCards.length;
    let autoPlayInterval;

    function updateCarousel(index) {
      currentIndex = index;
      const cards = track.querySelectorAll('.review-card');
      if (cards.length > 0) {
        const cardWidth = cards[0].offsetWidth;
        const gap = 24;
        track.style.transition = 'transform 0.4s ease-in-out';
        track.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;

        if (currentIndex >= originalCount) {
          setTimeout(() => {
            track.style.transition = 'none';
            currentIndex = currentIndex - originalCount;
            track.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;
          }, 400);
        }

        if (currentIndex < 0) {
          setTimeout(() => {
            track.style.transition = 'none';
            currentIndex = originalCount - 1;
            track.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;
          }, 400);
        }
      }
    }

    function startAutoPlay() {
      autoPlayInterval = setInterval(() => {
        updateCarousel(currentIndex + 1);
      }, 4000);
    }

    function resetAutoPlay() {
      clearInterval(autoPlayInterval);
      startAutoPlay();
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        currentIndex--;
        if (currentIndex < 0) {
          track.style.transition = 'none';
          currentIndex = originalCount - 1;
          const cards = track.querySelectorAll('.review-card');
          const cardWidth = cards[0].offsetWidth;
          track.style.transform = `translateX(-${originalCount * (cardWidth + 24)}px)`;
          setTimeout(() => {
            track.style.transition = 'transform 0.4s ease-in-out';
            track.style.transform = `translateX(-${currentIndex * (cardWidth + 24)}px)`;
          }, 10);
        } else {
          updateCarousel(currentIndex);
        }
        resetAutoPlay();
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        updateCarousel(currentIndex + 1);
        resetAutoPlay();
      });
    }

    window.addEventListener('resize', () => {
      track.style.transition = 'none';
      updateCarousel(currentIndex);
    });

    startAutoPlay();
  });
}

/**
 * Consultation Booking Modal
 */
function initModal() {
  const modalOverlay = document.getElementById('consultationModal');
  const openBtns = document.querySelectorAll('.trigger-consultation');
  const closeBtn = document.getElementById('closeModal');
  const form = document.getElementById('consultationForm');

  if (!modalOverlay) return;

  openBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      modalOverlay.classList.add('active');
      document.body.style.overflow = 'hidden';
    });
  });

  if (closeBtn) {
    closeBtn.addEventListener('click', () => {
      modalOverlay.classList.remove('active');
      document.body.style.overflow = '';
    });
  }

  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
      modalOverlay.classList.remove('active');
      document.body.style.overflow = '';
    }
  });

  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      alert('Thank you! Your consultation request has been submitted. Our team will contact you shortly.');
      modalOverlay.classList.remove('active');
      document.body.style.overflow = '';
      form.reset();
    });
  }
}

/**
 * Mobile Navigation Drawer Toggle
 */
function initMobileNav() {
  const mobileToggle = document.getElementById('mobileToggle');
  const mobileCloseBtn = document.getElementById('mobileCloseBtn');
  const navMenu = document.getElementById('navMenu');
  const megaDropdown = document.getElementById('megaDropdown');
  const iTreatToggle = document.getElementById('iTreatToggle');

  if (!mobileToggle || !navMenu) return;
  if (navMenu.dataset.mobileNavInitialized === 'true') return;
  navMenu.dataset.mobileNavInitialized = 'true';

  mobileToggle.addEventListener('click', function(e) {
    if (e) {
      e.preventDefault();
      e.stopPropagation();
    }
    const isActive = navMenu.classList.contains('active');
    if (isActive) {
      navMenu.classList.remove('active');
      document.body.style.overflow = '';
      mobileToggle.setAttribute('aria-expanded', 'false');
    } else {
      navMenu.classList.add('active');
      document.body.style.overflow = 'hidden';
      mobileToggle.setAttribute('aria-expanded', 'true');
    }
  });

  if (mobileCloseBtn) {
    mobileCloseBtn.addEventListener('click', function(e) {
      if (e) {
        e.preventDefault();
        e.stopPropagation();
      }
      navMenu.classList.remove('active');
      document.body.style.overflow = '';
      if (mobileToggle) mobileToggle.setAttribute('aria-expanded', 'false');
    });
  }

  // Accordion toggle for "I Treat" on mobile viewports
  if (iTreatToggle && megaDropdown) {
    iTreatToggle.onclick = function(e) {
      const isMobile = window.matchMedia('(max-width: 991px)').matches || navMenu.classList.contains('active');
      if (isMobile) {
        if (e) {
          e.preventDefault();
          e.stopPropagation();
        }
        megaDropdown.classList.toggle('open');
        return false;
      }
    };
  }

  // Close drawer when clicking outside navMenu
  if (!document.__drRajeshDocClickBound) {
    document.__drRajeshDocClickBound = true;
    document.addEventListener('click', (e) => {
      const menu = document.getElementById('navMenu');
      const toggle = document.getElementById('mobileToggle');
      if (!menu || !toggle) return;
      const isMobile = window.matchMedia('(max-width: 991px)').matches || menu.classList.contains('active');
      if (isMobile && menu.classList.contains('active')) {
        if (!menu.contains(e.target) && !toggle.contains(e.target)) {
          menu.classList.remove('active');
          document.body.style.overflow = '';
        }
      }
    });
  }
}

/**
 * Mobile Floating Action Triggers & Drawers for Pillar/Cluster Pages
 */
function initMobileFloatTriggers() {
  const leftBtn = document.getElementById('floatOnThisPageBtn');
  const rightBtn = document.getElementById('floatNeedGuidanceBtn');
  const leftSidebar = document.querySelector('.pillar-sidebar');
  const rightSidebar = document.querySelector('.pillar-right-sidebar');
  const overlay = document.getElementById('mobileFloatOverlay');
  const closeBtns = document.querySelectorAll('.mobile-drawer-close');

  if (!leftBtn && !rightBtn) return;

  function closeAllDrawers() {
    if (leftSidebar) leftSidebar.classList.remove('mobile-open');
    if (rightSidebar) rightSidebar.classList.remove('mobile-open');
    if (overlay) overlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (leftBtn && leftSidebar) {
    leftBtn.onclick = function(e) {
      if (e) e.stopPropagation();
      const isOpen = leftSidebar.classList.contains('mobile-open');
      closeAllDrawers();
      if (!isOpen) {
        leftSidebar.classList.add('mobile-open');
        if (overlay) overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
      }
    };
  }

  if (rightBtn && rightSidebar) {
    rightBtn.onclick = function(e) {
      if (e) e.stopPropagation();
      const isOpen = rightSidebar.classList.contains('mobile-open');
      closeAllDrawers();
      if (!isOpen) {
        rightSidebar.classList.add('mobile-open');
        if (overlay) overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
      }
    };
  }

  if (overlay) {
    overlay.onclick = closeAllDrawers;
  }

  closeBtns.forEach(btn => {
    btn.onclick = function(e) {
      if (e) e.stopPropagation();
      closeAllDrawers();
    };
  });

  if (leftSidebar) {
    leftSidebar.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', closeAllDrawers);
    });
  }
}

/**
 * Smooth Scrolling for Anchor Links
 */
function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (!targetId || targetId === '#' || targetId === '#!') return;

      try {
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();
          const headerOffset = 130;
          const elementPosition = targetElement.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
        }
      } catch (err) {
        // Invalid selector, ignore
      }
    });
  });

  // Handle URL hash on initial page load (e.g. #physician) with header offset
  if (window.location.hash) {
    const hash = window.location.hash;
    setTimeout(() => {
      try {
        const targetElement = document.querySelector(hash);
        if (targetElement) {
          const headerOffset = 130;
          const elementPosition = targetElement.getBoundingClientRect().top;
          const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
        }
      } catch (err) {}
    }, 150);
  }
}


// Specialized Treatments Carousel Logic
document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('treatmentsTrack');
    const dots = document.querySelectorAll('.carousel-dot-new');
    
    if (!track || dots.length === 0 || track.dataset.carouselInitialized) return;
    track.dataset.carouselInitialized = 'true';

    // Clone cards for infinite effect
    const originalCards = track.querySelectorAll('.treatment-card-new');
    originalCards.forEach(card => {
        const clone = card.cloneNode(true);
        clone.classList.add('clone');
        track.appendChild(clone);
    });

    let currentIndex = 0;
    const originalCount = dots.length;
    let autoPlayInterval;

    function updateCarousel(index) {
        currentIndex = index;
        
        const cards = track.querySelectorAll('.treatment-card-new');
        if(cards.length > 0) {
             const cardWidth = cards[0].offsetWidth;
             const gap = 24; 
             
             track.style.transition = 'transform 0.4s ease-in-out';
             track.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;

             // Infinite loop reset
             if (currentIndex >= originalCount) {
                 setTimeout(() => {
                     track.style.transition = 'none';
                     currentIndex = 0;
                     track.style.transform = `translateX(0)`;
                 }, 400); // Wait for transition to finish
             }
        }

        // Update dots
        const dotIndex = currentIndex % originalCount;
        dots.forEach(dot => dot.classList.remove('active'));
        if(dots[dotIndex]) {
            dots[dotIndex].classList.add('active');
        }
    }

    function startAutoPlay() {
        autoPlayInterval = setInterval(() => {
            updateCarousel(currentIndex + 1);
        }, 3000);
    }

    function resetAutoPlay() {
        clearInterval(autoPlayInterval);
        startAutoPlay();
    }

    dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
            updateCarousel(idx);
            resetAutoPlay();
        });
    });

    window.addEventListener('resize', () => {
        track.style.transition = 'none';
        updateCarousel(currentIndex);
    });

    startAutoPlay();
});


// Patient Stories Carousel Logic
document.addEventListener('DOMContentLoaded', () => {
    const track = document.querySelector('.stories-carousel-track');
    const dots = document.querySelectorAll('.story-dot-new');
    
    if (!track || dots.length === 0 || track.dataset.carouselInitialized) return;
    track.dataset.carouselInitialized = 'true';

    // Clone cards for infinite effect
    const originalCards = track.querySelectorAll('.story-card-new');
    originalCards.forEach(card => {
        const clone = card.cloneNode(true);
        clone.classList.add('clone');
        track.appendChild(clone);
    });

    let currentIndex = 0;
    const originalCount = dots.length;
    let autoPlayInterval;

    function updateCarousel(index) {
        currentIndex = index;
        
        const cards = track.querySelectorAll('.story-card-new');
        if(cards.length > 0) {
             const cardWidth = cards[0].offsetWidth;
             const gap = 24; 
             
             track.style.transition = 'transform 0.4s ease-in-out';
             track.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;

             if (currentIndex >= originalCount) {
                 setTimeout(() => {
                     track.style.transition = 'none';
                     currentIndex = 0;
                     track.style.transform = `translateX(0)`;
                 }, 400); 
             }
        }

        const dotIndex = currentIndex % originalCount;
        dots.forEach(dot => dot.classList.remove('active'));
        if(dots[dotIndex]) {
            dots[dotIndex].classList.add('active');
        }
    }

    function startAutoPlay() {
        autoPlayInterval = setInterval(() => {
            updateCarousel(currentIndex + 1);
        }, 3500);
    }

    function resetAutoPlay() {
        clearInterval(autoPlayInterval);
        startAutoPlay();
    }

    dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => {
            updateCarousel(idx);
            resetAutoPlay();
        });
    });

    window.addEventListener('resize', () => {
        track.style.transition = 'none';
        updateCarousel(currentIndex);
    });

    startAutoPlay();
});

/**
 * Smart Header: Reveal black top-bar on scroll up, hide on scroll down
 */
function initSmartHeader() {
  const topBar = document.querySelector('.top-bar');
  if (!topBar || topBar.dataset.smartHeaderInitialized) return;
  topBar.dataset.smartHeaderInitialized = 'true';

  let lastScrollY = window.scrollY;
  const scrollThreshold = 6; // pixels of scroll delta required to trigger toggle

  window.addEventListener('scroll', () => {
    const currentScrollY = window.scrollY;
    const scrollDelta = currentScrollY - lastScrollY;

    // At the top of the page (<= 40px), keep top-bar visible
    if (currentScrollY <= 40) {
      topBar.classList.remove('top-bar-hidden');
    } else if (scrollDelta > scrollThreshold) {
      // Scrolling DOWN -> hide top bar
      topBar.classList.add('top-bar-hidden');
    } else if (scrollDelta < -scrollThreshold) {
      // Scrolling UP -> reveal top bar
      topBar.classList.remove('top-bar-hidden');
    }

    lastScrollY = currentScrollY;
  }, { passive: true });
}

/**
 * Global Lazy Scroll Reveal Animations
 */
function initLazyScrollAnimations() {
  const targets = document.querySelectorAll(
    'section, .article-card, .treatment-card, .specialty-card, .honor-card, .timeline-item, .research-item, .contact-card, .hero-content, .hero-image-wrap, .stat-box, .app-content, .phone-mockup-wrapper'
  );

  if (targets.length === 0) return;

  targets.forEach(el => {
    // Avoid double animation or header elements
    if (!el.classList.contains('reveal-on-scroll') && !el.closest('header') && !el.closest('.top-bar')) {
      el.classList.add('reveal-on-scroll');
    }
  });

  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('reveal-visible');
          observer.unobserve(entry.target); // Once revealed, stop watching
        }
      });
    }, {
      threshold: 0,
      rootMargin: '0px 0px -10px 0px'
    });

    document.querySelectorAll('.reveal-on-scroll').forEach(el => observer.observe(el));
  } else {
    // Fallback if IntersectionObserver is not supported
    document.querySelectorAll('.reveal-on-scroll').forEach(el => el.classList.add('reveal-visible'));
  }
}

/**
 * Menu Active State Handler
 */
function initActiveMenu() {
  const path = window.location.pathname.replace(/\/$/, '');
  let currentFile = path.split('/').pop().replace(/\.php$/, '');
  if (!currentFile || currentFile === '') currentFile = 'index';

  const links = document.querySelectorAll('.mega-menu-list a, .mega-pillar-title, .top-bar-links a, .nav-menu-list a');
  const treatmentPages = [
    'brain-tumor-removal-surgery',
    'brain-tumor-types',
    'brain-tumor-symptoms',
    'glioma-surgery-hyderabad',
    'meningioma-treatment',
    'pituitary-tumor-surgery',
    'awake-craniotomy',
    'brain-tumor-surgery-recovery',
    'minimally-invasive-brain-tumor-surgery',
    'brain-aneurysm-treatment',
    'brain-aneurysm-symptoms',
    'ruptured-unruptured-brain-aneurysm',
    'aneurysm-coiling-vs-clipping',
    'endovascular-coiling-hyderabad',
    'flow-diversion-brain-aneurysm',
    'subarachnoid-hemorrhage-treatment',
    'brain-aneurysm-surgery-recovery',
    'avm-treatment-hyderabad'
  ];

  links.forEach(link => {
    const href = link.getAttribute('href');
    if (!href) return;
    const linkFile = href.split('#')[0].split('/').pop().replace(/\.php$/, '');
    if (linkFile && linkFile === currentFile) {
      link.classList.add('active');
    }
  });

  const iTreatToggle = document.getElementById('iTreatToggle');
  if (iTreatToggle && treatmentPages.includes(currentFile)) {
    iTreatToggle.classList.add('active');
  }
}

/**
 * Image Lightbox / Zoom Modal for Cluster & Pillar Pages
 */
function initImageZoom() {
  // Target images in pillar page contents, heroes, and articles
  const images = document.querySelectorAll('.pillar-page img, .pillar-hero img, .pillar-content img');
  if (images.length === 0) return;

  // Create lightbox overlay elements if they don't exist
  let modal = document.querySelector('.image-zoom-modal');
  if (!modal) {
    modal = document.createElement('div');
    modal.className = 'image-zoom-modal';
    modal.setAttribute('aria-hidden', 'true');
    modal.innerHTML = `
      <div class="image-zoom-toolbar">
        <button class="image-zoom-btn zoom-in-btn" aria-label="Zoom in" title="Zoom In"><i class="fa-solid fa-plus"></i></button>
        <button class="image-zoom-btn zoom-out-btn" aria-label="Zoom out" title="Zoom Out"><i class="fa-solid fa-minus"></i></button>
        <button class="image-zoom-btn zoom-reset-btn" aria-label="Reset zoom" title="Reset Zoom"><i class="fa-solid fa-rotate-left"></i></button>
        <button class="image-zoom-modal-close" aria-label="Close zoomed image" title="Close">&times;</button>
      </div>
      <div class="image-zoom-container">
        <img class="image-zoom-modal-content" src="" alt="Zoomed view">
      </div>
      <div class="image-zoom-modal-caption"></div>
    `;
    document.body.appendChild(modal);
  }

  const modalImg = modal.querySelector('.image-zoom-modal-content');
  const modalCaption = modal.querySelector('.image-zoom-modal-caption');
  const closeBtn = modal.querySelector('.image-zoom-modal-close');
  const zoomInBtn = modal.querySelector('.zoom-in-btn');
  const zoomOutBtn = modal.querySelector('.zoom-out-btn');
  const zoomResetBtn = modal.querySelector('.zoom-reset-btn');
  const zoomContainer = modal.querySelector('.image-zoom-container');

  let currentScale = 1;
  let pointX = 0;
  let pointY = 0;
  let startX = 0;
  let startY = 0;
  let isDragging = false;
  let hasDragged = false;

  function updateTransform() {
    modalImg.style.transform = `translate(${pointX}px, ${pointY}px) scale(${currentScale})`;
    if (currentScale > 1) {
      modalImg.style.cursor = isDragging ? 'grabbing' : 'grab';
    } else {
      modalImg.style.cursor = 'zoom-in';
    }
  }

  function resetZoomState() {
    currentScale = 1;
    pointX = 0;
    pointY = 0;
    updateTransform();
  }

  function setScale(newScale) {
    currentScale = Math.min(Math.max(0.8, newScale), 4);
    if (currentScale === 1) {
      pointX = 0;
      pointY = 0;
    }
    updateTransform();
  }

  function openZoom(img) {
    modalImg.src = img.src;
    modalImg.alt = img.alt || 'Zoomed view';
    modalCaption.textContent = img.alt || '';
    resetZoomState();
    modal.classList.add('active');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeZoom() {
    modal.classList.remove('active');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    resetZoomState();
  }

  // Zoom toolbar buttons
  zoomInBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    setScale(currentScale + 0.5);
  });

  zoomOutBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    setScale(currentScale - 0.5);
  });

  zoomResetBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    resetZoomState();
  });

  // Toggle zoom on image click
  modalImg.addEventListener('click', (e) => {
    e.stopPropagation();
    if (hasDragged) {
      hasDragged = false;
      return;
    }
    if (currentScale === 1) {
      setScale(2);
    } else {
      resetZoomState();
    }
  });

  // Mouse drag panning when zoomed in
  modalImg.addEventListener('mousedown', (e) => {
    if (currentScale <= 1) return;
    e.preventDefault();
    isDragging = true;
    hasDragged = false;
    startX = e.clientX - pointX;
    startY = e.clientY - pointY;
    modalImg.style.cursor = 'grabbing';
  });

  window.addEventListener('mousemove', (e) => {
    if (!isDragging) return;
    e.preventDefault();
    hasDragged = true;
    pointX = e.clientX - startX;
    pointY = e.clientY - startY;
    updateTransform();
  });

  window.addEventListener('mouseup', () => {
    if (isDragging) {
      isDragging = false;
      updateTransform();
    }
  });

  // Mouse wheel zoom inside modal
  modal.addEventListener('wheel', (e) => {
    if (!modal.classList.contains('active')) return;
    e.preventDefault();
    const delta = e.deltaY < 0 ? 0.25 : -0.25;
    setScale(currentScale + delta);
  }, { passive: false });

  images.forEach(img => {
    if (img.classList.contains('logo-img') || (img.closest('a') && img.closest('a').getAttribute('href') !== '#')) {
      if (img.closest('a') && img.closest('a').getAttribute('href') !== '#') return;
    }

    img.style.cursor = 'zoom-in';
    img.addEventListener('click', (e) => {
      e.stopPropagation();
      openZoom(img);
    });
  });

  if (closeBtn) {
    closeBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      closeZoom();
    });
  }

  modal.addEventListener('click', (e) => {
    if (e.target === modal || e.target === zoomContainer) {
      closeZoom();
    }
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('active')) {
      closeZoom();
    }
  });
}

/**
 * Stat Counter & Loading Animation
 * Automatically detects stat numbers across stat banners and animates them on scroll
 */
function initStatCounters() {
  const statContainers = document.querySelectorAll('.stats-banner-section, .profile-stats, .sidebar-stat-box');
  const statNumbers = document.querySelectorAll('.stat-number, .stat-num, .sidebar-stat-value, [data-target]');

  if (statContainers.length === 0 && statNumbers.length === 0) return;

  // Prepare each stat element with target value and format metadata
  statNumbers.forEach(el => {
    if (el.dataset.initialized) return;

    let targetVal = el.dataset.target;
    let suffix = el.dataset.suffix || '';
    let prefix = el.dataset.prefix || '';
    let formatComma = el.dataset.format === 'comma';

    if (!targetVal) {
      const text = el.textContent.trim();
      const match = text.match(/^([^\d]*)([\d,]+(?:\.\d+)?)\s*([^\d]*)$/);
      if (match) {
        prefix = match[1] || '';
        const numStr = match[2].replace(/,/g, '');
        targetVal = parseFloat(numStr);
        suffix = match[3] || '';
        if (text.includes(',')) formatComma = true;
      }
    } else {
      targetVal = parseFloat(targetVal);
    }

    if (!isNaN(targetVal)) {
      el.dataset.targetVal = targetVal;
      el.dataset.prefixStr = prefix;
      el.dataset.suffixStr = suffix;
      el.dataset.formatComma = formatComma ? 'true' : 'false';
      el.dataset.initialized = 'true';
      
      // Set initial state to 0 with prefix/suffix
      el.textContent = `${prefix}0${suffix}`;
    }
  });

  // Ease Out Expo function for smooth counting transition
  const easeOutExpo = t => (t === 1 ? 1 : 1 - Math.pow(2, -10 * t));

  function animateCounter(el) {
    if (el.dataset.animating || el.dataset.animated) return;
    el.dataset.animating = 'true';

    const target = parseFloat(el.dataset.targetVal);
    const prefix = el.dataset.prefixStr || '';
    const suffix = el.dataset.suffixStr || '';
    const formatComma = el.dataset.formatComma === 'true';
    const duration = 2000;
    const startTime = performance.now();

    function update(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const easedProgress = easeOutExpo(progress);
      const currentVal = Math.floor(easedProgress * target);

      let formattedVal = currentVal;
      if (formatComma) {
        formattedVal = currentVal.toLocaleString('en-US');
      }

      el.textContent = `${prefix}${formattedVal}${suffix}`;

      if (progress < 1) {
        requestAnimationFrame(update);
      } else {
        let finalVal = target;
        if (formatComma) {
          finalVal = target.toLocaleString('en-US');
        }
        el.textContent = `${prefix}${finalVal}${suffix}`;
        el.dataset.animating = 'false';
        el.dataset.animated = 'true';
        el.classList.add('counter-done');
      }
    }

    requestAnimationFrame(update);
  }

  // IntersectionObserver to trigger animation when banner enters viewport
  const observerOptions = {
    threshold: 0.15,
    rootMargin: '0px 0px -40px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const container = entry.target;
        container.classList.add('in-view');

        const numbers = container.querySelectorAll('.stat-number, .stat-num, .sidebar-stat-value, [data-target]');
        if (numbers.length > 0) {
          numbers.forEach(num => {
            if (num.dataset.initialized) animateCounter(num);
          });
        } else if (container.dataset.initialized) {
          animateCounter(container);
        }

        observer.unobserve(container);
      }
    });
  }, observerOptions);

  statContainers.forEach(c => observer.observe(c));
  statNumbers.forEach(n => {
    if (!n.closest('.stats-banner-section, .profile-stats')) {
      observer.observe(n);
    }
  });
}


