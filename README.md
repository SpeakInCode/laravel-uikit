![alt text](https://github.com/SpeakInCode/laravel-uikit/blob/master/laravel-uikit-logo.png)

# UIkit boilerplate for Laravel

With a better Webpack build process using Laravel Mix and Browser-Sync

1. Install Laravel like normal `laravel new <project_name>` 

2. Download this repo, then copy and replace the existing `/resources` and `webpack.mix.js` with the ones found in this repo.

3. Update the `proxy` and `host` to use your local domain in the `webpack.mix.js` file within the `.browserSync()` method.

4. Install dependencies: `npm install browser-sync@2.24.7 browser-sync-webpack-plugin uikit vue-template-compiler`

5. Run `npm run watch` to compile and watch files.

6. Append `:3000` to URL for live reloading via Browser-Sync.
