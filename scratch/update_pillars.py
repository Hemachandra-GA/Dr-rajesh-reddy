import re

pillar_snippet = '''
          <!-- Medical Review & Author Byline -->
          <div class="medical-review-badge" style="background: #f8fafc; border: 1px solid #e2e8f0; border-left: 4px solid #0066cc; border-radius: 8px; padding: 16px 20px; margin: 36px 0 24px; display: flex; align-items: center; gap: 16px;">
            <div style="flex-shrink: 0; width: 48px; height: 48px; border-radius: 50%; background: #e0f2fe; display: flex; align-items: center; justify-content: center; color: #0066cc;">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                <path d="m9 12 2 2 4-4"></path>
              </svg>
            </div>
            <div style="font-size: 0.9rem; line-height: 1.5; color: #334155;">
              <div style="font-weight: 600; color: #0f172a;">Written and medically reviewed by Dr. Rajesh Reddy Sannareddy</div>
              <div style="color: #64748b; font-size: 0.85rem;">Brain, Spine and Endovascular specialist</div>
              <div style="color: #94a3b8; font-size: 0.8rem; margin-top: 4px;">Published on October 7, 2026</div>
            </div>
          </div>
'''

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

for p in pillar_pages:
    with open(p, 'r', encoding='utf-8') as f:
        content = f.read()

    # Find the closing tag of pillar-content or right-sidebar
    # Usually `</div> <!-- /pillar-content` or just before `<aside class="pillar-right-sidebar">`
    # Let's search for `<aside class="pillar-right-sidebar">` or similar
    if 'medical-review-badge' in content:
        print(f"Already updated: {p}")
        continue

    pos = content.find('<aside class="pillar-right-sidebar">')
    if pos != -1:
        # insert before the closing </div> of pillar-content right before this aside
        # find the last </div> before this pos
        div_pos = content.rfind('</div>', 0, pos)
        if div_pos != -1:
            new_content = content[:div_pos] + pillar_snippet + content[div_pos:]
            with open(p, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"Updated: {p}")
        else:
            print(f"Couldn't find div before aside in {p}")
    else:
        print(f"Couldn't find aside in {p}")
