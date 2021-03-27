const mix = require('laravel-mix');


mix

.disableSuccessNotifications()

.setPublicPath('/')

.js('resources/js/app.js', 'public/js')

.sass('resources/scss/app.scss', 'public/css')

.sourceMaps()

.browserSync({
   proxy: 'http://YOUR_LOCAL_DOMAIN.test',
   host: 'http://YOUR_LOCAL_DOMAIN.test',
   notify: false,
   open: false,
   reloadOnRestart: true,
   injectChanges: true,
   files: [
      `!vendor/*`,
      `**/*.php`,
      `**/*.js`,
      `resources/scss/**/*.scss`
   ]
})

// Setup versioning (cache-busting)
if (mix.inProduction()) {
   mix.version();
   mix.babel(`/js/app.js`, `/js/app.js`);
}
