<?php
$page_title = "Coming Soon | Dr. Rajesh Reddy";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
  <link rel="canonical" href="https://drrajeshreddy.com/coming-soon">
  <!-- Open Graph / Facebook / WhatsApp -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://drrajeshreddy.com/coming-soon">
  <meta property="og:title" content="Dr. Rajesh Reddy Sannareddy | Neurosurgeon in Hyderabad">
  <meta property="og:description" content="Something exciting is coming soon from Dr. Rajesh Reddy. Stay tuned for our latest update.">
  <meta property="og:image" content="https://drrajeshreddy.com/images/logo.webp">

  <!-- Twitter / X Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@dr_rajeshreddy">
  <meta name="twitter:creator" content="@dr_rajeshreddy">
  <meta name="twitter:url" content="https://drrajeshreddy.com/coming-soon">
  <meta name="twitter:title" content="Dr. Rajesh Reddy Sannareddy | Neurosurgeon in Hyderabad">
  <meta name="twitter:description" content="Something exciting is coming soon from Dr. Rajesh Reddy. Stay tuned for our latest update.">
  <meta name="twitter:image" content="https://drrajeshreddy.com/images/logo.webp">

    <meta name="description" content="Something exciting is coming soon from Dr. Rajesh Reddy. Stay tuned for our latest update.">
    <meta name="keywords" content="Dr Rajesh Reddy coming soon, neurosurgery updates Hyderabad">
    <meta name="robots" content="noindex, follow">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript></noscript>
    <link rel="icon" type="image/png" href="images/favicon-drrajeshreddy.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --color-primary: #0066cc;
            --color-primary-focus: #0071e3;
            --color-ink: #1d1d1f;
            --color-ink-muted-80: #333333;
            --color-ink-muted-48: #7a7a7a;
            --color-divider-soft: rgba(0,0,0,0.04);
            --color-hairline: #e0e0e0;
            --color-canvas: #ffffff;
            --color-canvas-parchment: #f5f5f7;
            --color-surface-pearl: #fafafc;
            --color-surface-tile-1: #272729;
            --color-on-primary: #ffffff;
            --color-on-dark: #ffffff;
            --color-cyan: #29AED3;
            --color-gold: #fac20e;
            --font-display: "Space Grotesk", "SF Pro Display", system-ui, -apple-system, sans-serif;
            --font-text: "Inter", "SF Pro Text", system-ui, -apple-system, sans-serif;
            --rounded-sm: 8px;
            --rounded-md: 12px;
            --rounded-lg: 18px;
            --rounded-pill: 9999px;
        }

        /* ── Hero — parchment tile ── */
        .cs-hero {
            background-color: var(--color-canvas-parchment);
            padding: 100px 24px 80px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        .cs-hero::before {
            content: '';
            position: absolute;
            top: 0; left: 50%; transform: translateX(-50%);
            width: 800px; height: 400px;
            background: radial-gradient(ellipse at top, rgba(41,174,211,0.07) 0%, rgba(0,102,204,0.04) 40%, transparent 70%);
            pointer-events: none;
        }

        /* Badge */
        .cs-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background-color: rgba(41,174,211,0.10);
            border: 1px solid rgba(41,174,211,0.25);
            border-radius: var(--rounded-pill);
            padding: 6px 16px;
            font-family: var(--font-text);
            font-size: 13px;
            font-weight: 600;
            color: var(--color-cyan);
            letter-spacing: 0.8px;
            text-transform: uppercase;
            margin-bottom: 28px;
            position: relative; z-index: 1;
        }
        .cs-badge-dot { width: 6px; height: 6px; background: var(--color-cyan); border-radius: 50%; animation: blink 1.5s ease-in-out infinite; }

        /* Heading */
        .cs-heading {
            font-family: var(--font-display);
            font-size: clamp(40px, 7vw, 72px);
            font-weight: 700;
            line-height: 1.07;
            letter-spacing: -0.5px;
            color: var(--color-ink);
            margin-bottom: 20px;
            position: relative; z-index: 1;
        }
        .cs-heading-accent { color: var(--color-primary); }

        .cs-subtitle {
            font-family: var(--font-display);
            font-size: clamp(18px, 2.5vw, 24px);
            font-weight: 400;
            line-height: 1.4;
            color: var(--color-ink-muted-80);
            max-width: 520px;
            margin: 0 auto 56px;
            position: relative; z-index: 1;
        }

        /* ── Progress bar ── */
        .cs-progress-section { background-color: var(--color-surface-tile-1); padding: 56px 24px; text-align: center; }
        .cs-progress-inner { max-width: 640px; margin: 0 auto; }
        .cs-progress-header { display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 16px; }
        .cs-progress-label { font-family: var(--font-text); font-size: 13px; font-weight: 600; color: rgba(255,255,255,0.45); text-transform: uppercase; letter-spacing: 1px; }
        .cs-progress-pct { font-family: var(--font-display); font-size: 28px; font-weight: 700; color: var(--color-cyan); }
        .cs-progress-bar { width: 100%; height: 8px; background: rgba(255,255,255,0.1); border-radius: 999px; overflow: hidden; }
        .cs-progress-fill { height: 100%; background: linear-gradient(90deg, #0066cc, #29AED3); border-radius: 999px; width: 0%; animation: fillBar 2s 0.5s ease-out forwards; }
        .cs-progress-note { margin-top: 16px; font-size: 14px; color: rgba(255,255,255,0.3); }

        /* ── Features grid ── */
        .cs-features-section { background-color: var(--color-canvas); padding: 80px 24px; text-align: center; }
        .cs-features-inner { max-width: 1100px; margin: 0 auto; }
        .cs-section-eyebrow { font-family: var(--font-text); font-size: 13px; font-weight: 600; color: var(--color-primary); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; display: block; }
        .cs-section-title { font-family: var(--font-display); font-size: clamp(28px, 4vw, 40px); font-weight: 700; color: var(--color-ink); margin-bottom: 8px; letter-spacing: -0.5px; }
        .cs-section-sub { font-family: var(--font-display); font-size: clamp(16px, 2vw, 21px); font-weight: 400; color: var(--color-ink-muted-80); margin-bottom: 48px; }
        .cs-features-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 20px; }
        @media (max-width: 768px) { .cs-features-grid { grid-template-columns: 1fr 1fr; } }
        @media (max-width: 500px) { .cs-features-grid { grid-template-columns: 1fr; } }
        .cs-feature-card {
            background-color: var(--color-canvas);
            border: 1px solid var(--color-hairline);
            border-radius: var(--rounded-lg);
            border-top: 4px solid var(--color-cyan);
            padding: 28px 24px;
            text-align: left;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 12px rgba(0,0,0,0.04);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .cs-feature-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(0,0,0,0.08); }
        .cs-feature-icon { width: 44px; height: 44px; background: rgba(41,174,211,0.1); border-radius: var(--rounded-sm); display: flex; align-items: center; justify-content: center; margin-bottom: 18px; }
        .cs-feature-card h3 { font-family: var(--font-text); font-size: 17px; font-weight: 600; color: var(--color-ink); margin-bottom: 8px; }
        .cs-feature-card p { font-size: 14px; color: var(--color-ink-muted-80); line-height: 1.55; flex-grow: 1; margin-bottom: 20px; }
        .cs-feature-tag { display: inline-flex; align-items: center; gap: 6px; font-size: 12px; font-weight: 600; color: var(--color-primary); background: rgba(0,102,204,0.07); border-radius: var(--rounded-pill); padding: 4px 12px; width: fit-content; }

        /* ── CTA Banner ── */
        .cs-cta-banner { background-color: #111111; color: #ffffff; padding: 80px 24px; text-align: center; border-top: 1px solid rgba(255,255,255,0.08); }
        .cs-cta-inner { max-width: 720px; margin: 0 auto; display: flex; flex-direction: column; align-items: center; gap: 16px; }
        .cs-cta-inner h2 { font-family: var(--font-display); font-size: clamp(28px,4vw,40px); font-weight: 700; color: #ffffff; letter-spacing: -0.5px; margin: 0; }
        .cs-cta-inner p { font-size: 18px; color: #86868b; margin: 0 0 16px; line-height: 1.5; }
        .btn-outline-dark { display: inline-block; background: transparent; color: rgba(255,255,255,0.75); font-family: var(--font-text); font-size: 17px; border-radius: var(--rounded-pill); padding: 13px 28px; cursor: pointer; border: 1.5px solid rgba(255,255,255,0.25); transition: all 0.2s; text-decoration: none; }
        .btn-outline-dark:hover { border-color: rgba(255,255,255,0.55); color: #fff; }
        .cta-group { display: flex; gap: 16px; justify-content: center; align-items: center; flex-wrap: wrap; }

        /* Animations */
        @keyframes blink { 0%,100%{opacity:1} 50%{opacity:0.3} }
        @keyframes fillBar { to { width: 72%; } }
        @keyframes fadeUp { from{opacity:0;transform:translateY(24px)} to{opacity:1;transform:translateY(0)} }
        .cs-badge    { animation: fadeUp 0.5s ease-out both; }
        .cs-heading  { animation: fadeUp 0.5s 0.08s ease-out both; }
        .cs-subtitle { animation: fadeUp 0.5s 0.16s ease-out both; }
        .cs-notify-wrap { animation: fadeUp 0.5s 0.32s ease-out both; }
    </style>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q90BC8GWVR"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Q90BC8GWVR');
  </script>
  <!-- Microsoft Clarity -->
  <script type="text/javascript">
      (function(c,l,a,r,i,t,y){
          c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
          t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
          y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
      })(window, document, "clarity", "script", "zizh1na9vw");
  </script>
</head>
<body id="top">

    <?php include __DIR__ . '/components/header.php'; ?>

    <!-- Hero — parchment background matching homepage hero -->
    <section class="cs-hero">
        <div class="cs-badge">
            <span class="cs-badge-dot"></span>
            In Development
        </div>
        <h1 class="cs-heading">Something <span class="cs-heading-accent">Remarkable</span><br>Is Coming Soon</h1>
        <p class="cs-subtitle">We are crafting a new experience with the same precision we bring to every surgery. Check back shortly.</p>
    </section>

    <!-- Features — white tile, utility cards matching index.html .store-utility-card -->
    <section class="cs-features-section">
        <div class="cs-features-inner">
            <span class="cs-section-eyebrow">Coming Features</span>
            <h2 class="cs-section-title">What We Are Building.</h2>
            <p class="cs-section-sub">New tools to make your healthcare journey seamless.</p>
            <div class="cs-features-grid">
                <div class="cs-feature-card">
                    <div class="cs-feature-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#29AED3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg></div>
                    <h3>Online Appointment Booking</h3>
                    <p>Schedule your consultation 24/7 from any device, without a phone call.</p>
                    <span class="cs-feature-tag"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Finalising</span>
                </div>
                <div class="cs-feature-card">
                    <div class="cs-feature-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#29AED3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
                    <h3>Procedure Visual Guides</h3>
                    <p>Step-by-step explainers for every surgical procedure Dr. Reddy performs.</p>
                    <span class="cs-feature-tag"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> In review</span>
                </div>
                <div class="cs-feature-card">
                    <div class="cs-feature-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#29AED3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></div>
                    <h3>Patient Live Chat</h3>
                    <p>Get instant answers to pre-surgery and post-operative queries from our team.</p>
                    <span class="cs-feature-tag"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Building</span>
                </div>
                <div class="cs-feature-card">
                    <div class="cs-feature-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#29AED3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1 3.07-8.63A2 2 0 0 1 9.93 1.18h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11l-1.71 1.71a16 16 0 0 0 6.09 6.09l1.71-1.71a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div>
                    <h3>Second Opinion Portal</h3>
                    <p>Upload your MRI or CT scans and receive an expert review within 48 hours.</p>
                    <span class="cs-feature-tag"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Planned</span>
                </div>
                <div class="cs-feature-card">
                    <div class="cs-feature-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#29AED3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg></div>
                    <h3>Post-Op Recovery Tracker</h3>
                    <p>Track recovery milestones and receive personalised guidance through each stage.</p>
                    <span class="cs-feature-tag"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Planned</span>
                </div>
                <div class="cs-feature-card">
                    <div class="cs-feature-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#29AED3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.5 2A2.5 2.5 0 0 1 12 4.5v15a2.5 2.5 0 0 1-4.96.44 2.5 2.5 0 0 1-2.96-3.08 3 3 0 0 1-.34-5.58 2.5 2.5 0 0 1 1.32-4.24 2.5 2.5 0 0 1 1.98-3A2.5 2.5 0 0 1 9.5 2Z"/><path d="M14.5 2A2.5 2.5 0 0 0 12 4.5v15a2.5 2.5 0 0 0 4.96.44 2.5 2.5 0 0 0 2.96-3.08 3 3 0 0 0 .34-5.58 2.5 2.5 0 0 0-1.32-4.24 2.5 2.5 0 0 0-1.98-3A2.5 2.5 0 0 0 14.5 2Z"/></svg></div>
                    <h3>Condition Library</h3>
                    <p>A patient-friendly library covering every brain and spine condition we treat.</p>
                    <span class="cs-feature-tag"><svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> In review</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Banner — dark banner -->
    <section class="cs-cta-banner">
        <div class="cs-cta-inner">
            <h2>Need care right now?</h2>
            <p>The new site is on its way, but Dr. Rajesh Reddy is available today for consultations.</p>
            <div class="cta-group">
                <a href="contact.php" class="btn-primary" style="padding: 13px 28px; border-radius: 9999px; text-decoration: none;">Book an Appointment</a>
                <a href="index.php" class="btn-outline-dark">Visit Main Site</a>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/components/footer.php'; ?>

    <script src="js/main.js"></script>
</body>
</html>
