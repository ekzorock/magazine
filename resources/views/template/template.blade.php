<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="width">
    <title> @yield('title_block')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/adaptive.css">
    <link rel="stylesheet" href="/css/mobileNavi.css">
    <link rel="stylesheet" href="/css/about.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <!-- слайдер -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>
    @include('inc.header')
    @include('inc.navigations')
    @include('inc.naviMobile')
    @yield('content')
    <!-- @include('inc.aside') -->
    @include('inc.footer')
    
  <script src="/js/app.js"></script>
  <script src="/js/mobileNaviJS.js"></script>
  <script src="/js/slider.js"></script>
  <script src="/js/clickHome.js"></script>
</body>
</html>