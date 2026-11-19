import glob, re

blogs = glob.glob('patient-education/*.php')
print(f"Total blogs: {len(blogs)}")

count = 0
for b in blogs:
    with open(b, 'r', encoding='utf-8') as f:
        c = f.read()

    # Find the meta block
    start = c.find('<div class="article-meta">')
    if start == -1:
        print(f"Start not found in {b}")
        continue
    pub_idx = c.find('Published on', start)
    if pub_idx == -1:
        print(f"Published on not found in {b}")
        continue
    end = c.find('</div>', pub_idx) + 6
    old_meta = c[start:end]

    # Extract date
    date_match = re.search(r'Published on ([^<]+)', old_meta)
    if not date_match:
        print(f"Date match failed in {b}")
        continue
    pub_date = date_match.group(1).strip()

    # New meta block formatted like the reference image:
    # "by Dr. Bhanu Prakash M | Oct 13, 2026 | Ophthalmology |"
    # Here:
    # By Dr. Rajesh Reddy Sannareddy | Published on [Date] | Brain, Spine and Endovascular specialist |
    new_meta = f'''<div class="article-meta" style="display: flex; align-items: center; gap: 8px; flex-wrap: wrap; font-size: 0.88rem; color: #64748b; margin-top: 12px; margin-bottom: 20px;">
                <div class="author-avatar" style="width: 28px; height: 28px; border-radius: 50%; background: url('../images/Portrait Place Holder.webp') center/cover; flex-shrink: 0;"></div>
                <span>by <strong style="color: #1e293b; font-weight: 600;">Dr. Rajesh Reddy Sannareddy</strong></span>
                <span style="color: #cbd5e1;">|</span>
                <span>{pub_date}</span>
                <span style="color: #cbd5e1;">|</span>
                <span style="color: #0066cc; font-weight: 500;">Brain, Spine and Endovascular specialist</span>
            </div>'''

    new_c = c[:start] + new_meta + c[end:]
    with open(b, 'w', encoding='utf-8') as f:
        f.write(new_c)
    count += 1

print(f"Successfully updated {count}/{len(blogs)} blogs.")
