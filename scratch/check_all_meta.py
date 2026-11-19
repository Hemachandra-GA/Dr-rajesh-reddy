import glob, re

files = glob.glob('patient-education/*.php')
print(f'Total blogs: {len(files)}')

for f in files:
    with open(f, 'r', encoding='utf-8') as fp:
        c = fp.read()
    m = re.search(r'<div class=["\']article-meta["\']>[\s\S]*?</div>', c)
    if not m:
        print('NO META:', f)

print('All checked.')
