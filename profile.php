<?php
$page_title = "Dr. Rajesh Reddy Sannareddy | Brain, Spine and Endovascular Neurosurgeon, Hyderabad";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Dr. Rajesh Reddy Sannareddy — JIPMER Gold Medalist, NIMS Exam Topper, FINR Zurich. Senior Consultant Neurosurgeon in Hyderabad specialising in brain tumor surgery, aneurysm coiling, spine surgery, and stroke treatment. 5,000+ procedures.">
    <meta name="keywords"
        content="neurosurgeon Hyderabad, brain surgeon Hyderabad, interventional neuroradiologist Hyderabad, aneurysm specialist Hyderabad, Brain and Spine Neurosurgeon in Hyderabad, Endovascular Neurosurgeon in Hyderabad, Dr Rajesh Reddy Sannareddy">
    <link rel="canonical" href="https://drrajeshreddy.com/profile">
  <!-- Open Graph / Facebook / WhatsApp -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://drrajeshreddy.com/profile">
  <meta property="og:title" content="Dr. Rajesh Reddy Sannareddy | Neurosurgeon in Hyderabad">
  <meta property="og:description" content="Dr. Rajesh Reddy Sannareddy — JIPMER Gold Medalist, NIMS Exam Topper, FINR Zurich. Senior Consultant Neurosurgeon in Hyderabad specialising in brain tumor surgery, aneurysm coiling, spine surgery, and stroke treatment. 5,000+ procedures.">
  <meta property="og:image" content="https://drrajeshreddy.com/images/logo.webp">

  <!-- Twitter / X Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@dr_rajeshreddy">
  <meta name="twitter:creator" content="@dr_rajeshreddy">
  <meta name="twitter:url" content="https://drrajeshreddy.com/profile">
  <meta name="twitter:title" content="Dr. Rajesh Reddy Sannareddy | Neurosurgeon in Hyderabad">
  <meta name="twitter:description" content="Dr. Rajesh Reddy Sannareddy — JIPMER Gold Medalist, NIMS Exam Topper, FINR Zurich. Senior Consultant Neurosurgeon in Hyderabad specialising in brain tumor surgery, aneurysm coiling, spine surgery, and stroke treatment. 5,000+ procedures.">
  <meta name="twitter:image" content="https://drrajeshreddy.com/images/logo.webp">
    <title><?php echo $page_title; ?></title>
      <!-- Preconnect to Font domains -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Inter:wght@300;400;500;600;700&display=swap" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Inter:wght@300;400;500;600;700&display=swap"></noscript>
<link rel="stylesheet" href="css/style.css">

    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript></noscript>
    <link rel="icon" type="image/png" href="images/favicon-drrajeshreddy.png">


    <style>
        /* Base Layout & Typography for Profile Content */
        .profile-page-wrapper {
            max-width: 1140px;
            margin: 0 auto;
            padding: 40px 24px 80px 24px;
        }

        .section-title-lg {
            font-size: 32px;
            font-weight: 700;
            color: #1d1d1f;
            margin-bottom: 12px;
            letter-spacing: -0.5px;
            font-family: 'Space Grotesk', sans-serif;
        }

        .section-subtitle {
            font-size: 16px;
            line-height: 1.6;
            color: #86868b;
            margin-bottom: 40px;
        }

        /* Featured Doctor Card */
        .featured-doctor-card {
            position: relative;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 440px;
            margin: 0 auto;
            border: 1px solid rgba(0, 0, 0, 0.06);
            background: #1d1d1f;
        }

        .featured-doctor-card img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }

        .featured-doctor-card .card-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 36px 24px 24px 24px;
            background: linear-gradient(to top, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.75) 50%, rgba(15, 23, 42, 0) 100%);
            color: #ffffff;
        }

        .featured-doctor-card .card-name {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 24px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 4px;
        }

        .featured-doctor-card .card-title {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 16px;
        }

        .featured-doctor-card .card-badges {
            display: flex;
            gap: 6px;
            flex-wrap: wrap;
        }

        .featured-doctor-card .badge-pill {
            background: rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: #ffffff;
            font-size: 12px;
            font-weight: 600;
            padding: 5px 12px;
            border-radius: 9999px;
        }

        /* Quote Box */
        .quote-banner {
            background: #f5f5f7;
            border-left: 4px solid #0066cc;
            border-radius: 12px;
            padding: 24px 32px;
            margin-top: 24px;
        }

        .quote-banner p {
            font-size: 15px;
            line-height: 1.6;
            font-style: italic;
            color: #1d1d1f;
            margin: 0;
        }

        /* 5 Pillars Grid */
        .pillars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 24px;
        }

        .pillar-card {
            background: #fafafc;
            border-radius: 12px;
            padding: 28px 24px;
            border: 1px solid #e0e0e0;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .pillar-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04);
        }

        .pillar-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(0, 102, 204, 0.08);
            color: #0066cc;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 20px;
        }

        /* Accordions for Specialties (FAQ Style) */
        .accordion-group {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .accordion-item {
            border-radius: 14px;
            border: 1px solid #e2e8f0;
            overflow: hidden;
            background: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
            transition: border-color 0.25s ease, box-shadow 0.25s ease, transform 0.25s ease;
        }

        .accordion-item:hover {
            border-color: #0066cc;
            box-shadow: 0 8px 24px rgba(0, 102, 204, 0.12);
            transform: translateY(-2px);
        }

        .accordion-item.active {
            border: 2px solid #0066cc;
            box-shadow: 0 8px 25px rgba(0, 102, 204, 0.15);
        }

        .accordion-header {
            background: #0066cc;
            color: #ffffff;
            padding: 18px 24px;
            font-family: 'Space Grotesk', 'Plus Jakarta Sans', sans-serif;
            font-size: 17px;
            font-weight: 700;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            user-select: none;
            transition: background-color 0.2s ease;
        }

        .accordion-header:hover {
            background: #0052a3;
        }

        .accordion-header .toggle-icon {
            font-size: 16px;
            font-weight: 700;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            line-height: 1;
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.2s ease;
        }

        .accordion-header:hover .toggle-icon {
            background: rgba(255, 255, 255, 0.35);
        }

        .accordion-item.active .accordion-header .toggle-icon {
            background: rgba(255, 255, 255, 0.35);
            transform: rotate(180deg);
        }

        .accordion-body {
            display: none;
            padding: 26px 28px;
            background: #ffffff;
            border-top: 1px solid #f1f5f9;
        }

        .accordion-item.active .accordion-body {
            display: block;
            animation: accordionExpand 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        @keyframes accordionExpand {
            from {
                opacity: 0;
                transform: translateY(-6px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .accordion-body h3 {
            font-size: 20px;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 16px;
            color: #0066cc;
        }

        .accordion-body ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .accordion-body li {
            position: relative;
            padding-left: 26px;
            font-size: 15px;
            line-height: 1.6;
            color: #334155;
        }

        .accordion-body li::before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 1px;
            color: #0066cc;
            font-size: 14px;
            font-weight: 800;
        }

        /* Table Clean Styling */
        .clean-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e0e0e0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
        }

        .clean-table th {
            background: #0066cc;
            color: #ffffff;
            padding: 16px 20px;
            text-align: left;
            font-size: 15px;
            font-weight: 600;
        }

        .clean-table td {
            padding: 16px 20px;
            border-bottom: 1px solid #e0e0e0;
            font-size: 14px;
            color: #333333;
        }

        .clean-table tr:last-child td {
            border-bottom: none;
        }

        .clean-table tr:nth-child(even) {
            background: #fafafc;
        }

        /* Honors Grid */
        .honors-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .honor-card {
            background: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 24px;
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }

        .honor-icon {
            font-size: 28px;
            color: #fac20e;
            flex-shrink: 0;
        }
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

<body>
    <?php include 'components/header.php'; ?>

    <main class="profile-page-wrapper">

        <!-- 1. Hero Section -->
        <section style="display: flex; flex-wrap: wrap; gap: 48px; align-items: flex-start; margin-bottom: 80px;">
            <div style="flex: 1 1 500px;">
                <h1
                    style="font-size: 40px; line-height: 1.2; margin-bottom: 24px; font-family: 'Space Grotesk', sans-serif;">
                    About Dr. Rajesh Reddy Sannareddy</h1>
                <p style="font-size: 17px; line-height: 1.6; color: #333; margin-bottom: 16px;">
                    <strong>Dr. Rajesh Reddy Sannareddy</strong> is one of India's most comprehensively trained
                    neurosurgeons — a rare specialist who bridges three distinct disciplines under one roof:
                    microsurgical brain and spine surgery, minimally invasive endoscopic neurosurgery, and
                    interventional neuroradiology (endovascular surgery).
                </p>
                <p style="font-size: 16px; line-height: 1.65; color: #555; margin-bottom: 16px;">
                    His academic credentials are among the strongest in Indian neurosurgery: Gold Medalist at JIPMER,
                    Pondicherry – one of India's premier medical institutions – and Overall Examination Topper at NIMS,
                    Hyderabad for his MCh in Neurosurgery. He holds Double Board Certification in Neurosurgery (MCh +
                    DNB), and his Fellowship in Interventional Neuroradiology (FINR) from the University Hospital
                    (Zurich) placed him at one of Europe's most respected cerebrovascular centres.
                </p>
                <p style="font-size: 16px; line-height: 1.65; color: #555; margin-bottom: 24px;">
                    He has further refined his surgical technique and international perspective through Visiting Scholar
                    programmes at Barrow Neurological Institute, Phoenix (USA), Okayama University (Japan), and Klinikum
                    Stuttgart (Germany). With over 5,000 procedures performed across a 25+ year career, he brings a
                    depth of clinical experience that few neurosurgeons in the region can match.
                </p>

                <div class="quote-banner">
                    <p>"When a patient comes to me with a complex brain or spine condition, my responsibility is to
                        offer the treatment that achieves the best cure with the least intervention. Whether that means
                        open microsurgery, keyhole endoscopy, or a pinhole endovascular procedure, the patient receives
                        the optimal option — not just what a single subspecialist happens to perform."</p>
                    <div style="font-weight: 700; font-size: 13px; color: #0066cc; margin-top: 8px;">— Dr. Rajesh Reddy
                        Sannareddy</div>
                </div>
            </div>

            <div
                style="flex: 1 1 380px; display: flex; justify-content: center; align-items: flex-start; position: sticky; top: 145px;">
                <div
                    style="position: relative; width: 100%; max-width: 440px; border-radius: 18px; overflow: hidden; box-shadow: 0 12px 32px rgba(0,0,0,0.12); border: 1px solid rgba(0,0,0,0.08); background: #1d1d1f;">
                    <img src="images/dr-rajesh-excellence-in-neurosurgery.webp" alt="Dr. Rajesh Reddy Sannareddy"
                        style="width: 100%; height: auto; display: block; object-fit: cover;">
                    <div
                        style="position: absolute; bottom: 0; left: 0; right: 0; padding: 48px 24px 24px 24px; background: linear-gradient(to top, rgba(15, 23, 42, 0.92) 0%, rgba(15, 23, 42, 0.7) 60%, rgba(15, 23, 42, 0) 100%); color: #ffffff;">
                        <div
                            style="font-family: 'Space Grotesk', sans-serif; font-size: 22px; font-weight: 700; color: #ffffff; margin-bottom: 4px; letter-spacing: -0.3px;">
                            Dr. Rajesh Reddy Sannareddy</div>
                        <div
                            style="font-size: 13px; color: rgba(255, 255, 255, 0.85); margin-bottom: 14px; font-weight: 500;">
                            Brain, Spine and Endovascular specialist</div>
                        <div style="display: flex; gap: 6px; flex-wrap: wrap;">
                            <span
                                style="background: rgba(255, 255, 255, 0.18); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.25); color: #ffffff; font-size: 11px; font-weight: 600; padding: 4px 11px; border-radius: 9999px;">MBBS</span>
                            <span
                                style="background: rgba(255, 255, 255, 0.18); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.25); color: #ffffff; font-size: 11px; font-weight: 600; padding: 4px 11px; border-radius: 9999px;">MS</span>
                            <span
                                style="background: rgba(255, 255, 255, 0.18); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.25); color: #ffffff; font-size: 11px; font-weight: 600; padding: 4px 11px; border-radius: 9999px;">MCh,
                                Neurosurgery</span>
                            <span
                                style="background: rgba(255, 255, 255, 0.18); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.25); color: #ffffff; font-size: 11px; font-weight: 600; padding: 4px 11px; border-radius: 9999px;">DNB</span>
                            <span
                                style="background: rgba(255, 255, 255, 0.18); backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); border: 1px solid rgba(255, 255, 255, 0.25); color: #ffffff; font-size: 11px; font-weight: 600; padding: 4px 11px; border-radius: 9999px;">FINR
                                (Zurich)</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Bar -->
        <section class="stats-banner-section">
            <div class="stat-card">
                <div class="stat-number" data-target="25" data-suffix="+">25+</div>
                <div class="stat-label">Years Clinical Experience</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-target="5000" data-suffix="+" data-format="comma">5,000+</div>
                <div class="stat-label">Procedures Performed</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-target="20" data-suffix="+">20+</div>
                <div class="stat-label">Medical Awards &amp; Honors</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-target="3" data-suffix="">3</div>
                <div class="stat-label">Subspecialty Disciplines</div>
            </div>
        </section>

        <!-- 2. Why Patients Choose -->
        <section style="margin-bottom: 80px;">
            <h2 class="section-title-lg">Why Patients Choose Dr. Rajesh Reddy</h2>
            <p class="section-subtitle">His practice is founded on core principles that ensure patients receive not
                only world-class technical skill, but also thoughtful, individualised surgical guidance:</p>

            <div class="pillars-grid">
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fa-solid fa-brain"></i></div>
                    <h4 style="font-size: 17px; margin-top: 0; margin-bottom: 8px;">Integrated Expertise Across All
                        Modalities</h4>
                    <p style="font-size: 14px; color: #555; line-height: 1.6; margin: 0;">Unique triple mastery across
                        microsurgery, keyhole endoscopy, and pinhole endovascular coiling/stenting.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fa-solid fa-globe"></i></div>
                    <h4 style="font-size: 17px; margin-top: 0; margin-bottom: 8px;">International Training</h4>
                    <p style="font-size: 14px; color: #555; line-height: 1.6; margin: 0;">Fellowship at USZ (Zurich)
                        plus
                        Visiting Scholar stints at Barrow (USA), Okayama (Japan), and Stuttgart (Germany).</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fa-solid fa-microscope"></i></div>
                    <h4 style="font-size: 17px; margin-top: 0; margin-bottom: 8px;">Technology-First Surgery</h4>
                    <p style="font-size: 14px; color: #555; line-height: 1.6; margin: 0;">Utilising intraoperative
                        neuro-navigation, ICG fluorescence angiography, and neuro-monitoring for maximum surgical
                        safety.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fa-solid fa-comments"></i></div>
                    <h4 style="font-size: 17px; margin-top: 0; margin-bottom: 8px;">Honest, Unhurried Consultations</h4>
                    <p style="font-size: 14px; color: #555; line-height: 1.6; margin: 0;">Clear, transparent discussions
                        explaining conservative management, intervention risks, and expected outcomes without rush.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fa-solid fa-user-doctor"></i></div>
                    <h4 style="font-size: 17px; margin-top: 0; margin-bottom: 8px;">Continuity of Care</h4>
                    <p style="font-size: 14px; color: #555; line-height: 1.6; margin: 0;">Personal oversight from
                        initial pre-op evaluation through surgical procedure, ICU recovery, and long-term outpatient
                        follow-up.</p>
                </div>
                <div class="pillar-card">
                    <div class="pillar-icon"><i class="fa-solid fa-heart-pulse"></i></div>
                    <h4 style="font-size: 17px; margin-top: 0; margin-bottom: 8px;">Holistic &amp; Personalized Care
                    </h4>
                    <p style="font-size: 14px; color: #555; line-height: 1.6; margin: 0;">Tailored treatment plans
                        addressing complete physical, neurological, and emotional well-being with compassionate
                        rehabilitation support.</p>
                </div>
            </div>
        </section>

        <!-- 3. Qualifications Table -->
        <section style="margin-bottom: 80px;">
            <h2 class="section-title-lg">Qualifications, Training &amp; Fellowships</h2>
            <p class="section-subtitle">Dr. Rajesh Reddy's academic and clinical training represents a progression from
                foundational excellence in India's finest medical institutions to specialised international fellowship
                training at globally recognised cerebrovascular centres:</p>

            <div style="overflow-x: auto; -webkit-overflow-scrolling: touch; width: 100%;">
                <table class="clean-table" style="min-width: 600px;">
                    <thead>
                        <tr>
                            <th>Qualification</th>
                            <th>Institution</th>
                            <th>Distinction / Specialisation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>MBBS</strong></td>
                            <td>JIPMER, Pondicherry</td>
                            <td>Gold Medalist — Best All-Round Student</td>
                        </tr>
                        <tr>
                            <td><strong>MS, General Surgery</strong></td>
                            <td>JIPMER, Pondicherry</td>
                            <td>Gold Medalist — S.B. Sen Memorial Gold Medal</td>
                        </tr>
                        <tr>
                            <td><strong>MRCS</strong></td>
                            <td>Royal College of Surgeons, Edinburgh</td>
                            <td>Member of the Royal College of Surgeons</td>
                        </tr>
                        <tr>
                            <td><strong>MCh, Neurosurgery</strong></td>
                            <td>NIMS, Hyderabad</td>
                            <td>Overall Examination Topper — Double Board Certified</td>
                        </tr>
                        <tr>
                            <td><strong>FINR (Fellowship in Interventional Neuroradiology)</strong></td>
                            <td>University Hospital, Zurich</td>
                            <td>Cerebrovascular Endovascular Techniques</td>
                        </tr>
                        <tr>
                            <td><strong>Epilepsy Surgery Training</strong></td>
                            <td>KIMS, Hyderabad</td>
                            <td>Mapping and resection of epileptogenic zones</td>
                        </tr>
                        <tr>
                            <td><strong>Visiting Scholar (Cerebrovascular)</strong></td>
                            <td>Barrow Neurological Institute, Phoenix, USA</td>
                            <td>Advanced cerebrovascular surgery &amp; complex aneurysm management</td>
                        </tr>
                        <tr>
                            <td><strong>Visiting Scholar</strong></td>
                            <td>Okayama University, Japan</td>
                            <td>Advanced neurosurgical techniques</td>
                        </tr>
                        <tr>
                            <td><strong>Visiting Scholar</strong></td>
                            <td>Klinikum Stuttgart, Germany</td>
                            <td>Endovascular neurosurgery</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- 3.5. Work Experience Table -->
        <section style="margin-bottom: 80px;">
            <h2 class="section-title-lg">Work Experience</h2>

            <div style="overflow-x: auto; -webkit-overflow-scrolling: touch; width: 100%;">
                <table class="clean-table" style="margin-top: 24px; min-width: 600px;">
                    <thead>
                        <tr>
                            <th>Company</th>
                            <th>Designation or Occupation</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>KIMS Hospital, Secunderabad</strong></td>
                            <td>Post Doctoral Fellow in functional neurosurgery</td>
                            <td>2011 - 2012</td>
                        </tr>
                        <tr>
                            <td><strong>Apollo Hospital, Jubilee Hills</strong></td>
                            <td>Consultant Brain and Spine, and Endovascular Neurosurgeon</td>
                            <td>2012 - 2023</td>
                        </tr>
                        <tr>
                            <td><strong>American Oncology Institute, Hyderabad, Telangana</strong></td>
                            <td>Sr.Consultant Brain, Spine and Endovascular Neurosurgeon</td>
                            <td>2023 - 2026</td>
                        </tr>
                        <tr>
                            <td><strong>Medicover Hospitals, Financial District, Hyderabad</strong></td>
                            <td>Sr.Consultant Brain, Spine and Endovascular Neurosurgeon</td>
                            <td>2026 - Present</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>


        <!-- 4. Clinical Specialties -->
        <section style="margin-bottom: 80px;">
            <h2 class="section-title-lg">Clinical Specialties: What Dr. Rajesh Reddy Treats</h2>
            <p class="section-subtitle">Dr. Rajesh Reddy's practice spans the full spectrum of conditions treated by
                brain, spine, and cerebrovascular surgery. Explore all 8 core specialty areas below:</p>

            <div class="accordion-group">

                <!-- 1. Neurotrauma -->
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <span>1. Neurotrauma Procedures</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-body">
                        <h3>Neurotrauma Procedures</h3>
                        <ul>
                            <li>Removal of Extradural Haematoma (EDH)</li>
                            <li>Removal of Sub Dural Haematoma (SDH)</li>
                            <li>Removal of contusions of the brain</li>
                            <li>Repair of the skull bones</li>
                            <li>Aligning the depressed fractures</li>
                            <li>Surgery for CSF Rhinorrhoea – Endoscopic (through nose), wherever feasible / microscopic
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 2. Microvascular -->
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <span>2. Microvascular Surgery</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-body">
                        <h3>Microvascular Procedures</h3>
                        <ul>
                            <li>Brain aneurysm - ruptured (subarachnoid hemorrhage), unruptured</li>
                            <li>Arteriovenous malformation (AVM)</li>
                            <li>Cavernous malformation</li>
                            <li>Brain hemorrhage</li>
                            <li>Intracranial arterial stenosis - bypass procedure</li>
                            <li>Carotid stenosis - carotid endarterectomy</li>
                            <li>Moyamoya disease - bypass procedure</li>
                        </ul>
                    </div>
                </div>

                <!-- 3. Conditions in Senior Patients -->
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <span>3. Problems Common in Elderly</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-body">
                        <h3>Conditions in Senior Patients</h3>
                        <ul>
                            <li>Normal pressure hydrocephalus</li>
                            <li>Spine fractures</li>
                            <li>Tremors / stiffness from parkinson disease</li>
                            <li>Chronic subdural hematoma</li>
                        </ul>
                    </div>
                </div>

                <!-- 4. Neuro-Oncology -->
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <span>4. Brain &amp; Skull Base Tumors (Neuro-Oncology)</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-body">
                        <h3>Brain &amp; Skull Base Tumors</h3>
                        <ul>
                            <li>Glioma (low-grade, high grade / glioblastoma)</li>
                            <li>Pituitary tumour</li>
                            <li>Medulloblastoma</li>
                            <li>Pineocytoma / pineoblastoma</li>
                            <li>Vestibular schwannoma</li>
                            <li>Craniopharyngioma</li>
                            <li>Skull base tumors</li>
                        </ul>
                    </div>
                </div>

                <!-- 5. Spine Surgery -->
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <span>5. Spine Surgery &amp; Spinal Procedures</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-body">
                        <h3>Spinal Procedures</h3>
                        <ul>
                            <li>Slipped disc (neck / low back): endoscopic discectomy (tubular retractor), microscopic
                                discectomy, disc replacement</li>
                            <li>Minimally invasive spinal stabilization: spondylolisthesis, spinal canal stenosis, spine
                                tumors</li>
                            <li>Congenital spinal malformations: excision of meningocele, detethering of spinal cord,
                                foramen magnum decompression</li>
                            <li>Spinal trauma surgery &amp; percutaneous vertebral augmentation</li>
                        </ul>
                    </div>
                </div>

                <!-- 6. Functional Neurosurgery -->
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <span>6. Functional &amp; Epilepsy Surgery</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-body">
                        <h3>Functional &amp; Epilepsy Surgery</h3>
                        <ul>
                            <li>Trigeminal neuralgia (facial pain) – radiofrequency ablation, microvascular
                                decompression</li>
                            <li>Occipital neuralgia</li>
                            <li>Spasticity – selective dorsal rhizotomy, selective peripheral neurotomy, soft tissue
                                release, intrathecal baclofen pump</li>
                            <li>Deep brain stimulation – parkinson disease</li>
                            <li>Spinal cord stimulation – chronic back pain</li>
                            <li>Refractory epilepsy surgery – lesionectomy, vagal nerve stimulation</li>
                            <li>Facet ablation for neck and back pain</li>
                        </ul>
                    </div>
                </div>

                <!-- 7. Pediatric Care -->
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <span>7. Congenital Malformations &amp; Pediatric Care</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-body">
                        <h3>Pediatric &amp; Congenital Care</h3>
                        <ul>
                            <li>Hydrocephalus – Endoscopic third ventriculostomy</li>
                            <li>Arnold Chiari Malformations</li>
                            <li>Craniosynostosis</li>
                            <li>Spinal Dysraphisms (Meningocele, Meningomyelocele, Lipomeningomyelocele, Split cord,
                                Tethered cord)</li>
                        </ul>
                    </div>
                </div>

                <!-- 8. Endovascular Interventions -->
                <div class="accordion-item">
                    <div class="accordion-header" onclick="toggleAccordion(this)">
                        <span>8. Endovascular Techniques</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-body">
                        <h3>Endovascular Techniques</h3>
                        <ul>
                            <li>Acute stroke: mechanical thrombectomy</li>
                            <li>Stroke prevention: angioplasty and stenting (carotid, vertebral, intracranial)</li>
                            <li>Aneurysms: coiling, flow diversion, parent artery occlusion</li>
                            <li>Tumor embolisation, inferior petrosal sinus sampling, balloon occlusion test</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <!-- 5. Academic Credentials (Tabs) -->
        <section style="margin-bottom: 80px;">
            <h2 class="section-title-lg">Academic Credentials &amp; Accomplishments</h2>
            <p class="section-subtitle">Dr. Rajesh Reddy's professional memberships, academic awards, and extensive
                research contributions spanning over 25 years.</p>

            <style>
                .vertical-tabs-wrapper {
                    display: flex;
                    flex-direction: column;
                    gap: 32px;
                    margin-top: 40px;
                }

                @media (min-width: 768px) {
                    .vertical-tabs-wrapper {
                        flex-direction: row;
                        align-items: flex-start;
                    }
                }

                .vertical-tabs-nav {
                    display: flex;
                    flex-direction: column;
                    width: 100%;
                }

                @media (min-width: 768px) {
                    .vertical-tabs-nav {
                        width: 320px;
                        flex-shrink: 0;
                        border-right: 1px solid #eaeaea;
                        padding-right: 24px;
                        position: sticky;
                        top: 180px;
                        z-index: 10;
                    }
                }

                .v-tab-btn {
                    display: flex;
                    align-items: center;
                    text-align: left;
                    background: transparent;
                    border: 1px solid transparent;
                    padding: 16px 20px;
                    font-size: 15px;
                    font-weight: 600;
                    color: #4a4a4a;
                    cursor: pointer;
                    transition: all 0.3s ease;
                    border-radius: 4px;
                    font-family: 'Space Grotesk', sans-serif;
                    margin-bottom: 8px;
                }

                .v-tab-btn:hover {
                    background: #f8fafc;
                }

                .v-tab-btn.active {
                    border: 1px solid #eaeaea;
                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
                    color: #1d1d1f;
                    background: #ffffff;
                }

                .v-tab-icon {
                    font-size: 20px;
                    margin-right: 16px;
                    width: 24px;
                    text-align: center;
                }

                .icon-memberships {
                    color: #10b981;
                }

                .icon-awards {
                    color: #f59e0b;
                }

                .icon-poster {
                    color: #eab308;
                }

                .icon-publications {
                    color: #22c55e;
                }

                .icon-faculty {
                    color: #ef4444;
                }

                .v-tab-content-area {
                    flex: 1;
                    width: 100%;
                    padding-top: 10px;
                }

                .tab-pane {
                    display: none;
                    animation: fadeIn 0.4s ease;
                }

                .tab-pane.active {
                    display: block;
                }

                .tab-pane h3 {
                    font-size: 22px;
                    font-family: 'Space Grotesk', sans-serif;
                    color: #1e3a8a;
                    /* deep blue from screenshot */
                    margin-top: 0;
                    margin-bottom: 24px;
                }

                .simple-list {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                }

                .simple-list li {
                    padding: 20px 0;
                    font-size: 14.5px;
                    line-height: 1.6;
                    color: #4a4a4a;
                    border-bottom: 1px solid #f0f0f0;
                }

                .simple-list li:last-child {
                    border-bottom: none;
                }

                @keyframes fadeIn {
                    from {
                        opacity: 0;
                        transform: translateY(10px);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }
            </style>

            <div class="vertical-tabs-wrapper">
                <div class="vertical-tabs-nav">
                    <button class="v-tab-btn active" onclick="openVertTab(event, 'pane-memberships')">
                        <span class="v-tab-icon icon-memberships"><i class="fa-solid fa-certificate"></i></span>
                        Memberships And Certifications
                    </button>
                    <button class="v-tab-btn" onclick="openVertTab(event, 'pane-awards')">
                        <span class="v-tab-icon icon-awards"><i class="fa-solid fa-award"></i></span> Awards And
                        Accomplishments
                    </button>
                    <button class="v-tab-btn" onclick="openVertTab(event, 'pane-poster')">
                        <span class="v-tab-icon icon-poster"><i class="fa-regular fa-file-lines"></i></span> Poster
                        Presentations
                    </button>
                    <button class="v-tab-btn" onclick="openVertTab(event, 'pane-publications')">
                        <span class="v-tab-icon icon-publications"><i class="fa-solid fa-newspaper"></i></span>
                        Paper Presentations
                    </button>
                    <button class="v-tab-btn" onclick="openVertTab(event, 'pane-lectures')">
                        <span class="v-tab-icon icon-faculty"><i class="fa-solid fa-chalkboard-user"></i></span>
                        Invited Lectures
                    </button>
                </div>

                <div class="v-tab-content-area">
                    <div id="pane-memberships" class="tab-pane active">
                        <h3>Memberships And Certifications</h3>
                        <ul class="simple-list">
                            <li>Tamil Nadu Medical Council [reg no: 76038]</li>
                            <li>Andhra Pradesh Medical Council [reg no: 77796]</li>
                            <li>Member – Royal College of Surgeons of Edinburgh [reg no: 74877]</li>
                            <li>Life Member – Indian Medical Association [reg no: AP/17322/21/2553/176096/2013-13/CL]
                            </li>
                            <li>Life Member – Andhra Pradesh Neuroscientists’ Association [reg no: 201]</li>
                            <li>Life Member – Neurological Society of India [reg no: RNS-123]</li>
                            <li>Life Member – Indian Society for Cerebrovascular Surgery</li>
                            <li>Life Member – Society for Therapeutic Neurointervention [reg no: 11]</li>
                            <li>Life Member – Society for Neuro Vascular Interventions [reg no: 123/L]</li>
                            <li>Member of National Academy of Medical Sciences</li>
                        </ul>
                    </div>

                    <div id="pane-awards" class="tab-pane">
                        <h3>Awards</h3>
                        <ul class="simple-list">
                            <li>Ajay Mathews Memorial Medal for topper of first year M.B.,B.S. university exams.</li>
                            <li>Dr.M.K.Ramanathan Memorial Prize in the subject of Biochemistry.</li>
                            <li>Certificate of Honour for securing first rank in Physiology.</li>
                            <li>21 st annual conference of Association of Pathologists &amp; Microbiologists Prize in
                                Pathology.</li>
                            <li>21 st annual conference of Association of Pathologists &amp; Microbiologists Prize:
                                Microbiology.</li>
                            <li>Certificate of Honour for securing second rank in Forensic Medicine.</li>
                            <li>Sri.V.Manickaswamy Endowment Prize in Preventive and Social Medicine.</li>
                            <li>Sri.N.Selvaradjalou Chettiar Memorial Prize in Preventive and Social Medicine.</li>
                            <li>Certificate of Honour for securing third rank in Surgery.</li>
                            <li>Dr.K.S.Sridhar Memorial JIPMER Alumni Association Prize &amp; Sri.M.C.Rama Verma Valia
                                Raja Memorial Prize for Best All Round Undergraduate M.B.,B.S. student of the Batch of
                                1999-2004.</li>
                            <li>Winner of Mediquiz competitions: a) Indian Academy of Pediatrics Quiz conducted at
                                JIPMER, b) Pegasus (intercollegiate festival – CMC Vellore), c) MV Diabetes Research
                                Foundation – Chennai.</li>
                            <li>S.B.Sen Memorial Gold Medal for Outstanding Performance in M.S. General Surgery
                                examination of the Pondicherry University held during March 2008.</li>
                            <li>Examination topper – M.Ch., (Neurosurgery) examination.</li>
                            <li>Travel fellowship: 5th Japan-India Neurosurgery Conference, Osaka, 2012: Rajesh Reddy S,
                                Manas Panigrahi, Sita Jayalakshmi, Sailaja S, Shanmukhi S. Clinical characteristics and
                                surgical outcome of children and adolescents with temporal lobe epilepsy.</li>
                        </ul>
                    </div>

                    <div id="pane-poster" class="tab-pane">
                        <h3>Poster Presentations</h3>
                        <ul class="simple-list">
                            <li>Rajesh Reddy S, Manas Panigrahi, Vijayasaradhi M, Biswal D, Purohit AK. Dumb-bell
                                Schwannoma of the Hypoglossal Nerve. SKULLBASECON 2009, Hyderabad.</li>
                            <li>Rajesh Reddy S, Mudumba Vijayasaradhi, Sahu BP, Nayak M. Aneurysmal Bone Cyst of the
                                spine – two case illustrations and a brief review on the rare entity. APNEUROCON 2010,
                                Warangal. [Awarded the Best Poster Award].</li>
                            <li>Rajesh Reddy S, Suchanda B, Megha S Uppin, Sundaram C, Raju GSN, Prabhakar VVS, Ravi
                                Varma D. Solitary cervical spine metastasis in an adolescent male from occult papillary
                                carcinoma of thyroid mimicking an Aneurysmal Bone Cyst. NEUROPEDICON 2010, Hyderabad.
                                [Awarded the Best Multimedia Presentation Award].</li>
                            <li>Rajesh Reddy S, Reddy AK, Manas Panigrahi, Naidu CS et al. Initial experience with
                                stereotactic radiosurgery at KIMS using LINAC based Novalis Tx. APNEUROCON 2012,
                                Vishakhapatnam.</li>
                            <li>Rajesh Reddy S, Manas Panigrahi, Sita Jayalakshmi, Sailaja S, Shanmukhi S. Clinical
                                characteristics and surgical outcome of children and adolescents with temporal lobe
                                epilepsy. 5th Japan-India Neurosurgical Conference, Osaka, Japan.</li>
                            <li>Rajesh Reddy S, Alok Ranjan, Rahul Lath, Ratnam BG, Amitava Ray. Surgical Outcomes
                                following posterior fossa decompressive craniectomy. APNEUROCON 2015, Hyderabad.</li>
                        </ul>
                    </div>

                    <div id="pane-publications" class="tab-pane">
                        <h3>Paper Presentations</h3>
                        <ul class="simple-list">
                            <li>Rajesh Reddy S, Sarath Chandra Sistla, Sathiaprabhu A, Gomathi Sankar. Barium
                                peritonitis. [ASICON 2007, Kanchipuram].</li>
                            <li>Rajesh Reddy S, Sahu BP, Suchanda B, Purohit AK. Surgical outcome and quality of life in
                                patients with intracranial arachnoid cysts – a retrospective and prospective study.
                                [APNEUROCON 2011, Hyderabad].</li>
                            <li>Rajesh Reddy S, Reddy AK, Manas Panigrahi, Naidu CS. Anterior surgical approaches to
                                cervicodorsal Koch’s spine: the “hidden zone”. [APNEUROCON 2012, Vishakhapatnam].</li>
                            <li>Rajesh Reddy S, Rahul Lath, Ratnam BG, Amitava Ray, Madan Soma, Alok Ranjan. Seven year
                                experience with vertebroplasty and kyphoplasty. [APNEUROCON 2013, Guntur].</li>
                            <li>Rajesh Reddy S, Rahul Lath, Ratnam BG, Amitava Ray, Madan Soma, Alok Ranjan. Role of
                                intracisternal tPA in the management of aneurysmal subarachnoid hemorrhage. [NEUROVASCON
                                2013, Hyderabad].</li>
                            <li>Rajesh Reddy S, Alok Ranjan, Rahul Lath, Ratnam BG, Amitava Ray, Kaushal, Madan.
                                Percutaneous vertebral augmentation procedures – an institutional experience. [NSICON
                                2016, Hyderabad].</li>
                            <li>Rajesh Reddy S, Alok Ranjan, Rahul Lath, Ratnam BG, Amitava Ray, Kaushal, Madan.
                                Endovascular options for internal carotid artery aneurysms. [APNEUROCON 2016,
                                Vijayawada].</li>
                            <li>Rajesh Reddy S, Alok Ranjan, Venkateswarulu J, Manoj Agarwala. Endovascular management
                                of acute ischemic stroke. [TNSCON 2018].</li>
                            <li>Rajesh Reddy S, Alok Ranjan, Rahul Lath, Ratnam BG, Kaushal Madan. Initial experience
                                with percutaneous vertebral augmentation procedures. [MISSICON 2018, Hyderabad].</li>
                            <li>Rajesh Reddy S, Alok Ranjan, Venkateswarulu J, Manoj Agarwala. Interventions for acute
                                ischemic stroke – initial experience of a hybrid neurosurgeon. [TNSCON 2019, Hyd].</li>
                            <li>Rajesh Reddy S, Vipul Pathak, Alok Ranjan. Endovascular experience of a Hybrid
                                Neurosurgeon [NSSICON 2023, Hyderabad].</li>
                        </ul>
                    </div>

                    <div id="pane-lectures" class="tab-pane">
                        <h3>Invited Lectures</h3>
                        <ul class="simple-list">
                            <li>Leksell Stereotactic Frame – STEREOCON 2016</li>
                            <li>How to perform a femoral puncture – BASS SKILLS TRAINING WORKSHOP 2016</li>
                            <li>Endovascular treatment for acute ischemic stroke – APOLLO CRITICAL CARE CME 2017</li>
                            <li>Fellowship opportunities for medical graduates – NOT JUST MEDS 2018</li>
                            <li>Endovascular management of cerebral vasospasm. CARE HOSPITAL – CME ON CEREBROVASCULAR
                                DISEASES 2018</li>
                            <li>Spinal Injuries - CARE HOSPITAL – SKILLS TRAINING WORKSHOP 2018</li>
                            <li>Cerebral angiogram – NSI Instructional course, 2018 – Nizam’s Institute of Medical
                                Sciences, Hyderabad</li>
                            <li>Endovascular treatment of acute ischemic stroke - INDO JAPAN MEET, KIMS 2019</li>
                            <li>Applied anatomy of intracranial circulation - CARDIOLOGY SOCIETY OF INDIA MEET, April
                                2019</li>
                            <li>Interesting cases of spine tumors - SUPERSPECIALITY CME, NEUROLOGICAL SOCIETY OF INDIA,
                                Guwahati, July 2019.</li>
                            <li>Deep Brain Stimulation in Refractory Obsessive Compulsive Disorder- INDIAN ASSOCIATION
                                OF PRIVATE PSYCHIATRISTS WEBINAR, May 2020.</li>
                            <li>Difficult Neurointerventions - TRANSCATHETER CARDIOVASCULAR THERAPEUTICS, INDIA-SOUTH
                                ASIA, July 2021, Hyderabad.</li>
                            <li>Basics of Neuroradiology - NEUROCRITICAL CARE CME FOR NURSES, Apollo Hospital,
                                Hyderabad, July 2022.</li>
                            <li>Carotid angioplasty and stenting – experiences of a Hybrid Neurosurgeon - TRANSCATHETER
                                CARDIOVASCULAR THERAPEUTICS, INDIA-SOUTH ASIA, July 2022, Hyderabad.</li>
                            <li>Operation Theater practices – Building steps for Surgical Site Infection prevention -
                                INTERNATIONAL INFECTION PREVENTION &amp; CONTROL WEEK CME, Apollo Hospital, Hyderabad,
                                October 2022.</li>
                            <li>Role of Surgery in Stroke - NEUROCONCLAVE Feb 2023, Trident Hotel, Hyderabad.</li>
                            <li>Neurovascular surgery. NEUROCON April 2023, Hyatt Place, Hyderabad.</li>
                            <li>Endovascular experience of a Hybrid Neurosurgeon - NEUROVASCON 2023 – New Delhi</li>
                            <li>Acute stroke management – Case selection for lysis vs intervention. FCCC Upgradio
                                January 2024, Hyderabad.</li>
                            <li>Complex Intracranial aneurysms – NEUROVASCON 2024, Jaipur</li>
                            <li>Endovascular management of Anterior circulation aneurysms. APNEUROCON 2025, Nellore</li>
                            <li>Tumor Embolisation. Skills training Workshop 2025 – Cerebrovascular Society of India –
                                Hyderabad</li>
                            <li>Spinal Intradural Tumors. TNSCON 2025, Hyderabad</li>
                            <li>Carotid Revascularisation. NEUROVASCON 2026, Hyderabad</li>
                        </ul>
                    </div>
                </div>
            </div>

            <script>
                function openVertTab(evt, tabName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tab-pane");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                        tabcontent[i].classList.remove("active");
                    }
                    tablinks = document.getElementsByClassName("v-tab-btn");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(tabName).style.display = "block";
                    document.getElementById(tabName).classList.add("active");
                    evt.currentTarget.className += " active";
                }
            </script>
        </section>

        <!-- 7. Patient Testimonials (Infinite Carousel) -->
        <section style="margin-bottom: 80px; position: relative;">
            <div style="text-align: center; margin-bottom: 32px;">
                <h2 class="section-title-lg" style="margin-bottom: 8px;">Patient Stories &amp; Testimonials</h2>
                <p class="section-subtitle" style="margin-bottom: 0;">Hear from patients and families who have
                    experienced Dr. Rajesh Reddy's surgical care:</p>
            </div>

            <div class="reviews-carousel-wrapper" style="overflow: hidden; width: 100%; position: relative;">
                <div class="reviews-carousel-track" id="profileTestimonialsTrack"
                    style="display: flex; gap: 24px; transition: transform 0.4s ease-in-out;">
                    <div class="review-card"
                        style="flex: 0 0 calc(33.333% - 16px); min-width: 280px; background: #fafafc; border-radius: 16px; padding: 28px; border: 1px solid #e0e0e0; box-shadow: 0 4px 12px rgba(0,0,0,0.03); display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="color: #fac20e; font-size: 18px; margin-bottom: 14px;">★★★★★</div>
                            <p
                                style="font-size: 15px; color: #333; font-style: italic; margin-bottom: 20px; line-height: 1.6;">
                                "He explained the complex brain tumor surgery so simply that half our fears vanished
                                before the operation even began."</p>
                        </div>
                        <h4 style="font-size: 14px; color: #0066cc; margin: 0; font-weight: 600;">— Priya R.,
                            Visakhapatnam</h4>
                    </div>

                    <div class="review-card"
                        style="flex: 0 0 calc(33.333% - 16px); min-width: 280px; background: #fafafc; border-radius: 16px; padding: 28px; border: 1px solid #e0e0e0; box-shadow: 0 4px 12px rgba(0,0,0,0.03); display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="color: #fac20e; font-size: 18px; margin-bottom: 14px;">★★★★★</div>
                            <p
                                style="font-size: 15px; color: #333; font-style: italic; margin-bottom: 20px; line-height: 1.6;">
                                "Dr. Rajesh Reddy is not just a skilled neurosurgeon but a very compassionate human. My
                                spine surgery went perfectly."</p>
                        </div>
                        <h4 style="font-size: 14px; color: #0066cc; margin: 0; font-weight: 600;">— Suresh K.,
                            Vijayawada</h4>
                    </div>

                    <div class="review-card"
                        style="flex: 0 0 calc(33.333% - 16px); min-width: 280px; background: #fafafc; border-radius: 16px; padding: 28px; border: 1px solid #e0e0e0; box-shadow: 0 4px 12px rgba(0,0,0,0.03); display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="color: #fac20e; font-size: 18px; margin-bottom: 14px;">★★★★★</div>
                            <p
                                style="font-size: 15px; color: #333; font-style: italic; margin-bottom: 20px; line-height: 1.6;">
                                "His expertise in aneurysm coiling saved my mother's life during a critical stroke
                                emergency."</p>
                        </div>
                        <h4 style="font-size: 14px; color: #0066cc; margin: 0; font-weight: 600;">— Ananya M., Hyderabad
                        </h4>
                    </div>

                    <div class="review-card"
                        style="flex: 0 0 calc(33.333% - 16px); min-width: 280px; background: #fafafc; border-radius: 16px; padding: 28px; border: 1px solid #e0e0e0; box-shadow: 0 4px 12px rgba(0,0,0,0.03); display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="color: #fac20e; font-size: 18px; margin-bottom: 14px;">★★★★★</div>
                            <p
                                style="font-size: 15px; color: #333; font-style: italic; margin-bottom: 20px; line-height: 1.6;">
                                "The entire process, from consultation to post-op care, was seamless. Highly recommend
                                him for any neuro issues."</p>
                        </div>
                        <h4 style="font-size: 14px; color: #0066cc; margin: 0; font-weight: 600;">— Ramesh B., Raichur
                        </h4>
                    </div>
                </div>
            </div>

            <!-- Carousel Pill Dots -->
            <div class="carousel-indicators-wrapper" style="margin-top: 24px;">
                <div class="carousel-indicators-pill" id="profileTestimonialDots">
                    <span class="carousel-dot-new active" data-index="0"></span>
                    <span class="carousel-dot-new" data-index="1"></span>
                </div>
            </div>
        </section>

        <!-- 8. Self Help Group -->
        <section style="margin-bottom: 80px;">
            <div
                style="background: #fafafc; border-radius: 16px; padding: 36px; border: 1px solid #e0e0e0; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="color: #0066cc; font-size: 32px; margin-bottom: 16px;"><i
                            class="fa-solid fa-hand-holding-heart"></i></div>
                    <h3 style="font-size: 22px; font-weight: 700; margin-top: 0; margin-bottom: 12px; color: #1d1d1f;">
                        Join the Brain Tumor &amp; Aneurysm Self Help Group</h3>
                    <p style="font-size: 15px; color: #555; line-height: 1.65; margin-bottom: 16px;">Are you interested
                        in volunteering to support patients and families navigating a brain tumor or brain aneurysm
                        diagnosis? Reach out to us to learn how you can make a difference at a patient's most vulnerable
                        moment.</p>
                </div>
                <p style="font-size: 14px; color: #0066cc; font-weight: 600; margin: 0;">Support groups available for
                    Brain Tumor &amp; Spine Care patients.</p>
            </div>
        </section>

        <!-- 9. Consultation & Location -->
        <section style="background: #f5f5f7; border-radius: 16px; padding: 40px; margin-bottom: 60px;">
            <h2 class="section-title-lg">Consultation &amp; Location</h2>
            <div
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 32px; margin-top: 24px;">
                <div>
                    <h3 style="font-size: 18px; margin-top: 0; margin-bottom: 8px;">Medicover Hospital - Financial District</h3>
                    <p style="font-size: 14px; color: #555; line-height: 1.6;">Hyderabad, Telangana 500032
                    </p>
                    <p style="font-size: 14px; color: #1d1d1f; line-height: 1.6; margin-top: 12px;">
                        <strong>OPD Schedule:</strong> 10:00 AM to 4:00 PM [Tentative]<br>
                        <strong>Phone:</strong> <a href="tel:08520052229" style="color: #0066cc;">8520052229</a><br>
                        <strong>Email:</strong> <a href="mailto:info@drrajeshreddy.com"
                            style="color: #0066cc;">info@drrajeshreddy.com</a>
                    </p>
                </div>
                <div>
                    <h3 style="font-size: 18px; margin-top: 0; margin-bottom: 8px;">Accessibility &amp; Coverage</h3>
                    <p style="font-size: 14px; color: #555; line-height: 1.6;">Medicover Hospital is located in
                        Financial District, Hyderabad, easily accessible from Gachibowli, Nanakramguda, Kokapet, Kondapur,
                        Hitec City, and the Outer Ring Road (ORR).</p>
                    <div style="margin-top: 20px;">
                        <a href="contact"
                            style="background: #0066cc; color: #ffffff; padding: 12px 24px; border-radius: 9999px; text-decoration: none; font-weight: 600; font-size: 14px; display: inline-block;">Book
                            Consultation Today</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- THE PATIENT APP SECTION -->
    <section class="app-section"
        style="background-color: #0066cc; padding: 0; position: relative; overflow: visible; margin-top: 60px;">
        <div class="container" style="position: relative; z-index: 2;">
            <div class="app-grid"
                style="display: flex; align-items: center; justify-content: space-between; min-height: 350px;">
                <!-- Left Banner Content -->
                <div class="app-content" style="flex: 1; padding: 60px 0; color: #fff; max-width: 600px;">
                    <h2 class="app-title"
                        style="font-size: 2.75rem; font-weight: 700; margin-bottom: 1rem; color: #fff;">Your Care, In
                        Your Pocket</h2>
                    <p class="app-subtitle"
                        style="font-size: 1.25rem; font-weight: 400; margin-bottom: 2rem; color: #fff;">Book
                        appointments, access reports, and stay connected to your treatment plan — anytime, anywhere.</p>

                    <div class="app-store-btns" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="https://apps.apple.com/in/app/dr-reddys-neuro-care/id6753586620" target="_blank" rel="noopener noreferrer" class="app-badge-btn"
                            style="display: inline-flex; align-items: center; background: #fff; color: #1d1d1f; text-decoration: none; padding: 0.5rem 1rem; border-radius: 8px; font-weight: 500; font-size: 0.9rem; gap: 0.5rem; transition: transform 0.2s; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                            <i class="fa-brands fa-app-store-ios" style="color: #0066cc; font-size: 1.25rem;"></i>
                            Download on the App Store
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.docterz.connect.drreddysneurocare"
                            target="_blank" class="app-badge-btn"
                            style="display: inline-flex; align-items: center; background: #fff; color: #1d1d1f; text-decoration: none; padding: 0.5rem 1rem; border-radius: 8px; font-weight: 500; font-size: 0.9rem; gap: 0.5rem; transition: transform 0.2s; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                            <i class="fa-brands fa-google-play" style="color: #1d1d1f; font-size: 1.25rem;"></i>
                            Get it on Google Play
                        </a>
                    </div>
                </div>

                <!-- Right Phone Mockup -->
                <div class="phone-mockup-wrapper"
                    style="flex: 1; display: flex; justify-content: flex-end; position: relative;">
                    <img src="images/phone-qr.webp" alt="The Patient App" class="app-phone-img"
                        style="width: 460px; max-width: none; position: absolute; bottom: -315px; right: 20px;">
                </div>
            </div>
        </div>
    </section>

    <!-- CTA BANNER -->
    <section class="cta-banner" id="contact" style="margin-bottom: 0; padding-bottom: 3rem;">
        <div class="container">
            <div class="cta-flex">
                <div>
                    <h2 class="cta-title">Ready to Take the Next Step?</h2>
                    <p class="cta-subtitle">Whether it's a second opinion or a first diagnosis, a clear conversation is
                        the best place to start. Schedule a consultation with Dr. Rajesh Reddy Sannareddy today.</p>
                </div>
                <div>
                    <a href="contact" class="btn-primary">Book Consultation Today</a>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // 1. Accordion init
            const firstBody = document.querySelector('.accordion-item .accordion-body');
            const firstHeader = document.querySelector('.accordion-item .accordion-header');
            if (firstBody && firstHeader) {
                firstBody.style.display = 'block';
                firstHeader.parentElement.classList.add('active');
                const icon = firstHeader.querySelector('.toggle-icon');
                if (icon) icon.textContent = '−';
            }

            // 2. Infinite Testimonial Carousel
            const track = document.getElementById('profileTestimonialsTrack');
            const dots = document.querySelectorAll('#profileTestimonialDots .carousel-dot-new');
            if (track) {
                const originalCards = Array.from(track.children);
                const originalCount = originalCards.length;

                // Clone cards for seamless infinite looping
                originalCards.forEach(card => {
                    const clone = card.cloneNode(true);
                    track.appendChild(clone);
                });

                let currentIndex = 0;
                let autoPlayTimer;

                // Calculate visible cards per view
                function getVisibleCount() {
                    if (window.innerWidth <= 768) return 1;
                    if (window.innerWidth <= 1024) return 2;
                    return 3;
                }

                function getMaxIndex() {
                    return originalCount - getVisibleCount();
                }

                function updateDots(index) {
                    const maxIdx = getMaxIndex();
                    const effectiveIndex = (index > maxIdx) ? 0 : index;
                    dots.forEach((dot, idx) => {
                        dot.classList.toggle('active', idx === effectiveIndex);
                    });
                }

                function updateProfileCarousel(index) {
                    const maxIdx = getMaxIndex();
                    currentIndex = index;

                    const card = track.children[0];
                    const cardWidth = card.offsetWidth;
                    const gap = 24;

                    track.style.transition = 'transform 0.4s ease-in-out';
                    track.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;

                    updateDots(currentIndex);

                    if (currentIndex > maxIdx) {
                        setTimeout(() => {
                            track.style.transition = 'none';
                            currentIndex = 0;
                            track.style.transform = `translateX(0px)`;
                            updateDots(0);
                        }, 400);
                    }
                }

                function startAutoPlay() {
                    autoPlayTimer = setInterval(() => {
                        updateProfileCarousel(currentIndex + 1);
                    }, 3500);
                }

                // Dot click handling
                dots.forEach((dot, idx) => {
                    dot.addEventListener('click', () => {
                        clearInterval(autoPlayTimer);
                        updateProfileCarousel(idx);
                        startAutoPlay();
                    });
                });

                // Touch / Hover Pause & Resume
                track.parentElement.addEventListener('mouseenter', () => clearInterval(autoPlayTimer));
                track.parentElement.addEventListener('mouseleave', startAutoPlay);

                startAutoPlay();
            }
        });

        function toggleAccordion(header) {
            const item = header.parentElement;
            const body = item.querySelector('.accordion-body');
            const icon = header.querySelector('.toggle-icon');

            const isCurrentlyOpen = body.style.display === 'block' || item.classList.contains('active');

            if (isCurrentlyOpen) {
                body.style.display = 'none';
                item.classList.remove('active');
                icon.textContent = '+';
            } else {
                body.style.display = 'block';
                item.classList.add('active');
                icon.textContent = '−';
            }
        }
    </script>

    <?php include 'components/footer.php'; ?>
</body>

</html>