<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title_block')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">


</head>
<body>
    @include('inc.header')
    @include('inc.navigations')
    @yield('content')
    <!-- @include('inc.aside') -->
    @include('inc.footer')
    
  
  <script src="/js/app.js"></script>

</body>
</html>