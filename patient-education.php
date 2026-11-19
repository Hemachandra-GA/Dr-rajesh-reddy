<?php
$pageTitle = "Patient Education & Articles | Dr. Rajesh Reddy";
$pageDescription = "Explore patient education resources, guides, and insights for brain and spine care.";
$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$sitePrefix = preg_replace('#/patient-education(?:\.php)?(?:/.*)?$#i', '', $requestPath);
$sitePrefix = rtrim(str_replace('\\', '/', $sitePrefix), '/');
$sitePrefix = $sitePrefix === '.' ? '' : $sitePrefix;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= htmlspecialchars($sitePrefix . '/', ENT_QUOTES, 'UTF-8') ?>">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="Neurosurgery Patient Education, Brain Surgery Information, Spine Surgery Information, Neurosurgery Treatment Information">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript></noscript>
    
    <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="images/favicon-drrajeshreddy.png">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q90BC8GWVR"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Q90BC8GWVR');
  </script>
    <style>
        .article-card {
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        }
        .article-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.1);
            border-color: rgba(0, 102, 204, 0.25);
        }
        .article-card:hover .read-link {
            color: #0052a3;
            text-decoration: underline;
        }
        .article-card:hover .article-content h3 {
            color: #0066cc;
        }
    </style>
</head>
<body id="top">

<?php include __DIR__ . '/components/header.php'; ?>

<main class="page-content">
    <div class="container">
        <!-- Page Header & Filters -->
        <div class="education-header">
            <h1 class="page-title">Patient Education & Articles</h1>
            
            <div class="filter-bar">
                <div class="filter-pills">
                    <button class="filter-pill active" data-filter="all">All Guides</button>
                    <button class="filter-pill" data-filter="brain">Brain Care</button>
                    <button class="filter-pill" data-filter="spine">Spine Care</button>
                    <button class="filter-pill" data-filter="surgical">Surgical Safety</button>
                </div>
                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass search-icon"></i>
                    <input type="text" id="articleSearchInput" class="search-input" placeholder="Search articles...">
                </div>
            </div>
        </div>

        <!-- Article Grid -->
        <div class="article-grid">



            <!-- Card: Intraoperative Neurophysiological Monitoring -->
            <article class="article-card" data-category="surgical brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/intraoperative-neurophysiological-monitoring.webp" alt="Intraoperative Neurophysiological Monitoring" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">NEUROSURGERY & SAFETY</span>
                    <h3>Intraoperative Neurophysiological Monitoring</h3>
                    <p>Understand how real-time nerve monitoring during surgery helps protect critical neural pathways and improve surgical outcomes.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/intraoperative-neurophysiological-monitoring" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Slow Brain Bleed in Elderly -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/slow-brain-bleed-elderly.webp" alt="The Slow Brain Bleed in the Elderly After a Minor Head Bump" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & GERIATRIC NEUROLOGY</span>
                    <h3>The Slow Brain Bleed in the Elderly After a Minor Head Bump</h3>
                    <p>Learn about chronic subdural hematoma, why elderly patients are at risk after minor head injuries, and the importance of early detection.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/slow-brain-bleed-elderly" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Unusual Types of Pain -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/unusual-types-of-pain.webp" alt="Unusual Types of Pain" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">NERVE CARE & PAIN MANAGEMENT</span>
                    <h3>Unusual Types of Pain: When Your Body Is Trying to Tell You Something More</h3>
                    <p>Understand neuropathic pain, referred pain, phantom limb pain, and other unusual pain types that may signal deeper neurological issues.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/unusual-types-of-pain" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Speech and Language Circuits -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/speech-and-language-circuits.webp" alt="Speech and Language Circuits of the Brain" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & NEUROLINGUISTICS</span>
                    <h3>Speech and Language Circuits of the Brain and Their Relevance</h3>
                    <p>Explore how the brain processes speech and language through Broca's area, Wernicke's area, and the arcuate fasciculus.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">8 Min Read</span>
                    <a href="patient-education/speech-and-language-circuits" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Brain's Blood Supply -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/brains-blood-supply.webp" alt="The Brain's Blood Supply" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & NEUROVASCULAR</span>
                    <h3>The Brain's Blood Supply: What Keeps It Running and What Happens When It Doesn't</h3>
                    <p>Learn about the cerebral circulation system, Circle of Willis, and what happens when blood supply to the brain is disrupted.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/brains-blood-supply" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Imaging the Brain -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/imaging-the-brain.webp" alt="Imaging the Brain: How Doctors Choose the Right Scan" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">NEUROLOGICAL DIAGNOSTICS</span>
                    <h3>Imaging the Brain: How Doctors Choose the Right Scan and Why It Matters</h3>
                    <p>Understand the differences between CT, MRI, fMRI, PET, and angiography, and how neurologists choose the right imaging for each condition.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/imaging-the-brain" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Stroke Management Guidelines -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/stroke-management-guidelines.webp" alt="Latest Guidelines for Stroke Management" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN & STROKE CARE</span>
                    <h3>Latest Guidelines for Stroke Management: What Has Changed and Why It Matters</h3>
                    <p>Stay updated on the latest stroke management protocols, treatment windows, thrombectomy advances, and rehabilitation strategies.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">8 Min Read</span>
                    <a href="patient-education/stroke-management-guidelines" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Neurocutaneous Markers -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/neurocutaneous-markers.webp" alt="Neurocutaneous Markers: What Your Skin Can Reveal About Your Brain" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">NEUROLOGICAL DIAGNOSTICS</span>
                    <h3>Neurocutaneous Markers: What Your Skin Can Reveal About Your Brain</h3>
                    <p>Discover how skin markings and birthmarks can serve as early indicators of underlying neurological conditions.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/neurocutaneous-markers" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: AI in Neurosurgery -->
            <article class="article-card" data-category="surgical brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/ai-in-neurosurgery.webp" alt="Artificial Intelligence in Neurosurgery: A New Era of Precision" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">NEUROSURGERY & TECHNOLOGY</span>
                    <h3>Artificial Intelligence in Neurosurgery: A New Era of Precision</h3>
                    <p>Explore how AI is transforming neurosurgery through enhanced imaging, surgical planning, intraoperative guidance, and outcome prediction.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/ai-in-neurosurgery" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Awake Brain Surgery -->
            <article class="article-card" data-category="surgical brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/awake-brain-surgery.webp" alt="Awake Brain Surgery Explained" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">NEUROSURGERY & BRAIN CARE</span>
                    <h3>Awake Brain Surgery Explained: Why Patients Stay Awake During Brain Tumor Removal</h3>
                    <p>Understand why some brain surgeries are performed with the patient awake, how it protects vital brain functions, and what to expect.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/awake-brain-surgery" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Trigeminal Neuralgia -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/trigeminal-neuralgia.webp" alt="The Suicidal Disease: Trigeminal Neuralgia" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">NERVE CARE & PAIN MANAGEMENT</span>
                    <h3>The Suicidal Disease: Trigeminal Neuralgia</h3>
                    <p>Learn about trigeminal neuralgia, one of the most painful conditions known, its causes, triggers, diagnosis, and advanced treatment options.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/trigeminal-neuralgia" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Vision Compromising Headache -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/vision-compromising-headache.webp" alt="Vision Compromising Headache: Understanding Intracranial Hypertension" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & NEURO-OPHTHALMOLOGY</span>
                    <h3>Vision Compromising Headache: Understanding Intracranial Hypertension</h3>
                    <p>Understand how raised intracranial pressure causes headaches and vision problems, and why early diagnosis is critical to prevent permanent damage.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/vision-compromising-headache" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Body Runs on a Clock -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/body-runs-on-a-clock.webp" alt="Did You Know Your Body Runs on a Clock?" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & CIRCADIAN RHYTHM</span>
                    <h3>Did You Know Your Body Runs on a Clock?</h3>
                    <p>Explore the science of circadian rhythms, how your internal clock regulates sleep, hormones, and brain function throughout the day.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">6 Min Read</span>
                    <a href="patient-education/body-runs-on-a-clock" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Pituitary Gland Explained -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/pituitary-gland-explained.webp" alt="The Pituitary Gland Explained: How One Gland Controls the Body" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & ENDOCRINOLOGY</span>
                    <h3>The Pituitary Gland Explained: How One Gland Controls the Body</h3>
                    <p>Learn how the pituitary gland acts as the body's maestro, controlling growth, metabolism, stress response, reproduction, and water balance.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/pituitary-gland-explained" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Brain Rewiring -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/brain-rewiring.webp" alt="Brain Rewiring: How Your Brain Adapts, Recovers, and Learns Throughout Life" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & NEUROPLASTICITY</span>
                    <h3>Brain Rewiring: How Your Brain Adapts, Recovers, and Learns Throughout Life</h3>
                    <p>Discover how neuroplasticity enables the brain to adapt, recover from injury, and continuously learn new skills throughout life.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/brain-rewiring" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Neurochemistry - How Neural Circuits Communicate -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/neurochemistry-neural-circuits.webp" alt="Neurochemistry: How Neural Circuits Communicate With Each Other" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & NEUROSCIENCE</span>
                    <h3>Neurochemistry: How Neural Circuits Communicate With Each Other</h3>
                    <p>Learn how neurons communicate through electrical impulses and chemical neurotransmitters, forming neural circuits that control thoughts, movement, and emotions.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/neurochemistry-neural-circuits" class="read-link">Read</a>
                </div>
            </article>

            
            <!-- Card: Why Tracheostomy Is a Turning Point in Brain and Spine Rehabilitation -->
            <article class="article-card" data-category="spine surgical brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Dr-Rajesh-Reddy-blog.webp" alt="Why Tracheostomy Is a Turning Point in Brain and Spine Rehabilitation" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">NEUROREHABILITATION & CRITICAL CARE</span>
                    <h3>Why Tracheostomy Is a Turning Point in Brain and Spine Rehabilitation</h3>
                    <p>Discover how tracheostomy plays a critical role in stabilizing and enabling early rehabilitation for severe brain and spinal cord injury patients.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">6 Min Read</span>
                    <a href="patient-education/tracheostomy-in-brain-and-spine-rehabilitation" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Brain and Spine Care During Pregnancy -->
            <article class="article-card" data-category="spine brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Brain-and-Spine-Care-During-Pregnancy-blog-cover-image-variant-4.webp" alt="Brain and Spine Care During Pregnancy" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">MATERNAL BRAIN & SPINE CARE</span>
                    <h3>Brain and Spine Care During Pregnancy: Protecting Two Lives at Once</h3>
                    <p>Learn how pregnancy affects the nervous system and spine, and how expecting mothers can maintain optimal health.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">6 Min Read</span>
                    <a href="patient-education/brain-and-spine-care-during-pregnancy" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Mental Health and Neurology -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Mental-Health-and-Neurology-How-the-Brain-Shapes-Our-Emotional-Well-being-1.webp" alt="Mental Health and Neurology" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & MENTAL WELLNESS</span>
                    <h3>Mental Health and Neurology: How the Brain Shapes Our Emotional Well-being</h3>
                    <p>Understanding neural control centers, neurotransmitters, stress hormones, vagal tone, and strategies for emotional resilience.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/mental-health-and-neurology" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Mobile Gaming & Binge-Watching -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/How-Mobile-Gaming-and-Binge-Watching-Affect-Your-Brain-Health-Over-Time.webp" alt="How Mobile Gaming and Binge-Watching Affect Your Brain Health Over Time" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & DIGITAL HABITS</span>
                    <h3>How Mobile Gaming and Binge-Watching Affect Your Brain Health Over Time</h3>
                    <p>Exploring the dopamine loop, cognitive impact on prefrontal cortex, melatonin suppression, and digital wellness balance.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/mobile-gaming-binge-watching-brain-health" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Neurological Recovery Roller Coaster -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Neurological_Recovery_Can_Be_a_Roller_Coaster_Ride_Why_Patience_Teamwork_and_Support_Matter.webp" alt="Neurological Recovery Can Be a Roller Coaster Ride" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & NEURO REHABILITATION</span>
                    <h3>Neurological Recovery Can Be a Roller Coaster Ride: Why Patience, Teamwork, and Support Matter</h3>
                    <p>Understanding non-linear recovery, complications, multidisciplinary team care, and emotional support networks.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/neurological-recovery-roller-coaster-ride" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Forehead Ache After Hours Online -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/why_does_your_forehead_ache_after_hours_online.webp" alt="Why Does Your Forehead Ache After Hours Online" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & DIGITAL HEALTH</span>
                    <h3>Why Does Your Forehead Ache After Hours Online?</h3>
                    <p>Understanding digital eye strain, tech neck connection, 20-20-20 rule, ergonomics, and when to seek neurological care.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">6 Min Read</span>
                    <a href="patient-education/forehead-ache-after-hours-online" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: What Is Brain Death -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/What-is-Brain-Death.webp" alt="What Is Brain Death" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & CLINICAL FACTS</span>
                    <h3>What Is Brain Death? Medical Facts Beyond the Myths</h3>
                    <p>Understanding the medical definition, diagnostic standards, differences between coma and brain death, and myth busting.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">6 Min Read</span>
                    <a href="patient-education/what-is-brain-death" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Mind-Gut Connection -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/The-Mind-Gut-Connection-v2.webp" alt="The Mind-Gut Connection" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">GUT-BRAIN AXIS & MIND</span>
                    <h3>The Mind-Gut Connection: How Your Gut Talks to Your Brain (and Vice Versa)</h3>
                    <p>Discover how the vagus nerve and gut microbiome shape mood, mental clarity, and cognitive health.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">6 Min Read</span>
                    <a href="patient-education/the-mind-gut-connection" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card: Myths & Facts Memory Loss -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Myths-and-Facts-About-Memory-Loss.webp" alt="Myths and Facts About Memory Loss" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & MEMORY</span>
                    <h3>Myths and Facts About Memory Loss: Separating Truth From Fear</h3>
                    <p>Exploring 10 common myths about memory decline, normal forgetfulness vs dementia, stress impacts, and actionable prevention tips.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/myths-and-facts-about-memory-loss" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 20 -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Neurological-Issues-During-Pregnancy-1024x320.webp" alt="Neurological Issues During Pregnancy" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">MATERNAL NEUROLOGICAL CARE</span>
                    <h3>Common Neurological Issues During Pregnancy: What Expectant Mothers Should Know</h3>
                    <p>Learn about headaches, preeclampsia, epilepsy seizures, pregnancy stroke, carpal tunnel, Bell's palsy, and CVST during pregnancy.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">8 Min Read</span>
                    <a href="patient-education/neurological-issues-during-pregnancy" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 19 -->
            <article class="article-card" data-category="surgical brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Is Neurosurgery Safe.webp" alt="Is Neurosurgery Safe" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">NEUROSURGERY & SAFETY</span>
                    <h3>Is Neurosurgery Safe? Separating Facts from Fear</h3>
                    <p>Discover neuronavigation, intraoperative monitoring, minimally invasive neurosurgery safety, risks, recovery, and myth busting.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/is-neurosurgery-safe" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 18 -->
            <article class="article-card" data-category="spine">
                <div class="article-img-wrap">
                    <img src="images/blogs/Understanding Osteoporotic Spine Fractures.webp" alt="Understanding Osteoporotic Spine Fractures" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">SPINE CARE & OSTEOPOROSIS</span>
                    <h3>Understanding Osteoporotic Spine Fractures: Causes, Symptoms & Risks</h3>
                    <p>Learn about vertebral compression fractures, causes, symptoms, DEXA scans, Vertebroplasty, Kyphoplasty, and percutaneous screw stabilization.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/osteoporotic-spine-fractures" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 17 -->
            <article class="article-card" data-category="spine brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Paralysis Explained.webp" alt="Paralysis Explained" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">NERVE CARE & NEURO-REHABILITATION</span>
                    <h3>Paralysis Explained: Types, Causes, and Common Misconceptions</h3>
                    <p>Understanding monoplegia, hemiplegia, paraplegia, quadriplegia, Bell's palsy, stroke/spinal causes, myths, and rehabilitation.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/paralysis-explained" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 16 -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Not All Headaches Are Migraine.webp" alt="Not All Headaches Are Migraine" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & HEADACHE MEDICINE</span>
                    <h3>Not All Headaches Are Migraine: Understanding the Differences</h3>
                    <p>Learn about tension, cluster, sinus, cervicogenic, and medication overuse headaches, migraine triggers, and headache diaries.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/not-all-headaches-are-migraine" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 14 -->
            <article class="article-card" data-category="spine surgical brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Frequently Asked Questions.webp" alt="Frequently Asked Questions Surgery for Back Pain" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">SPINE SURGERY & CARE</span>
                    <h3>Frequently Asked Questions: Surgery for Back Pain</h3>
                    <p>Answers to 10 common questions about back pain surgery, types of procedures, risks, recovery time, and non-surgical alternatives.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/faq-surgery-for-back-pain" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 15 -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Myths and Facts About Brain Tumors.webp" alt="Myths and Facts About Brain Tumors" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & NEURO-ONCOLOGY</span>
                    <h3>Myths and Facts About Brain Tumors</h3>
                    <p>Debunking 10 common myths regarding cancer risk, mobile phone radiation, age factors, symptoms, and treatment options.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/mythes-and-facts-about-brain-tumors" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 13 -->
            <article class="article-card" data-category="spine brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Text-neck-in-children.webp" alt="Text Neck in Children" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">PEDIATRIC SPINE & POSTURE</span>
                    <h3>Text Neck in Children: A Growing Concern for Parents</h3>
                    <p>Learn about Text Neck Syndrome causes, symptoms, force on cervical spine, prevention tips, and posture treatments for kids.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/text-neck-in-children" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 12 -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Cognitive Decline vs. Normal Aging.webp" alt="Cognitive Decline vs Normal Aging" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN HEALTH & MEMORY</span>
                    <h3>Cognitive Decline vs. Normal Aging: Key Differences</h3>
                    <p>Understand normal age-related brain changes vs. warning signs of MCI and dementia, risk factors, and brain health tips.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/cognitive-decline-vs-normal-aging" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 11 -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Brain-Tumor-vs-Regular-Migraine-v2.webp" alt="Brain Tumor vs Regular Migraine" onerror="this.src='images/Brain Tumor Removal Surgery in Hyderabad.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE & NEURO-ONCOLOGY</span>
                    <h3>When to Worry About Persistent Headaches: Brain Tumor vs. Regular Migraine</h3>
                    <p>Differentiating between migraine symptoms and intracranial pressure warning signs, diagnosis, and care options.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/when-to-worry-about-persistent-headaches" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 10 -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Balancing-Your-Brain.webp" alt="Key Minerals for Brain" onerror="this.src='images/colorful-brain-model-with-spinal-cord-illustration.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">NUTRITION & BRAIN CARE</span>
                    <h3>Balancing Your Brain: The Mental Health Benefits of Key Minerals</h3>
                    <p>Understanding how Iron, Magnesium, Zinc, and Calcium support mood regulation and cognitive health.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">6 Min Read</span>
                    <a href="patient-education/balancing-your-brain" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 9 -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Homocysteine-as-a-Biomarker-for-Neurological-Disorders.webp" alt="Homocysteine Biomarker" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">NEUROLOGICAL DIAGNOSTICS</span>
                    <h3>Homocysteine as a Biomarker for Neurological Disorders</h3>
                    <p>Exploring hyperhomocysteinemia in Alzheimer's, stroke, epilepsy, and B-vitamin intervention strategies.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/homocysteine-as-a-biomarker" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 8 -->
            <article class="article-card" data-category="spine">
                <div class="article-img-wrap">
                    <img src="images/blogs/Tingling-and-Numbnessv2.webp" alt="Tingling and Numbness" onerror="this.src='images/Brain Tumor Removal Surgery in Hyderabad.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">NERVE & SPINE CARE</span>
                    <h3>Tingling and Numbness: What Your Hands and Feet Are Telling You</h3>
                    <p>Understanding causes, warning signs, neuropathy, carpal tunnel, and effective treatment options for extremities.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">6 Min Read</span>
                    <a href="patient-education/tingling-and-numbness-hands-and-feet" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 7 -->
            <article class="article-card" data-category="spine brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/understanding-myofascial-pain-syndrome.webp" alt="Myofascial Pain Syndrome" onerror="this.src='images/Brain Tumor Removal Surgery in Hyderabad.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">SPINE & PAIN CARE</span>
                    <h3>Understanding Myofascial Pain Syndrome: Causes, Symptoms, and Risk Factors</h3>
                    <p>Exploring trigger points, referred pain, risk factors, and multidisciplinary treatment approaches for MPS.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/understanding-myofascial-pain-syndrome" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 6 -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/the-diagnostic-challenges.webp" alt="Syncope Vertigo Seizures" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">NEUROLOGICAL DIAGNOSTICS</span>
                    <h3>The Diagnostic Challenges of Syncope, Vertigo, and Seizures</h3>
                    <p>Exploring how neurologists differentiate between these 'great mimics' through structured testing and clinical history.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">7 Min Read</span>
                    <a href="patient-education/syncope-vertigo-and-seizures" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 5 -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Brain-Fog.webp" alt="Is Brain Fog Serious?" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE</span>
                    <h3>Is Brain Fog a Sign of Something Serious? When to Seek Professional Help</h3>
                    <p>Understanding cognitive confusion, lifestyle triggers vs. underlying neurological warning signs.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">6 Min Read</span>
                    <a href="patient-education/brain-fog-sign-of-something-serious" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 1 -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/bllod-clot.webp" alt="Blood Clots vs Stroke" onerror="this.src='images/stroke_medical_banner.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN & STROKE CARE</span>
                    <h3>Blood Clots vs. Stroke: What’s the Difference and Why It Matters</h3>
                    <p>Understanding distinctions in causes, symptoms, and treatments between blood clots and strokes.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">6 Min Read</span>
                    <a href="patient-education/blood-clots-vs-stroke" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 3 -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/How-digital-detox-boosts-brain-health.webp" alt="Digital Detox" onerror="this.src='images/view-brain-shape.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN CARE</span>
                    <h3>How Digital Detox Boosts Brain Health</h3>
                    <p>Understanding how screen overuse impacts dopamine and serotonin, and practical steps to achieve digital wellness.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">5 Min Read</span>
                    <a href="patient-education/digital-detox-brain-health" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 2 -->
            <article class="article-card" data-category="brain">
                <div class="article-img-wrap">
                    <img src="images/blogs/Stroke-in-young-adults.webp" alt="Stroke in Young Adults" onerror="this.src='images/stroke_medical_banner.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">BRAIN & STROKE CARE</span>
                    <h3>Stroke in Young Adults – Impact of Stress and Mental Health</h3>
                    <p>Exploring how stress, depression, and anxiety elevate stroke risks in adults under 50 and practical mitigation strategies.</p>
                </div>
                <div class="article-footer">
                    <span class="read-time">6 Min Read</span>
                    <a href="patient-education/stroke-in-young-adults" class="read-link">Read</a>
                </div>
            </article>


            <!-- Card 4 -->
            <article class="article-card" data-category="spine">
                <div class="article-img-wrap">
                    <img src="images/blogs/Spine-health.webp" alt="Spine Health after 50" onerror="this.src='images/Brain Tumor Removal Surgery in Hyderabad.webp';">
                </div>
                <div class="article-content">
                    <span class="category-label">SPINE CARE</span>
                    <h3>Spine Health as You Age: Tips to Maintain a Strong Back After 50</h3>
                    <p>Practical strategies, posture guidance, and nutrition tips to protect your back and remain pain-free after 50.</p>
                <div class="article-footer">
                    <span class="read-time">6 Min Read</span>
                    <a href="patient-education/spine-health-after-50" class="read-link">Read</a>
                </div>
            </article>
        </div>
        
        <!-- Pagination Controls -->
        <div class="pagination-container" id="paginationControls" style="display: flex; justify-content: center; align-items: center; gap: 8px; margin-top: 40px;">
        </div>
    </div>
</main>

  <!-- THE PATIENT APP SECTION -->
  <section class="app-section" style="background-color: #0066cc; padding: 0; position: relative; overflow: visible; margin-top: 100px;">
    <div class="container" style="position: relative; z-index: 2;">
      <div class="app-grid" style="display: flex; align-items: center; justify-content: space-between; min-height: 350px;">
        <!-- Left Banner Content -->
        <div class="app-content" style="flex: 1; padding: 60px 0; color: #fff; max-width: 600px;">
          <h2 class="app-title" style="font-size: 2.75rem; font-weight: 700; margin-bottom: 1rem; color: #fff;">The Patient App.</h2>
          <p class="app-subtitle" style="font-size: 1.25rem; font-weight: 400; margin-bottom: 2rem; color: #fff;">Manage appointments and medical reports seamlessly.</p>

          <div class="app-store-btns" style="display: flex; gap: 1rem;">
            <a href="#" class="app-badge-btn" style="display: inline-flex; align-items: center; background: #fff; color: #1d1d1f; text-decoration: none; padding: 0.5rem 1rem; border-radius: 8px; font-weight: 500; font-size: 0.9rem; gap: 0.5rem; transition: transform 0.2s; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
              <i class="fa-brands fa-app-store-ios" style="color: #0066cc; font-size: 1.25rem;"></i>
              Download on App Store
            </a>
            <a href="#" class="app-badge-btn" style="display: inline-flex; align-items: center; background: #fff; color: #1d1d1f; text-decoration: none; padding: 0.5rem 1rem; border-radius: 8px; font-weight: 500; font-size: 0.9rem; gap: 0.5rem; transition: transform 0.2s; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
              <i class="fa-brands fa-google-play" style="color: #1d1d1f; font-size: 1.25rem;"></i>
              Get it on Google Play
            </a>
          </div>
        </div>

        <!-- Right Phone Mockup -->
        <div class="phone-mockup-wrapper" style="flex: 1; display: flex; justify-content: flex-end; position: relative;">
          <img src="images/phone-qr.webp" alt="The Patient App" class="app-phone-img" style="width: 460px; max-width: none; position: absolute; bottom: -315px; right: 20px;">
        </div>
      </div>
    </div>
  </section>

<!-- CTA Section -->
<section class="pre-footer-cta">
    <div class="container cta-container">
        <div class="cta-text">
            <h2>Ready to take the next step?</h2>
            <p>Schedule a comprehensive consultation with Dr. Rajesh Reddy.</p>
        </div>
        <div class="cta-button">
            <a href="contact" class="btn-primary">Book Consultation Today</a>
        </div>
    </div>
</section>

<?php
if (file_exists('components/footer.php')) {
    include __DIR__ . '/components/footer.php';
}
?>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-pill');
    const articleCards = Array.from(document.querySelectorAll('.article-card'));
    const searchInput = document.getElementById('articleSearchInput');
    const paginationContainer = document.getElementById('paginationControls');

    const ITEMS_PER_PAGE = 8;
    let currentPage = 1;
    let currentFilter = 'all';
    let currentSearchTerm = '';

    function getFilteredCards() {
        return articleCards.filter(card => {
            const categories = (card.getAttribute('data-category') || '').split(' ');
            const cardText = card.textContent.toLowerCase();
            const matchesCategory = (currentFilter === 'all' || categories.includes(currentFilter));
            const matchesSearch = !currentSearchTerm || cardText.includes(currentSearchTerm);
            return matchesCategory && matchesSearch;
        });
    }

    function renderPage() {
        const filteredCards = getFilteredCards();
        const totalPages = Math.ceil(filteredCards.length / ITEMS_PER_PAGE) || 1;

        if (currentPage > totalPages) {
            currentPage = totalPages;
        }

        // Hide all cards first
        articleCards.forEach(card => card.style.display = 'none');

        // Show only the 8 cards for the current page
        const startIndex = (currentPage - 1) * ITEMS_PER_PAGE;
        const endIndex = startIndex + ITEMS_PER_PAGE;
        const visibleCards = filteredCards.slice(startIndex, endIndex);

        visibleCards.forEach(card => {
            card.style.display = 'flex';
        });

        renderPagination(totalPages);
    }

    function renderPagination(totalPages) {
        if (!paginationContainer) return;
        paginationContainer.innerHTML = '';

        if (totalPages <= 1) return;

        // Prev Button
        const prevBtn = document.createElement('button');
        prevBtn.className = 'page-btn prev-btn';
        prevBtn.innerHTML = '<i class="fa-solid fa-chevron-left"></i>';
        prevBtn.disabled = currentPage === 1;
        prevBtn.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                renderPage();
                window.scrollTo({ top: 300, behavior: 'smooth' });
            }
        });
        paginationContainer.appendChild(prevBtn);

        // Page Number Buttons
        for (let i = 1; i <= totalPages; i++) {
            const pageBtn = document.createElement('button');
            pageBtn.className = `page-btn num-btn ${i === currentPage ? 'active' : ''}`;
            pageBtn.textContent = i;
            pageBtn.addEventListener('click', () => {
                currentPage = i;
                renderPage();
                window.scrollTo({ top: 300, behavior: 'smooth' });
            });
            paginationContainer.appendChild(pageBtn);
        }

        // Next Button
        const nextBtn = document.createElement('button');
        nextBtn.className = 'page-btn next-btn';
        nextBtn.innerHTML = '<i class="fa-solid fa-chevron-right"></i>';
        nextBtn.disabled = currentPage === totalPages;
        nextBtn.addEventListener('click', () => {
            if (currentPage < totalPages) {
                currentPage++;
                renderPage();
                window.scrollTo({ top: 300, behavior: 'smooth' });
            }
        });
        paginationContainer.appendChild(nextBtn);
    }

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            currentFilter = this.getAttribute('data-filter');
            currentPage = 1;
            renderPage();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', function() {
            currentSearchTerm = this.value.trim().toLowerCase();
            currentPage = 1;
            renderPage();
        });
    }

    
    // Make entire article card clickable
    articleCards.forEach(card => {
        card.addEventListener('click', function(e) {
            // If the user didn't directly click the <a> tag itself, follow the card's link
            if (e.target.closest('a')) return;
            const link = this.querySelector('a.read-link') || this.querySelector('a');
            if (link && link.href) {
                window.location.href = link.href;
            }
        });
    });

    // Initial render

    renderPage();
});
</script>

</body>
</html>
