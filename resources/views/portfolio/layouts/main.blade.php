<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @yield('favicon')
   @yield('pageFonts')
   @yield('cdns')
   <link rel="stylesheet" href="{{secure_asset("css/app.css")}}">
   <title>@yield('pageTitle')</title>
</head>
<body>
   @yield('content')
</body>
@yield('js')
</html>