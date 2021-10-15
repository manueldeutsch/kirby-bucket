# Kirby Rocket 🚀

Kirby Rocket is a simple developer theme and boilerplate for the Kirby 3.5 CMS.

## Install

Run `npm install` to install the development dependencies and `composer install` to install **Kirby**.

Start PHP's built-in server with `composer start` and run `npm run dev` for CSS and JS compiling.

Open `localhost:8000` to view the page or `localhost:8000/panel` to open the panel.

## Tools

Its mainly based on **parcel** with the following tasks:

-   **CSS:** The **SCSS** will be automatically compiled to CSS thorugh **PostCSS**, with **Autoprefixer**, **PurgeCSS** and **Minify**.

-   **Javascript:** It will use **Parcel** for easier imports and **Babel** for better **ES6** support.

## Content

Some basic content is included:

-   Pages: home, error, default
-   Components: header, footer, cookie banner, seo
-   SCSS folder & files structure
-   3rd party tools: CookiesEuBanner, Normalize.css

## Deploy

For a simple and easy deploy, we use github actions.
The action will build the page and deploy via FTP.
Don't forget to add your secrets within github settings!

## Credits

The Parcel setup is inspired by [kirby3-front-with-parcel](https://github.com/constantinjoly/kirby3-front-with-parcel).
