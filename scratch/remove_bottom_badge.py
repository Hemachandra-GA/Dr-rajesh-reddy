import glob, re

# Pattern for bottom medical review badge:
badge_pattern = re.compile(
    r'\s*<!-- Medical Review & Author Byline -->\s*<div class="medical-review-badge"[\s\S]*?<\/div>\s*<\/div>',
    re.IGNORECASE
)

files = glob.glob('**/*.php', recursive=True)
updated_bottom = 0

for f in files:
    with open(f, 'r', encoding='utf-8') as fp:
        c = fp.read()
    
    if 'medical-review-badge' in c:
        new_c = badge_pattern.sub('', c)
        if new_c != c:
            with open(f, 'w', encoding='utf-8') as fp:
                fp.write(new_c)
            updated_bottom += 1
        else:
            print(f"Badge pattern didn't match in {f}")

print(f"Removed bottom review badge from {updated_bottom} files.")
