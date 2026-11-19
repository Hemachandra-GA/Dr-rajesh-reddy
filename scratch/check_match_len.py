with open('patient-education/ai-in-neurosurgery.php', 'r', encoding='utf-8') as f:
    c = f.read()

import re
m = re.search(r'<div class="article-meta">[\s\S]*?</div>', c)
print('MATCH LENGTH:', len(m.group(0)))
print('FIRST 100:', repr(m.group(0)[:100]))
print('LAST 100:', repr(m.group(0)[-100:]))
