import glob
import re

files = glob.glob('patient-education/*.php')
dates = {}
for f in files:
    with open(f, 'r', encoding='utf-8') as fp:
        txt = fp.read()
    m = re.search(r'<span>Published on ([^<]+)</span>', txt)
    if m:
        dates[f] = m.group(1).strip()
    else:
        dates[f] = "MISSING"

missing = [f for f, d in dates.items() if d == "MISSING"]
print(f"Total: {len(files)}, Dates found: {len(dates) - len(missing)}, Missing: {len(missing)}")
if missing:
    print("Missing in:", missing)
else:
    print("Sample dates:", list(dates.items())[:3])
