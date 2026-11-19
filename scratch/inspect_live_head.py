import urllib.request, re

headers = {
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
    'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8',
    'Accept-Language': 'en-US,en;q=0.5'
}

req = urllib.request.Request('https://drrajeshreddy.com', headers=headers)
with urllib.request.urlopen(req, timeout=10) as resp:
    html = resp.read().decode('utf-8')

m = re.search(r'<head>([\s\S]*?)</head>', html, re.I)
if m:
    print("LIVE HEAD CONTENT:")
    print(m.group(1))

# Check footer scripts
m2 = re.search(r'</footer>([\s\S]*?)</html>', html, re.I)
if m2:
    print("\nLIVE FOOTER SCRIPTS:")
    print(m2.group(1))
