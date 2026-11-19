import re

with open('scratch/psi_latest.html', 'r', encoding='utf-8') as f:
    text = f.read()

# Find network-requests items
network_section = text.find('"network-requests"')
if network_section != -1:
    chunk = text[network_section:network_section+15000]
    items = re.findall(r'\"url\":\s*\"([^\"]+)\".*?\"transferSize\":\s*([0-9]+).*?\"startTime\":\s*([0-9\.]+).*?\"endTime\":\s*([0-9\.]+)', chunk)
    print("Found requests:", len(items))
    for url, size, start, end in items:
        dur = round(float(end) - float(start), 2)
        print(f"[{start}s - {end}s | dur {dur}s] {round(int(size)/1024, 1)} KB: {url[:90]}")
else:
    print("network-requests not found in text")
