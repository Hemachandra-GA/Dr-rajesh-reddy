import urllib.request, re

headers = {
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
    'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8',
    'Accept-Language': 'en-US,en;q=0.5'
}

req = urllib.request.Request('https://drrajeshreddy.com', headers=headers)
try:
    with urllib.request.urlopen(req, timeout=10) as resp:
        html = resp.read().decode('utf-8')
        print("Live CSS links:")
        for m in re.findall(r'<link[^>]*rel=["\']stylesheet["\'][^>]*>', html):
            print("  ", m)
        print("\nHas smatbot in HTML:", 'smatbot' in html)
        print("Has preload in HTML:", 'rel="preload"' in html)
        print("Has media=print in HTML:", 'media="print"' in html)
        print("Has style.css?v= in HTML:", 'style.css?v=' in html)
except Exception as e:
    print("Error:", e)
