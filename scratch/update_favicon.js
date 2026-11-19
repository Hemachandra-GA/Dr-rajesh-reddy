const fs = require('fs');
const path = require('path');

function walk(dir) {
  fs.readdirSync(dir).forEach(f => {
    const p = path.join(dir, f);
    if (fs.statSync(p).isDirectory()) {
      if (f !== 'scratch' && f !== '.git') walk(p);
    } else if (f.endsWith('.php')) {
      let text = fs.readFileSync(p, 'utf8');
      if (text.includes('<head>') || text.includes('<head ')) {
        const isSubdir = p.includes('patient-education\\') || p.includes('patient-education/');
        const iconPath = isSubdir ? '../images/favicon-drrajeshreddy.svg' : 'images/favicon-drrajeshreddy.svg';
        
        // Remove stray text and previous icon lines completely
        text = text.replace(/.*favicon-drrajeshreddy\.svg.*\n?/gi, '');
        text = text.replace(/<link\s+rel=["'](shortcut )?icon["'][^>]*>\n?/gi, '');
        
        // Insert single clean icon tag before </head>
        text = text.replace(/<\/head>/i, `  <link rel="icon" type="image/svg+xml" href="${iconPath}">\n</head>`);
        
        fs.writeFileSync(p, text, 'utf8');
      }
    }
  });
}

walk('c:/Users/gads/Desktop/drrajeshreddy-sukhesh');
console.log("All pages scrubbed and clean favicon applied!");
