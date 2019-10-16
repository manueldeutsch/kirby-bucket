/* COOKIES / ANALYTICS */
import CookiesEuBanner from 'cookies-eu-banner';

new CookiesEuBanner(function () {
    // Your code to launch when user accept cookies
}, true);

/* FASTCLICK */
import attachFastClick from 'fastclick';

attachFastClick(document.body);
document.addEventListener("touchstart", function(){}, true);
