<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title> 
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app" class="content">
        <example-component></example-component>
    </div>@vite('resources/js/app.js')
</body>
</html>
