import glob
import re

# 1. Gather all pillar and cluster pages
pillar_pages = [
    'brain-tumor-removal-surgery.php',
    'brain-tumor-types.php',
    'brain-tumor-symptoms.php',
    'glioma-surgery-hyderabad.php',
    'meningioma-treatment.php',
    'pituitary-tumor-surgery.php',
    'awake-craniotomy.php',
    'brain-tumor-surgery-recovery.php',
    'minimally-invasive-brain-tumor-surgery.php',
    'brain-aneurysm-treatment.php',
    'brain-aneurysm-symptoms.php',
    'ruptured-unruptured-brain-aneurysm.php',
    'aneurysm-coiling-vs-clipping.php',
    'endovascular-coiling-hyderabad.php',
    'flow-diversion-brain-aneurysm.php',
    'subarachnoid-hemorrhage-treatment.php',
    'brain-aneurysm-surgery-recovery.php',
    'avm-treatment-hyderabad.php',
    'spine-fracture-treatment.php',
    'cervical-spine-fracture-treatment.php'
]

print(f"Pillar/cluster count: {len(pillar_pages)}")

for p in pillar_pages:
    with open(p, 'r', encoding='utf-8') as f:
        content = f.read()
    if 'class="pillar-content"' in content:
        print(f"OK (pillar-content): {p}")
    else:
        print(f"MISSING pillar-content: {p}")
