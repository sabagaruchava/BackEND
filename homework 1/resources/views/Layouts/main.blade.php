<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<title>@yield('title')</title>
</head>
<body>
  @include('components.menu')
    
  @yield('content')
</body>
</html>
