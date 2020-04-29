<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src=”https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js”></script>
   <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/login.css') }}">
  <title>@yield('title')</title>
 </head>
<body>
<div class="wrapper fadeInDown" >
  <div id="formContent">
                 @yield('main')
</div>
</div>
</body>