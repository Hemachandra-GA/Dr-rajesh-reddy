with open('patient-education/ai-in-neurosurgery.php', 'r', encoding='utf-8') as f:
    lines = f.readlines()

for i, l in enumerate(lines[100:115]):
    print(f'{i+101}: {repr(l)}')
