pillar_pages = [
    'brain-tumor-removal-surgery.php', 'brain-tumor-types.php', 'brain-tumor-symptoms.php',
    'glioma-surgery-hyderabad.php', 'meningioma-treatment.php', 'pituitary-tumor-surgery.php',
    'awake-craniotomy.php', 'brain-tumor-surgery-recovery.php', 'minimally-invasive-brain-tumor-surgery.php',
    'brain-aneurysm-treatment.php', 'brain-aneurysm-symptoms.php', 'ruptured-unruptured-brain-aneurysm.php',
    'aneurysm-coiling-vs-clipping.php', 'endovascular-coiling-hyderabad.php', 'flow-diversion-brain-aneurysm.php',
    'subarachnoid-hemorrhage-treatment.php', 'brain-aneurysm-surgery-recovery.php', 'avm-treatment-hyderabad.php',
    'spine-fracture-treatment.php', 'cervical-spine-fracture-treatment.php'
]

found = 0
for p in pillar_pages:
    with open(p, 'r', encoding='utf-8') as f:
        c = f.read()
    # Check closing tags around pillar-right-sidebar
    pos = c.find('pillar-right-sidebar')
    chunk = c[max(0, pos-150):pos+50]
    if '</div>\n</div>' in chunk or '</div>\r\n</div>' in chunk:
        print(f"Check pillar: {p}")
        found += 1

print(f"Pillars with double div before sidebar: {found}")
