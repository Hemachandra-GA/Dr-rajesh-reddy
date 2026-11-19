with open('scratch/psi_latest.html', 'r', encoding='utf-8') as f:
    text = f.read()

pos = text.find('Improve image delivery')
if pos != -1:
    chunk = text[pos:pos+2000].replace('\\"', '"')
    print(chunk)
