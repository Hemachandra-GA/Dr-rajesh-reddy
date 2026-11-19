with open('patient-education/ai-in-neurosurgery.php', 'rb') as f:
    raw = f.read()

pos = raw.find(b'article-meta')
print(raw[pos:pos+300])
