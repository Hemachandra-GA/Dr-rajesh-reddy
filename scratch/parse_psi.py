import re

with open('scratch/psi.html', 'r', encoding='utf-8') as f:
    text = f.read()

# Look for audits or items
print("Text length:", len(text))
matches = re.findall(r'render-blocking-resources.*?(?:ms|KiB|bytes)', text, re.DOTALL | re.IGNORECASE)
for m in matches[:5]:
    print("MATCH:", m[:300])

# Find all occurrences of drrajeshreddy.com
urls = set(re.findall(r'https?://[^\s"\'<>]+drrajeshreddy[^\s"\'<>]+', text))
print("Found URLs in report:")
for u in sorted(urls):
    if any(ext in u for ext in ['.css', '.js', '.webp', '.png', '.jpg']):
        print(" ", u)
