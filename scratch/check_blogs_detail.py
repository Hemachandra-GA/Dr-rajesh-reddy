import glob
import re

files = glob.glob('patient-education/*.php')
pattern = re.compile(r'<div class="article-meta">([\s\S]*?)</div>')

for f in files[:5]:
    with open(f, 'r', encoding='utf-8') as fp:
        txt = fp.read()
    m = pattern.search(txt)
    print(f"--- {f} ---")
    print(m.group(0))
