<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imaging the Brain: How Doctors Choose the Right Scan — and Why It Matters | Dr. Rajesh Reddy</title>
    
    <meta name="description" content="Understand the different brain imaging techniques including CT, MRI, MR Spectroscopy, angiography, perfusion imaging, fMRI, DTI, and PET scans.">
    <meta name="keywords" content="brain imaging MRI vs CT scan, choosing brain scan, neuroimaging diagnostic tests, brain MRI indications">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript></noscript>
    
    <style>
        :root {
            --color-primary: #0066cc;
            --color-primary-focus: #0071e3;
            --color-ink: #1d1d1f;
            --color-ink-muted-80: #333333;
            --color-ink-muted-48: #7a7a7a;
            --color-divider-soft: rgba(0, 0, 0, 0.08);
            --color-hairline: #e0e0e0;
            --color-canvas: #ffffff;
            --color-canvas-parchment: #f5f5f7;
            --color-surface-pearl: #fafafc;
            --color-emergency-red: #d9383a;
            --font-display: "Inter", "SF Pro Display", system-ui, -apple-system, sans-serif;
            --font-text: "Inter", "SF Pro Text", system-ui, -apple-system, sans-serif;
            --rounded-sm: 8px;
            --rounded-md: 12px;
            --rounded-lg: 18px;
            --rounded-pill: 9999px;
        }

        .article-container { width: 100%; max-width: 1140px; margin: 0 auto; padding: 40px 24px 80px; }
        .breadcrumb { display: flex; align-items: center; gap: 8px; font-size: 13px; color: var(--color-ink-muted-48); margin-bottom: 24px; }
        .breadcrumb a { color: var(--color-ink-muted-48); transition: color 0.2s ease; }
        .breadcrumb a:hover { color: var(--color-primary); }
        .article-header { margin-bottom: 32px; }
        .article-badge { display: inline-block; background-color: var(--color-canvas-parchment); color: var(--color-primary); font-size: 11px; font-weight: 700; text-transform: uppercase; padding: 4px 10px; border-radius: var(--rounded-pill); margin-bottom: 16px; letter-spacing: 0.5px; }
        .article-title { font-family: var(--font-display); font-size: 38px; font-weight: 700; line-height: 1.2; letter-spacing: -0.8px; color: var(--color-ink); margin-bottom: 16px; }
        @media (max-width: 768px) { .article-title { font-size: 28px; } }
        .article-meta { display: flex; align-items: center; gap: 16px; font-size: 14px; color: var(--color-ink-muted-48); border-bottom: 1px solid var(--color-divider-soft); padding-bottom: 20px; }
        .author-avatar { width: 32px; height: 32px; border-radius: 50%; background-color: var(--color-canvas-parchment); }
        .article-grid { display: grid; grid-template-columns: 2.2fr 1fr; gap: 48px; align-items: start; }
        @media (max-width: 833px) { .article-grid { grid-template-columns: 1fr; gap: 40px; } }
        .article-body h2 { font-family: var(--font-display); font-size: 24px; font-weight: 700; margin: 36px 0 16px; color: var(--color-ink); }
        .article-body h3 { font-family: var(--font-display); font-size: 19px; font-weight: 600; margin: 24px 0 12px; color: var(--color-ink); }
        .article-body p { font-size: 16px; line-height: 1.6; color: var(--color-ink-muted-80); margin-bottom: 20px; }
        .article-body ul { margin-bottom: 20px; padding-left: 20px; }
        .article-body li { font-size: 16px; line-height: 1.6; color: var(--color-ink-muted-80); margin-bottom: 12px; }
        .article-body strong { font-weight: 600; color: var(--color-ink); }
        .body-lead { font-size: 18px !important; font-weight: 400; line-height: 1.6 !important; color: var(--color-ink) !important; margin-bottom: 24px !important; }
        .faq-accordion { margin-top: 24px; border: 1px solid var(--color-hairline); border-radius: var(--rounded-md); overflow: hidden; }
        .faq-item { border-bottom: 1px solid var(--color-hairline); }
        .faq-item:last-child { border-bottom: none; }
        .faq-question { display: flex; align-items: center; gap: 12px; padding: 18px 20px; cursor: pointer; font-size: 16px; font-weight: 500; color: var(--color-ink); transition: background-color 0.2s ease; }
        .faq-question:hover { background-color: var(--color-canvas-parchment); }
        .faq-icon { width: 20px; height: 20px; min-width: 20px; display: flex; align-items: center; justify-content: center; font-size: 18px; font-weight: 700; color: var(--color-ink-muted-48); }
        .faq-icon::before { content: "+"; }
        .faq-item.active .faq-icon::before { content: "−"; }
        .faq-answer { max-height: 0; overflow: hidden; padding: 0 20px 0 52px; transition: max-height 0.3s ease, padding 0.3s ease; }
        .faq-item.active .faq-answer { max-height: 500px; padding: 0 20px 18px 52px; }
        .faq-answer p { font-size: 15px; line-height: 1.6; color: var(--color-ink-muted-80); margin: 0; }
        .sidebar-widget { background-color: var(--color-canvas); border: 1px solid var(--color-hairline); border-radius: var(--rounded-md); padding: 24px; margin-bottom: 24px; }
        .sidebar-widget h4 { font-size: 14px; font-weight: 700; color: var(--color-ink); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 16px; padding-bottom: 8px; border-bottom: 1px solid var(--color-divider-soft); }
        .sidebar-emergency { background-color: #f0f7f9; border-color: #e1f0f4; border-radius: 16px; }
        .sidebar-emergency h4 { color: #0b6b7b; border-bottom: none; font-size: 14px; font-weight: 700; margin-bottom: 12px; }
        .emergency-desc { font-size: 13px; color: var(--color-ink-muted-80); line-height: 1.5; margin-bottom: 16px; }
        .btn-sidebar-call { display: flex; align-items: center; justify-content: center; background-color: #0b6b7b; color: #ffffff !important; font-size: 14px; font-weight: 600; padding: 12px; border-radius: var(--rounded-pill); text-decoration: none; transition: background-color 0.2s ease; }
        .btn-sidebar-call:hover { background-color: #08525f; }
        .sidebar-author-card { background-color: var(--color-canvas); border: 1px solid var(--color-hairline); border-radius: var(--rounded-lg); padding: 20px 16px; text-align: center; box-shadow: 0 8px 24px rgba(0,0,0,0.06); display: flex; flex-direction: column; align-items: center; gap: 12px; margin-bottom: 24px; }
        .sidebar-author-avatar { width: 100px; height: 100px; border-radius: 50%; background: url('../images/Portrait Place Holder.webp') center/cover; }
        .sidebar-author-name { font-size: 20px; font-weight: 700; color: var(--color-ink); margin: 0; }
        .sidebar-author-title { font-size: 13px; color: var(--color-ink-muted-48); margin-top: -8px; margin-bottom: 4px; }
        .sidebar-author-stats { display: flex; justify-content: center; gap: 12px; width: 100%; margin-bottom: 8px; }
        .sidebar-stat-box { background-color: var(--color-canvas-parchment); border-radius: var(--rounded-sm); padding: 8px 12px; flex: 1; }
        .sidebar-stat-value { font-size: 16px; font-weight: 700; color: var(--color-primary); display: block; }
        .sidebar-stat-label { font-size: 10px; font-weight: 600; color: var(--color-ink-muted-48); text-transform: uppercase; }
        .btn-sidebar-helpline { width: 100%; display: inline-block; background-color: var(--color-primary); color: #ffffff !important; font-size: 14px; font-weight: 600; padding: 10px 0; border-radius: var(--rounded-pill); text-decoration: none; transition: background-color 0.2s ease; }
        .btn-sidebar-helpline:hover { background-color: var(--color-primary-focus); }
    </style>
  <link rel="icon" type="image/png" href="../images/favicon-drrajeshreddy.png">
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

    <?php include __DIR__ . '/../components/header.php'; ?>

    <div class="article-container">
        
        <div class="breadcrumb">
            <a href="../patient-education.php">Patient Education</a>
            <span>/</span>
            <a href="../patient-education.php">Brain Care</a>
            <span>/</span>
            <span>Brain Imaging</span>
        </div>

        <article class="article-header">
            <span class="article-badge">Neurological Diagnostics</span>
            <h1 class="article-title">Imaging the Brain: How Doctors Choose the Right Scan — and Why It Matters</h1>
            <div class="article-meta" style="display: flex; align-items: center; gap: 8px; flex-wrap: wrap; font-size: 0.88rem; color: #64748b; margin-top: 12px; margin-bottom: 20px;">
                <div class="author-avatar" style="width: 28px; height: 28px; border-radius: 50%; background: url('../images/Portrait Place Holder.webp') center/cover; flex-shrink: 0;"></div>
                <span>Written and medically reviewed by <strong style="color: #1e293b; font-weight: 600;">Dr. Rajesh Reddy Sannareddy</strong></span>
                <span style="color: #cbd5e1;">|</span>
                <span>May 11, 2026</span>
                <span style="color: #cbd5e1;">|</span>
                <span style="color: #0066cc; font-weight: 500;">Brain, Spine and Endovascular specialist</span>
            </div>
            <div class="featured-banner-container" style="width: 100%; height: 350px; border-radius: var(--rounded-md); overflow: hidden; margin-top: 24px; border: 1px solid var(--color-hairline);">
                <img src="../images/blogs/imaging-the-brain.webp" alt="Imaging the Brain: How Doctors Choose the Right Scan — and Why It Matters" style="width: 100%; height: 100%; object-fit: cover;" onerror="this.src='images/view-brain-shape.webp';">
            </div>
        </article>

        <div class="article-grid">
            
            <main class="article-body">
                <p class="body-lead">A headache that won't quit. A seizure with no prior warning. Sudden weakness on one side of the body. Memory that's slipping faster than it should. When symptoms like these bring someone to a neurology clinic, the first question is almost always the same: what's happening inside the brain?</p>
                
                <p>The answer begins with imaging. And choosing the right scan — at the right moment, for the right reason — is one of the most consequential decisions in neurological care.</p>

                <h2>The Brain Can't Be Examined Any Other Way</h2>
                <p>Unlike a joint you can feel, a rash you can see, or a heartbeat you can listen to, the brain is entirely enclosed. Clinical history and physical examination help in localising the part of the nervous system which is affected and the possible cause. These clues guide a clinician to choose one or more of the available diagnostic modalities — each designed to answer a specific question, and each with its own strengths and limitations.</p>
                <p>Modern brain imaging techniques allow doctors to detect disease early, guide treatment, and improve outcomes with remarkable precision. But getting the most from them requires knowing which tool to reach for — and when.</p>

                <h2>CT Scan — Speed When It Matters Most</h2>
                <p>The CT scan is the workhorse of emergency neurology. It uses X-rays to produce rapid cross-sectional images of the brain, and its greatest strength is exactly that — speed.</p>
                <p>When someone arrives at a hospital after a head injury, or with sudden severe headache, or with stroke symptoms, a CT scan is almost always the first step. It can detect fresh bleeding in the brain within minutes — something no other modality can do faster or more reliably.</p>
                <p>It also identifies skull fractures clearly, and it's available around the clock in virtually every hospital.</p>
                <p>The trade-off is detail. CT scans use radiation and produce less precise images of soft brain tissue compared to MRI. For complex conditions — tumours, infections, inflammatory disease — CT is often just the starting point.</p>

                <h2>MRI — The Gold Standard for Detail</h2>
                <p>If CT is fast, MRI is thorough.</p>
                <p>Using magnetic fields and radio waves rather than radiation, MRI produces extraordinarily detailed images of brain tissue. It can detect abnormalities that CT simply misses — early-stage tumours, subtle changes from multiple sclerosis, small areas of stroke in the brainstem, infections, and inflammatory conditions that appear invisible on a CT scan.</p>
                <p>The limitation is time and access. An MRI scan takes considerably longer, requires the patient to remain still inside the scanner, and isn't suitable for patients with certain metal implants in their body.</p>
                <p>Understanding the comparison of <strong>MRI vs CT scan for brain</strong> comes down to one clinical principle: CT answers urgent questions quickly; MRI answers complex questions thoroughly. They are complementary tools — not competing ones.</p>

                <h2>MR Spectroscopy — Reading the Brain's Chemistry</h2>
                <p>Structural MRI shows what the brain looks like. MR Spectroscopy goes a step further — it analyses the chemical composition of brain tissue.</p>
                <p>By measuring concentrations of specific metabolites within a region of interest, MR Spectroscopy can provide information that anatomy alone cannot. It helps distinguish between a high-grade tumour and a low-grade one, differentiate tumour recurrence from radiation-induced changes after treatment, identify metabolic disorders in children, and characterise lesions that appear ambiguous on standard MRI.</p>
                <p>In clinical practice, it is most commonly used alongside conventional MRI rather than as a standalone investigation — adding a biochemical layer of information to the structural picture.</p>

                <h2>CT Angiography and MR Angiography — Looking at the Vessels</h2>
                <p>When the question isn't about brain tissue but about blood vessels, angiography is the answer.</p>
                <p>CTA (CT Angiography) and MRA (MR Angiography) both visualise the arteries and veins supplying the brain. They're essential for detecting aneurysms — weak spots in vessel walls that can rupture catastrophically — as well as arteriovenous malformations, carotid artery disease, and vessel blockages causing stroke.</p>
                <p>CTA is faster and widely used in emergency settings. MRA avoids radiation entirely, making it preferable when time permits. In complex vascular cases, conventional digital subtraction angiography may still be required for the highest level of detail.</p>

                <h2>MR Venography — When the Veins Are the Problem</h2>
                <p>Arterial disease gets most of the attention in stroke medicine, but the venous system can be equally dangerous when things go wrong.</p>
                <p>MR Venography (MRV) specifically images the dural venous sinuses and cerebral veins — the drainage system of the brain. Its primary use is in the diagnosis of <strong>cerebral venous sinus thrombosis (CVST)</strong>, a condition where clot formation in the venous sinuses obstructs blood drainage from the brain, causing raised intracranial pressure, headache, seizures, and stroke-like deficits.</p>
                <p>CVST is more common in young women, particularly those on oral contraceptives, and is a diagnosis that can be missed on standard imaging. MRV makes it visible. Early diagnosis is critical — anticoagulation treatment, when started promptly, significantly improves outcomes in what can otherwise be a life-threatening condition.</p>

                <h2>Perfusion Imaging — Finding What Can Still Be Saved</h2>
                <p>In stroke care, perfusion imaging has changed everything.</p>
                <p>CT perfusion and MR perfusion measure blood flow through brain tissue in real time. They identify two critical zones: tissue that has already died — the core infarct — and tissue that is at risk but still alive — the penumbra.</p>
                <p>This distinction matters enormously. It tells the treating team whether a patient can still benefit from mechanical thrombectomy — sometimes hours after the stroke began. Without perfusion imaging, many of those patients would simply be turned away as presenting too late.</p>

                <h2>Functional MRI — Mapping What Must Be Protected</h2>
                <p>Before operating on a brain tumour near a critical region, surgeons need to know exactly where that region is — mapped to the individual patient, not just to an anatomical average.</p>
                <p>Functional MRI (fMRI) does this by detecting which areas of the brain activate during specific tasks — speaking, moving a hand, processing language. When performed pre-operatively, it gives the surgical team a personalised map of functions to protect.</p>
                <p>This is one of the most important tools in modern brain tumour surgery. It's what makes the difference between a procedure that removes the tumour and one that removes the tumour while preserving who the patient is.</p>

                <h2>Diffusion Tensor Imaging — Mapping the Pathways</h2>
                <p>Related to fMRI but distinct in its purpose, DTI (Diffusion Tensor Imaging) maps the white matter tracts — the long fibre pathways that connect different brain regions and carry signals throughout the nervous system.</p>
                <p>When a tumour sits near one of these pathways — the corticospinal tract that controls movement, for example, or the arcuate fasciculus involved in language — DTI shows exactly where it runs in three dimensions. Surgeons can then plan their approach to avoid it.</p>

                <h2>MR CSF Flow Studies — Understanding Fluid Dynamics</h2>
                <p>Cerebrospinal fluid (CSF) circulates continuously through the brain and spinal canal, and disruptions to this flow can cause significant neurological problems that are easily missed without the right investigation.</p>
                <p>MR CSF flow studies — using a technique called phase-contrast MRI — measure the movement of CSF through key points in the system, particularly at the aqueduct of Sylvius and the craniocervical junction. This is especially valuable in the evaluation of <strong>Normal Pressure Hydrocephalus (NPH)</strong>, a condition in which CSF accumulates and enlarges the ventricles without the dramatic pressure elevation seen in other forms of hydrocephalus.</p>
                <p>NPH presents with a classic triad — gait disturbance, urinary incontinence, and cognitive decline — that is frequently misattributed to ageing or dementia. MR CSF flow studies help confirm the diagnosis and, critically, identify patients who are likely to respond to CSF shunting, a surgical procedure that can dramatically improve or even reverse these symptoms when performed in the right candidate.</p>

                <h2>PET Scan — Measuring Brain Metabolism</h2>
                <p>Where MRI shows structure, PET (Positron Emission Tomography) shows function and metabolism.</p>
                <p>In oncology, PET scans can distinguish between active tumour tissue and scar tissue — a distinction that structural imaging alone often can't make reliably. In epilepsy, PET helps identify the seizure focus when MRI appears normal.</p>
                <p>In neurodegenerative disease, PET has become increasingly important. In <strong>dementia evaluation</strong>, it can detect characteristic patterns of metabolic change years before significant structural damage appears on MRI — and specific amyloid and tau PET tracers can now confirm Alzheimer's disease pathology in living patients with a level of certainty previously only possible at post-mortem.</p>
                <p>In <strong>Parkinson's disease</strong>, dopamine transporter PET imaging (commonly known as a <strong>DaTscan</strong>) evaluates the integrity of dopaminergic neurons in the basal ganglia. This is particularly valuable when the clinical diagnosis is uncertain — distinguishing true Parkinson's disease from essential tremor or drug-induced parkinsonism, and identifying atypical parkinsonian syndromes where the pattern of dopaminergic loss differs from classical Parkinson's.</p>
                <p>PET is most powerful when combined with MRI or CT, providing both metabolic and structural information in a single integrated study.</p>

                <h2>SPECT, TCD, and Other Specialised Modalities</h2>
                <p>Beyond the main tools, a range of more specialised imaging modalities serve specific clinical purposes.</p>
                <p><strong>SPECT</strong> (Single Photon Emission CT) evaluates cerebral blood flow and brain activity, used particularly in epilepsy localisation and functional brain assessment when other modalities are inconclusive.</p>
                <p><strong>Transcranial Doppler (TCD)</strong> uses ultrasound to monitor blood flow velocity through the brain's major arteries non-invasively. It's particularly valuable in monitoring patients after subarachnoid haemorrhage for vasospasm — a dangerous narrowing of vessels that can cause secondary strokes in the days following the initial bleed.</p>

                <h2>How the Right Scan Gets Chosen</h2>
                <p>There is no single best scan. There is only the most appropriate scan for the specific clinical situation.</p>
                <p>The decision follows the question:</p>
                <ul>
                    <li>Is this an emergency? <strong>CT scan first.</strong></li>
                    <li>Is this a complex soft tissue diagnosis — tumour, infection, MS? <strong>MRI.</strong></li>
                    <li>Is the tissue chemistry ambiguous? <strong>MR Spectroscopy.</strong></li>
                    <li>Are we looking at arteries? <strong>CTA or MRA.</strong></li>
                    <li>Are we looking at veins and sinuses? <strong>MR Venography.</strong></li>
                    <li>Is this stroke with a delayed presentation? <strong>Perfusion imaging.</strong></li>
                    <li>Is CSF flow or hydrocephalus involved? <strong>MR CSF flow studies.</strong></li>
                    <li>Are we planning surgery near a critical area? <strong>fMRI and DTI.</strong></li>
                    <li>Is this a metabolic, neurodegenerative, or functional question? <strong>PET or SPECT.</strong></li>
                </ul>
                <p>Getting this decision right requires clinical judgment — not just access to the machines.</p>

                <h2>Safety Is Never an Afterthought</h2>
                <p>Every imaging modality carries considerations that must be weighed.</p>
                <p>CT scans involve radiation exposure. In most acute situations, the clinical benefit far outweighs the risk — but this is always assessed individually, particularly in younger patients and in pregnancy.</p>
                <p>Contrast agents used in both CT and MRI can affect kidney function. Patients with impaired renal function require careful assessment before contrast is administered.</p>
                <p>MRI is contraindicated in patients with certain metallic implants — some pacemakers, cochlear implants, and surgical clips. A thorough screening process takes place before every MRI scan.</p>

                <h2>Where Brain Imaging Is Heading</h2>
                <p>The field is evolving rapidly. Advanced neuroimaging techniques currently in active development and clinical deployment include AI-assisted image analysis — algorithms that can detect stroke, haemorrhage, and tumour characteristics faster than human reading alone. Real-time intraoperative MRI allows surgeons to image the brain during a procedure, confirming complete tumour removal before the patient leaves the operating theatre. Hybrid PET-MRI systems combine metabolic and structural data in a single scan, and precision network mapping is beginning to transform how epilepsy surgery and functional neurosurgery are planned.</p>
                <p>These are not distant prospects. In leading neurosurgical centres, they are already changing outcomes.</p>

                <h2>The Bottom Line</h2>
                <p>Every scan has a purpose. Every scan has a limitation. And choosing correctly — based on the clinical question, the urgency, and the patient — is as important as having access to the technology itself.</p>
                <p>If you or someone you know is experiencing neurological symptoms, the most important step is early evaluation. Imaging findings are only as useful as the clinical expertise interpreting them and acting on them.</p>
                <p>For expert neurological evaluation and advanced imaging-guided care, consult <strong>Dr. Rajesh Reddy Sannareddy</strong>, Senior Consultant in Brain, Spine & Endovascular Neurosurgery.</p>

                <h2>Frequently Asked Questions</h2>
                <div class="faq-accordion">
                    <div class="faq-item active">
                        <div class="faq-question"><span class="faq-icon"></span>Which is better for the brain — CT or MRI?</div>
                        <div class="faq-answer"><p>Neither is universally better. CT is faster and ideal for emergencies like stroke and bleeding. MRI provides more detail for soft tissue conditions like tumours, MS, and infections. The right choice depends entirely on the clinical situation.</p></div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question"><span class="faq-icon"></span>What is MR Spectroscopy used for?</div>
                        <div class="faq-answer"><p>MR Spectroscopy analyses the chemical composition of brain tissue, helping differentiate tumour types, distinguish recurrence from radiation changes, and identify metabolic disorders.</p></div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question"><span class="faq-icon"></span>What is Normal Pressure Hydrocephalus and how is it diagnosed?</div>
                        <div class="faq-answer"><p>NPH is a condition where CSF accumulates in the ventricles causing gait problems, incontinence, and cognitive decline. MR CSF flow studies help confirm the diagnosis and identify patients who may benefit from shunting.</p></div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question"><span class="faq-icon"></span>What is cerebral venous sinus thrombosis and how is it detected?</div>
                        <div class="faq-answer"><p>CVST is a blood clot in the brain's venous drainage system causing raised pressure, headache, and seizures. It is detected using MR Venography.</p></div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question"><span class="faq-icon"></span>Is brain imaging safe?</div>
                        <div class="faq-answer"><p>Generally yes. CT involves radiation but benefits usually outweigh risks in acute settings. MRI uses no radiation but is contraindicated with certain metal implants. Contrast agents require kidney function assessment.</p></div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question"><span class="faq-icon"></span>What is a DaTscan and when is it used?</div>
                        <div class="faq-answer"><p>A DaTscan is a dopamine transporter PET imaging study used to evaluate Parkinson's disease when clinical diagnosis is uncertain — distinguishing it from essential tremor or drug-induced parkinsonism.</p></div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question"><span class="faq-icon"></span>Can brain imaging detect all conditions?</div>
                        <div class="faq-answer"><p>No. Some conditions may not be visible on standard imaging. Clinical judgment, specialised sequences, and sometimes repeat imaging are needed to reach a diagnosis.</p></div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question"><span class="faq-icon"></span>What is perfusion imaging used for?</div>
                        <div class="faq-answer"><p>Perfusion imaging identifies salvageable brain tissue in stroke patients, determining who can still benefit from intervention even hours after symptom onset.</p></div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question"><span class="faq-icon"></span>Is fMRI the same as a regular MRI?</div>
                        <div class="faq-answer"><p>No. fMRI detects brain activity by measuring blood flow changes during tasks. It is used for pre-surgical mapping of speech and motor areas, not routine diagnosis.</p></div>
                    </div>
                </div>
            </main>

            <aside style="position: sticky; top: 80px; align-self: start;">
                <div class="sidebar-widget sidebar-emergency">
                    <h4>HELPLINE</h4>
                    <p class="emergency-desc">For urgent neurovascular or stroke consultations, contact our help desk immediately:</p>
                    <a href="tel:09000224265" class="btn-sidebar-call"><span>📞 Call Help Desk</span></a>
                </div>
                <div class="sidebar-author-card">
                    <div class="sidebar-author-avatar"></div>
                    <h5 class="sidebar-author-name">Dr. Rajesh Reddy</h5>
                    <p class="sidebar-author-title">Senior Consultant Neurosurgeon</p>
                    <div class="sidebar-author-stats">
                        <div class="sidebar-stat-box"><span class="sidebar-stat-value">15+</span><span class="sidebar-stat-label">YEARS</span></div>
                        <div class="sidebar-stat-box"><span class="sidebar-stat-value">5K+</span><span class="sidebar-stat-label">OPS</span></div>
                        <div class="sidebar-stat-box"><span class="sidebar-stat-value">20+</span><span class="sidebar-stat-label">PAPERS</span></div>
                    </div>
                    <a href="tel:09000224265" class="btn-sidebar-helpline">📞 Call Helpline</a>
                </div>
            </aside>
            
        </div>
    </div>

    <?php include __DIR__ . '/../components/footer.php'; ?>
    <script src="../js/main.js"></script>
</body>
</html>
