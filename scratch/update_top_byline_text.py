import glob

# 1. Update all blogs
blogs = glob.glob('patient-education/*.php')
print(f"Updating {len(blogs)} blogs...")

blog_count = 0
for b in blogs:
    with open(b, 'r', encoding='utf-8') as f:
        c = f.read()

    # Replace 'by <strong...' with 'Written and medically reviewed by <strong...'
    old_str = '<span>by <strong style="color: #1e293b; font-weight: 600;">Dr. Rajesh Reddy Sannareddy</strong></span>'
    new_str = '<span>Written and medically reviewed by <strong style="color: #1e293b; font-weight: 600;">Dr. Rajesh Reddy Sannareddy</strong></span>'
    
    if old_str in c:
        c = c.replace(old_str, new_str)
        with open(b, 'w', encoding='utf-8') as f:
            f.write(c)
        blog_count += 1
    else:
        print(f"Old str not found in blog: {b}")

print(f"Updated {blog_count}/{len(blogs)} blogs.")

# 2. Update all pillars and clusters
pillar_pages = [
    'brain-tumor-removal-surgery.php', 'brain-tumor-types.php', 'brain-tumor-symptoms.php',
    'glioma-surgery-hyderabad.php', 'meningioma-treatment.php', 'pituitary-tumor-surgery.php',
    'awake-craniotomy.php', 'brain-tumor-surgery-recovery.php', 'minimally-invasive-brain-tumor-surgery.php',
    'brain-aneurysm-treatment.php', 'brain-aneurysm-symptoms.php', 'ruptured-unruptured-brain-aneurysm.php',
    'aneurysm-coiling-vs-clipping.php', 'endovascular-coiling-hyderabad.php', 'flow-diversion-brain-aneurysm.php',
    'subarachnoid-hemorrhage-treatment.php', 'brain-aneurysm-surgery-recovery.php', 'avm-treatment-hyderabad.php',
    'spine-fracture-treatment.php', 'cervical-spine-fracture-treatment.php'
]

pillar_count = 0
for p in pillar_pages:
    with open(p, 'r', encoding='utf-8') as f:
        c = f.read()

    old_str = '<span>by <strong style="color: #1e293b; font-weight: 600;">Dr. Rajesh Reddy Sannareddy</strong></span>'
    new_str = '<span>Written and medically reviewed by <strong style="color: #1e293b; font-weight: 600;">Dr. Rajesh Reddy Sannareddy</strong></span>'

    if old_str in c:
        c = c.replace(old_str, new_str)
        with open(p, 'w', encoding='utf-8') as f:
            f.write(c)
        pillar_count += 1
    else:
        print(f"Old str not found in pillar: {p}")

print(f"Updated {pillar_count}/{len(pillar_pages)} pillar and cluster pages.")
