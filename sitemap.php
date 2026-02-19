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
    ['loc' => '/pages/home.php', 'priority' => '1.0', 'changefreq' => 'weekly'],
    ['loc' => '/pages/services.php', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['loc' => '/pages/portfolio.php', 'priority' => '0.9', 'changefreq' => 'weekly'],
    ['loc' => '/pages/contact.php', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['loc' => '/pages/chronicles.php', 'priority' => '0.8', 'changefreq' => 'weekly'],
    ['loc' => '/pages/insideRenova.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/pages/project-careline-courier.php', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/pages/project-renova.php', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/pages/project-omni-furniture.php', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/pages/project-metricore-systems.php', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/pages/project-first-car-hire.php', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/pages/project-castle-gremu.php', 'priority' => '0.7', 'changefreq' => 'monthly'],
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
