with open('brain-tumor-removal-surgery.php', 'r', encoding='utf-8') as f:
    c = f.read()

pos = c.find('pillar-main-content')
hero = c[:pos]

for line in hero.splitlines():
    if 'Rajesh' in line:
        print(line)
