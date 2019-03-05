# UIkit boilerplate for Laravel

With a better Webpack build process using Laravel Mix and Browser-Sync

1. Copy over and replace the existing `/resources` and `webpack.mix.js`

2. Update the `proxy` and `host` to use your local domain in the `webpack.mix.js` file within the `.browserSync()` method.

3. Install dependencies: `npm install browser-sync@2.24.7 browser-sync-webpack-plugin uikit vue-template-compiler`

4. Run `npm run watch` to compile and watch files.

5. Append `:3000` to URL for live reloading via Browser-Sync.
