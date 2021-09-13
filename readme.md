# Kirby Rocket 🚀

Kirby Rocket is a simple developer theme and boilerplate for the Kirby 3.5 CMS.

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

## Install

Run `npm install` to install the development dependencies and `composer install` to install **Kirby**.

Start PHP's built-in server with `php -S localhost:8000 kirby/router.php` and run `npm run dev` for CSS and JS compiling.

Open `localhost:8000` to view the page or `localhost:8000/panel` to open the panel.

## Deploy

For a simple deploy setup, you can use **codeship** (100 builds per month are free).
The following **custom script** will build the project and copy the files via ftp to your server.
This can be triggered in codeship when you push to your dev or master branch.

```
npm install
composer install
npm run build
rm -rf node_modules
rm -rf .git
rm -rf .htaccess
lftp -c "open -u $FTP_USER,$FTP_PASSWORD yourhostingdomain.com; set ssl:verify-certificate no; mirror -R ~/clone/ /yoursubfolder"
```

Don't forget to replace your domain in the script and set the ftp user and password as environment variables in codeship.

## Credits

The Parcel setup is inspired by [kirby3-front-with-parcel](https://github.com/constantinjoly/kirby3-front-with-parcel).
