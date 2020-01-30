<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
       <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class='test'>hello view</div>
    </body>
</html>