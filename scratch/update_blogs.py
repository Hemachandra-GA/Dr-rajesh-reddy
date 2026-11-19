import glob
import re

files = glob.glob('patient-education/*.php')
print(f"Total blog files to update: {len(files)}")

meta_pattern = re.compile(
    r'<div class="article-meta">[\s\S]*?<div class="author-avatar"[^>]*></div>[\s\S]*?<span>By <strong>Dr\. Rajesh Reddy Sannareddy</strong></span>[\s\S]*?<span>•</span>[\s\S]*?<span>Published on ([^<]+)</span>[\s\S]*?</div>',
    re.IGNORECASE
)

updated_meta = 0
updated_bottom = 0

for f in files:
    with open(f, 'r', encoding='utf-8') as fp:
        content = fp.read()

    # Extract date
    date_match = re.search(r'<span>Published on ([^<]+)</span>', content)
    if not date_match:
        print(f"No date match in {f}")
        continue
    pub_date = date_match.group(1).strip()

    # 1. Update article-meta header
    new_meta = f'''<div class="article-meta" style="display: flex; align-items: center; gap: 14px; font-size: 13px; color: var(--color-ink-muted-48); border-bottom: 1px solid var(--color-divider-soft); padding-bottom: 20px;">
                <div class="author-avatar" style="width: 44px; height: 44px; border-radius: 50%; background: url('../images/Portrait Place Holder.webp') center/cover; flex-shrink: 0;"></div>
                <div style="line-height: 1.4;">
                    <div>Written and medically reviewed by <strong>Dr. Rajesh Reddy Sannareddy</strong></div>
                    <div style="color: var(--color-ink-muted-80); font-size: 12px;">Brain, Spine and Endovascular specialist</div>
                    <div style="color: var(--color-ink-muted-48); font-size: 11px; margin-top: 2px;">Published on {pub_date}</div>
                </div>
            </div>'''

    m = meta_pattern.search(content)
    if m:
        content = content[:m.start()] + new_meta + content[m.end():]
        updated_meta += 1

    # 2. Add bottom review badge at the end of </main> if not already there
    if 'medical-review-badge' not in content:
        bottom_badge = f'''
                <!-- Medical Review & Author Byline -->
                <div class="medical-review-badge" style="background: #f8fafc; border: 1px solid #e2e8f0; border-left: 4px solid #0066cc; border-radius: 8px; padding: 16px 20px; margin: 36px 0 24px; display: flex; align-items: center; gap: 16px;">
                    <div style="flex-shrink: 0; width: 44px; height: 44px; border-radius: 50%; background: #e0f2fe; display: flex; align-items: center; justify-content: center; color: #0066cc;">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="m9 12 2 2 4-4"></path>
                        </svg>
                    </div>
                    <div style="font-size: 0.9rem; line-height: 1.5; color: #334155;">
                        <div style="font-weight: 600; color: #0f172a;">Written and medically reviewed by Dr. Rajesh Reddy Sannareddy</div>
                        <div style="color: #64748b; font-size: 0.85rem;">Brain, Spine and Endovascular specialist</div>
                        <div style="color: #94a3b8; font-size: 0.8rem; margin-top: 4px;">Published on {pub_date}</div>
                    </div>
                </div>
            </main>'''

        if '</main>' in content:
            content = content.replace('</main>', bottom_badge, 1)
            updated_bottom += 1

    with open(f, 'w', encoding='utf-8') as fp:
        fp.write(content)

print(f"Updated header meta: {updated_meta}/{len(files)}")
print(f"Updated bottom badge: {updated_bottom}/{len(files)}")
