import glob, re

# 1. Fix blogs: remove the extra </div> right before </main>
blogs = glob.glob('patient-education/*.php')
print(f"Fixing {len(blogs)} blogs...")

blog_fixed = 0
for b in blogs:
    with open(b, 'r', encoding='utf-8') as f:
        c = f.read()

    # Pattern: \s*</div>\s*</main>
    # We want just </main>
    # Let's verify with regex:
    pattern = re.compile(r'(\n|\r\n)\s*</div>\s*</main>', re.IGNORECASE)
    m = pattern.search(c)
    if m:
        new_c = c[:m.start()] + '\n            </main>' + c[m.end():]
        with open(b, 'w', encoding='utf-8') as f:
            f.write(new_c)
        blog_fixed += 1
    else:
        print(f"Pattern didn't match in blog: {b}")

print(f"Fixed {blog_fixed}/{len(blogs)} blogs.")

# 2. Fix pillar & cluster pages: remove the extra </div> right before </div>\s*<aside class="pillar-right-sidebar">
# or </div> <!-- /pillar-content -->
pillar_pages = [
    'brain-tumor-removal-surgery.php', 'brain-tumor-types.php', 'brain-tumor-symptoms.php',
    'glioma-surgery-hyderabad.php', 'meningioma-treatment.php', 'pituitary-tumor-surgery.php',
    'awake-craniotomy.php', 'brain-tumor-surgery-recovery.php', 'minimally-invasive-brain-tumor-surgery.php',
    'brain-aneurysm-treatment.php', 'brain-aneurysm-symptoms.php', 'ruptured-unruptured-brain-aneurysm.php',
    'aneurysm-coiling-vs-clipping.php', 'endovascular-coiling-hyderabad.php', 'flow-diversion-brain-aneurysm.php',
    'subarachnoid-hemorrhage-treatment.php', 'brain-aneurysm-surgery-recovery.php', 'avm-treatment-hyderabad.php',
    'spine-fracture-treatment.php', 'cervical-spine-fracture-treatment.php'
]

pillar_fixed = 0
for p in pillar_pages:
    with open(p, 'r', encoding='utf-8') as f:
        c = f.read()

    # Search for `</div>\s*</div>\s*<!-- Right (Sticky )?Sidebar -->\s*<aside class="pillar-right-sidebar">`
    # or `</div>\s*</div> <!-- /pillar-content -->`
    pattern = re.compile(
        r'(\n|\r\n)\s*</div>\s*</div>(\s*(?:<!--\s*/pillar-content\s*-->)?\s*(?:<!--\s*Right\s*(?:Sticky\s*|Guidance\s*)?Sidebar\s*-->)?\s*<aside class="pillar-right-sidebar">)',
        re.IGNORECASE
    )
    m = pattern.search(c)
    if m:
        # replace double div with single closing div for pillar-content
        new_c = c[:m.start()] + '\n          </div>' + m.group(2) + c[m.end():]
        with open(p, 'w', encoding='utf-8') as f:
            f.write(new_c)
        pillar_fixed += 1
    else:
        # Fallback check
        pos = c.find('class="pillar-right-sidebar"')
        chunk = c[max(0, pos-200):pos+50]
        print(f"Fallback pattern for {p}: {repr(chunk)}")

print(f"Fixed {pillar_fixed}/{len(pillar_pages)} pillar and cluster pages.")
