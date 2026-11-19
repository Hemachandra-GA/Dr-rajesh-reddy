with open('index.php', 'r', encoding='utf-8') as f:
    html = f.read()

with open('scratch/critical.min.css', 'r', encoding='utf-8') as f:
    critical_css = f.read()

target = '  <!-- Main Stylesheet -->\n  <link rel="stylesheet" href="css/style.css">'

replacement = f"""  <!-- Critical Inlined CSS for Instant FCP & LCP Under 2.5s -->
  <style>
{critical_css}
  </style>

  <!-- Non-Blocking Asynchronous Stylesheet -->
  <link rel="preload" href="css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="css/style.css"></noscript>"""

if target in html:
    new_html = html.replace(target, replacement, 1)
    with open('index.php', 'w', encoding='utf-8') as f:
        f.write(new_html)
    print("SUCCESS: Critical CSS inlined and style.css deferred successfully!")
else:
    print("TARGET NOT FOUND! Please check index.php target string.")
