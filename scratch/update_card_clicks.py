with open('patient-education.php', 'r', encoding='utf-8') as f:
    content = f.read()

# 1. Add style
style_block = '''    <style>
        .article-card {
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        }
        .article-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.1);
            border-color: rgba(0, 102, 204, 0.25);
        }
        .article-card:hover .read-link {
            color: #0052a3;
            text-decoration: underline;
        }
        .article-card:hover .article-content h3 {
            color: #0066cc;
        }
    </style>
'''

if '</head>' in content and '.article-card {' not in content:
    content = content.replace('</head>', style_block + '</head>', 1)
    print("Added styles")

# 2. Add card click listener in JS
click_code = '''
    // Make entire article card clickable
    articleCards.forEach(card => {
        card.addEventListener('click', function(e) {
            // If the user didn't directly click the <a> tag itself, follow the card's link
            if (e.target.closest('a')) return;
            const link = this.querySelector('a.read-link') || this.querySelector('a');
            if (link && link.href) {
                window.location.href = link.href;
            }
        });
    });

    // Initial render
'''

if '// Initial render' in content and 'Make entire article card clickable' not in content:
    content = content.replace('// Initial render', click_code, 1)
    print("Added click listener")

with open('patient-education.php', 'w', encoding='utf-8') as f:
    f.write(content)

print("Saved patient-education.php")
