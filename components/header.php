<?php
/**
 * Global Header Component
 * Dr. Rajesh Reddy Neurosurgery
 */
if (!isset($path_prefix)) {
  $caller_file = $_SERVER['SCRIPT_FILENAME'] ?? '';
  $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
  foreach ($backtrace as $step) {
    if (!empty($step['file']) && realpath($step['file']) !== realpath(__FILE__)) {
      $caller_file = $step['file'];
      break;
    }
  }
  $script_dir = normpath(dirname($caller_file));
  $app_dir = normpath(dirname(__DIR__));
  $rel = trim(str_replace($app_dir, '', $script_dir), '/\\');
  $depth = ($rel !== '') ? count(explode('/', str_replace('\\', '/', $rel))) : 0;
  $path_prefix = str_repeat('../', $depth);
}

function normpath($path)
{
  return str_replace('\\', '/', realpath($path) ?: $path);
}

$current_page = basename($_SERVER['SCRIPT_FILENAME'] ?? $_SERVER['PHP_SELF'] ?? '', '.php');
$brain_tumor_pages = [
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
  'avm-treatment-hyderabad',
  'spine-fracture-treatment',
  'cervical-spine-fracture-treatment',
  'thoracolumbar-spine-fracture',
  'vertebroplasty-kyphoplasty',
  'pathological-spine-fracture',
  'spinal-cord-injury-treatment',
  'minimally-invasive-spine-fracture-surgery',
  'spine-fracture-recovery',
  'brain-stroke-treatment'
];
$is_brain_tumor_active = in_array($current_page, $brain_tumor_pages);
?>

<!-- Schema.org Physician & Hospital Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": [
        "Physician",
        "Person"
      ],
      "@id": "https://drrajeshreddy.com/#physician",
      "name": "Dr. Rajesh Reddy Sannareddy",
      "jobTitle": "Senior Consultant Neurosurgeon",
      "description": "Senior Consultant Neurosurgeon with over 15 years of surgical experience across India and abroad. He specializes in microsurgical, endoscopic, and minimally invasive procedures for brain, spine, and neurovascular conditions — using intraoperative navigation and neuro-monitoring to protect function while treating even the most complex cases.",
      "url": "https://drrajeshreddy.com/profile",
      "image": "https://drrajeshreddy.com/images/doctor-portrait.webp",
      "telephone": "+91-8520052229",
      "email": "info@drrajeshreddy.com",
      "hasCredential": [
        {
          "@type": "EducationalOccupationalCredential",
          "credentialCategory": "degree",
          "name": "MBBS"
        },
        {
          "@type": "EducationalOccupationalCredential",
          "credentialCategory": "degree",
          "name": "MS (General Surgery)"
        },
        {
          "@type": "EducationalOccupationalCredential",
          "credentialCategory": "degree",
          "name": "MCh (Neurosurgery)"
        },
        {
          "@type": "EducationalOccupationalCredential",
          "credentialCategory": "degree",
          "name": "MRCS"
        },
        {
          "@type": "EducationalOccupationalCredential",
          "credentialCategory": "degree",
          "name": "Fellowship in Interventional Neuroradiology (Cerebrovascular Endovascular Techniques)"
        }
      ],
      "knowsAbout": [
        "Brain Tumor Surgery",
        "Endovascular Coiling",
        "Spine Surgery",
        "Stroke Treatment",
        "Minimally Invasive Neurosurgery"
      ],
      "medicalSpecialty": [
        "https://schema.org/Neurologic",
        "https://schema.org/Surgical"
      ],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Medicover Hospital - Financial District",
        "addressLocality": "Hyderabad",
        "addressRegion": "Telangana",
        "postalCode": "500032",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 17.4172,
        "longitude": 78.3498
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "https://schema.org/Monday",
            "https://schema.org/Tuesday",
            "https://schema.org/Wednesday",
            "https://schema.org/Thursday",
            "https://schema.org/Friday",
            "https://schema.org/Saturday"
          ],
          "opens": "10:00",
          "closes": "16:00"
        }
      ],
      "hospitalAffiliation": {
        "@id": "https://drrajeshreddy.com/#hospital"
      }
    },
    {
      "@type": "Hospital",
      "@id": "https://drrajeshreddy.com/#hospital",
      "name": "Medicover Hospital - Financial District",
      "url": "https://www.medicoverhospitals.in/",
      "telephone": "+91-8520052229",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Medicover Hospital - Financial District",
        "addressLocality": "Hyderabad",
        "addressRegion": "Telangana",
        "postalCode": "500032",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 17.4172,
        "longitude": 78.3498
      }
    }
  ]
}
</script>


<!-- Header Sticky Wrapper -->
<div class="header-sticky-container">
  <!-- Top Bar (Black bar in mobile) -->
  <div class="top-bar">
    <div class="container top-bar-container">
      <ul class="top-bar-links desktop-only-top-links">
        <li><a href="<?= $path_prefix ?>profile" class="<?= ($current_page === 'profile') ? 'active' : '' ?>">My Profile</a></li>
        <li><a href="<?= $path_prefix ?>patient-education" class="<?= ($current_page === 'patient-education') ? 'active' : '' ?>">Patient Education</a></li>
        <li><a href="<?= $path_prefix ?>insights-expertise" class="<?= ($current_page === 'insights-expertise') ? 'active' : '' ?>">Insights & Expertise</a></li>
        <li><a href="<?= $path_prefix ?>patient-stories" class="<?= ($current_page === 'patient-stories') ? 'active' : '' ?>">Patient Stories</a></li>
        <li><a href="<?= $path_prefix ?>gallery" class="<?= ($current_page === 'gallery') ? 'active' : '' ?>">Gallery</a></li>
      </ul>
      <!-- Mobile Top Bar Content -->
      <div class="mobile-top-bar-content">
        <a href="<?= $path_prefix ?>/" class="mobile-top-brand">DR. RAJESH REDDY SANNAREDDY</a>
        <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle Menu">☰</button>
      </div>
    </div>
  </div>

  <!-- Main Header (White bottom bar) -->
  <header class="main-header">
    <div class="container header-wrapper">
      <!-- Brand Logo -->
      <a href="<?= $path_prefix ?>/" class="logo-container"
        style="display: flex; align-items: center; gap: 12px; text-decoration: none;">
        <picture>
          <source media="(max-width: 991px)" srcset="<?= $path_prefix ?>images/logo-icon.webp">
          <img src="<?= $path_prefix ?>images/Logo.svg" alt="Dr. Rajesh Reddy Neurosurgery Logo" class="logo-img" width="220" height="52">
        </picture>
      </a>

      <!-- Right Side Actions & Mobile Drawer Container -->
      <div style="display: flex; align-items: center; gap: 1rem;">

        <!-- Off-Canvas Mobile Drawer & Desktop Nav -->
        <nav class="nav-container" id="navMenu">
          <div class="mobile-menu-header">
            <span style="font-weight: 700; color: #1d1d1f; font-size: 1.1rem;">Navigation Menu</span>
            <button class="mobile-close-btn" id="mobileCloseBtn" aria-label="Close Menu">✕</button>
          </div>

          <ul class="nav-menu-list">
            <!-- Main Site Links (Mobile Drawer Priority) -->
            <li class="mobile-only-link"><a href="<?= $path_prefix ?>profile" class="<?= ($current_page === 'profile') ? 'active' : '' ?>"><i class="fa-solid fa-user-doctor"
                  style="color: #0066cc; width: 20px;"></i> My Profile</a></li>
            <li class="mobile-only-link"><a href="<?= $path_prefix ?>patient-education" class="<?= ($current_page === 'patient-education') ? 'active' : '' ?>"><i
                  class="fa-solid fa-book-medical" style="color: #0066cc; width: 20px;"></i> Patient Education</a></li>
            <li class="mobile-only-link"><a href="<?= $path_prefix ?>insights-expertise" class="<?= ($current_page === 'insights-expertise') ? 'active' : '' ?>"><i
                  class="fa-solid fa-lightbulb" style="color: #0066cc; width: 20px;"></i> Insights & Expertise</a></li>
            <li class="mobile-only-link"><a href="<?= $path_prefix ?>patient-stories" class="<?= ($current_page === 'patient-stories') ? 'active' : '' ?>"><i class="fa-solid fa-star"
                  style="color: #0066cc; width: 20px;"></i> Patient Stories</a></li>
            <li class="mobile-only-link"><a href="https://wa.me/918520052229?text=Hello%20Dr.%20Rajesh%20Reddy%27s%20Clinic%2C%20I%20would%20like%20to%20inquire%20about%20a%20consultation." target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp" style="color: #25D366; width: 20px;"></i> Chat on WhatsApp (24/7)</a></li>
            <li class="mobile-only-link"><a href="<?= $path_prefix ?>gallery" class="<?= ($current_page === 'gallery') ? 'active' : '' ?>"><i class="fa-solid fa-images"
                  style="color: #0066cc; width: 20px;"></i> Gallery</a></li>

            <!-- I Treat Mega Dropdown / Mobile Accordion -->
            <li class="nav-item-dropdown mega-dropdown" id="megaDropdown">
              <a href="<?= $path_prefix ?>/#treatments" class="nav-link <?= $is_brain_tumor_active ? 'active' : '' ?>" id="iTreatToggle"
                role="button" aria-expanded="false" style="font-weight: 600;"
                onclick="if(window.matchMedia('(max-width: 991px)').matches || (document.getElementById('navMenu') && document.getElementById('navMenu').classList.contains('active'))) { event.preventDefault(); event.stopPropagation(); var d=document.getElementById('megaDropdown'); if(d){ d.classList.toggle('open'); this.setAttribute('aria-expanded', d.classList.contains('open')); } return false; }">
                I Treat <i class="fa-solid fa-chevron-down dropdown-arrow"
                  style="font-size: 0.75rem; margin-left: 0.25rem;"></i>
              </a>

                            <div class="mega-menu-container">
                <div class="mega-menu-3pane">

                  <!-- Pane 1: Specialty Pillars (6) -->
                  <div class="mega-pillars-pane">
                    <p class="mega-pane-heading">SPECIALTY PILLARS (6)</p>
                    <ul class="mega-pillars-nav">
                      <li>
                        <button type="button" class="mega-pillar-tab-btn active" data-target="tab-brain-tumor" data-url="<?= $path_prefix ?>brain-tumor-removal-surgery">
                          <span class="mega-tab-icon"><i class="fa-solid fa-brain"></i></span>
                          <span class="mega-tab-text">
                            <span class="mega-tab-title">Brain Tumor Surgery</span>
                          </span>
                          <i class="fa-solid fa-chevron-right mega-tab-chevron"></i>
                        </button>
                      </li>
                      <li>
                        <button type="button" class="mega-pillar-tab-btn" data-target="tab-brain-aneurysm" data-url="<?= $path_prefix ?>brain-aneurysm-treatment">
                          <span class="mega-tab-icon"><i class="fa-solid fa-heart-pulse"></i></span>
                          <span class="mega-tab-text">
                            <span class="mega-tab-title">Brain Aneurysm & AVM</span>
                          </span>
                          <i class="fa-solid fa-chevron-right mega-tab-chevron"></i>
                        </button>
                      </li>
                      <li>
                        <button type="button" class="mega-pillar-tab-btn" data-target="tab-spine-fractures" data-url="<?= $path_prefix ?>spine-fracture-treatment">
                          <span class="mega-tab-icon"><i class="fa-solid fa-bone"></i></span>
                          <span class="mega-tab-text">
                            <span class="mega-tab-title">Spine Fracture Treatment</span>
                          </span>
                          <i class="fa-solid fa-chevron-right mega-tab-chevron"></i>
                        </button>
                      </li>
                      <li>
                        <button type="button" class="mega-pillar-tab-btn" data-target="tab-acute-stroke" data-url="<?= $path_prefix ?>brain-stroke-treatment">
                          <span class="mega-tab-icon"><i class="fa-solid fa-bolt"></i></span>
                          <span class="mega-tab-text">
                            <span class="mega-tab-title">Brain Stroke Treatment</span>
                          </span>
                          <i class="fa-solid fa-chevron-right mega-tab-chevron"></i>
                        </button>
                      </li>
                      <li>
                        <button type="button" class="mega-pillar-tab-btn" data-target="tab-disc-herniation" data-url="<?= $path_prefix ?>coming-soon">
                          <span class="mega-tab-icon"><i class="fa-solid fa-arrows-up-down"></i></span>
                          <span class="mega-tab-text">
                            <span class="mega-tab-title">Disc Herniation & Sciatica</span>
                          </span>
                          <i class="fa-solid fa-chevron-right mega-tab-chevron"></i>
                        </button>
                      </li>
                      <li>
                        <button type="button" class="mega-pillar-tab-btn" data-target="tab-pediatric-functional" data-url="<?= $path_prefix ?>coming-soon">
                          <span class="mega-tab-icon"><i class="fa-solid fa-person"></i></span>
                          <span class="mega-tab-text">
                            <span class="mega-tab-title">Pediatric & Functional Care</span>
                          </span>
                          <i class="fa-solid fa-chevron-right mega-tab-chevron"></i>
                        </button>
                      </li>
                    </ul>
                  </div>

                  <!-- Pane 2: Clusters Content Area -->
                  <div class="mega-clusters-pane">

                    <!-- Tab 1: Brain Tumor Removal Surgery -->
                    <div class="mega-cluster-panel active" id="tab-brain-tumor">
                      <div class="mega-cluster-header">
                        <div class="mega-cluster-header-left">
                          <div class="mega-cluster-title">Brain Tumor Removal Surgery</div>
                          <p class="mega-cluster-desc">Microsurgical precision, awake craniotomy, and minimally invasive skull base excision.</p>
                        </div>
                        <a href="<?= $path_prefix ?>brain-tumor-removal-surgery" class="mega-overview-btn">
                          Pillar Overview <i class="fa-solid fa-arrow-right"></i>
                        </a>
                      </div>

                      <div class="mega-cluster-columns-wrap">
                        <div class="mega-subcol">
                          <div class="mega-subcol-title">UNDERSTANDING & TYPES</div>
                          <ul class="mega-cluster-links">
                            <li>
                              <a href="<?= $path_prefix ?>brain-tumor-types" class="mega-cluster-link <?= ($current_page === 'brain-tumor-types') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Types of Brain Tumors
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>brain-tumor-symptoms" class="mega-cluster-link <?= ($current_page === 'brain-tumor-symptoms') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Warning Signs & Symptoms
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>glioma-surgery-hyderabad" class="mega-cluster-link <?= ($current_page === 'glioma-surgery-hyderabad') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Glioma Surgery in Hyderabad
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>meningioma-treatment" class="mega-cluster-link <?= ($current_page === 'meningioma-treatment') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Meningioma Treatment
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>pituitary-tumor-surgery" class="mega-cluster-link <?= ($current_page === 'pituitary-tumor-surgery') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Pituitary Tumor Surgery
                              </a>
                            </li>
                          </ul>
                        </div>

                        <div class="mega-subcol">
                          <div class="mega-subcol-title">SURGICAL PROCEDURES & CARE</div>
                          <ul class="mega-cluster-links">
                            <li>
                              <a href="<?= $path_prefix ?>awake-craniotomy" class="mega-cluster-link <?= ($current_page === 'awake-craniotomy') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Awake Craniotomy
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>brain-tumor-surgery-recovery" class="mega-cluster-link <?= ($current_page === 'brain-tumor-surgery-recovery') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> A Week-by-Week Recovery
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>minimally-invasive-brain-tumor-surgery" class="mega-cluster-link <?= ($current_page === 'minimally-invasive-brain-tumor-surgery') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Minimally Invasive Removal
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>brain-tumor-removal-surgery" class="mega-cluster-link">
                                <span class="mega-link-dot"></span> Acoustic Neuroma / Schwannoma
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>brain-tumor-removal-surgery" class="mega-cluster-link">
                                <span class="mega-link-dot"></span> Skull Base Tumor Surgery
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <!-- Tab 2: Brain Aneurysm & AVM -->
                    <div class="mega-cluster-panel" id="tab-brain-aneurysm">
                      <div class="mega-cluster-header">
                        <div class="mega-cluster-header-left">
                          <div class="mega-cluster-title">Brain Aneurysm Treatment</div>
                          <p class="mega-cluster-desc">Advanced endovascular coiling, flow diversion, microsurgical clipping and vascular malformation repair.</p>
                        </div>
                        <a href="<?= $path_prefix ?>brain-aneurysm-treatment" class="mega-overview-btn">
                          Pillar Overview <i class="fa-solid fa-arrow-right"></i>
                        </a>
                      </div>

                      <div class="mega-cluster-columns-wrap">
                        <div class="mega-subcol">
                          <div class="mega-subcol-title">UNDERSTANDING & TYPES</div>
                          <ul class="mega-cluster-links">
                            <li>
                              <a href="<?= $path_prefix ?>brain-aneurysm-symptoms" class="mega-cluster-link <?= ($current_page === 'brain-aneurysm-symptoms') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Warning Signs & Symptoms
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>ruptured-unruptured-brain-aneurysm" class="mega-cluster-link <?= ($current_page === 'ruptured-unruptured-brain-aneurysm') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Ruptured vs. Unruptured Aneurysm
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>subarachnoid-hemorrhage-treatment" class="mega-cluster-link <?= ($current_page === 'subarachnoid-hemorrhage-treatment') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Subarachnoid Hemorrhage (SAH)
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>avm-treatment-hyderabad" class="mega-cluster-link <?= ($current_page === 'avm-treatment-hyderabad') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> AVM Treatment
                              </a>
                            </li>
                          </ul>
                        </div>

                        <div class="mega-subcol">
                          <div class="mega-subcol-title">SURGICAL PROCEDURES & CARE</div>
                          <ul class="mega-cluster-links">
                            <li>
                              <a href="<?= $path_prefix ?>aneurysm-coiling-vs-clipping" class="mega-cluster-link <?= ($current_page === 'aneurysm-coiling-vs-clipping') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Coiling vs. Surgical Clipping
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>endovascular-coiling-hyderabad" class="mega-cluster-link <?= ($current_page === 'endovascular-coiling-hyderabad') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Endovascular Coiling for Brain Aneurysm
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>flow-diversion-brain-aneurysm" class="mega-cluster-link <?= ($current_page === 'flow-diversion-brain-aneurysm') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Flow Diversion for Brain Aneurysms
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>brain-aneurysm-surgery-recovery" class="mega-cluster-link <?= ($current_page === 'brain-aneurysm-surgery-recovery') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Life After Brain Aneurysm Surgery
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <!-- Tab 3: Acute Stroke & Clots -->
                    <div class="mega-cluster-panel" id="tab-acute-stroke">
                      <div class="mega-cluster-header">
                        <div class="mega-cluster-header-left">
                          <div class="mega-cluster-title">Brain Stroke Treatment</div>
                          <p class="mega-cluster-desc">Emergency mechanical thrombectomy, thrombolytic care, ICH evacuation, and rapid stroke response.</p>
                        </div>
                        <a href="<?= $path_prefix ?>brain-stroke-treatment" class="mega-overview-btn">
                          Pillar Overview <i class="fa-solid fa-arrow-right"></i>
                        </a>
                      </div>

                      <div class="mega-cluster-columns-wrap">
                        <div class="mega-subcol">
                          <div class="mega-subcol-title">UNDERSTANDING & TYPES</div>
                          <ul class="mega-cluster-links">
                            <li>
                              <a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link">
                                <span class="mega-link-dot"></span> Ischaemic Stroke Treatment <span class="mega-coming-badge">Soon</span>
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link">
                                <span class="mega-link-dot"></span> Haemorrhagic Stroke Treatment <span class="mega-coming-badge">Soon</span>
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link">
                                <span class="mega-link-dot"></span> Transient Ischaemic Attack (TIA) <span class="mega-coming-badge">Soon</span>
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link">
                                <span class="mega-link-dot"></span> Cerebral Venous Sinus Thrombosis <span class="mega-coming-badge">Soon</span>
                              </a>
                            </li>
                          </ul>
                        </div>

                        <div class="mega-subcol">
                          <div class="mega-subcol-title">SURGICAL PROCEDURES & CARE</div>
                          <ul class="mega-cluster-links">
                            <li>
                              <a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link">
                                <span class="mega-link-dot"></span> Mechanical Thrombectomy <span class="mega-coming-badge">Soon</span>
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link">
                                <span class="mega-link-dot"></span> Carotid Artery Stenosis <span class="mega-coming-badge">Soon</span>
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link">
                                <span class="mega-link-dot"></span> Stroke Rehabilitation Care <span class="mega-coming-badge">Soon</span>
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link">
                                <span class="mega-link-dot"></span> Stroke Prevention & Lifestyle <span class="mega-coming-badge">Soon</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <!-- Tab 4: Spine Fractures & Trauma -->
                    <div class="mega-cluster-panel" id="tab-spine-fractures">
                      <div class="mega-cluster-header">
                        <div class="mega-cluster-header-left">
                          <div class="mega-cluster-title">Spine Fracture Treatment</div>
                          <p class="mega-cluster-desc">Minimally invasive spinal stabilization, kyphoplasty, cervical reconstructions, and SCI recovery.</p>
                        </div>
                        <a href="<?= $path_prefix ?>spine-fracture-treatment" class="mega-overview-btn">
                          Pillar Overview <i class="fa-solid fa-arrow-right"></i>
                        </a>
                      </div>

                      <div class="mega-cluster-columns-wrap">
                        <div class="mega-subcol">
                          <div class="mega-subcol-title">UNDERSTANDING & TYPES</div>
                          <ul class="mega-cluster-links">
                            <li>
                              <a href="<?= $path_prefix ?>cervical-spine-fracture-treatment" class="mega-cluster-link <?= ($current_page === 'cervical-spine-fracture-treatment') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Cervical Spine Fracture Treatment
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>thoracolumbar-spine-fracture" class="mega-cluster-link <?= ($current_page === 'thoracolumbar-spine-fracture') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Thoracolumbar Spine Fracture
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>pathological-spine-fracture" class="mega-cluster-link <?= ($current_page === 'pathological-spine-fracture') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Pathological Spine Fracture - Cancer
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>spinal-cord-injury-treatment" class="mega-cluster-link <?= ($current_page === 'spinal-cord-injury-treatment') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Spinal Cord Injury: Treatment, Recovery
                              </a>
                            </li>
                          </ul>
                        </div>

                        <div class="mega-subcol">
                          <div class="mega-subcol-title">SURGICAL PROCEDURES & CARE</div>
                          <ul class="mega-cluster-links">
                            <li>
                              <a href="<?= $path_prefix ?>vertebroplasty-kyphoplasty" class="mega-cluster-link <?= ($current_page === 'vertebroplasty-kyphoplasty') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Vertebroplasty and Kyphoplasty
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>minimally-invasive-spine-fracture-surgery" class="mega-cluster-link <?= ($current_page === 'minimally-invasive-spine-fracture-surgery') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Minimally Invasive Spine Fracture Surgery
                              </a>
                            </li>
                            <li>
                              <a href="<?= $path_prefix ?>spine-fracture-recovery" class="mega-cluster-link <?= ($current_page === 'spine-fracture-recovery') ? 'active-item' : '' ?>">
                                <span class="mega-link-dot"></span> Spine Fracture Recovery: What to Expect
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <!-- Tab 5: Disc Herniation & Sciatica -->
                    <div class="mega-cluster-panel" id="tab-disc-herniation">
                      <div class="mega-cluster-header">
                        <div class="mega-cluster-header-left">
                          <div class="mega-cluster-title">Disc Herniation & Sciatica</div>
                          <p class="mega-cluster-desc">Microdiscectomy, endoscopic decompression, and nerve root relief for acute and chronic pain.</p>
                        </div>
                        <a href="<?= $path_prefix ?>coming-soon" class="mega-overview-btn">
                          Pillar Overview <i class="fa-solid fa-arrow-right"></i>
                        </a>
                      </div>

                      <div class="mega-cluster-columns-wrap">
                        <div class="mega-subcol">
                          <div class="mega-subcol-title">UNDERSTANDING & TYPES</div>
                          <ul class="mega-cluster-links">
                            <li><a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link"><span class="mega-link-dot"></span> Lumbar Disc Prolapse & Sciatica <span class="mega-coming-badge">Soon</span></a></li>
                            <li><a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link"><span class="mega-link-dot"></span> Cervical Radiculopathy & Arm Pain <span class="mega-coming-badge">Soon</span></a></li>
                            <li><a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link"><span class="mega-link-dot"></span> Endoscopic Spine Discectomy <span class="mega-coming-badge">Soon</span></a></li>
                          </ul>
                        </div>
                        <div class="mega-subcol">
                          <div class="mega-subcol-title">SURGICAL PROCEDURES & CARE</div>
                          <ul class="mega-cluster-links">
                            <li><a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link"><span class="mega-link-dot"></span> Microscopic Decompression <span class="mega-coming-badge">Soon</span></a></li>
                            <li><a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link"><span class="mega-link-dot"></span> Nerve Root & Epidural Blocks <span class="mega-coming-badge">Soon</span></a></li>
                            <li><a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link"><span class="mega-link-dot"></span> Post-Discectomy Rehab Plan <span class="mega-coming-badge">Soon</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                    <!-- Tab 6: Pediatric & Functional Care -->
                    <div class="mega-cluster-panel" id="tab-pediatric-functional">
                      <div class="mega-cluster-header">
                        <div class="mega-cluster-header-left">
                          <div class="mega-cluster-title">Pediatric & Functional Care</div>
                          <p class="mega-cluster-desc">Hydrocephalus, congenital spinal defects, Chiari malformation, trigeminal neuralgia, and movement disorders.</p>
                        </div>
                        <a href="<?= $path_prefix ?>coming-soon" class="mega-overview-btn">
                          Pillar Overview <i class="fa-solid fa-arrow-right"></i>
                        </a>
                      </div>

                      <div class="mega-cluster-columns-wrap">
                        <div class="mega-subcol">
                          <div class="mega-subcol-title">UNDERSTANDING & TYPES</div>
                          <ul class="mega-cluster-links">
                            <li><a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link"><span class="mega-link-dot"></span> Pediatric Hydrocephalus & Shunts <span class="mega-coming-badge">Soon</span></a></li>
                            <li><a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link"><span class="mega-link-dot"></span> Spina Bifida & Tethered Cord <span class="mega-coming-badge">Soon</span></a></li>
                            <li><a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link"><span class="mega-link-dot"></span> Chiari Malformation Decompression <span class="mega-coming-badge">Soon</span></a></li>
                          </ul>
                        </div>
                        <div class="mega-subcol">
                          <div class="mega-subcol-title">SURGICAL PROCEDURES & CARE</div>
                          <ul class="mega-cluster-links">
                            <li><a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link"><span class="mega-link-dot"></span> Trigeminal Neuralgia (MVD) <span class="mega-coming-badge">Soon</span></a></li>
                            <li><a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link"><span class="mega-link-dot"></span> Hemifacial Spasm Relief <span class="mega-coming-badge">Soon</span></a></li>
                            <li><a href="<?= $path_prefix ?>coming-soon" class="mega-cluster-link"><span class="mega-link-dot"></span> Normal Pressure Hydrocephalus (NPH) <span class="mega-coming-badge">Soon</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                  </div> <!-- /mega-clusters-pane -->

                  <!-- Pane 3: Emergency Care Card -->
                  <div class="mega-emergency-pane">
                    <div>
                      <div class="mega-emergency-title" style="margin-top: 4px;">Brain Stroke & Spine Emergency</div>
                      <p class="mega-emergency-desc">Immediate mechanical thrombectomy &amp; critical neurovascular intervention within the golden hour.</p>

                      <div class="mega-emergency-callcard">
                        <div class="mega-emergency-callicon">
                          <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div>
                          <a href="tel:08520052229" class="mega-emergency-number">8520052229</a>
                        </div>
                      </div>
                    </div>

                    <div>
                      <div class="mega-location-info">
                        <i class="fa-solid fa-location-dot"></i> Medicover Hospital, Financial District
                      </div>
                      <a href="<?= $path_prefix ?>contact" class="mega-book-btn">Book Consultation</a>
                    </div>
                  </div>

                </div> <!-- /mega-menu-3pane -->
              </div>
            </li>

            <!-- Mobile Only Consultation Button -->
            <li class="mobile-only-btn" style="margin-top: 1rem;">
              <a href="<?= $path_prefix ?>contact" class="btn-primary"
                style="display: block; text-align: center; width: 100%;">Book Consultation Today</a>
            </li>
          </ul>
        </nav>

        <a href="tel:08520052229" class="btn-primary mobile-helpline-btn"><i class="fa-solid fa-phone" style="font-size: 0.85rem; margin-right: 6px;"></i> Call Clinic</a>
        <a href="<?= $path_prefix ?>contact" class="btn-primary desktop-only-btn"
          style="padding: 0.6rem 1.5rem; font-size: 0.9rem;">Book Consultation</a>
      </div>
    </div>
  </header>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const tabBtns = document.querySelectorAll('.mega-pillar-tab-btn');
  const panels = document.querySelectorAll('.mega-cluster-panel');

  tabBtns.forEach(btn => {
    function activateTab(e) {
      const isMobile = window.matchMedia('(max-width: 991px)').matches;
      const targetId = btn.getAttribute('data-target');
      const targetPanel = document.getElementById(targetId);

      // On desktop, clicking the pillar tab redirects directly to that pillar's overview page
      if (!isMobile && e && e.type === 'click') {
        const destUrl = btn.getAttribute('data-url');
        if (destUrl) {
          window.location.href = destUrl;
          return;
        }
      }

      // On mobile, clicking an active tab toggles it closed
      if (isMobile && e && e.type === 'click' && btn.classList.contains('active')) {
        btn.classList.remove('active');
        if (targetPanel) targetPanel.classList.remove('active');
        return;
      }

      tabBtns.forEach(b => b.classList.remove('active'));
      panels.forEach(p => p.classList.remove('active'));

      btn.classList.add('active');
      if (targetPanel) {
        targetPanel.classList.add('active');
        if (isMobile && e && e.type === 'click') {
          targetPanel.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
      }
    }

    btn.addEventListener('mouseenter', function(e) {
      if (!window.matchMedia('(max-width: 991px)').matches) {
        activateTab(e);
      }
    });
    btn.addEventListener('click', activateTab);
  });
});
</script>