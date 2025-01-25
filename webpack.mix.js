const mix = require('laravel-mix');
const path = require('path');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
   ])
   .webpackConfig({
       resolve: {
           alias: {
               flyonui: path.resolve(__dirname, 'node_modules/flyonui'),
           },
       },
   });
