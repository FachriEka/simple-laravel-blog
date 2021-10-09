<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Blog Home</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link href="{{secure_asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
  <script src="{{secure_asset('assets/js/webfont.js')}}" type="text/javascript"></script>
  <link href="https://assets.website-files.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link href="https://assets.website-files.com/img/webclip.png" rel="apple-touch-icon" />
</head>

<body>
@include('layouts.includes._sidebar')
@yield('content-blog')
  <script src="{{secure_asset('assets/js/jquery-3.6.0.js')}}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{secure_asset('assets/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
  <script src="{{secure_asset('assets/js/popper.min.js')}}" type="text/javascript"></script>
  <!--[if lte IE 9]><script src="cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>

</html>