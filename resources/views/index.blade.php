<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel + Angular</title>
        <base href="/">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" href="js/styles.css">
    </head>
    <body>
        <app-root></app-root>
        <script src="js/runtime.js" type="module"></script>
        <script src="js/polyfills.js" type="module"></script>
        <script src="js/main.js" type="module"></script>
    </body>
</html>