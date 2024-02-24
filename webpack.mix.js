const mix = require('laravel-mix')
const tailwindcss = require('tailwindcss');
const path = require('path')

mmix.js('resources/js/app.js', 'public/js')
  .postCss('resources/css/main.css', 'public/css', [
      require('tailwindcss'),
  ]);
