import re

with open('scratch/psi_latest.html', 'r', encoding='utf-8') as f:
    text = f.read()

# Look for audits titles / displayValues in the screenshot:
# 'Forced reflow', 'Font display', 'Improve image delivery'
for title in ['Forced reflow', 'Font display', 'Improve image delivery', 'Reduce unused CSS']:
    pos = text.find(title)
    if pos != -1:
        print(f"=== {title} ===")
        print(text[pos:pos+1000].replace('\\"', '"').replace('\\n', '\n'))
