import re

with open('scratch/psi_latest.html', 'r', encoding='utf-8') as f:
    text = f.read()

# Look for server-response-time
matches = re.findall(r'server-response-time.*?(?:ms|s)', text, re.IGNORECASE)
print("Server response matches:", matches[:5])

# Search for any audits with wastedMs or numericValue
for m in re.finditer(r'\"id\":\s*\"([^\"]+)\"[^}]+?\"numericValue\":\s*([0-9\.]+)[^}]+?\"displayValue\":\s*\"([^\"]+)\"', text):
    aid, num, disp = m.group(1), m.group(2), m.group(3)
    if aid in ['first-contentful-paint', 'largest-contentful-paint', 'server-response-time', 'render-blocking-resources', 'speed-index', 'interactive']:
        print(f"Audit {aid}: {disp} (numeric: {num})")
