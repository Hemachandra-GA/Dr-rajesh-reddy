<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// 1. Redirect /about or /about.php to /profile
if (rtrim($uri, '/') === '/about' || rtrim($uri, '/') === '/about.php') {
    $query = $_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : '';
    header("Location: /profile" . $query, true, 301);
    exit;
}

// Redirect old spine health article slug to new slug
if (rtrim($uri, '/') === '/patient-education/spine-health-as-you-age--tips-to-maintain-a-strong-back-after-50') {
    $query = $_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : '';
    header("Location: /patient-education/spine-health-after-50" . $query, true, 301);
    exit;
}

// 1b. Redirect direct GET requests for .php files to clean URLs (301 Permanent Redirect)
if ($_SERVER['REQUEST_METHOD'] === 'GET' && preg_match('/\.php$/i', $uri)) {
    $clean_uri = preg_replace('/\.php$/i', '', $uri);
    if ($clean_uri === '/index') {
        $clean_uri = '/';
    }
    $query = $_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : '';
    header("Location: " . $clean_uri . $query, true, 301);
    exit;
}

$path = __DIR__ . $uri;

// 2. Serve static assets (images, css, js) directly
if (is_file($path)) {
    return false;
}

$clean_path = __DIR__ . '/' . trim($uri, '/');

// Start output buffer to dynamically convert any internal href="*.php" to clean URLs in rendered HTML
ob_start(function($buffer) {
    return preg_replace_callback('/href=(["\'])([^"\':]+)\.php([#\?][^"\']*)?\1/i', function($matches) {
        $quote = $matches[1];
        $filePath = $matches[2];
        $extra = $matches[3] ?? '';
        if ($filePath === 'index' || $filePath === '/index') {
            $filePath = ($filePath === 'index') ? './' : '/';
        }
        return 'href=' . $quote . $filePath . $extra . $quote;
    }, $buffer);
});

// 3. If $clean_path + '.php' exists as a file (e.g. /contact -> contact.php), serve it!
if (is_file($clean_path . '.php')) {
    require $clean_path . '.php';
    return true;
}

// 4. If it's a directory with an index.php inside
if (is_dir($path) && is_file(rtrim($path, '/') . '/index.php')) {
    require rtrim($path, '/') . '/index.php';
    return true;
}

// 5. Default root index
if ($uri === '/') {
    require __DIR__ . '/index.php';
    return true;
}

// 6. Fallback 404 page
if (is_file(__DIR__ . '/404.php')) {
    require __DIR__ . '/404.php';
    return true;
}

return false;
?>
