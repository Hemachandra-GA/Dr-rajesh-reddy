with open('patient-education/ai-in-neurosurgery.php', 'r', encoding='utf-8') as f:
    c = f.read()

import re
pattern = re.compile(r'<div class="article-meta">[\s\S]*?</div>\s*</div>', re.IGNORECASE)
m = pattern.search(c)
print(m.group(0))
