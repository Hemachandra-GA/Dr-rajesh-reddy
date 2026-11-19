import glob
import re

files = glob.glob('patient-education/*.php')
print(f"Total blog files to revert header: {len(files)}")

# Pattern matching our previously injected header
meta_pattern = re.compile(
    r'<div class="article-meta"[^>]*>[\s\S]*?<div class="author-avatar"[^>]*></div>[\s\S]*?Published on ([^<]+)</div>\s*</div>\s*</div>',
    re.IGNORECASE
)

updated = 0
for f in files:
    with open(f, 'r', encoding='utf-8') as fp:
        content = fp.read()

    # Extract date
    date_match = re.search(r'Published on ([^<]+)', content)
    if not date_match:
        print(f"No date match in {f}")
        continue
    pub_date = date_match.group(1).replace('</div>', '').strip()

    # Original clean header as shown in user's reference image:
    # <div class="article-meta">
    #     <div class="author-avatar" style="background: url('../images/Portrait Place Holder.webp') center/cover;"></div>
    #     <span>By <strong>Dr. Rajesh Reddy Sannareddy</strong></span>
    #     <span>•</span>
    #     <span>Published on <date></span>
    # </div>
    original_meta = f'''<div class="article-meta">
                <div class="author-avatar" style="background: url('../images/Portrait Place Holder.webp') center/cover;"></div>
                <span>By <strong>Dr. Rajesh Reddy Sannareddy</strong></span>
                <span>•</span>
                <span>Published on {pub_date}</span>
            </div>'''

    m = meta_pattern.search(content)
    if m:
        content = content[:m.start()] + original_meta + content[m.end():]
        updated += 1
    else:
        # Fallback regex if slight variance in whitespace
        sub_pattern = re.compile(r'<div class="article-meta" style="display: flex; align-items: center;[\s\S]*?Published on [^<]+</div>\s*</div>\s*</div>')
        m2 = sub_pattern.search(content)
        if m2:
            content = content[:m2.start()] + original_meta + content[m2.end():]
            updated += 1
        else:
            print(f"Pattern didn't match in {f}")

    with open(f, 'w', encoding='utf-8') as fp:
        fp.write(content)

print(f"Reverted header in {updated}/{len(files)} files")
