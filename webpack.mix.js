const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [require("tailwindcss")]
    })
    .browserSync({
        proxy: process.env.MIX_APP_HOST,
        host: process.env.MIX_APP_HOST,
        open: "external",
        watchOptions: {
            ignored: /node_modules/
        }
    });
