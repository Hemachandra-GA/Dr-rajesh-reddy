<?php
$current_page = 'spinal-cord-injury-treatment';
$page_title = "Spinal Cord Injury: Treatment, Recovery and Rehabilitation | Dr. Rajesh Reddy, Hyderabad";
$page_description = "Comprehensive guide to spinal cord injury treatment, ASIA grading, SCI syndromes, surgical decompression, and long-term rehabilitation by Dr. Rajesh Reddy, Senior Neurosurgeon in Hyderabad.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page_title ?></title>
  <meta name="description" content="<?= $page_description ?>">
  <meta name="keywords" content="spinal cord injury treatment Hyderabad, ASIA classification spinal cord injury, incomplete spinal cord injury recovery, central cord syndrome treatment, cauda equina syndrome surgery, SCI rehabilitation Hyderabad, spinal cord injury neurosurgeon">
  <link rel="canonical" href="https://drrajeshreddy.com/spinal-cord-injury-treatment">

  <!-- Open Graph / Social Sharing -->
  <meta property="og:title" content="<?= $page_title ?>">
  <meta property="og:description" content="<?= $page_description ?>">
  <meta property="og:url" content="https://drrajeshreddy.com/spinal-cord-injury-treatment">
  <meta property="og:type" content="article">
  <meta property="og:image" content="https://drrajeshreddy.com/images/spinal-cord-injury/Spinal Cord Injury.webp">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-drrajeshreddy.png">
  <link rel="icon" type="image/svg+xml" href="images/favicon-drrajeshreddy.svg">
  <link rel="apple-touch-icon" href="images/favicon-drrajeshreddy.png">

  <!-- Preconnect to Font domains -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Inter:wght@300;400;500;600;700&display=swap" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Inter:wght@300;400;500;600;700&display=swap"></noscript>
  <link rel="stylesheet" href="css/style.css">

  <!-- FontAwesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>

  <!-- Schema Markup: MedicalCondition, MedicalProcedure, Physician, FAQPage -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "MedicalCondition",
        "@id": "https://drrajeshreddy.com/spinal-cord-injury-treatment#condition",
        "name": "Spinal Cord Injury",
        "alternateName": ["SCI", "Complete Spinal Cord Injury", "Incomplete Spinal Cord Injury", "Central Cord Syndrome", "Cauda Equina Syndrome"],
        "description": "A traumatic or pathological disruption of the spinal cord or cauda equina causing motor, sensory, autonomic, and bowel/bladder impairments.",
        "possibleTreatment": [
          {
            "@type": "MedicalProcedure",
            "name": "Emergency Spinal Cord Decompression"
          },
          {
            "@type": "MedicalProcedure",
            "name": "Spine Fracture Fixation and Instrumented Fusion"
          },
          {
            "@type": "MedicalProcedure",
            "name": "Multidisciplinary SCI Neuro-Rehabilitation"
          }
        ]
      },
      {
        "@type": "MedicalProcedure",
        "@id": "https://drrajeshreddy.com/spinal-cord-injury-treatment#procedure",
        "name": "Spinal Cord Decompression and Stabilization Surgery",
        "procedureType": "SurgicalProcedure",
        "bodyLocation": "Spine and Spinal Cord",
        "description": "Urgent surgical decompression of neural tissue combined with anterior or posterior instrumented stabilization to prevent secondary injury and optimize neurological recovery.",
        "performer": {
          "@type": "Physician",
          "@id": "https://drrajeshreddy.com/#physician",
          "name": "Dr. Rajesh Reddy Sannareddy"
        }
      },
      {
        "@type": "Physician",
        "@id": "https://drrajeshreddy.com/#physician",
        "name": "Dr. Rajesh Reddy Sannareddy",
        "jobTitle": "Senior Consultant Neurosurgeon",
        "url": "https://drrajeshreddy.com/profile",
        "medicalSpecialty": ["Neurosurgery", "Spine Surgery", "Neurotrauma"],
        "telephone": "+91-9000224265",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Hyderabad",
          "addressRegion": "Telangana",
          "addressCountry": "IN"
        }
      },
      {
        "@type": "FAQPage",
        "@id": "https://drrajeshreddy.com/spinal-cord-injury-treatment#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "My family member was told they have a 'complete' spinal cord injury — does that mean no recovery is possible?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "A complete injury (ASIA A) means that at the time of assessment, no motor or sensory function was detected below the neurological level, including in the sacral segments. However, 'complete' at 72 hours is not the same as complete at 6 months — approximately 10–15% of patients initially classified as ASIA A will show some neurological improvement, particularly if early surgical decompression is performed. The distinction between complete and incomplete is most prognostically meaningful when assessed at 72 hours or later (when spinal shock has resolved), not immediately after injury. Dr. Rajesh Reddy will provide a detailed prognostic assessment once the acute phase has passed and imaging and clinical examination are complete."
            }
          },
          {
            "@type": "Question",
            "name": "What is spinal shock and how long does it last?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Spinal shock is a temporary state of complete loss of all spinal cord function below the injury level — including reflexes — that occurs immediately after injury. During spinal shock, even an incomplete injury may appear complete because all cord function is temporarily suppressed. Spinal shock typically resolves within 24–72 hours, signalled by the return of the bulbocavernosus reflex (a sacral reflex). After spinal shock resolves, a more accurate assessment of the injury's completeness is possible. It is the reason that the initial neurological assessment immediately after injury is not the definitive prognostic assessment."
            }
          },
          {
            "@type": "Question",
            "name": "What is autonomic dysreflexia and how will we recognise it at home?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Autonomic dysreflexia (AD) is a sudden, potentially life-threatening rise in blood pressure that occurs in patients with SCI at T6 or above, triggered by a noxious stimulus below the injury level. The most common triggers are a blocked urinary catheter, severe constipation, tight clothing, a pressure ulcer, or any painful stimulus below the level of injury. Symptoms include a severe throbbing headache, flushing and sweating above the injury level, goosebumps below, nasal congestion, and anxiety. The immediate response: sit the patient upright, check and drain the urinary catheter, check for and relieve constipation, loosen any tight clothing or constricting items, and call for emergency help if BP is not coming down. All carers of SCI patients with injuries at T6 and above receive AD training before discharge."
            }
          },
          {
            "@type": "Question",
            "name": "Will my family member ever walk again?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "This depends entirely on the level and completeness of the injury, and on how neurological recovery progresses over the first weeks and months. Patients with thoracic or lumbar incomplete injuries (ASIA C or D) have excellent ambulation potential — the majority achieve community walking with appropriate rehabilitation and orthoses. Patients with cervical incomplete injuries have a more variable prognosis for walking but a meaningful proportion — particularly those with central cord syndrome — regain functional ambulation. Complete thoracic injuries rarely result in community ambulation, though standing and therapeutic walking with long leg braces are achievable goals. Dr. Rajesh Reddy will provide an honest, individualised assessment of ambulation potential based on the specific injury pattern and recovery trajectory."
            }
          },
          {
            "@type": "Question",
            "name": "How long will rehabilitation take?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The acute inpatient phase — ICU and ward — typically lasts 2–6 weeks, depending on the injury level and medical complications. Inpatient rehabilitation (in a specialist rehabilitation centre) typically lasts 2–6 months. Outpatient rehabilitation continues for years — the recovery process from spinal cord injury is not a sprint but a marathon, and neurological recovery can continue for 2–3 years. The intensity and duration of rehabilitation are proportional to the severity of injury and the patient's goals: returning to wheelchair independence is a different rehabilitation programme from returning to walking."
            }
          },
          {
            "@type": "Question",
            "name": "Are there any new treatments or clinical trials for spinal cord injury?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Emerging treatments include spinal cord stimulation, stem cell therapy, neuroprotective drugs, and robotic rehabilitation. However, many remain experimental, with limited evidence of consistent neurological recovery. Patients often ask me about stem cell therapy. Based on current published literature, I consider it experimental, with no conclusive evidence of consistent, meaningful recovery in spinal cord injury. I advise patients to approach cure claims cautiously and consider established treatments or legitimate clinical trials after specialist consultation."
            }
          }
        ]
      }
    ]
  }
  </script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q90BC8GWVR"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Q90BC8GWVR');
  </script>
</head>

<body id="top">

  <!-- Global Header -->
  <?php include __DIR__ . '/components/header.php'; ?>

  <!-- Main Content -->
  <main class="pillar-page">

    <!-- Hero Section -->
    <section class="pillar-hero" style="background-color: #fff; padding-top: 20px; padding-bottom: 20px;">
      <div class="container" style="max-width: 1344px;">
        <div class="breadcrumb" style="margin-bottom: 12px; font-size: 0.85rem; color: #7a7a7a;">
          <a href="index" style="color: #7a7a7a;">Home</a>
          <span style="margin: 0 8px;">></span>
          <a href="spine-fracture-treatment" style="color: #7a7a7a;">Spine Fracture Treatment</a>
          <span style="margin: 0 8px;">></span>
          <span style="color: #1d1d1f; font-weight: 500;">Spinal Cord Injury</span>
        </div>

        <div style="padding: 12px 0; margin-bottom: 24px;">
          <h1 style="font-size: 2.2rem; font-weight: 700; color: #1d1d1f; margin: 0;">Spinal Cord Injury: Treatment, Recovery and Rehabilitation</h1>
          <div class="pillar-meta" style="display: flex; align-items: center; gap: 8px; flex-wrap: wrap; font-size: 0.9rem; color: #64748b; margin-top: 10px;">
            <span>Written and medically reviewed by <strong style="color: #1e293b; font-weight: 600;">Dr. Rajesh Reddy Sannareddy</strong></span>
            <span style="color: #cbd5e1;">|</span>
            <span>October 7, 2026</span>
            <span style="color: #cbd5e1;">|</span>
            <span style="color: #0066cc; font-weight: 500;">Brain, Spine and Endovascular specialist</span>
          </div>
        </div>

        <div style="border-radius: 12px; overflow: hidden; background-color: #f5f5f7;">
          <img src="images/spinal-cord-injury/Spinal Cord Injury.webp" alt="Spinal cord injury treatment, emergency decompression, and multidisciplinary rehabilitation" style="width: 100%; height: auto; display: block;">
        </div>
      </div>
    </section>

    <div class="pillar-main-content">
      <div class="container pillar-layout" style="max-width: 1440px;">

        <!-- Left Sticky Sidebar -->
        <aside class="pillar-sidebar">
          <nav class="pillar-sidebar-nav">
            <div class="mobile-drawer-header">
              <h3 class="mobile-drawer-title">On This Page</h3>
              <button class="mobile-drawer-close" aria-label="Close">&times;</button>
            </div>
            <h3>On This Page</h3>
            <ul>
              <li><a href="#overview" class="sidebar-nav-link active">Overview</a></li>
              <li><a href="#asia-classification" class="sidebar-nav-link">Complete vs. Incomplete (ASIA)</a></li>
              <li><a href="#neurological-levels" class="sidebar-nav-link">Neurological Level & Function</a></li>
              <li><a href="#sci-syndromes" class="sidebar-nav-link">Incomplete SCI Syndromes</a></li>
              <li><a href="#emergency-management" class="sidebar-nav-link">Emergency First Hours</a></li>
              <li><a href="#surgical-treatment" class="sidebar-nav-link">Surgical Decompression</a></li>
              <li><a href="#medical-complications" class="sidebar-nav-link">Medical Complications & Prevention</a></li>
              <li><a href="#rehabilitation" class="sidebar-nav-link">Rehabilitation & Therapy</a></li>
              <li><a href="#emerging-technologies" class="sidebar-nav-link">Emerging Technologies</a></li>
              <li><a href="#prognosis" class="sidebar-nav-link">Prognosis & Long-Term Outlook</a></li>
              <li><a href="#faq" class="sidebar-nav-link">Frequently Asked Questions</a></li>
              <li><a href="#consultation" class="sidebar-nav-link">Consultation in Hyderabad</a></li>
              <li><a href="#related" class="sidebar-nav-link">Related Articles</a></li>
            </ul>
          </nav>
        </aside>

        <!-- Center Content Area -->
        <div class="pillar-content">

          <!-- Section 1: Overview -->
          <section id="overview" class="pillar-section">
            <p>A spinal cord injury (SCI) is one of the most devastating consequences of trauma to the spine — a sudden disruption of the neural pathways that carry motor commands from the brain to the body and sensory information back. Within seconds of impact, the entire landscape of a person's physical life can change: the ability to move, to feel, to control the bladder and bowel, and to breathe independently may all be affected, depending on the level and completeness of the injury.</p>
            <p>Yet spinal cord injury is not a single condition — it is a spectrum. At one end are complete injuries, where no motor or sensory function is preserved below the level of the lesion, and the likelihood of meaningful spontaneous recovery is limited. At the other end are incomplete injuries, where some neural pathways remain intact across the injury zone, and where the potential for neurological recovery — with early, expert intervention — can be substantial. Between these poles lies a range of partial injury patterns, each with its own clinical signature, prognosis, and rehabilitation pathway.</p>
            <p>The management of spinal cord injury is a race against time — and a race against secondary injury. The primary injury is the mechanical damage caused by the fracture, dislocation, or compression at the moment of impact. But in the hours and days that follow, a cascade of secondary processes — oedema, ischaemia, excitotoxicity, inflammation — can extend the zone of injury beyond what the initial trauma inflicted. Emergency decompression and stabilisation, administered at the right time and with the right technique, can interrupt this secondary cascade and preserve neural tissue that would otherwise be lost.</p>
            <p><strong>Dr. Rajesh Reddy Sannareddy</strong>, Senior Consultant Neurosurgeon in Hyderabad, manages spinal cord injuries across the full spectrum — from emergency decompression and stabilisation in the acute phase, through the complex medical management of the ICU and ward period, to coordination of the long-term rehabilitation programme that determines the patient's ultimate functional outcome.</p>
            <figure style="margin: 28px 0;">
              <img src="images/spinal-cord-injury/understanding-spinal-cord-injury.webp" alt="Understanding spinal column trauma and neural tissue injury patterns" style="width: 100%; height: auto; display: block; border-radius: 12px;">
              <figcaption style="margin-top: 8px; color: #64748b; font-size: 0.9rem;">Spinal fractures and dislocations can compress or contuse the delicate spinal cord tissue within the spinal canal.</figcaption>
            </figure>
          </section>

          <!-- Section 2: Complete vs. Incomplete & ASIA Classification -->
          <section id="asia-classification" class="pillar-section">
            <h2>Understanding Spinal Cord Injury: Complete vs. Incomplete</h2>
            <p>The most important prognostic distinction in spinal cord injury is between complete and incomplete lesions — and it is assessed using the ASIA (American Spinal Injury Association) Impairment Scale, the international standard for classifying the neurological level and severity of spinal cord injuries.</p>

            <div class="table-responsive-wrapper" style="overflow-x:auto;-webkit-overflow-scrolling:touch;width:100%;margin:24px 0;">
              <table class="pillar-table" style="min-width:680px;">
                <thead>
                  <tr>
                    <th>Grade</th>
                    <th>Classification</th>
                    <th>Definition</th>
                    <th>Typical Functional Outcome</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong>A</strong></td>
                    <td><strong>Complete</strong></td>
                    <td>No motor or sensory function preserved below the neurological level, including sacral segments S4–S5</td>
                    <td>Dependent on injury level; cervical SCI typically requires power wheelchair; some may achieve limited ambulation with extensive rehabilitation</td>
                  </tr>
                  <tr>
                    <td><strong>B</strong></td>
                    <td><strong>Sensory Incomplete</strong></td>
                    <td>Sensory but not motor function preserved below neurological level, including sacral segments S4–S5</td>
                    <td>Some sensation present; motor recovery variable; sacral sparing indicates incomplete injury</td>
                  </tr>
                  <tr>
                    <td><strong>C</strong></td>
                    <td><strong>Motor Incomplete</strong></td>
                    <td>Motor function preserved below neurological level; more than half of key muscles below level have grade &lt; 3</td>
                    <td>Ambulatory potential exists; significant rehabilitation potential; many achieve community ambulation with aids</td>
                  </tr>
                  <tr>
                    <td><strong>D</strong></td>
                    <td><strong>Motor Incomplete</strong></td>
                    <td>Motor function preserved below neurological level; at least half of key muscles below level have grade &ge; 3</td>
                    <td>Most patients achieve community ambulation; better prognosis for functional independence</td>
                  </tr>
                  <tr>
                    <td><strong>E</strong></td>
                    <td><strong>Normal</strong></td>
                    <td>Motor and sensory function normal (may have prior deficits)</td>
                    <td>Full functional recovery; neurological examination normal</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div style="background-color: #f0f7ff; border-left: 4px solid #0066cc; padding: 18px 20px; border-radius: 0 8px 8px 0; margin: 24px 0;">
              <h3 style="color: #0066cc; margin: 0 0 8px; font-size: 1.1rem;">Clinical Significance: Sacral Sparing</h3>
              <p style="margin: 0; color: #334155;">The most critical physical finding in any spinal cord injury is <strong>sacral sparing</strong> — the preservation of any sensory or motor function in the sacral segments (S4–S5), including perianal sensation or voluntary anal contraction. Sacral sparing, even when minimal, defines the injury as incomplete (ASIA B or above) and indicates that some neural pathways cross the injury zone — conferring a significantly better prognosis for neurological recovery than a complete (ASIA A) injury at the same level.</p>
            </div>
          </section>

          <!-- Section 3: Neurological Level of Injury -->
          <section id="neurological-levels" class="pillar-section">
            <h2>The Neurological Level of Injury: What It Means Functionally</h2>
            <p>The neurological level of injury (NLI) is the most caudal (lowest) spinal segment at which both motor and sensory function are normal bilaterally. It is the single most important determinant of functional outcome after SCI — what the patient can do, what equipment they need, and what level of independence is achievable.</p>

            <h3>Cervical Injuries (C1–C8): Tetraplegia</h3>
            <p>Cervical spinal cord injuries produce tetraplegia (quadriplegia) — impairment of all four limbs. The higher the cervical level, the more severe the functional impact:</p>
            <ul class="pillar-list">
              <li><strong>C1–C3 injuries:</strong> Typically require ventilatory support (diaphragm is innervated at C3–C5); very limited independent function; voice-controlled power wheelchairs; require full-time attendant care.</li>
              <li><strong>C4 injuries:</strong> Diaphragm function present; independent breathing possible in most; power wheelchair with chin or head control; limited hand and arm function.</li>
              <li><strong>C5 injuries:</strong> Shoulder and partial elbow flexion; can feed self with equipment; manual wheelchair possible on flat surfaces; some independence with upper extremity activities.</li>
              <li><strong>C6 injuries:</strong> Wrist extension intact; key functional level for independence — tenodesis grip allows manipulation; independent in most activities of daily living with equipment; manual wheelchair independent.</li>
              <li><strong>C7 injuries:</strong> Triceps function intact (elbow extension); significant independence; can transfer independently; manual wheelchair on most surfaces.</li>
              <li><strong>C8 injuries:</strong> Intrinsic hand muscles partially preserved; near-normal upper extremity function; full manual wheelchair independence.</li>
            </ul>

            <h3>Thoracic Injuries (T1–T12): Paraplegia</h3>
            <p>Thoracic injuries produce paraplegia — lower limb impairment with full or near-full upper limb function. Upper thoracic injuries (T1–T6) also affect the intercostal muscles, reducing respiratory reserve and cough effectiveness. Abdominal muscle function is progressively recovered from T6 to T12. Patients with thoracic SCI can typically achieve full independence in a manual wheelchair, with transfers, pressure relief, and most activities of daily living.</p>

            <h3>Lumbar and Sacral Injuries (L1–S5): Variable Paraplegia</h3>
            <p>Injuries below T12–L1 involve the cauda equina rather than the spinal cord itself — a clinically significant distinction because peripheral nerve roots regenerate more reliably than central cord tissue. Lumbar and sacral injuries produce lower motor neurone patterns (flaccid weakness rather than spastic paralysis), and the potential for recovery is generally better. Ambulation is often achievable with appropriate orthoses and physiotherapy.</p>
          </section>

          <!-- Section 4: Incomplete SCI Syndromes -->
          <section id="sci-syndromes" class="pillar-section">
            <h2>Incomplete SCI Syndromes: Patterns of Partial Injury</h2>
            <p>Incomplete spinal cord injuries produce characteristic clinical syndromes that reflect the specific anatomical location of cord damage. Recognising these syndromes guides prognosis and rehabilitation planning:</p>

            <div class="table-responsive-wrapper" style="overflow-x:auto;-webkit-overflow-scrolling:touch;width:100%;margin:24px 0;">
              <table class="pillar-table" style="min-width:700px;">
                <thead>
                  <tr>
                    <th>Syndrome</th>
                    <th>Clinical Features</th>
                    <th>Prognosis</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong>Central Cord Syndrome</strong></td>
                    <td>Most common incomplete SCI; upper limbs weaker than lower limbs; bladder dysfunction; variable sensory loss below level; typically seen in elderly with cervical spondylosis after hyperextension injury</td>
                    <td>Best prognosis of incomplete syndromes; majority regain ambulation; hand function recovery slowest and least complete</td>
                  </tr>
                  <tr>
                    <td><strong>Brown-Séquard Syndrome</strong></td>
                    <td>Hemisection of cord; ipsilateral motor loss + proprioception loss; contralateral pain and temperature loss below level; classically from penetrating injury or disc herniation</td>
                    <td>Excellent prognosis; most patients ambulatory; 90%+ regain bladder control; near-normal function possible</td>
                  </tr>
                  <tr>
                    <td><strong>Anterior Cord Syndrome</strong></td>
                    <td>Motor loss + pain/temperature loss below level; proprioception and vibration preserved (posterior columns intact); caused by anterior spinal artery territory infarction or anterior cord compression</td>
                    <td>Worst prognosis of incomplete syndromes; motor recovery limited; sensory dissociation persists; less than 20% recover useful motor function</td>
                  </tr>
                  <tr>
                    <td><strong>Posterior Cord Syndrome</strong></td>
                    <td>Rare; loss of proprioception, vibration, fine touch below level; motor function and pain/temperature preserved; caused by posterior cord injury</td>
                    <td>Ambulation possible but ataxic (sensory ataxia); motor recovery good; proprioception deficits persist</td>
                  </tr>
                  <tr>
                    <td><strong>Conus Medullaris Syndrome</strong></td>
                    <td>Injury at T12–L1 level affecting conus; mixed upper and lower motor neurone signs; early bladder/bowel/sexual dysfunction; saddle anaesthesia</td>
                    <td>Variable; sacral reflex recovery possible; bowel and bladder management essential; some ambulation potential</td>
                  </tr>
                  <tr>
                    <td><strong>Cauda Equina Syndrome</strong></td>
                    <td>Injury below L1 to lumbar/sacral nerve roots; pure lower motor neurone lesion; flaccid paralysis; bladder/bowel/sexual dysfunction; saddle anaesthesia</td>
                    <td>Better recovery potential than cord injuries (peripheral nerves regenerate); early surgical decompression critical for neurological recovery</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div style="background-color: #fff9e6; border-left: 4px solid #f59e0b; padding: 18px 20px; border-radius: 0 8px 8px 0; margin: 24px 0;">
              <h3 style="color: #b45309; margin: 0 0 8px; font-size: 1.1rem;">Central Cord Syndrome in Hyderabad and India</h3>
              <p style="margin: 0; color: #78350f;">Central cord syndrome deserves special mention because it is the most common incomplete SCI pattern in Hyderabad and across India — predominantly affecting middle-aged and elderly patients with pre-existing cervical spondylosis who sustain a relatively minor hyperextension injury (a fall, a road accident). The cord, already compromised by degenerative narrowing, cannot withstand even modest further compression. The clinical picture — disproportionate upper limb weakness, bladder dysfunction, variable sensory loss — is often misattributed to a stroke. MRI of the cervical spine is the key investigation.</p>
            </div>
            <figure style="margin: 28px 0;">
              <img src="images/spinal-cord-injury/The_Neurological_level_of_injury.webp" alt="The Neurological Level of Spinal Cord Injury and functional anatomy" style="width: 100%; height: auto; display: block; border-radius: 12px;">
              <figcaption style="margin-top: 8px; color: #64748b; font-size: 0.9rem;">Understanding the neurological level of injury (NLI) determines functional impairment and rehabilitation potential.</figcaption>
            </figure>
          </section>

          <!-- Section 5: Emergency First Hours -->
          <section id="emergency-management" class="pillar-section">
            <h2>Emergency Management: The First Hours After SCI</h2>
            <p>Cervical spine immobilisation with a rigid collar and spinal board is applied at the scene of injury for all patients with suspected SCI, and maintained until imaging excludes an unstable fracture. In the emergency department, the primary survey (airway, breathing, circulation) takes precedence — high cervical injuries may impair ventilation, and neurogenic shock (bradycardia and hypotension from sympathetic outflow disruption) must be distinguished from haemorrhagic shock.</p>

            <h3>Key Emergency Priorities:</h3>
            <ul class="pillar-list">
              <li><strong>Airway management:</strong> Early intubation for high cervical injuries (C3–C5) where diaphragmatic function is threatened; in-line cervical immobilisation during intubation.</li>
              <li><strong>Blood pressure optimisation:</strong> Target mean arterial pressure (MAP) of 85–90 mmHg for the first 7 days after SCI to optimise spinal cord perfusion; neurogenic hypotension treated with vasopressors (noradrenaline preferred).</li>
              <li><strong>Urinary catheterisation:</strong> Urinary retention is universal in acute SCI; Foley catheter inserted immediately to prevent bladder overdistension.</li>
              <li><strong>DVT prophylaxis:</strong> Low molecular weight heparin commenced as soon as haemostasis allows (24–48 hours post-operatively after surgical fixation).</li>
              <li><strong>Temperature regulation:</strong> SCI patients are poikilothermic (cannot regulate body temperature below the level of injury); hypothermia and hyperthermia must be actively managed.</li>
            </ul>

            <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; margin: 24px 0;">
              <h3 style="color: #1e293b; margin-top: 0; font-size: 1.1rem;">Perspective on Methylprednisolone in Acute SCI</h3>
              <p>Methylprednisolone (high-dose IV corticosteroid) was once routinely considered after acute spinal cord injury (SCI) to limit secondary injury. However, its routine use is no longer recommended by many current evidence-based guidelines, given the potential risks, including infection, gastrointestinal bleeding, and wound complications, alongside uncertain neurological benefits.</p>
              <p style="margin-bottom: 0;"><strong>Dr. Rajesh Reddy</strong> adopts an individualized approach to methylprednisolone use, considering it in selected cases based on the pattern and severity of injury, the patient’s comorbidities, and a careful risk–benefit assessment, rather than prescribing it routinely to every patient with acute SCI.</p>
            </div>
          </section>

          <!-- Section 6: Surgical Decompression and Stabilisation -->
          <section id="surgical-treatment" class="pillar-section">
            <h2>Surgical Treatment: Decompression and Stabilisation</h2>
            <p>Surgery for spinal cord injury serves two goals: <strong>decompression of the injured cord</strong> (removing bone fragments, disc material, or haematoma that continue to compress the neural tissue) and <strong>stabilisation of the spine</strong> (preventing further injury from an unstable fracture-dislocation). The timing and approach depend on the injury pattern, the patient's neurological status, and haemodynamic stability.</p>

            <h3>Timing of Surgery: The Evidence for Early Decompression</h3>
            <p>The STASCIS (Surgical Timing in Acute Spinal Cord Injury Study) trial — the largest prospective study of surgical timing in SCI — demonstrated that patients undergoing surgical decompression within 24 hours of injury were more than twice as likely to achieve at least a 2-grade ASIA improvement compared to those operated after 24 hours. This evidence has shifted practice toward early decompression for incomplete SCI patients in particular.</p>
            <ul class="pillar-list">
              <li><strong>Incomplete SCI with ongoing cord compression:</strong> Emergency decompression within 6–24 hours; every hour of continued compression causes additional secondary injury.</li>
              <li><strong>Complete SCI:</strong> Early surgery (within 24 hours) for stabilisation and to maximise any recovery potential, even though the prognosis for complete injuries is more guarded.</li>
              <li><strong>Cauda equina syndrome:</strong> True surgical emergency; decompression within 6 hours associated with significantly better urological and neurological recovery.</li>
              <li><strong>Haemodynamically unstable polytrauma:</strong> Damage control surgery first; definitive spinal fixation once stabilised.</li>
            </ul>

            <h3>Anterior Decompression</h3>
            <p>When the primary compressive pathology is anterior to the cord — retropulsed vertebral body fragments, herniated disc material, anterior haematoma — an anterior approach provides the most direct decompression. For cervical injuries, anterior cervical discectomy and fusion (ACDF) or anterior cervical corpectomy and fusion (ACCF) removes the compressive material, decompresses the cord, and restores anterior column stability with a cage and plate. For thoracolumbar injuries, anterior corpectomy with cage reconstruction may be combined with posterior fixation.</p>

            <h3>Posterior Decompression and Stabilisation</h3>
            <p>Posterior approaches — laminectomy (removal of the posterior arch) with pedicle screw fixation — are used when: the compressive pathology is posterior; the injury involves multiple levels requiring long-segment stabilisation; or the fracture pattern (fracture-dislocation) requires direct posterior reduction. Laminectomy alone without stabilisation is rarely appropriate in the acute setting — an unstable spine decompressed without fixation risks further injury with positioning and mobilisation.</p>

            <h3>Combined Anterior-Posterior Surgery</h3>
            <p>Complex fracture-dislocations with both anterior compression and posterior instability may require combined anterior-posterior surgery — either staged (anterior first, then posterior on the same or following day) or same-sitting (both approaches in one anaesthetic). Dr. Rajesh Reddy's training at Barrow Neurological Institute and Klinikum Stuttgart included complex spinal cord injury surgery, and his experience encompasses the full range of decompression and stabilisation approaches for the most challenging SCI cases.</p>
            <figure style="margin: 28px 0;">
              <img src="images/spinal-cord-injury/spinal_stablization.webp" alt="Surgical stabilization instrumentation and decompression techniques for spinal cord injury" style="width: 100%; height: auto; display: block; border-radius: 12px;">
              <figcaption style="margin-top: 8px; color: #64748b; font-size: 0.9rem;">Modern titanium instrumentation and minimally invasive navigation allow precise decompression and rigid spinal stabilisation.</figcaption>
            </figure>
          </section>

          <!-- Section 7: Medical Complications of SCI -->
          <section id="medical-complications" class="pillar-section">
            <h2>Medical Complications of SCI: Prevention and Management</h2>
            <p>The neurological injury is only the beginning of the clinical challenge in spinal cord injury. The paralysis, sensory loss, and autonomic dysfunction that follow create a cascade of medical complications that, if not anticipated and managed proactively, can be fatal or cause permanent secondary disability. The table below outlines the major complications and their management:</p>

            <div class="table-responsive-wrapper" style="overflow-x:auto;-webkit-overflow-scrolling:touch;width:100%;margin:24px 0;">
              <table class="pillar-table" style="min-width:720px;">
                <thead>
                  <tr>
                    <th>Complication</th>
                    <th>Prevention and Management</th>
                    <th>Why It Matters</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong>Pressure ulcers (decubitus ulcers)</strong></td>
                    <td>2-hourly repositioning; pressure-relieving mattress; skin inspection; adequate nutrition; specialised wheelchair cushion</td>
                    <td>Leading cause of hospital readmission in SCI; severe ulcers require surgical debridement and flap reconstruction</td>
                  </tr>
                  <tr>
                    <td><strong>Deep vein thrombosis (DVT) & PE</strong></td>
                    <td>Low molecular weight heparin from admission; sequential compression devices; early mobilisation; graduated compression stockings</td>
                    <td>DVT occurs in 50–80% of SCI patients without prophylaxis; PE is a leading cause of early mortality after SCI</td>
                  </tr>
                  <tr>
                    <td><strong>Autonomic dysreflexia</strong></td>
                    <td>Identify and remove triggering stimulus (blocked catheter, constipation, tight clothing, skin lesion); sit patient upright; antihypertensive medication if BP &gt; 150 mmHg</td>
                    <td>Life-threatening hypertensive crisis in T6 and above injuries; BP can rise to 300 mmHg; risk of stroke, seizure, cardiac arrest</td>
                  </tr>
                  <tr>
                    <td><strong>Spasticity</strong></td>
                    <td>Physiotherapy; positioning; oral baclofen or tizanidine; intrathecal baclofen pump for severe spasticity; botulinum toxin for focal spasticity</td>
                    <td>Painful and functionally limiting; can paradoxically assist transfers if mild; severe spasticity prevents rehabilitation</td>
                  </tr>
                  <tr>
                    <td><strong>Neurogenic bladder</strong></td>
                    <td>Intermittent catheterisation programme; anticholinergic medication; urological monitoring; suprapubic catheter if needed</td>
                    <td>Urinary tract infection is the most common medical complication; chronic renal impairment if untreated; major quality-of-life impact</td>
                  </tr>
                  <tr>
                    <td><strong>Neurogenic bowel</strong></td>
                    <td>Scheduled bowel programme; stool softeners; suppositories or digital stimulation; high-fibre diet; adequate hydration</td>
                    <td>Constipation and faecal impaction cause autonomic dysreflexia; bowel management is a major ongoing rehabilitation challenge</td>
                  </tr>
                  <tr>
                    <td><strong>Respiratory complications</strong></td>
                    <td>Ventilatory support for high cervical injuries (C3–C5); assisted cough; chest physiotherapy; tracheostomy weaning programme</td>
                    <td>Leading cause of mortality in acute cervical SCI; diaphragm (C3–C5) and intercostals (T1–T12) paralysis impairs ventilation</td>
                  </tr>
                  <tr>
                    <td><strong>Heterotopic ossification</strong></td>
                    <td>Early passive range-of-motion exercises; etidronate or indomethacin prophylaxis in high-risk patients; surgical excision if function limited</td>
                    <td>Ectopic bone formation around paralysed joints (hip most common); reduces range of motion; may impede transfers and seating</td>
                  </tr>
                  <tr>
                    <td><strong>Neuropathic pain</strong></td>
                    <td>Pregabalin, gabapentin, amitriptyline, duloxetine; transcutaneous electrical nerve stimulation (TENS); spinal cord stimulation for refractory cases</td>
                    <td>Affects 40–70% of SCI patients; severe, burning, shooting pain below injury level; major barrier to rehabilitation and quality of life</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div style="background-color: #fee2e2; border-left: 4px solid #ef4444; padding: 18px 20px; border-radius: 0 8px 8px 0; margin: 24px 0;">
              <h3 style="color: #991b1b; margin: 0 0 8px; font-size: 1.1rem;">Emergency Warning: Autonomic Dysreflexia (Injuries at T6 or Above)</h3>
              <p style="margin: 0; color: #7f1d1d;">Autonomic dysreflexia is a medical emergency unique to patients with SCI at T6 or above. It is triggered by a noxious stimulus below the level of injury — most commonly a blocked urinary catheter or severe constipation — that produces an uncontrolled, massive sympathetic discharge causing sudden, severe hypertension (systolic BP can exceed 300 mmHg). The immediate response is to <strong>sit the patient upright</strong> (reduces blood pressure by 10–20 mmHg), <strong>identify and remove the trigger</strong> (check and drain the catheter first), and administer antihypertensive medication if BP remains elevated. Every patient with a high thoracic or cervical SCI, and their carers, must be trained to recognise and respond to autonomic dysreflexia.</p>
            </div>
          </section>

          <!-- Section 8: Rehabilitation After SCI -->
          <section id="rehabilitation" class="pillar-section">
            <h2>Rehabilitation After Spinal Cord Injury</h2>
            <p>Rehabilitation begins in the ICU — not after discharge. Passive range-of-motion exercises, correct positioning, respiratory physiotherapy, and early splinting to prevent contractures start within the first 24–48 hours. The rehabilitation programme that follows is intensive, multidisciplinary, and long — it typically spans months in the inpatient setting and continues as an outpatient programme for years.</p>

            <h3>The Multidisciplinary Rehabilitation Team:</h3>
            <ul class="pillar-list">
              <li><strong>Neurosurgeon / Spine surgeon:</strong> Surgical management; monitoring of neurological recovery; complications management.</li>
              <li><strong>Rehabilitation medicine specialist (physiatrist):</strong> Overall rehabilitation programme coordination; medical management of SCI complications.</li>
              <li><strong>Physiotherapist:</strong> Strength training, spasticity management, transfer training, gait rehabilitation (for incomplete injuries), respiratory physiotherapy.</li>
              <li><strong>Occupational therapist:</strong> Activities of daily living training, adaptive equipment, home modification assessment, return to work/school planning.</li>
              <li><strong>Speech and language therapist:</strong> For high cervical injuries with tracheostomy; communication devices; swallowing assessment.</li>
              <li><strong>Urologist:</strong> Neurogenic bladder management, urodynamic studies, long-term renal protection.</li>
              <li><strong>Psychologist / psychiatrist:</strong> Depression and anxiety affect more than 30% of SCI patients; psychological support and adjustment counselling.</li>
              <li><strong>Social worker:</strong> Discharge planning, home adaptations, financial support, carer training, community reintegration.</li>
            </ul>

            <h3>Goals of Rehabilitation by Injury Level:</h3>
            <p>Rehabilitation goals are tailored to the neurological level and ASIA grade — what is achievable at C5 is very different from what is achievable at L3. Broadly:</p>
            <ul class="pillar-list">
              <li><strong>High cervical (C1–C4):</strong> Ventilator weaning where possible; communication technology; power wheelchair independence; full attendant care.</li>
              <li><strong>Mid-cervical (C5–C6):</strong> Independent feeding and grooming with adaptive equipment; manual wheelchair on flat surfaces; driving with hand controls (C6); independent living with part-time attendant care.</li>
              <li><strong>Low cervical (C7–C8):</strong> Full manual wheelchair independence; independent transfers; driving; independent living possible.</li>
              <li><strong>Thoracic (T1–T12):</strong> Full wheelchair independence; standing and therapeutic ambulation; some patients with lower thoracic injuries achieve community ambulation with long leg braces.</li>
              <li><strong>Lumbar / cauda equina:</strong> Community ambulation with AFOs or crutches; many patients achieve functional walking.</li>
            </ul>
            <figure style="margin: 28px 0;">
              <img src="images/spinal-cord-injury/Recovery_and_follow_up.webp" alt="Spinal cord injury rehabilitation, recovery milestones and multidisciplinary follow-up" style="width: 100%; height: auto; display: block; border-radius: 12px;">
              <figcaption style="margin-top: 8px; color: #64748b; font-size: 0.9rem;">Targeted neuro-rehabilitation, recovery milestones, and comprehensive follow-up restore maximum functional independence.</figcaption>
            </figure>
          </section>

          <!-- Section 9: Emerging Technologies in SCI Rehabilitation -->
          <section id="emerging-technologies" class="pillar-section">
            <h2>Emerging Technologies in SCI Rehabilitation</h2>
            <p>Advances in rehabilitation technology are expanding what is achievable after spinal cord injury:</p>
            <ul class="pillar-list">
              <li><strong>Robotic exoskeletons (Ekso, ReWalk, Lokomat):</strong> Powered walking devices that enable standing and ambulation for paraplegic patients; primarily used in rehabilitation settings to restore walking patterns and address the cardiovascular and bone density effects of prolonged immobility.</li>
              <li><strong>Functional electrical stimulation (FES):</strong> Electrical stimulation of paralysed muscles to produce functional movements (FES cycling, FES-assisted grasping); improves muscle bulk and reduces spasticity.</li>
              <li><strong>Epidural spinal cord stimulation:</strong> Implanted electrodes over the posterior epidural space deliver electrical stimulation to the lumbar cord; patients with complete SCI have shown voluntary movement with stimulation in research settings; increasingly used for neuropathic pain and spasticity.</li>
              <li><strong>Transcranial magnetic stimulation (TMS) and tDCS:</strong> Non-invasive brain stimulation techniques that can modulate cortical plasticity and augment motor recovery in incomplete SCI.</li>
              <li><strong>Stem cell therapies:</strong> Multiple clinical trials underway; evidence for functional benefit remains limited but is an active area of research globally.</li>
            </ul>
          </section>

          <!-- Section 10: Prognosis and Long-Term Outlook -->
          <section id="prognosis" class="pillar-section">
            <h2>Prognosis and Long-Term Outlook</h2>
            <p>The prognosis after spinal cord injury depends most strongly on three factors: <strong>the completeness of injury (ASIA grade)</strong>, <strong>the neurological level</strong>, and <strong>the time from injury to decompression</strong>. Important prognostic principles:</p>
            <ul class="pillar-list">
              <li><strong>Complete injuries (ASIA A) at 72 hours:</strong> Less than 5% convert to motor incomplete; neurological recovery is limited; functional outcome determined primarily by level.</li>
              <li><strong>Incomplete injuries (ASIA B–D):</strong> Significant recovery potential; ASIA B patients have approximately 50% chance of motor recovery; ASIA C and D patients have excellent ambulation potential with appropriate rehabilitation.</li>
              <li><strong>The first 6 months:</strong> Most neurological recovery occurs within the first 6 months; recovery slows substantially after 1 year but can continue for 2–3 years, particularly for sensation.</li>
              <li><strong>Sacral sparing at 72 hours:</strong> The most reliable predictor of motor recovery — its presence predicts a meaningfully better outcome at 1 year than its absence.</li>
              <li><strong>Central cord syndrome:</strong> Best prognosis of incomplete syndromes — majority of patients regain ambulation; hand function recovery is least complete.</li>
            </ul>
            <p>Life expectancy after SCI has improved dramatically over the past 50 years, largely due to better management of the two historically lethal complications — urinary tract infection / renal failure, and respiratory complications. With optimal medical care, many patients with paraplegia now have near-normal life expectancy. The focus of SCI care has shifted from survival to maximising function, independence, and quality of life.</p>
          </section>

          <!-- Section 11: Frequently Asked Questions -->
          <section id="faq" class="pillar-section">
            <h2>Frequently Asked Questions About Spinal Cord Injury</h2>
            
            <div class="faq-accordion">
              <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                  <span>My family member was told they have a 'complete' spinal cord injury — does that mean no recovery is possible?</span>
                  <i class="fa-solid fa-chevron-down faq-chevron"></i>
                </button>
                <div class="faq-answer">
                  <p>A complete injury (ASIA A) means that at the time of assessment, no motor or sensory function was detected below the neurological level, including in the sacral segments. However, 'complete' at 72 hours is not the same as complete at 6 months — approximately 10–15% of patients initially classified as ASIA A will show some neurological improvement, particularly if early surgical decompression is performed. The distinction between complete and incomplete is most prognostically meaningful when assessed at 72 hours or later (when spinal shock has resolved), not immediately after injury. Dr. Rajesh Reddy will provide a detailed prognostic assessment once the acute phase has passed and imaging and clinical examination are complete.</p>
                </div>
              </div>

              <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                  <span>What is spinal shock and how long does it last?</span>
                  <i class="fa-solid fa-chevron-down faq-chevron"></i>
                </button>
                <div class="faq-answer">
                  <p>Spinal shock is a temporary state of complete loss of all spinal cord function below the injury level — including reflexes — that occurs immediately after injury. During spinal shock, even an incomplete injury may appear complete because all cord function is temporarily suppressed. Spinal shock typically resolves within 24–72 hours, signalled by the return of the bulbocavernosus reflex (a sacral reflex). After spinal shock resolves, a more accurate assessment of the injury's completeness is possible. It is the reason that the initial neurological assessment immediately after injury is not the definitive prognostic assessment.</p>
                </div>
              </div>

              <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                  <span>What is autonomic dysreflexia and how will we recognise it at home?</span>
                  <i class="fa-solid fa-chevron-down faq-chevron"></i>
                </button>
                <div class="faq-answer">
                  <p>Autonomic dysreflexia (AD) is a sudden, potentially life-threatening rise in blood pressure that occurs in patients with SCI at T6 or above, triggered by a noxious stimulus below the injury level. The most common triggers are a blocked urinary catheter, severe constipation, tight clothing, a pressure ulcer, or any painful stimulus below the level of injury. Symptoms include a severe throbbing headache, flushing and sweating above the injury level, goosebumps below, nasal congestion, and anxiety. The immediate response: sit the patient upright, check and drain the urinary catheter, check for and relieve constipation, loosen any tight clothing or constricting items, and call for emergency help if BP is not coming down. All carers of SCI patients with injuries at T6 and above receive AD training before discharge.</p>
                </div>
              </div>

              <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                  <span>Will my family member ever walk again?</span>
                  <i class="fa-solid fa-chevron-down faq-chevron"></i>
                </button>
                <div class="faq-answer">
                  <p>This depends entirely on the level and completeness of the injury, and on how neurological recovery progresses over the first weeks and months. Patients with thoracic or lumbar incomplete injuries (ASIA C or D) have excellent ambulation potential — the majority achieve community walking with appropriate rehabilitation and orthoses. Patients with cervical incomplete injuries have a more variable prognosis for walking but a meaningful proportion — particularly those with central cord syndrome — regain functional ambulation. Complete thoracic injuries rarely result in community ambulation, though standing and therapeutic walking with long leg braces are achievable goals. Dr. Rajesh Reddy will provide an honest, individualised assessment of ambulation potential based on the specific injury pattern and recovery trajectory.</p>
                </div>
              </div>

              <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                  <span>How long will rehabilitation take?</span>
                  <i class="fa-solid fa-chevron-down faq-chevron"></i>
                </button>
                <div class="faq-answer">
                  <p>The acute inpatient phase — ICU and ward — typically lasts 2–6 weeks, depending on the injury level and medical complications. Inpatient rehabilitation (in a specialist rehabilitation centre) typically lasts 2–6 months. Outpatient rehabilitation continues for years — the recovery process from spinal cord injury is not a sprint but a marathon, and neurological recovery can continue for 2–3 years. The intensity and duration of rehabilitation are proportional to the severity of injury and the patient's goals: returning to wheelchair independence is a different rehabilitation programme from returning to walking.</p>
                </div>
              </div>

              <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                  <span>Are there any new treatments or clinical trials for spinal cord injury?</span>
                  <i class="fa-solid fa-chevron-down faq-chevron"></i>
                </button>
                <div class="faq-answer">
                  <p>Emerging treatments include spinal cord stimulation, stem cell therapy, neuroprotective drugs, and robotic rehabilitation. However, many remain experimental, with limited evidence of consistent neurological recovery.</p>
                  <p>Patients often ask me about stem cell therapy. Based on current published literature, I consider it experimental, with no conclusive evidence of consistent, meaningful recovery in spinal cord injury. I advise patients to approach cure claims cautiously and consider established treatments or legitimate clinical trials after specialist consultation.</p>
                </div>
              </div>
            </div>
          </section>

          <!-- Section 12: Consultation in Hyderabad -->
          <section id="consultation" class="pillar-section" style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 32px; margin-top: 40px;">
            <h2 style="margin-top: 0;">Consult Dr. Rajesh Reddy for Spinal Cord Injury Management in Hyderabad</h2>
            <p>Whether you are seeking emergency consultation for an acute spinal cord injury, a second opinion on surgical management, or guidance on rehabilitation planning, Dr. Rajesh Reddy Sannareddy provides comprehensive spinal cord injury consultations in Hyderabad. Book via the Dr. Reddy's Neuro Care app on Google Play or call 9000224265.</p>
            <div style="display: flex; gap: 16px; flex-wrap: wrap; margin-top: 24px;">
              <a href="contact" class="btn-primary" style="padding: 10px 24px; font-weight: 600;">Book Spine Consultation</a>
              <a href="tel:09000224265" class="btn-outline" style="padding: 10px 24px; font-weight: 600;">Call 9000224265</a>
            </div>
          </section>

          <!-- Section 13: Related Articles -->
          <section id="related" class="pillar-section" style="margin-top: 48px;">
            <h3 style="font-size: 1.3rem; margin-top: 36px; margin-bottom: 20px;">Related Articles</h3>
            <p>Continue reading to understand spine fracture types, treatment techniques, and recovery:</p>
            
            <div class="pillar-action-grid" style="grid-template-columns: repeat(2, 1fr); gap: 20px;">
              <div class="pillar-action-card" style="text-align: left; align-items: flex-start; padding: 20px; background-color: #f8fbff; border: 1px solid #e0eeff; color: #1d1d1f;">
                <h3 style="color: #0066cc; font-size: 1.05rem; margin-bottom: 8px;">Cervical Spine Fracture Treatment: C1–C7 Injuries</h3>
                <a href="cervical-spine-fracture-treatment" class="pillar-action-btn" style="padding: 8px 16px; font-size: 0.85rem;">Read Guide</a>
              </div>

              <div class="pillar-action-card" style="text-align: left; align-items: flex-start; padding: 20px; background-color: #f8fbff; border: 1px solid #e0eeff; color: #1d1d1f;">
                <h3 style="color: #0066cc; font-size: 1.05rem; margin-bottom: 8px;">Thoracolumbar Spine Fracture: Surgery vs. Conservative Management</h3>
                <a href="thoracolumbar-spine-fracture" class="pillar-action-btn" style="padding: 8px 16px; font-size: 0.85rem;">Read Guide</a>
              </div>

              <div class="pillar-action-card" style="text-align: left; align-items: flex-start; padding: 20px; background-color: #f8fbff; border: 1px solid #e0eeff; color: #1d1d1f;">
                <h3 style="color: #0066cc; font-size: 1.05rem; margin-bottom: 8px;">Vertebroplasty and Kyphoplasty for Compression Fractures</h3>
                <a href="vertebroplasty-kyphoplasty" class="pillar-action-btn" style="padding: 8px 16px; font-size: 0.85rem;">Read Guide</a>
              </div>

              <div class="pillar-action-card" style="text-align: left; align-items: flex-start; padding: 20px; background-color: #f8fbff; border: 1px solid #e0eeff; color: #1d1d1f;">
                <h3 style="color: #0066cc; font-size: 1.05rem; margin-bottom: 8px;">Minimally Invasive Spine Fracture Surgery in Hyderabad</h3>
                <a href="minimally-invasive-spine-fracture-surgery" class="pillar-action-btn" style="padding: 8px 16px; font-size: 0.85rem;">Read Guide</a>
              </div>

              <div class="pillar-action-card" style="text-align: left; align-items: flex-start; padding: 20px; background-color: #f8fbff; border: 1px solid #e0eeff; color: #1d1d1f;">
                <h3 style="color: #0066cc; font-size: 1.05rem; margin-bottom: 8px;">Pathological Spine Fracture: Cancer and Osteoporosis</h3>
                <a href="pathological-spine-fracture" class="pillar-action-btn" style="padding: 8px 16px; font-size: 0.85rem;">Read Guide</a>
              </div>
              
              <div class="pillar-action-card" style="text-align: left; align-items: flex-start; padding: 20px; background-color: #f8fbff; border: 1px solid #e0eeff; color: #1d1d1f;">
                <h3 style="color: #0066cc; font-size: 1.05rem; margin-bottom: 8px;">Spine Fracture Recovery: What to Expect</h3>
                <a href="spine-fracture-recovery" class="pillar-action-btn" style="padding: 8px 16px; font-size: 0.85rem;">Read Guide</a>
              </div>

              <div class="pillar-action-card" style="text-align: left; align-items: flex-start; padding: 20px; background-color: #f8fbff; border: 1px solid #e0eeff; color: #1d1d1f;">
                <h3 style="color: #0066cc; font-size: 1.05rem; margin-bottom: 8px;">Spine Fracture Treatment in Hyderabad (Pillar Page)</h3>
                <a href="spine-fracture-treatment" class="pillar-action-btn" style="padding: 8px 16px; font-size: 0.85rem;">Read Guide</a>
              </div>
            </div>
          </section>

        </div> <!-- /pillar-content -->

        <!-- Right Sticky Sidebar -->
        <aside class="pillar-right-sidebar">
          <div class="guidance-card">
            <div class="mobile-drawer-header">
              <h3 class="mobile-drawer-title">Need Guidance?</h3>
              <button class="mobile-drawer-close" aria-label="Close">&times;</button>
            </div>
            <h3>Need Guidance?</h3>
            <p>Contact our clinic coordinators immediately for appointment scheduling, emergency spine care, or second opinions.</p>
            <a href="tel:09000224265" class="guidance-phone">9000224265</a>
            <a href="contact" class="guidance-btn">Book Appointment</a>
          </div>
        </aside>

      </div> <!-- /container -->
    </div> <!-- /pillar-main-content -->

    <!-- Mobile Floating Trigger Buttons -->
    <div class="mobile-triggers-bar">
      <button class="mobile-trigger-btn" id="openMobileToc">
        <i class="fa-solid fa-list-ul"></i>
        <span>Table of Contents</span>
      </button>
      <button class="mobile-trigger-btn" id="openMobileGuidance">
        <i class="fa-solid fa-phone"></i>
        <span>Need Guidance?</span>
      </button>
    </div>

    <!-- Mobile Back to Top Button -->
    <a href="#top" class="mobile-back-to-top" id="mobileBackToTop" aria-label="Back to Top">
      <i class="fa-solid fa-arrow-up"></i>
    </a>

  </main>

  <!-- Global Footer -->
  <?php include __DIR__ . '/components/footer.php'; ?>

  <!-- Core JavaScript -->
  <script src="js/main.js"></script>
  <script src="js/navigation.js"></script>
  <script src="js/pillar.js"></script>

  <!-- Accordion and Drawer Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // FAQ Accordion
      const faqQuestions = document.querySelectorAll('.faq-question');
      faqQuestions.forEach(q => {
        q.addEventListener('click', function () {
          const isExpanded = this.getAttribute('aria-expanded') === 'true';
          faqQuestions.forEach(otherQ => {
            otherQ.setAttribute('aria-expanded', 'false');
            otherQ.nextElementSibling.style.maxHeight = null;
          });
          if (!isExpanded) {
            this.setAttribute('aria-expanded', 'true');
            const answer = this.nextElementSibling;
            answer.style.maxHeight = answer.scrollHeight + 'px';
          }
        });
      });

      // Mobile Drawer logic
      const openTocBtn = document.getElementById('openMobileToc');
      const openGuidanceBtn = document.getElementById('openMobileGuidance');
      const leftSidebar = document.querySelector('.pillar-sidebar');
      const rightSidebar = document.querySelector('.pillar-right-sidebar');
      const leftClose = leftSidebar ? leftSidebar.querySelector('.mobile-drawer-close') : null;
      const rightClose = rightSidebar ? rightSidebar.querySelector('.mobile-drawer-close') : null;

      function closeDrawers() {
        if (leftSidebar) leftSidebar.classList.remove('drawer-open');
        if (rightSidebar) rightSidebar.classList.remove('drawer-open');
      }

      if (openTocBtn && leftSidebar) {
        openTocBtn.addEventListener('click', function () {
          closeDrawers();
          leftSidebar.classList.add('drawer-open');
        });
      }

      if (openGuidanceBtn && rightSidebar) {
        openGuidanceBtn.addEventListener('click', function () {
          closeDrawers();
          rightSidebar.classList.add('drawer-open');
        });
      }

      if (leftClose) leftClose.addEventListener('click', closeDrawers);
      if (rightClose) rightClose.addEventListener('click', closeDrawers);

      // Close drawer when clicking a TOC link on mobile
      const tocLinks = leftSidebar ? leftSidebar.querySelectorAll('.sidebar-nav-link') : [];
      tocLinks.forEach(link => {
        link.addEventListener('click', function () {
          if (window.innerWidth <= 991) {
            closeDrawers();
          }
        });
      });

      // Mobile back to top
      const backToTopBtn = document.getElementById('mobileBackToTop');
      if (backToTopBtn) {
        window.addEventListener('scroll', function () {
          if (window.scrollY > 400) {
            backToTopBtn.classList.add('visible');
          } else {
            backToTopBtn.classList.remove('visible');
          }
        });
      }
    });
  </script>
</body>

</html>
