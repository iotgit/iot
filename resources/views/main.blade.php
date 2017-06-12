<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('judul')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('partials.stylesheet')

  
</head>
<body>

<div class="container">
  @yield('content')
</div>

</body>
</html>
