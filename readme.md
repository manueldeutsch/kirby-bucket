# 🪣 Kirby Bucket

Kirby Bucket is a simple developer theme and boilerplate for the Kirby CMS, to build websites fast and easy.

## 🚰 Install

Run `npm install` to install the frontend dependencies and `composer install` to install **Kirby**.

Start PHP's built-in server with `composer start` and run `npm run dev` for CSS and JS compiling.

Open `localhost:8000` to view the page or `localhost:8000/panel` to open the panel.

## 🚿 Tools

It just uses **Parcel** with the following tasks:

-   **CSS:** The **SCSS** will be automatically compiled to CSS thorugh **PostCSS**, with **Autoprefixer** and **Minify**.
-   **Javascript:** It will use **Parcel** for better **ES6** support and **Minification**.

## 🧼 Style Helper

-   Modern normalize for default styling
-   Simple atomic SCSS folder & files structure

## 🛁 Content

Some basic content and blueprints for Kirby are prepared:

-   Home: flexible layout page
-   Default: simple writer page
-   Header & Footer snippets
-   Example block button
-   Specific per page SEO title, description & image with a global fallback

## 🚽 Deploy

For a simple and easy deploy, we use github actions.
The action will run composer, npm build and copy the files via S/FTP to your Server.
Don't forget to add your secrets within github settings!

## 🧴 Links

-   Kirby docs: https://getkirby.com/docs
-   Parcel docs: https://parceljs.org/docs/
-   Favicon Generation: https://favicon.io

## 💫 Inspirational Quote

> Seek not for fresher founts afar, just drop your bucket where you are.

_Sam Walter Foss_
