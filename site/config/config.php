<?php

// Enable debug mode for localhost, staging, and werkstatt environments
$host = $_SERVER['HTTP_HOST'] ?? '';
$isDebug = str_contains($host, 'localhost') ||
           str_contains($host, 'staging') ||
           str_contains($host, 'werkstatt');

return [
    "debug" => $isDebug,
    "panel" => [
        "install" => true,
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
