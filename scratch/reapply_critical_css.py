with open('index.php', 'r', encoding='utf-8') as f:
    html = f.read()

with open('scratch/critical.min.css', 'r', encoding='utf-8') as f:
    critical_css = f.read()

target = '  <!-- Preload LCP Hero Image for Instant Mobile Paint (responsive) -->'

replacement = f"""  <!-- Critical Inlined CSS for Instant FCP & LCP Under 2.5s -->
  <style>
{critical_css}
  </style>

  <!-- Non-Blocking Asynchronous Stylesheet -->
  <link rel="preload" href="css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="css/style.css"></noscript>

  <!-- Preload LCP Hero Image for Instant Mobile Paint (responsive) -->"""

if target in html:
    new_html = html.replace(target, replacement, 1)
    with open('index.php', 'w', encoding='utf-8') as f:
        f.write(new_html)
    print("SUCCESS: Inlined critical CSS and added non-blocking style.css preload!")
else:
    print("TARGET NOT FOUND!")
