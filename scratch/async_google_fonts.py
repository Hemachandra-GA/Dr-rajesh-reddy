import glob

files = glob.glob('*.php') + glob.glob('patient-education/*.php')
print(f"Total files: {len(files)}")

old_google = '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Inter:wght@300;400;500;600;700&display=swap">'
new_google = '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Inter:wght@300;400;500;600;700&display=swap" media="print" onload="this.media=\'all\'">\n  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Inter:wght@300;400;500;600;700&display=swap"></noscript>'

count = 0
for f in files:
    with open(f, 'r', encoding='utf-8') as fp:
        c = fp.read()
    if old_google in c:
        c = c.replace(old_google, new_google)
        with open(f, 'w', encoding='utf-8') as fp:
            fp.write(c)
        count += 1

print(f"Updated {count} files with async non-blocking Google Fonts.")
