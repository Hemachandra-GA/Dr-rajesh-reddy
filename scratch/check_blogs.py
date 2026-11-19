import glob
import re

files = glob.glob('patient-education/*.php')
print(f"Total files: {len(files)}")
matched = []
unmatched = []
pattern = re.compile(r'<div class="article-meta">[\s\S]*?</div>')

for f in files:
    with open(f, 'r', encoding='utf-8') as fp:
        txt = fp.read()
    m = pattern.search(txt)
    if m:
        matched.append((f, m.group(0)))
    else:
        unmatched.append(f)

print(f"Matched: {len(matched)}")
print(f"Unmatched: {len(unmatched)}")
if matched:
    print("Sample match:")
    print(matched[0][1])
