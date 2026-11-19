import glob, re

files = glob.glob('patient-education/*.php')
samples = set()
for f in files:
    with open(f, 'r', encoding='utf-8') as fp:
        c = fp.read()
    m = re.search(r'<div class=["\']article-meta["\']>[\s\S]*?</div>', c)
    if m:
        # replace date
        normalized = re.sub(r'Published on [^<]+', 'Published on DATE', m.group(0))
        samples.add(normalized.strip())

for s in samples:
    print('--- SAMPLE ---')
    print(s)
