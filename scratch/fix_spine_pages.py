for p in ['spine-fracture-treatment.php', 'cervical-spine-fracture-treatment.php']:
    with open(p, 'r', encoding='utf-8') as f:
        c = f.read()

    target = '          </div>\n</div> <!-- /pillar-content-area -->'
    replacement = '</div> <!-- /pillar-content-area -->'
    if target in c:
        c = c.replace(target, replacement)
        with open(p, 'w', encoding='utf-8') as f:
            f.write(c)
        print(f"Fixed: {p}")
    else:
        print(f"Target not found in {p}")
