const mix = require('laravel-mix');


mix

.disableSuccessNotifications()

.setPublicPath('/')

.js('resources/js/app.js', 'public/js')

.sass('resources/sass/app.scss', 'public/css')

.sourceMaps()

.browserSync({
   proxy: 'http://laravel-uikit.test',
   host: 'http://laravel-uikit.test',
   notify: false,
   open: false,
   reloadOnRestart: true,
   injectChanges: true,
   files: [
      `**/*.php`,
      `**/*.js`,
      `resources/sass/**/*.scss`
   ]
})

// Setup versioning (cache-busting)
if (mix.inProduction()) {
   mix.version();
   mix.babel(`/js/app.js`, `/js/app.js`);
}
