<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>MyAPP - @yield('title')</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

    <link href="{{asset('css')}}/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<h1>Gestion des produits</h1>


@yield('content')

<script src="{{asset('js')}}/bootstrap.js">

</script>
</body>
</html>
