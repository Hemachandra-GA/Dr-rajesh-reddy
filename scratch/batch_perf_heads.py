import glob, re

files = glob.glob('*.php') + glob.glob('patient-education/*.php')
print(f"Total files: {len(files)}")

# 1. Replace synchronous font-awesome
# <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
old_fa = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">'
new_fa = '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media=\'all\'">\n  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>'

# 2. Add preconnect to Google fonts before style.css if not present
preconnect_snippet = '''  <!-- Preconnect to Font domains -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Inter:wght@300;400;500;600;700&display=swap">
'''

updated = 0
for f in files:
    if f.endswith('router.php') or f.endswith('404.php'):
        continue
    with open(f, 'r', encoding='utf-8') as fp:
        c = fp.read()
    
    orig = c
    # Replace FontAwesome
    if old_fa in c:
        c = c.replace(old_fa, new_fa)
    
    # Add Google Fonts preconnect if not already in file
    if 'fonts.googleapis.com' not in c and '<head>' in c:
        # place before style.css
        pos = c.find('css/style.css')
        if pos != -1:
            line_start = c.rfind('<link', 0, pos)
            if line_start != -1:
                c = c[:line_start] + preconnect_snippet + c[line_start:]

    if c != orig:
        with open(f, 'w', encoding='utf-8') as fp:
            fp.write(c)
        updated += 1

print(f"Updated {updated} files with async FontAwesome and font preconnect.")
