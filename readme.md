# 🪣 Kirby Bucket

Kirby Bucket is a minimalist developer boilerplate for Kirby CMS.

## 🧼 Features

**Frontend**

-   Modular CSS & minimal JavaScript
-   Parcel & PostCSS optimizations

**Development**

-   EditorConfig & Prettier settings
-   VSCode & Claude recommendations

**Content**

-   Modular snippets & templates
-   Optimized SEO fields, robots.txt & sitemap

**Security & Performance**

-   Security headers & Protected directories
-   Compression & caching configured

## 🚰 Install

Run `npm install` to install the frontend dependencies and `composer install` to install **Kirby**.

Start PHP's built-in server with `composer start` and run `npm run dev` for CSS and JS compiling.

Open `localhost:8000` to view the page or `localhost:8000/panel` to open the panel.

## 🧹 Scripts

-   `npm run dev` - Watch mode for development
-   `npm run build` - Production build
-   `npm run clean` - Remove build cache and dist files
-   `composer start` - Start local PHP server

## 🚽 Deploy

GitHub Actions workflows included for automated deployment:

-   Runs composer & npm build
-   Deploys via FTP/SFTP to your server

Don't forget to add your secrets in GitHub settings!

## 🧴 Links

-   Kirby docs: https://getkirby.com/docs
-   Parcel docs: https://parceljs.org/docs/
-   Favicon Generation: https://favicon.io

## 💫 Inspirational Quote

> Seek not for fresher founts afar, just drop your bucket where you are.

_Sam Walter Foss_
