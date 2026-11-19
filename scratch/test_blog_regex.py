import glob, re

# 1. Update blogs
blogs = glob.glob('patient-education/*.php')
print(f"Processing {len(blogs)} blogs...")

blog_updated = 0
for b in blogs:
    with open(b, 'r', encoding='utf-8') as f:
        c = f.read()

    # Find the author line inside article-meta
    # Pattern: <span>By <strong>Dr. Rajesh Reddy Sannareddy</strong></span>
    # Or similar
    old_meta_pattern = re.compile(
        r'(<div class=["\']article-meta["\'][^>]*>\s*'
        r'<div class=["\']author-avatar["\'][^>]*></div>\s*'
        r'<span>By <strong>Dr\. Rajesh Reddy Sannareddy</strong></span>)(\s*<span>[•·]</span>\s*'
        r'<span>Published on [^<]+</span>\s*</div>)',
        re.IGNORECASE
    )

    # Let's inspect if this matches
    m = old_meta_pattern.search(c)
    if m:
        new_replacement = m.group(1) + ' | <span>Brain, Spine and Endovascular specialist</span>' + m.group(2).replace('<span>•</span>', '|').replace('<span>·</span>', '|')
        # Or even cleaner:
        # By Dr. Rajesh Reddy Sannareddy | Published on <Date> | Brain, Spine and Endovascular specialist
        pass
print("Done test.")
