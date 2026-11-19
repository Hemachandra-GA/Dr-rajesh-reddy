import glob

blogs = glob.glob('patient-education/*.php')
print(f"Checking {len(blogs)} blogs for premature closing div...")

found = 0
for b in blogs:
    with open(b, 'r', encoding='utf-8') as f:
        c = f.read()

    # Look for </div>\s*</main>
    if '</div>\n            </main>' in c or '</div>\r\n            </main>' in c or '</div>\n        </main>' in c:
        found += 1
        print(f"Found in: {b}")

print(f"Total found: {found}")
