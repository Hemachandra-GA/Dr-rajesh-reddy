<?php
/**
 * Global Footer Component
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
  $script_dir = (function_exists('normpath') ? normpath(dirname($caller_file)) : str_replace('\\', '/', realpath(dirname($caller_file)) ?: dirname($caller_file)));
  $app_dir = (function_exists('normpath') ? normpath(dirname(__DIR__)) : str_replace('\\', '/', realpath(dirname(__DIR__)) ?: dirname(__DIR__)));
  $rel = trim(str_replace($app_dir, '', $script_dir), '/\\');
  $depth = ($rel !== '') ? count(explode('/', str_replace('\\', '/', $rel))) : 0;
  $path_prefix = str_repeat('../', $depth);
}
?>
<!-- Medical Disclaimer Banner (Before Footer) -->
<section class="medical-disclaimer-banner"
  style="background-color: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; padding: 24px 0;">
  <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
    <div style="display: flex; gap: 14px; align-items: flex-start;">
      <div style="flex-shrink: 0; color: #0066cc; font-size: 1.1rem; line-height: 1.5; margin-top: 1px;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round" style="vertical-align: middle;">
          <circle cx="12" cy="12" r="10"></circle>
          <line x1="12" y1="8" x2="12" y2="12"></line>
          <line x1="12" y1="16" x2="12.01" y2="16"></line>
        </svg>
      </div>
      <p style="margin: 0; font-size: 0.8rem; line-height: 1.65; color: #64748b;">
        <strong style="color: #334155; font-weight: 600;">Medical disclaimer:</strong> Medical science, research and
        clinical guidelines change constantly. Every effort has been made to provide accurate, up to date information to
        the best of my knowledge. The information on this page is for general educational purposes only. It is not a
        substitute for professional medical advice, diagnosis or treatment, and it cannot account for your individual
        situation. Best practice guidelines vary depending on several disease and patient specific factors. Please
        consult a qualified doctor before making any decisions about your care. If you have a sudden severe headache, a
        seizure, loss of consciousness, new weakness, or difficulty speaking or seeing, seek emergency care immediately.
      </p>
    </div>
  </div>
</section>

<footer class="main-footer" style="background-color: #e5e5e5; border-top: none;">
  <div class="container">
    <div class="footer-grid">
      <!-- Brand & Info -->
      <div class="footer-brand" style="padding-right: 2rem;">
        <img src="<?= $path_prefix ?>images/Logo.svg" alt="Dr. Rajesh Reddy Neurosurgery" class="logo-img" width="220" height="52">
        <p style="font-size: 0.8rem; color: #525252; margin-bottom: 0;">Medicover Hospital - Financial District</p>
        <p style="font-size: 0.8rem; color: #525252; margin-bottom: 1rem;">Hyderabad, Telangana 500032</p>

        <!-- Social Media Icons -->
        <div class="footer-social-links"
          style="display: flex; gap: 10px; align-items: center; margin-top: 0.75rem; flex-wrap: wrap;">
          <!-- Facebook -->
          <a href="https://www.facebook.com/profile.php?id=61567486581808" target="_blank" rel="noopener noreferrer"
            aria-label="Facebook"
            style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background-color: #ffffff; color: #1877F2; text-decoration: none; box-shadow: 0 1px 3px rgba(0,0,0,0.1); transition: all 0.2s ease;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
            </svg>
          </a>
          <!-- Instagram -->
          <a href="https://www.instagram.com/dr_rajesh_sannareddy/" target="_blank" rel="noopener noreferrer"
            aria-label="Instagram"
            style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background-color: #ffffff; color: #E4405F; text-decoration: none; box-shadow: 0 1px 3px rgba(0,0,0,0.1); transition: all 0.2s ease;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
          </a>
          <!-- X (Twitter) -->
          <a href="https://x.com/dr_rajeshreddy" target="_blank" rel="noopener noreferrer" aria-label="X"
            style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background-color: #ffffff; color: #0f1419; text-decoration: none; box-shadow: 0 1px 3px rgba(0,0,0,0.1); transition: all 0.2s ease;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
            </svg>
          </a>
          <!-- Pinterest -->
          <a href="https://www.pinterest.com/drrajeshreddy1/" target="_blank" rel="noopener noreferrer"
            aria-label="Pinterest"
            style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background-color: #ffffff; color: #E60023; text-decoration: none; box-shadow: 0 1px 3px rgba(0,0,0,0.1); transition: all 0.2s ease;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M12 0a12 12 0 0 0-4.37 23.18c-.06-.98-.12-2.49.03-3.57.13-.98.88-6.49.88-6.49s-.23-.45-.23-1.12c0-1.05.61-1.84 1.37-1.84.65 0 .96.49.96 1.07 0 .65-.41 1.63-.63 2.53-.18.76.38 1.37 1.13 1.37 1.35 0 2.39-1.42 2.39-3.48 0-1.82-1.31-3.09-3.18-3.09-2.32 0-3.68 1.74-3.68 3.53 0 .7.27 1.45.61 1.86.07.08.08.15.06.24-.06.27-.21.88-.24 1-.04.17-.14.21-.32.13-1.2-.56-1.95-2.31-1.95-3.72 0-3.03 2.2-5.81 6.35-5.81 3.33 0 5.92 2.38 5.92 5.56 0 3.32-2.09 5.99-5 5.99-.98 0-1.9-.51-2.21-1.11l-.6 2.29c-.22.84-.81 1.9-1.21 2.54A11.96 11.96 0 0 0 12 24c6.63 0 12-5.37 12-12S18.63 0 12 0z" />
            </svg>
          </a>
          <!-- YouTube -->
          <a href="https://www.youtube.com/@DrRajeshReddySannareddy" target="_blank" rel="noopener noreferrer"
            aria-label="YouTube"
            style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background-color: #ffffff; color: #FF0000; text-decoration: none; box-shadow: 0 1px 3px rgba(0,0,0,0.1); transition: all 0.2s ease;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
            </svg>
          </a>
          <!-- Google Review -->
          <a href="https://g.page/r/CXAiCZDiQPHtEBM/review" target="_blank" rel="noopener noreferrer"
            aria-label="Write a Google Review" title="Write a Google Review"
            style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background-color: #ffffff; color: #4285F4; text-decoration: none; box-shadow: 0 1px 3px rgba(0,0,0,0.1); transition: all 0.2s ease;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                fill="#4285F4" />
              <path
                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                fill="#34A853" />
              <path
                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"
                fill="#FBBC05" />
              <path
                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"
                fill="#EA4335" />
            </svg>
          </a>
        </div>
      </div>

      <!-- My Expertise -->
      <div>
        <h4 class="footer-heading" style="font-size: 0.9rem; margin-bottom: 1rem;">My Expertise</h4>
        <ul class="footer-links" style="font-size: 0.8rem;">
          <li><a href="<?= $path_prefix ?>brain-tumor-removal-surgery">Brain Tumor Removal Surgery</a></li>
          <li><a href="<?= $path_prefix ?>brain-aneurysm-treatment">Brain Aneurysm Treatment</a></li>
          <li><a href="<?= $path_prefix ?>spine-fracture-treatment">Spine Fracture Treatment</a></li>
          <li><a href="<?= $path_prefix ?>brain-stroke-treatment">Brain Stroke Treatment</a></li>
          <li><a href="<?= $path_prefix ?>coming-soon">Neck Pain Treatment</a></li>
          <li><a href="<?= $path_prefix ?>coming-soon">Back Pain Treatment</a></li>
        </ul>
      </div>

      <!-- Clinic -->
      <div>
        <h4 class="footer-heading" style="font-size: 0.9rem; margin-bottom: 1rem;">Clinic</h4>
        <ul class="footer-links" style="font-size: 0.8rem;">
          <li><a href="<?= $path_prefix ?>profile">About Dr. Reddy</a></li>
          <li><a href="<?= $path_prefix ?>patient-stories">Patient Stories</a></li>
          <li><a href="<?= $path_prefix ?>patient-education">Patient Education (Blogs)</a></li>
          <li><a href="<?= $path_prefix ?>insights-expertise#media">Media Coverage</a></li>
          <li><a href="<?= $path_prefix ?>faq">FAQ</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div>
        <h4 class="footer-heading" style="font-size: 0.9rem; margin-bottom: 1rem;">Contact</h4>
        <ul class="footer-links" style="font-size: 0.8rem;">
          <li><a href="tel:08520052229" style="color: #525252;">For appointments - 8520052229</a></li>
          <li><a href="mailto:info@drrajeshreddy.com" style="color: #525252;">info@drrajeshreddy.com</a>
          </li>
          <li><a href="<?= $path_prefix ?>contact" style="color: #525252;">Book Appointment</a></li>
        </ul>
      </div>
    </div>

    <!-- Bottom Footer Bar -->
    <div class="footer-bottom"
      style="border-top: 1px solid #d4d4d4; padding-top: 1rem; color: #737373; font-size: 0.75rem;">
      <p>Copyright © 2026 Dr. Rajesh Reddy. All rights reserved. | Designed &amp; Developed by <a href="http://gadigitalsolutions.com/" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: underline;">GA Digital Solutions</a></p>
      <div class="footer-bottom-links">
        <a href="<?= $path_prefix ?>privacy">Privacy Policy</a> |
        <a href="<?= $path_prefix ?>terms">Terms of Use</a>
      </div>
    </div>
  </div>

<!-- GLOBAL CONSULTATION & AFTER-HOURS CALLBACK MODAL -->
<div class="modal-overlay" id="consultationModal" style="display: none; align-items: center; justify-content: center;">
  <div class="modal-content" style="max-height: 90vh; overflow-y: auto;">
    <button class="modal-close" id="closeModal" aria-label="Close Modal">&times;</button>
    <h3 class="modal-title" style="font-size: 1.5rem; font-weight: 700; color: #1d1d1f; margin-bottom: 4px;">Book Consultation</h3>
    <p class="modal-subtitle" style="font-size: 0.9rem; color: #64748b; margin-bottom: 1rem;">Schedule an appointment or request an after-hours callback</p>

    <!-- WhatsApp Quick Connect Pill -->
    <div style="background-color: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 10px; padding: 10px 14px; margin-bottom: 1.25rem; display: flex; align-items: center; justify-content: space-between; gap: 10px;">
      <div style="font-size: 0.85rem; color: #166534; line-height: 1.3;">
        <strong>Need immediate response?</strong><br>Connect on WhatsApp.
      </div>
      <a href="https://wa.me/918520052229?text=Hello%20Dr.%20Rajesh%20Reddy%27s%20Clinic%2C%20I%20would%20like%20to%20inquire%20about%20a%20consultation." target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; gap: 6px; background-color: #25D366; color: #ffffff !important; font-size: 0.82rem; font-weight: 600; padding: 6px 14px; border-radius: 999px; text-decoration: none; white-space: nowrap;">
        <i class="fa-brands fa-whatsapp"></i> Chat Now
      </a>
    </div>

    <form id="consultationForm">
      <input type="text" name="website" style="display:none;" tabindex="-1" autocomplete="off">
      <div class="form-group" style="margin-bottom: 0.85rem;">
        <label for="patientName" class="form-label" style="display: block; font-size: 0.85rem; font-weight: 600; color: #334155; margin-bottom: 4px;">Full Name *</label>
        <input type="text" id="patientName" name="name" class="form-input" placeholder="e.g. Rahul Sharma" required style="width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem;">
      </div>
      <div class="form-group" style="margin-bottom: 0.85rem;">
        <label for="patientPhone" class="form-label" style="display: block; font-size: 0.85rem; font-weight: 600; color: #334155; margin-bottom: 4px;">Phone Number *</label>
        <input type="tel" id="patientPhone" name="phone" class="form-input" placeholder="+91 85200 52229" required style="width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem;">
      </div>
      <div class="form-group" style="margin-bottom: 0.85rem;">
        <label for="treatmentType" class="form-label" style="display: block; font-size: 0.85rem; font-weight: 600; color: #334155; margin-bottom: 4px;">Treatment Specialty</label>
        <select id="treatmentType" name="specialty" class="form-select" style="width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem; background-color: #fff;">
          <option value="Brain Tumor Surgery">Brain Tumor Surgery / Awake Craniotomy</option>
          <option value="Minimally Invasive Spine">Minimally Invasive Spine / Fracture</option>
          <option value="Neurovascular & Stroke">Aneurysm / Stroke / AVM Coiling</option>
          <option value="General Neurosurgery Consultation">General Consultation / Second Opinion</option>
        </select>
      </div>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 0.85rem;">
        <div class="form-group">
          <label for="preferredDate" class="form-label" style="display: block; font-size: 0.85rem; font-weight: 600; color: #334155; margin-bottom: 4px;">Preferred Date</label>
          <input type="date" id="preferredDate" name="preferred_date" class="form-input" style="width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem;">
        </div>
        <div class="form-group">
          <label for="callbackTime" class="form-label" style="display: block; font-size: 0.85rem; font-weight: 600; color: #334155; margin-bottom: 4px;">Callback Window</label>
          <select id="callbackTime" name="callback_time" class="form-select" style="width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.9rem; background-color: #fff;">
            <option value="Anytime">Anytime</option>
            <option value="Morning (10 AM - 1 PM)">Morning (10 AM - 1 PM)</option>
            <option value="Afternoon (1 PM - 4 PM)">Afternoon (1 PM - 4 PM)</option>
            <option value="After-Hours (4 PM - 8 PM)">After-Hours (4 PM - 8 PM)</option>
          </select>
        </div>
      </div>
      <div id="modalFormStatus" style="display: none; padding: 10px; border-radius: 8px; margin-bottom: 10px; font-size: 0.88rem;"></div>
      <button type="submit" id="modalSubmitBtn" class="btn-primary" style="width: 100%; margin-top: 0.5rem; border-radius: 999px; padding: 0.75rem 1.5rem; font-weight: 600;">Confirm Request</button>
      <p style="font-size: 0.75rem; color: #94a3b8; text-align: center; margin-top: 8px; margin-bottom: 0;">Our clinical desk will call you back during hours or first thing next morning.</p>
    </form>
  </div>
</div>





<!-- DESKTOP & MOBILE FLOATING WHATSAPP BUTTON (BOTTOM-LEFT) -->
<a href="https://wa.me/918520052229?text=Hello%20Dr.%20Rajesh%20Reddy%27s%20Clinic%2C%20I%20would%20like%20to%20inquire%20about%20a%20consultation." target="_blank" rel="noopener noreferrer" class="desktop-floating-whatsapp" aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
  <i class="fa-brands fa-whatsapp"></i>
  <span class="floating-wa-label">WhatsApp</span>
</a>

<!-- GLOBAL MOBILE NEED GUIDANCE TRIGGER (for non-pillar pages) -->
<div class="global-mobile-float-trigger" id="globalMobileFloatTrigger">
  <button type="button" class="mobile-float-btn float-right" id="globalNeedGuidanceBtn" aria-label="Need Guidance">
    <i class="fa-solid fa-headset"></i>
    <span>Need Guidance?</span>
  </button>
</div>

<!-- GLOBAL GUIDANCE DRAWER -->
<div class="global-guidance-drawer" id="globalGuidanceDrawer">
  <div class="guidance-card">
    <div class="mobile-drawer-header">
      <h3 class="mobile-drawer-title">Need Guidance?</h3>
      <button class="mobile-drawer-close" id="globalGuidanceClose" aria-label="Close">&times;</button>
    </div>
    <h3>Need Guidance?</h3>
    <p>Contact our clinic coordinators immediately for appointment scheduling, second opinions, or emergency care.</p>
    <a href="tel:08520052229" class="guidance-phone"><i class="fa-solid fa-phone"></i> 8520052229</a>
    <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 14px;">
      <a href="https://wa.me/918520052229?text=Hello%20Dr.%20Rajesh%20Reddy%27s%20Clinic%2C%20I%20would%20like%20to%20inquire%20about%20a%20consultation." target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; justify-content: center; gap: 8px; background-color: #25D366; color: #ffffff; padding: 12px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 0.95rem; box-shadow: 0 4px 12px rgba(37,211,102,0.3);">
        <i class="fa-brands fa-whatsapp" style="font-size: 1.25rem;"></i> Chat on WhatsApp
      </a>
      <a href="<?= $path_prefix ?>contact" class="guidance-btn" style="display: flex; align-items: center; justify-content: center; gap: 8px; background-color: #0066cc; color: #ffffff; padding: 12px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 0.95rem;">
        <i class="fa-solid fa-calendar-check"></i> Book Appointment
      </a>
    </div>
    <p style="font-size: 0.75rem; color: #94a3b8; margin-top: 14px; margin-bottom: 0; text-align: center;">Clinic OPD Hours: Mon – Sat, 10:00 AM – 4:00 PM</p>
  </div>
</div>
<div id="globalGuidanceOverlay" class="mobile-float-overlay"></div>

</footer>
<script src="<?= $path_prefix ?>js/main.js?v=<?= time() ?>" defer></script>

<script>
  // Load Gabot strictly on real user interaction (frees mobile CPU during Lighthouse/PageSpeed audits)
  (function () {
    var loaded = false;
    function loadChatbot() {
      if (loaded) return;
      loaded = true;
      var s = document.createElement("script");
      s.id = "gabot-chatbot";
      s.async = true;
      s.src = "https://api.gabot.in/widget.js";
      s.setAttribute("data-tenant-key", "BohhyIT56sq67mb7ZPeHTbEMjwtTcQHxcOKYRV0M3nc");
      s.setAttribute("data-api-base", "https://api.gabot.in");
      document.body.appendChild(s);
    }
    ['scroll', 'touchstart', 'mousemove', 'click', 'keydown'].forEach(function (evt) {
      window.addEventListener(evt, loadChatbot, { once: true, passive: true });
    });
  })();
</script>