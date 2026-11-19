import glob, re

pillar_pages = [
    'brain-tumor-removal-surgery.php', 'brain-tumor-types.php', 'brain-tumor-symptoms.php',
    'glioma-surgery-hyderabad.php', 'meningioma-treatment.php', 'pituitary-tumor-surgery.php',
    'awake-craniotomy.php', 'brain-tumor-surgery-recovery.php', 'minimally-invasive-brain-tumor-surgery.php',
    'brain-aneurysm-treatment.php', 'brain-aneurysm-symptoms.php', 'ruptured-unruptured-brain-aneurysm.php',
    'aneurysm-coiling-vs-clipping.php', 'endovascular-coiling-hyderabad.php', 'flow-diversion-brain-aneurysm.php',
    'subarachnoid-hemorrhage-treatment.php', 'brain-aneurysm-surgery-recovery.php', 'avm-treatment-hyderabad.php',
    'spine-fracture-treatment.php', 'cervical-spine-fracture-treatment.php'
]

print(f"Total pillar/cluster pages: {len(pillar_pages)}")

updated = 0
for p in pillar_pages:
    with open(p, 'r', encoding='utf-8') as f:
        c = f.read()

    # Check if already added
    if 'pillar-meta' in c:
        print(f"Already has pillar-meta: {p}")
        continue

    # Extract published date from medical review badge if present, default to October 7, 2026
    date_match = re.search(r'Published on ([^<]+)', c)
    pub_date = date_match.group(1).strip() if date_match else "October 7, 2026"

    # We want to insert the byline right below the <h1>...</h1> inside the hero
    # Pattern to find the <h1> block: <h1[^>]*>[\s\S]*?</h1>
    # Usually followed by </div> or similar
    h1_match = re.search(r'(<h1[^>]*>[\s\S]*?</h1>)', c)
    if not h1_match:
        print(f"H1 NOT FOUND: {p}")
        continue

    h1_block = h1_match.group(1)
    
    meta_html = f'''{h1_block}
          <div class="pillar-meta" style="display: flex; align-items: center; gap: 8px; flex-wrap: wrap; font-size: 0.9rem; color: #64748b; margin-top: 10px;">
            <span>by <strong style="color: #1e293b; font-weight: 600;">Dr. Rajesh Reddy Sannareddy</strong></span>
            <span style="color: #cbd5e1;">|</span>
            <span>{pub_date}</span>
            <span style="color: #cbd5e1;">|</span>
            <span style="color: #0066cc; font-weight: 500;">Brain, Spine and Endovascular specialist</span>
          </div>'''

    c = c[:h1_match.start()] + meta_html + c[h1_match.end():]
    with open(p, 'w', encoding='utf-8') as f:
        f.write(c)
    updated += 1

print(f"Successfully updated {updated}/{len(pillar_pages)} pillar and cluster pages.")
