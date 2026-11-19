with open('patient-education/ai-in-neurosurgery.php', 'r', encoding='utf-8') as f:
    c = f.read()

import re
m = re.search(r'<div class=["\']article-meta["\']>[\s\S]*?</div>', c)
print(repr(m.group(0)))
