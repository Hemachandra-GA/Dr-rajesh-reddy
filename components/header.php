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
        <button type="button" class="mobile-toggle" id="mobileToggle" aria-label="Toggle Menu" aria-controls="navMenu" aria-expanded="false">☰</button>
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
          <img src="<?= $path_prefix ?>images/Logo.svg" alt="Dr. Rajesh Reddy Neurosurgery Logo" class="logo-img"
            width="260" height="60" style="height: 60px; width: auto;" fetchpriority="high">
        </picture>
      </a>

      <!-- Right Side Actions & Mobile Drawer Container -->
      <div style="display: flex; align-items: center; gap: 1rem;">

        <!-- Off-Canvas Mobile Drawer & Desktop Nav -->
        <nav class="nav-container" id="navMenu">
          <div class="mobile-menu-header">
            <span style="font-weight: 700; color: #1d1d1f; font-size: 1.1rem;">Navigation Menu</span>
            <button type="button" class="mobile-close-btn" id="mobileCloseBtn" aria-label="Close Menu">✕</button>
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
                        <!-- I Treat Mega Dropdown (Apple-style Hick's Law Drawer for Desktop & Clean Accordion for Mobile) -->
            <li class="nav-item-dropdown mega-dropdown" id="megaDropdown">
              <a href="<?= $path_prefix ?>/#treatments" class="nav-link <?= $is_brain_tumor_active ? 'active' : '' ?>" id="iTreatToggle" aria-haspopup="true" aria-controls="desktopMegaMenu"
                role="button" aria-expanded="false" style="font-weight: 600;"
                onclick="if(window.matchMedia('(max-width: 991px)').matches || (document.getElementById('navMenu') && document.getElementById('navMenu').classList.contains('active'))) { event.preventDefault(); event.stopPropagation(); var d=document.getElementById('megaDropdown'); if(d){ d.classList.toggle('open'); this.setAttribute('aria-expanded', d.classList.contains('open')); } return false; }">
                I Treat <i class="fa-solid fa-chevron-down dropdown-arrow"
                  style="font-size: 0.75rem; margin-left: 0.25rem;"></i>
              </a>

              <!-- Desktop Mega Menu Drawer -->
              <div class="mega-menu-container desktop-mega-menu" id="desktopMegaMenu">
                <div class="mega-menu-wrapper" role="region" aria-label="Conditions & Treatments">
                  <div class="apple-mega-inner">
                    
                    <!-- 1. Horizontal Pillar Selection (Progressive Disclosure - 4 Pillars) -->
                    <div class="apple-pillar-strip" role="tablist" aria-label="Specialty Areas">
                      <button type="button" id="tab-brain-tumor" class="apple-pillar-chip active" role="tab" aria-selected="true" aria-controls="view-brain-tumor" tabindex="0" data-tab="brain-tumor"><i class="fa-solid fa-brain" aria-hidden="true"></i>Brain Tumors</button>
                      <button type="button" id="tab-brain-aneurysm" class="apple-pillar-chip" role="tab" aria-selected="false" aria-controls="view-brain-aneurysm" tabindex="-1" data-tab="brain-aneurysm"><i class="fa-solid fa-heart-pulse" aria-hidden="true"></i>Brain Aneurysms &amp; AVM</button>
                      <button type="button" id="tab-spine-fracture" class="apple-pillar-chip" role="tab" aria-selected="false" aria-controls="view-spine-fracture" tabindex="-1" data-tab="spine-fracture"><i class="fa-solid fa-bone" aria-hidden="true"></i>Spine Fractures</button>
                      <button type="button" id="tab-stroke-care" class="apple-pillar-chip" role="tab" aria-selected="false" aria-controls="view-stroke-care" tabindex="-1" data-tab="stroke-care"><i class="fa-solid fa-bolt-lightning" aria-hidden="true"></i>Stroke &amp; Clots</button>
                    </div>

                    <!-- 2. Main Stage: Content Section vs Right Guidance Card -->
                    <div class="apple-cluster-stage">
                      
                      <!-- Tab 1: Brain Tumor -->
                      <div class="apple-cluster-view active" id="view-brain-tumor" role="tabpanel" aria-labelledby="tab-brain-tumor" tabindex="0">
                        <div class="apple-cluster-content">
                          <div class="apple-view-intro">
                            <div class="apple-view-title">Brain Tumor Surgery</div>
                            <div class="apple-view-desc">Microsurgical precision, awake craniotomy, and minimally invasive skull base excision.</div>
                            <a href="<?= $path_prefix ?>brain-tumor-removal-surgery" class="apple-all-link">Explore Brain Tumor Overview →</a>
                          </div>
                          <div class="apple-links-grid">
                            <div class="apple-links-col">
                              <a href="<?= $path_prefix ?>brain-tumor-types" class="apple-menu-link">Types of Brain Tumors</a>
                              <a href="<?= $path_prefix ?>brain-tumor-symptoms" class="apple-menu-link">Warning Signs &amp; Symptoms</a>
                              <a href="<?= $path_prefix ?>glioma-surgery-hyderabad" class="apple-menu-link">Glioma Surgery in Hyderabad</a>
                              <a href="<?= $path_prefix ?>meningioma-treatment" class="apple-menu-link">Meningioma Treatment</a>
                              <a href="<?= $path_prefix ?>brain-tumor-removal-surgery" class="apple-menu-link">Acoustic Neuroma / Schwannoma</a>
                            </div>
                            <div class="apple-links-col">
                              <a href="<?= $path_prefix ?>pituitary-tumor-surgery" class="apple-menu-link">Pituitary Tumor Surgery</a>
                              <a href="<?= $path_prefix ?>awake-craniotomy" class="apple-menu-link">Awake Craniotomy</a>
                              <a href="<?= $path_prefix ?>minimally-invasive-brain-tumor-surgery" class="apple-menu-link">Minimally Invasive Removal</a>
                              <a href="<?= $path_prefix ?>brain-tumor-surgery-recovery" class="apple-menu-link">Week-by-Week Recovery</a>
                              <a href="<?= $path_prefix ?>brain-tumor-removal-surgery" class="apple-menu-link">Skull Base Tumor Surgery</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Tab 2: Brain Aneurysm & AVM -->
                      <div class="apple-cluster-view" id="view-brain-aneurysm" role="tabpanel" aria-labelledby="tab-brain-aneurysm" tabindex="0">
                        <div class="apple-cluster-content">
                          <div class="apple-view-intro">
                            <div class="apple-view-title">Brain Aneurysm &amp; AVM Treatment</div>
                            <div class="apple-view-desc">Pinhole endovascular coiling, flow diversion, and microvascular clipping.</div>
                            <a href="<?= $path_prefix ?>brain-aneurysm-treatment" class="apple-all-link">Explore Aneurysm Overview →</a>
                          </div>
                          <div class="apple-links-grid">
                            <div class="apple-links-col">
                              <a href="<?= $path_prefix ?>brain-aneurysm-symptoms" class="apple-menu-link">Warning Signs &amp; Symptoms</a>
                              <a href="<?= $path_prefix ?>ruptured-unruptured-brain-aneurysm" class="apple-menu-link">Ruptured vs. Unruptured Aneurysms</a>
                              <a href="<?= $path_prefix ?>subarachnoid-hemorrhage-treatment" class="apple-menu-link">Subarachnoid Hemorrhage (SAH)</a>
                              <a href="<?= $path_prefix ?>avm-treatment-hyderabad" class="apple-menu-link">Arteriovenous Malformations (AVM)</a>
                            </div>
                            <div class="apple-links-col">
                              <a href="<?= $path_prefix ?>endovascular-coiling-hyderabad" class="apple-menu-link">Endovascular Coiling</a>
                              <a href="<?= $path_prefix ?>flow-diversion-brain-aneurysm" class="apple-menu-link">Flow Diverter Stenting</a>
                              <a href="<?= $path_prefix ?>aneurysm-coiling-vs-clipping" class="apple-menu-link">Coiling vs. Clipping</a>
                              <a href="<?= $path_prefix ?>brain-aneurysm-surgery-recovery" class="apple-menu-link">Recovery &amp; Neuro-ICU Care</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Tab 3: Spine Fractures -->
                      <div class="apple-cluster-view" id="view-spine-fracture" role="tabpanel" aria-labelledby="tab-spine-fracture" tabindex="0">
                        <div class="apple-cluster-content">
                          <div class="apple-view-intro">
                            <div class="apple-view-title">Spine Fracture Treatment</div>
                            <div class="apple-view-desc">Minimally invasive stabilization, spinal cord decompression, and vertebroplasty.</div>
                            <a href="<?= $path_prefix ?>spine-fracture-treatment" class="apple-all-link">Explore Spine Fractures Overview →</a>
                          </div>
                          <div class="apple-links-grid">
                            <div class="apple-links-col">
                              <a href="<?= $path_prefix ?>cervical-spine-fracture-treatment" class="apple-menu-link">Cervical Spine Fractures</a>
                              <a href="<?= $path_prefix ?>thoracolumbar-spine-fracture" class="apple-menu-link">Thoracolumbar Spine Fractures</a>
                              <a href="<?= $path_prefix ?>pathological-spine-fracture" class="apple-menu-link">Pathological Spine Fractures</a>
                              <a href="<?= $path_prefix ?>spinal-cord-injury-treatment" class="apple-menu-link">Spinal Cord Injury Treatment</a>
                            </div>
                            <div class="apple-links-col">
                              <a href="<?= $path_prefix ?>vertebroplasty-kyphoplasty" class="apple-menu-link">Vertebroplasty &amp; Kyphoplasty</a>
                              <a href="<?= $path_prefix ?>minimally-invasive-spine-fracture-surgery" class="apple-menu-link">Minimally Invasive Spine Fixation</a>
                              <a href="<?= $path_prefix ?>spine-fracture-recovery" class="apple-menu-link">Post-Fracture Recovery</a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Tab 4: Stroke & Clots -->
                      <div class="apple-cluster-view" id="view-stroke-care" role="tabpanel" aria-labelledby="tab-stroke-care" tabindex="0">
                        <div class="apple-cluster-content">
                          <div class="apple-view-intro">
                            <div class="apple-view-title">Acute Brain Stroke Care</div>
                            <div class="apple-view-desc">24/7 Golden-hour acute intervention, mechanical thrombectomy, and comprehensive stroke care.</div>
                            <a href="<?= $path_prefix ?>brain-stroke-treatment" class="apple-all-link">Explore Stroke Care Overview →</a>
                          </div>
                          <div class="apple-links-grid">
                            <div class="apple-links-col">
                              <a href="<?= $path_prefix ?>brain-stroke-treatment" class="apple-menu-link">BE-FAST Warning Signs</a>
                              <span class="apple-menu-link is-disabled" aria-disabled="true">Ischaemic Stroke Care <span class="soon-badge">Soon</span></span>
                              <span class="apple-menu-link is-disabled" aria-disabled="true">Haemorrhagic Stroke Care <span class="soon-badge">Soon</span></span>
                              <span class="apple-menu-link is-disabled" aria-disabled="true">Transient Ischemic Attack (TIA) <span class="soon-badge">Soon</span></span>
                            </div>
                            <div class="apple-links-col">
                              <span class="apple-menu-link is-disabled" aria-disabled="true">Mechanical Thrombectomy <span class="soon-badge">Soon</span></span>
                              <span class="apple-menu-link is-disabled" aria-disabled="true">Carotid Artery Stenosis <span class="soon-badge">Soon</span></span>
                              <span class="apple-menu-link is-disabled" aria-disabled="true">Stroke Rehabilitation Pathway <span class="soon-badge">Soon</span></span>
                              <span class="apple-menu-link is-disabled" aria-disabled="true">Stroke Prevention &amp; Lifestyle <span class="soon-badge">Soon</span></span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Right Sidebar Guidance Card -->
                      <div class="apple-side-card">
                        <div>
                          <div class="apple-card-tag">Clinical Guidance</div>
                          <div class="apple-card-title">Need direct surgical guidance?</div>
                          <div class="apple-card-text">Direct evaluation for brain, spine, and cerebrovascular treatment plans at Citizens Hospital.</div>
                          <a href="tel:08520052229" class="apple-card-tel">8520052229</a>
                        </div>
                        <a href="<?= $path_prefix ?>contact" class="apple-card-btn">Book Consultation</a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <!-- Mobile Accordion Menu -->
              <div class="mega-menu-container mobile-mega-menu">
                <div class="mobile-treat-section">
            <h3 style="font-family: 'Space Grotesk', sans-serif; font-size: 13px; font-weight: 700; color: var(--color-ink-muted-48); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 14px;">Specialized Treatments (4 Pillars)</h3>
            
            <div class="mobile-pillar-accordion" style="display: flex; flex-direction: column; gap: 8px;">
                
                <!-- Pillar 1: Brain Tumor Surgery -->
                <div class="mob-acc-item" style="border: 1px solid rgba(0,0,0,0.08); border-radius: 12px; overflow: hidden; background: #ffffff;">
                    <button class="mob-acc-trigger" onclick="toggleMobPillar(this)" style="width: 100%; display: flex; align-items: center; justify-content: space-between; padding: 12px 16px; background: #fafafc; border: none; cursor: pointer; text-align: left;">
                        <span style="font-family: 'Space Grotesk', sans-serif; font-size: 15px; font-weight: 700; color: #1d1d1f; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-solid fa-brain" style="color: #0066cc; font-size: 14px;"></i> Brain Tumor Surgery
                        </span>
                        <i class="fa-solid fa-chevron-down mob-acc-arrow" style="font-size: 11px; color: #7a7a7a; transition: transform 0.2s ease;"></i>
                    </button>
                    <div class="mob-acc-panel" style="display: none; padding: 12px 16px 14px; border-top: 1px solid rgba(0,0,0,0.05); background: #ffffff;">
                        <a href="<?= $path_prefix ?>brain-tumor-removal-surgery" style="display: inline-block; font-size: 13px; font-weight: 600; color: #0066cc; margin-bottom: 8px;">Pillar Overview →</a>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                            <li><a href="<?= $path_prefix ?>brain-tumor-types" style="color: #444; font-size: 14px; text-decoration: none;">Types of Brain Tumors</a></li>
                            <li><a href="<?= $path_prefix ?>brain-tumor-symptoms" style="color: #444; font-size: 14px; text-decoration: none;">Warning Signs &amp; Symptoms</a></li>
                            <li><a href="<?= $path_prefix ?>glioma-surgery-hyderabad" style="color: #444; font-size: 14px; text-decoration: none;">Glioma Surgery in Hyderabad</a></li>
                            <li><a href="<?= $path_prefix ?>meningioma-treatment" style="color: #444; font-size: 14px; text-decoration: none;">Meningioma Treatment</a></li>
                            <li><a href="<?= $path_prefix ?>pituitary-tumor-surgery" style="color: #444; font-size: 14px; text-decoration: none;">Pituitary Tumor Surgery</a></li>
                            <li><a href="<?= $path_prefix ?>awake-craniotomy" style="color: #444; font-size: 14px; text-decoration: none;">Awake Craniotomy</a></li>
                            <li><a href="<?= $path_prefix ?>minimally-invasive-brain-tumor-surgery" style="color: #444; font-size: 14px; text-decoration: none;">Minimally Invasive Removal</a></li>
                            <li><a href="<?= $path_prefix ?>brain-tumor-surgery-recovery" style="color: #444; font-size: 14px; text-decoration: none;">Week-by-Week Recovery</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 2: Brain Aneurysm & AVM -->
                <div class="mob-acc-item" style="border: 1px solid rgba(0,0,0,0.08); border-radius: 12px; overflow: hidden; background: #ffffff;">
                    <button class="mob-acc-trigger" onclick="toggleMobPillar(this)" style="width: 100%; display: flex; align-items: center; justify-content: space-between; padding: 12px 16px; background: #fafafc; border: none; cursor: pointer; text-align: left;">
                        <span style="font-family: 'Space Grotesk', sans-serif; font-size: 15px; font-weight: 700; color: #1d1d1f; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-solid fa-heart-pulse" style="color: #0066cc; font-size: 14px;"></i> Brain Aneurysm &amp; AVM
                        </span>
                        <i class="fa-solid fa-chevron-down mob-acc-arrow" style="font-size: 11px; color: #7a7a7a; transition: transform 0.2s ease;"></i>
                    </button>
                    <div class="mob-acc-panel" style="display: none; padding: 12px 16px 14px; border-top: 1px solid rgba(0,0,0,0.05); background: #ffffff;">
                        <a href="<?= $path_prefix ?>brain-aneurysm-treatment" style="display: inline-block; font-size: 13px; font-weight: 600; color: #0066cc; margin-bottom: 8px;">Pillar Overview →</a>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                            <li><a href="<?= $path_prefix ?>brain-aneurysm-symptoms" style="color: #444; font-size: 14px; text-decoration: none;">Warning Signs &amp; Symptoms</a></li>
                            <li><a href="<?= $path_prefix ?>ruptured-unruptured-brain-aneurysm" style="color: #444; font-size: 14px; text-decoration: none;">Ruptured vs. Unruptured Aneurysms</a></li>
                            <li><a href="<?= $path_prefix ?>subarachnoid-hemorrhage-treatment" style="color: #444; font-size: 14px; text-decoration: none;">Subarachnoid Hemorrhage (SAH)</a></li>
                            <li><a href="<?= $path_prefix ?>avm-treatment-hyderabad" style="color: #444; font-size: 14px; text-decoration: none;">Arteriovenous Malformations (AVM)</a></li>
                            <li><a href="<?= $path_prefix ?>endovascular-coiling-hyderabad" style="color: #444; font-size: 14px; text-decoration: none;">Endovascular Coiling</a></li>
                            <li><a href="<?= $path_prefix ?>flow-diversion-brain-aneurysm" style="color: #444; font-size: 14px; text-decoration: none;">Flow Diversion Stenting</a></li>
                            <li><a href="<?= $path_prefix ?>aneurysm-coiling-vs-clipping" style="color: #444; font-size: 14px; text-decoration: none;">Coiling vs. Clipping</a></li>
                            <li><a href="<?= $path_prefix ?>brain-aneurysm-surgery-recovery" style="color: #444; font-size: 14px; text-decoration: none;">Recovery &amp; Neuro-ICU Care</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 3: Spine Fractures & Trauma -->
                <div class="mob-acc-item" style="border: 1px solid rgba(0,0,0,0.08); border-radius: 12px; overflow: hidden; background: #ffffff;">
                    <button class="mob-acc-trigger" onclick="toggleMobPillar(this)" style="width: 100%; display: flex; align-items: center; justify-content: space-between; padding: 12px 16px; background: #fafafc; border: none; cursor: pointer; text-align: left;">
                        <span style="font-family: 'Space Grotesk', sans-serif; font-size: 15px; font-weight: 700; color: #1d1d1f; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-solid fa-bone" style="color: #0066cc; font-size: 14px;"></i> Spine Fractures &amp; Trauma
                        </span>
                        <i class="fa-solid fa-chevron-down mob-acc-arrow" style="font-size: 11px; color: #7a7a7a; transition: transform 0.2s ease;"></i>
                    </button>
                    <div class="mob-acc-panel" style="display: none; padding: 12px 16px 14px; border-top: 1px solid rgba(0,0,0,0.05); background: #ffffff;">
                        <a href="<?= $path_prefix ?>spine-fracture-treatment" style="display: inline-block; font-size: 13px; font-weight: 600; color: #0066cc; margin-bottom: 8px;">Pillar Overview →</a>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                            <li><a href="<?= $path_prefix ?>cervical-spine-fracture-treatment" style="color: #444; font-size: 14px; text-decoration: none;">Cervical Spine Fractures</a></li>
                            <li><a href="<?= $path_prefix ?>thoracolumbar-spine-fracture" style="color: #444; font-size: 14px; text-decoration: none;">Thoracolumbar Spine Fractures</a></li>
                            <li><a href="<?= $path_prefix ?>pathological-spine-fracture" style="color: #444; font-size: 14px; text-decoration: none;">Pathological Spine Fractures</a></li>
                            <li><a href="<?= $path_prefix ?>spinal-cord-injury-treatment" style="color: #444; font-size: 14px; text-decoration: none;">Spinal Cord Injury Treatment</a></li>
                            <li><a href="<?= $path_prefix ?>vertebroplasty-kyphoplasty" style="color: #444; font-size: 14px; text-decoration: none;">Vertebroplasty &amp; Kyphoplasty</a></li>
                            <li><a href="<?= $path_prefix ?>minimally-invasive-spine-fracture-surgery" style="color: #444; font-size: 14px; text-decoration: none;">Minimally Invasive Spine Fixation</a></li>
                            <li><a href="<?= $path_prefix ?>spine-fracture-recovery" style="color: #444; font-size: 14px; text-decoration: none;">Post-Fracture Recovery</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Pillar 4: Stroke & Clots -->
                <div class="mob-acc-item" style="border: 1px solid rgba(0,0,0,0.08); border-radius: 12px; overflow: hidden; background: #ffffff;">
                    <button class="mob-acc-trigger" onclick="toggleMobPillar(this)" style="width: 100%; display: flex; align-items: center; justify-content: space-between; padding: 12px 16px; background: #fafafc; border: none; cursor: pointer; text-align: left;">
                        <span style="font-family: 'Space Grotesk', sans-serif; font-size: 15px; font-weight: 700; color: #1d1d1f; display: flex; align-items: center; gap: 8px;">
                            <i class="fa-solid fa-bolt-lightning" style="color: #0066cc; font-size: 14px;"></i> Acute Stroke &amp; Clots
                        </span>
                        <i class="fa-solid fa-chevron-down mob-acc-arrow" style="font-size: 11px; color: #7a7a7a; transition: transform 0.2s ease;"></i>
                    </button>
                    <div class="mob-acc-panel" style="display: none; padding: 12px 16px 14px; border-top: 1px solid rgba(0,0,0,0.05); background: #ffffff;">
                        <a href="<?= $path_prefix ?>brain-stroke-treatment" style="display: inline-block; font-size: 13px; font-weight: 600; color: #0066cc; margin-bottom: 8px;">Pillar Overview →</a>
                        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                            <li><a href="<?= $path_prefix ?>brain-stroke-treatment" style="color: #444; font-size: 14px; text-decoration: none;">BE-FAST Stroke Warning Signs</a></li>
                            <li style="color: #9ca3af; font-size: 13px; display: flex; align-items: center; justify-content: space-between;">Ischaemic Stroke Care <span class="soon-badge">Soon</span></li>
                            <li style="color: #9ca3af; font-size: 13px; display: flex; align-items: center; justify-content: space-between;">Haemorrhagic Stroke Care <span class="soon-badge">Soon</span></li>
                            <li style="color: #9ca3af; font-size: 13px; display: flex; align-items: center; justify-content: space-between;">Mechanical Thrombectomy <span class="soon-badge">Soon</span></li>
                            <li style="color: #9ca3af; font-size: 13px; display: flex; align-items: center; justify-content: space-between;">Stroke Rehabilitation Care <span class="soon-badge">Soon</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
              </div>
            </li>
<!-- Mobile Only Consultation Button -->
            <li class="mobile-only-btn" style="margin-top: 1rem;">
              <a href="<?= $path_prefix ?>contact" class="btn-primary"
                style="display: block; text-align: center; width: 100%;">Book Consultation Today</a>
            </li>
          </ul>
        </nav>

        <a href="tel:08520052229" class="btn-primary mobile-helpline-btn">Call Helpline</a>
        <a href="<?= $path_prefix ?>contact" class="btn-primary desktop-only-btn"
          style="padding: 0.6rem 1.5rem; font-size: 0.9rem;">Book Consultation</a>
      </div>
    </div>
  </header>
  <!-- Background Dim Backdrop (25% #000000) when Mega Menu is Active -->
  <div class="mega-menu-backdrop" id="megaMenuBackdrop"></div>
</div>
<script>
// Global Mobile Navigation Controls
function openMobileNav(e) {
  if (e) { e.preventDefault(); e.stopPropagation(); }
  const navMenu = document.getElementById('navMenu');
  const mobToggle = document.getElementById('mobileToggle');
  if (!navMenu) return;
  navMenu.classList.add('active');
  document.body.style.overflow = 'hidden';
  if (mobToggle) mobToggle.setAttribute('aria-expanded', 'true');
}

function closeMobileNav(e) {
  if (e) { e.preventDefault(); e.stopPropagation(); }
  const navMenu = document.getElementById('navMenu');
  const mobToggle = document.getElementById('mobileToggle');
  if (!navMenu) return;
  navMenu.classList.remove('active');
  document.body.style.overflow = '';
  if (mobToggle) mobToggle.setAttribute('aria-expanded', 'false');
}

function toggleMobileNav(e) {
  if (e) { e.preventDefault(); e.stopPropagation(); }
  const navMenu = document.getElementById('navMenu');
  if (navMenu && navMenu.classList.contains('active')) {
    closeMobileNav(e);
  } else {
    openMobileNav(e);
  }
}

document.addEventListener('DOMContentLoaded', function() {
  const toggle = document.getElementById('iTreatToggle');
  const megaDropdown = document.getElementById('megaDropdown');
  const desktopMenu = document.getElementById('desktopMegaMenu');
  const mobToggle = document.getElementById('mobileToggle');
  const mobClose = document.getElementById('mobileCloseBtn');
  const navMenu = document.getElementById('navMenu');
  const chips = Array.from(document.querySelectorAll('.desktop-mega-menu .apple-pillar-chip'));
  const views = Array.from(document.querySelectorAll('.desktop-mega-menu .apple-cluster-view'));

  // Mobile navigation drawer toggle events
  if (mobToggle) {
    mobToggle.addEventListener('click', toggleMobileNav);
  }

  if (mobClose) {
    mobClose.addEventListener('click', closeMobileNav);
  }

  const backdrop = document.getElementById('megaMenuBackdrop');

  function openDropdown() {
    if (megaDropdown) {
      megaDropdown.classList.add('open');
      document.body.classList.add('mega-menu-active');
      if (toggle) toggle.setAttribute('aria-expanded', 'true');
    }
  }

  function closeDropdown() {
    if (megaDropdown) {
      megaDropdown.classList.remove('open');
      document.body.classList.remove('mega-menu-active');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
    }
  }

  if (backdrop) {
    backdrop.addEventListener('click', closeDropdown);
  }

  // Toggle dropdown on click for desktop (when user clicks 'I Treat')
  if (toggle) {
    toggle.addEventListener('click', function(e) {
      if (!window.matchMedia('(max-width: 991px)').matches) {
        e.preventDefault();
        const isOpen = megaDropdown.classList.contains('open');
        if (isOpen) {
          closeDropdown();
        } else {
          openDropdown();
          const activeChip = chips.find(c => c.classList.contains('active')) || chips[0];
          if (activeChip) activeChip.focus();
        }
      }
    });

    // Keyboard support on toggle button (Down arrow opens and focuses active chip)
    toggle.addEventListener('keydown', function(e) {
      if (!window.matchMedia('(max-width: 991px)').matches) {
        if (e.key === 'ArrowDown' || e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          openDropdown();
          const activeChip = chips.find(c => c.classList.contains('active')) || chips[0];
          if (activeChip) activeChip.focus();
        } else if (e.key === 'Escape') {
          closeDropdown();
        }
      }
    });
  }

  // Open on Hover with intentional buffer timeout
  let closeTimer = null;
  if (megaDropdown) {
    megaDropdown.addEventListener('mouseenter', function() {
      if (!window.matchMedia('(max-width: 991px)').matches) {
        if (closeTimer) clearTimeout(closeTimer);
        openDropdown();
      }
    });

    megaDropdown.addEventListener('mouseleave', function() {
      if (!window.matchMedia('(max-width: 991px)').matches) {
        closeTimer = setTimeout(function() {
          if (!megaDropdown.contains(document.activeElement)) {
            closeDropdown();
          }
        }, 150);
      }
    });
  }

  // Tab switching with full WAI-ARIA tablist arrow key navigation
  function activateChip(chip, shouldFocus = false) {
    const targetKey = chip.getAttribute('data-tab');

    chips.forEach(c => {
      c.classList.remove('active');
      c.setAttribute('aria-selected', 'false');
      c.setAttribute('tabindex', '-1');
    });
    views.forEach(v => v.classList.remove('active'));

    chip.classList.add('active');
    chip.setAttribute('aria-selected', 'true');
    chip.setAttribute('tabindex', '0');

    const targetView = document.getElementById('view-' + targetKey);
    if (targetView) {
      targetView.classList.add('active');
    }

    if (shouldFocus) {
      chip.focus();
    }
  }

  chips.forEach((chip, index) => {
    chip.addEventListener('mouseenter', () => activateChip(chip, false));
    chip.addEventListener('click', (e) => {
      e.preventDefault();
      activateChip(chip, true);
    });

    chip.addEventListener('keydown', (e) => {
      let nextIndex = null;
      if (e.key === 'ArrowRight') {
        e.preventDefault();
        nextIndex = (index + 1) % chips.length;
      } else if (e.key === 'ArrowLeft') {
        e.preventDefault();
        nextIndex = (index - 1 + chips.length) % chips.length;
      } else if (e.key === 'Home') {
        e.preventDefault();
        nextIndex = 0;
      } else if (e.key === 'End') {
        e.preventDefault();
        nextIndex = chips.length - 1;
      } else if (e.key === 'ArrowDown') {
        e.preventDefault();
        const targetKey = chip.getAttribute('data-tab');
        const activePanel = document.getElementById('view-' + targetKey);
        if (activePanel) {
          const firstLink = activePanel.querySelector('a, button');
          if (firstLink) firstLink.focus();
        }
      } else if (e.key === 'Escape') {
        e.preventDefault();
        closeDropdown();
        if (toggle) toggle.focus();
      }

      if (nextIndex !== null) {
        activateChip(chips[nextIndex], true);
      }
    });
  });

  // Global Escape key closes dropdown and returns focus to toggle
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && megaDropdown && megaDropdown.classList.contains('open')) {
      closeDropdown();
      if (toggle) toggle.focus();
    }
  });

  // Close when focus moves outside the dropdown
  document.addEventListener('focusin', function(e) {
    if (megaDropdown && megaDropdown.classList.contains('open')) {
      if (!megaDropdown.contains(e.target)) {
        closeDropdown();
      }
    }
  });

  // Close on click outside
  document.addEventListener('click', function(e) {
    if (megaDropdown && !megaDropdown.contains(e.target)) {
      closeDropdown();
    }
  });
});

// Mobile Accordion Toggle function
function toggleMobPillar(btn) {
  const item = btn.closest('.mob-acc-item');
  if (!item) return;
  const panel = item.querySelector('.mob-acc-panel');
  const wasActive = item.classList.contains('active');
  
  // Close all other accordion items
  document.querySelectorAll('.mob-acc-item').forEach(i => {
    i.classList.remove('active');
    const p = i.querySelector('.mob-acc-panel');
    if (p) p.style.display = 'none';
    const b = i.querySelector('.mob-acc-trigger');
    if (b) b.setAttribute('aria-expanded', 'false');
  });

  if (!wasActive) {
    item.classList.add('active');
    if (panel) panel.style.display = 'block';
    btn.setAttribute('aria-expanded', 'true');
  } else {
    if (panel) panel.style.display = 'none';
    btn.setAttribute('aria-expanded', 'false');
  }
}
</script>
