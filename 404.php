<?php
http_response_code(404);
$page_title = "Page Not Found | Dr. Rajesh Reddy";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <meta name="description" content="The page you were looking for does not exist. Return to Dr. Rajesh Reddy's website.">
    <meta name="keywords" content="Dr Rajesh Reddy, 404 page, neurosurgeon Hyderabad">
    <meta name="robots" content="noindex, follow">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        :root {
            --font-display-404: "Space Grotesk", system-ui, sans-serif;
            --color-surface-pearl: #fafafc;
            --color-hairline: #e0e0e0;
            --color-ink-muted-48: #7a7a7a;
            --color-canvas-parchment: #f5f5f7;
            --rounded-sm: 8px;
            --rounded-md: 12px;
            --rounded-pill: 9999px;
        }

        /* 404 Page Custom Hero */
        .error-hero {
            min-height: calc(100vh - 104px - 280px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 80px 24px;
            background: var(--color-canvas-parchment);
            position: relative;
            overflow: hidden;
        }
        @media (max-width: 900px) {
            .error-hero { min-height: auto; padding: 60px 24px; }
        }
        .error-hero::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            height: 600px;
            background: radial-gradient(ellipse, rgba(41,174,211,0.08) 0%, rgba(0,102,204,0.05) 40%, transparent 70%);
            pointer-events: none;
            border-radius: 50%;
        }
        .error-icon {
            width: 72px;
            height: 72px;
            background: linear-gradient(135deg, rgba(0,102,204,0.1), rgba(41,174,211,0.1));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            border: 1px solid rgba(0,102,204,0.15);
            animation: pulseGlow 3s ease-in-out infinite;
        }
        .error-code-wrap {
            position: relative;
            margin-bottom: 32px;
        }
        .error-code-shadow {
            position: absolute;
            top: 6px;
            left: 0;
            right: 0;
            font-family: var(--font-display-404);
            font-size: clamp(100px, 20vw, 180px);
            font-weight: 700;
            line-height: 1;
            letter-spacing: -6px;
            color: transparent;
            -webkit-text-stroke: 1px rgba(0,102,204,0.1);
            user-select: none;
        }
        .error-code {
            font-family: var(--font-display-404);
            font-size: clamp(100px, 20vw, 180px);
            font-weight: 700;
            line-height: 1;
            letter-spacing: -6px;
            color: transparent;
            background: linear-gradient(135deg, #0066cc 0%, #29AED3 50%, #0066cc 100%);
            -webkit-background-clip: text;
            background-clip: text;
            user-select: none;
            position: relative;
        }
        .error-title {
            font-family: var(--font-display-404);
            font-size: clamp(24px, 4vw, 40px);
            font-weight: 700;
            color: #1d1d1f;
            margin-bottom: 16px;
            letter-spacing: -0.5px;
        }
        .error-subtitle {
            font-size: 18px;
            line-height: 1.55;
            color: var(--color-ink-muted-48);
            max-width: 480px;
            margin: 0 auto 40px;
        }
        .error-actions {
            display: flex;
            gap: 16px;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .btn-error-primary {
            display: inline-block;
            background: #0066cc;
            color: #ffffff !important;
            font-size: 16px;
            font-weight: 600;
            border-radius: var(--rounded-pill);
            padding: 13px 28px;
            text-decoration: none;
            transition: background 0.2s, transform 0.15s;
        }
        .btn-error-primary:hover { background: #0055b3; }
        .btn-error-primary:active { transform: scale(0.97); }

        .btn-error-secondary {
            display: inline-block;
            background: transparent;
            color: #0066cc !important;
            font-size: 16px;
            font-weight: 600;
            border-radius: var(--rounded-pill);
            padding: 13px 28px;
            border: 1.5px solid #0066cc;
            text-decoration: none;
            transition: all 0.2s;
        }
        .btn-error-secondary:hover { background: rgba(0,102,204,0.05); }

        .error-links-section {
            background: #ffffff;
            border-top: 1px solid var(--color-hairline);
            padding: 64px 24px;
        }
        .error-links-inner {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }
        .error-links-title {
            font-family: var(--font-display-404);
            font-size: 22px;
            font-weight: 700;
            color: #1d1d1f;
            margin-bottom: 8px;
        }
        .error-links-sub {
            font-size: 15px;
            color: var(--color-ink-muted-48);
            margin-bottom: 40px;
        }
        .error-links-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }
        @media (max-width: 768px) { .error-links-grid { grid-template-columns: 1fr 1fr; } }
        @media (max-width: 480px) { .error-links-grid { grid-template-columns: 1fr; } }
        
        .error-link-card {
            background: var(--color-surface-pearl);
            border: 1px solid var(--color-hairline);
            border-radius: var(--rounded-md);
            padding: 24px 20px;
            text-align: left;
            display: flex;
            align-items: flex-start;
            gap: 16px;
            text-decoration: none;
            transition: all 0.2s;
        }
        .error-link-card:hover {
            border-color: #0066cc;
            box-shadow: 0 4px 20px rgba(0,102,204,0.08);
            transform: translateY(-2px);
        }
        .error-link-card-icon {
            width: 44px;
            height: 44px;
            border-radius: var(--rounded-sm);
            background: linear-gradient(135deg, rgba(41,174,211,0.1), rgba(0,102,204,0.1));
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border: 1px solid rgba(41,174,211,0.2);
            color: #29AED3;
            font-size: 1.1rem;
        }
        .error-link-card-content h4 {
            font-size: 15px;
            font-weight: 700;
            color: #1d1d1f;
            margin-bottom: 4px;
        }
        .error-link-card-content p {
            font-size: 13px;
            color: var(--color-ink-muted-48);
            line-height: 1.4;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0); }
            33% { transform: translateY(-10px) rotate(1deg); }
            66% { transform: translateY(-5px) rotate(-1deg); }
        }
        @keyframes pulseGlow {
            0%, 100% { box-shadow: 0 0 0 0 rgba(0,102,204,0.2); }
            50% { box-shadow: 0 0 0 16px rgba(0,102,204,0); }
        }
        .floating-icon { animation: float 6s ease-in-out infinite; }
    </style>
    <link rel="icon" type="image/png" href="images/favicon-drrajeshreddy.png">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q90BC8GWVR"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Q90BC8GWVR');
  </script>
</head>
<body>

    <!-- Global Header -->
    <?php include __DIR__ . '/components/header.php'; ?>

    <!-- Main 404 Hero -->
    <section class="error-hero">
        <div class="error-icon floating-icon">
            <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#0066cc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
            </svg>
        </div>
        <div class="error-code-wrap">
            <div class="error-code-shadow">404</div>
            <div class="error-code">404</div>
        </div>
        <h1 class="error-title">Page Not Found</h1>
        <p class="error-subtitle">The page you were looking for seems to have wandered off. Even the most precise neurosurgeons sometimes take a wrong turn.</p>
        <div class="error-actions">
            <a href="<?= $path_prefix ?>index.php" class="btn-error-primary">Return to Home</a>
            <a href="<?= $path_prefix ?>contact.php" class="btn-error-secondary">Book a Consultation</a>
        </div>
    </section>

    <!-- Popular Helpful Links -->
    <section class="error-links-section">
        <div class="error-links-inner">
            <h2 class="error-links-title">You might be looking for</h2>
            <p class="error-links-sub">Explore the most visited sections of our website</p>
            <div class="error-links-grid">
                <a href="<?= $path_prefix ?>profile" class="error-link-card">
                    <div class="error-link-card-icon"><i class="fa-solid fa-user-doctor"></i></div>
                    <div class="error-link-card-content">
                        <h4>Doctor's Profile</h4>
                        <p>Credentials, training &amp; specializations</p>
                    </div>
                </a>
                <a href="<?= $path_prefix ?>brain-tumor-removal-surgery.php" class="error-link-card">
                    <div class="error-link-card-icon"><i class="fa-solid fa-brain"></i></div>
                    <div class="error-link-card-content">
                        <h4>Brain Surgery</h4>
                        <p>Advanced tumor removal &amp; neurosurgical procedures</p>
                    </div>
                </a>
                <a href="<?= $path_prefix ?>contact.php" class="error-link-card">
                    <div class="error-link-card-icon"><i class="fa-solid fa-calendar-check"></i></div>
                    <div class="error-link-card-content">
                        <h4>Book Consultation</h4>
                        <p>Schedule an appointment with Dr. Rajesh Reddy</p>
                    </div>
                </a>
                <a href="<?= $path_prefix ?>patient-education.php" class="error-link-card">
                    <div class="error-link-card-icon"><i class="fa-solid fa-book-medical"></i></div>
                    <div class="error-link-card-content">
                        <h4>Patient Education</h4>
                        <p>Articles about brain &amp; spine conditions</p>
                    </div>
                </a>
                <a href="<?= $path_prefix ?>faq.php" class="error-link-card">
                    <div class="error-link-card-icon"><i class="fa-solid fa-circle-question"></i></div>
                    <div class="error-link-card-content">
                        <h4>FAQs</h4>
                        <p>Frequently asked questions about treatments</p>
                    </div>
                </a>
                <a href="<?= $path_prefix ?>patient-stories.php" class="error-link-card">
                    <div class="error-link-card-icon"><i class="fa-solid fa-star"></i></div>
                    <div class="error-link-card-content">
                        <h4>Patient Stories</h4>
                        <p>Real recovery journeys from our patients</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Global Footer -->
    <?php include __DIR__ . '/components/footer.php'; ?>

    <!-- Global Scripts -->
    <script src="js/main.js"></script>
</body>
</html>
