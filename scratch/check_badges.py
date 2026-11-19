import glob

files = glob.glob('**/*.php', recursive=True)
badge_files = []
for f in files:
    with open(f, 'r', encoding='utf-8') as fp:
        c = fp.read()
    if 'medical-review-badge' in c:
        badge_files.append(f)

print(f"Total files with medical-review-badge: {len(badge_files)}")
pillars = [f for f in badge_files if not f.startswith('patient-education')]
blogs = [f for f in badge_files if f.startswith('patient-education')]
print(f"Pillars/clusters: {len(pillars)}")
for p in pillars:
    print("  ", p)
print(f"Blogs: {len(blogs)}")
