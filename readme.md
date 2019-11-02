# Kirby Rocket 🚀

Kirby Rocket is a simple developer theme and boilerplate for the Kirby 3 CMS with some useful frontend tools.

## Tools

Its mainly based on a **gulp** script with the following tasks:

- **Server:** Start your local server instantly and let **BrowserSync** automatically reload your page on changes.

- **CSS:** The **SCSS** will be automatically compiled to CSS, with additional **SourceMaps**, **Autoprefixer** and **Minify**.

- **Javascript:** It will use **Browserify** for easier imports and **Babel** for better **ES6** support. The JS file will be minified with additional SourceMaps.

## Content

Some basic content is included:

- Pages: home, error, default
- Components: header, footer, cookie banner, seo
- SCSS folder & files structure
- 3rd party tools: Fastclick, CookiesEuBanner, Normalize.css

## Install

Run `npm install` to install the development dependencies and `composer install` to install **Kirby**.

Start Browsersync with `gulp`.

Open `localhost:3000` to view the page or `localhost:3000/panel` to open the panel.


## Deploy

For a simple deploy setup, you can use **codeship** (100 builds per month are free).
The following **custom script** will build the project and copy the files via ftp to your server.
This can be triggered in codeship when you push to your dev or master branch.

```
npm install
composer install
npm install -g gulp-cli
gulp build
rm -rf node_modules
rm -rf .git
rm -rf .htaccess
lftp -c "open -u $FTP_USER,$FTP_PASSWORD yourhostingdomain.com; set ssl:verify-certificate no; mirror -R ~/clone/ /yoursubfolder"
```

Don't forget to replace your domain in the script and set the ftp user and password as environment variables in codeship.
