![alt text](https://github.com/SpeakInCode/laravel-uikit/blob/master/laravel-uikit-logo.png)

# UIkit boilerplate for Laravel 8

With a better Webpack build process using Laravel Mix and Browser-Sync

---

### How to use:

1. Install a new Laravel project like normal `laravel new <project_name>` 

2. Download this repo, then copy and replace the existing `/resources` directory and `webpack.mix.js` file, with the ones found in this repo.

3. Update the `proxy` and `host` to use your local domain in the `webpack.mix.js` file within the `.browserSync()` method.

4. Install dependencies: `npm install browser-sync uikit --dev`

5. Run `npm run dev` to compile files.

5. Run `npm run watch` to compile and watch files.

6. Append `:3000` to URL for live reloading via Browser-Sync.

---

### What's Different?

- `/resources`

  - `/js/app.js` imported UIkit & UIkit icons.
  
  - `/scss`
    - `/global` contains a ready to go `_nav.scss` & `_footer.scss`
    - `/uikit/_globals.scss` for overriding UIkit global variables.
    - `/uikit/_components.scss` prepped with all component variables AND hook mixins!!! Well organized and even wrapped with code folding elements for VS Code & IntelliJ editors.
    - `app.scss` one import file to rule them all.
  
  - `/views`
    - `/global` contains a simple `nav.blade` & `footer.blade`
    - `/layouts` has a boilerplate `app.blade` layout wrapping all views.
    - `welcome.blade` as the current home view to match Laravel's default route.

- `/webpack.mix.js`
  - Disables the compilers annoying constant notifications
  - Added source maps
  - Added Browser-Sync
  - Added cache-busting 
  




 
