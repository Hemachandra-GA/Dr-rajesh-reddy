with open('patient-education/ai-in-neurosurgery.php', 'r', encoding='utf-8') as f:
    c = f.read()

start = c.find('<div class="article-meta">')
end = c.find('</div>', start)
end = c.find('</div>', end + 1)
print(repr(c[start:end+6]))
