<?php

// Enable debug mode and Panel installation only for local and staging environments
$host = strtolower($_SERVER['SERVER_NAME'] ?? $_SERVER['HTTP_HOST'] ?? '');
$isDev = $host === 'localhost' ||
         $host === '127.0.0.1' ||
         str_starts_with($host, 'staging.') ||
         str_starts_with($host, 'werkstatt.');

return [
    "debug" => $isDev,
    // generate new values for every project:
    // php -r 'echo bin2hex(random_bytes(32)) . PHP_EOL;'
    "content" => [
        "salt" => "0cc7db79e52e65263594a21b6060458281005a39062641632cfccc9f4b0add8d",
    ],
    "cookie" => [
        "key" => "8439091daab21354e57e8f857a9ab564ae2e1a5bf5cbbeb95de1feaba82beec7",
    ],
    "panel" => [
        "install" => $isDev,
        'css' => 'assets/css/panel.css'
    ],
    "routes" => [
        [
            "pattern" => "sitemap.xml",
            "action" => function () {
                $pages = site()
                    ->pages()
                    ->index();

                // fetch the pages to ignore from the config settings,
                // if nothing is set, we ignore the error page
                $ignore = kirby()->option("sitemap.ignore", ["error"]);

                $content = snippet("sitemap", compact("pages", "ignore"), true);

                // return response with correct header type
                return new Kirby\Cms\Response($content, "application/xml");
            },
        ],
        [
            "pattern" => "sitemap",
            "action" => function () {
                return go("sitemap.xml", 301);
            },
        ],
    ],
    "sitemap.ignore" => ["error"],
];
