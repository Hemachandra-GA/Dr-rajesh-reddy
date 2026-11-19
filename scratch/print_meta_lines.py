with open('patient-education/ai-in-neurosurgery.php', 'r', encoding='utf-8') as f:
    c = f.read()

start = c.find('<div class="article-meta">')
end = c.find('</div>', c.find('Published on', start)) + 6
meta_block = c[start:end]

lines = meta_block.splitlines()
for l in lines:
    print(repr(l))
