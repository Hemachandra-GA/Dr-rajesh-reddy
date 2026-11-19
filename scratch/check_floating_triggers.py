pillar_pages = [
    'brain-tumor-removal-surgery.php', 'brain-tumor-types.php', 'brain-tumor-symptoms.php',
    'glioma-surgery-hyderabad.php', 'meningioma-treatment.php', 'pituitary-tumor-surgery.php',
    'awake-craniotomy.php', 'brain-tumor-surgery-recovery.php', 'minimally-invasive-brain-tumor-surgery.php',
    'brain-aneurysm-treatment.php', 'brain-aneurysm-symptoms.php', 'ruptured-unruptured-brain-aneurysm.php',
    'aneurysm-coiling-vs-clipping.php', 'endovascular-coiling-hyderabad.php', 'flow-diversion-brain-aneurysm.php',
    'subarachnoid-hemorrhage-treatment.php', 'brain-aneurysm-surgery-recovery.php', 'avm-treatment-hyderabad.php',
    'spine-fracture-treatment.php', 'cervical-spine-fracture-treatment.php'
]

missing = []
for p in pillar_pages:
    with open(p, 'r', encoding='utf-8') as f:
        c = f.read()
    if 'mobile-float-triggers' not in c:
        missing.append(p)

print(f"Missing mobile-float-triggers: {len(missing)}")
for m in missing:
    print(" ", m)
