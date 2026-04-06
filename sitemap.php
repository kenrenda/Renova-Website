<?php
/**
 * Dynamic sitemap for Google indexing.
 * Outputs XML with all public pages. Use in production; ensure this file is in the same directory as index.php.
 */
header('Content-Type: application/xml; charset=utf-8');
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$base = isset($_SERVER['SCRIPT_NAME']) ? dirname($_SERVER['SCRIPT_NAME']) : '';
$base = ($base === '/' || $base === '\\') ? '' : $base;
$baseUrl = $protocol . '://' . $host . $base;
$baseUrl = rtrim($baseUrl, '/');

$pages = [
    ['loc' => '/home', 'priority' => '1.0', 'changefreq' => 'weekly'],
    ['loc' => '/services', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['loc' => '/portfolio', 'priority' => '0.9', 'changefreq' => 'weekly'],
    ['loc' => '/contact', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['loc' => '/chronicles', 'priority' => '0.8', 'changefreq' => 'weekly'],
    ['loc' => '/inside', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/project-careline-courier', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/project-renova', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/project-omni-furniture', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/project-metricore-systems', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/project-first-car-hire', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/project-castle-gremu', 'priority' => '0.7', 'changefreq' => 'monthly'],
];

$lastmod = date('c');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($pages as $p) {
    $loc = htmlspecialchars($baseUrl . $p['loc']);
    echo "  <url>\n";
    echo "    <loc>{$loc}</loc>\n";
    echo "    <lastmod>{$lastmod}</lastmod>\n";
    echo "    <changefreq>{$p['changefreq']}</changefreq>\n";
    echo "    <priority>{$p['priority']}</priority>\n";
    echo "  </url>\n";
}
echo '</urlset>';
