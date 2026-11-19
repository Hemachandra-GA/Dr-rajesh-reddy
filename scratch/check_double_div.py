import glob, re

files = glob.glob('patient-education/*.php')
print(f'Total blogs: {len(files)}')

pattern = re.compile(r'<div class="article-meta">[\s\S]*?</div>\s*</div>', re.IGNORECASE)
found = 0
for f in files:
    with open(f, 'r', encoding='utf-8') as fp:
        c = fp.read()
    m = pattern.search(c)
    if m:
        found += 1
    else:
        print('Not found with double div:', f)
print(f'Found: {found}/{len(files)}')
