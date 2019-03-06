![alt text](https://github.com/SpeakInCode/laravel-uikit/blob/master/laravel-uikit-logo.png)

# UIkit boilerplate for Laravel

With a better Webpack build process using Laravel Mix and Browser-Sync

1. Install a new Laravel project like normal `laravel new <project_name>` 

2. Download this repo, then copy and replace the existing `/resources` directory and `webpack.mix.js` file, with the ones found in this repo.

3. Update the `proxy` and `host` to use your local domain in the `webpack.mix.js` file within the `.browserSync()` method.

4. Install dependencies: `npm install browser-sync@2.24.7 browser-sync-webpack-plugin uikit vue-template-compiler`

5. Run `npm run watch` to compile and watch files.

6. Append `:3000` to URL for live reloading via Browser-Sync.

---

### What's Different?

- `/resources`

  - `/js/app.js` removed Bootstrap, imported UIkit & UIkit icons.
  
  - `/scss`
    - prepped with a `/components` directory.
    - `/global` contains a ready to go `_nav.scss`, `_footer.scss` & `_site.scss`
    - `/uikit/_globals.scss` for overriding UIkit global variables.
    - `/uikit/_variables.scss` prepped with all component variables AND hook mixins!!! Well organized and even wrapped with code folding elements for IntelliJ editors like PHPstorm, (You can easily find/replace these tags to work for your editor if need be).
    - `app.scss` one import file to rule them all.
  
  - `/views`
    - prepped with a `/components` directory.
    - `/global` contains a simple `nav.blade` & `footer.blade`
    - `/layouts` has a boilerplate `app.blade` layout wrapping all views.
    - `welcome.blade` as the current home view to match Laravel's default route.

- `/webpack.mix.js`
  - Disables the compilers annoying constant notifications
  - Added source maps
  - Added Browser-Sync
  - Added cache-busting 
  




 
