<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Blog Home</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
  <script src="{{asset('assets/js/webfont.js')}}" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic", "Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic", "Fjalla One:regular"]
      }
    });
  </script>
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
  <script type="text/javascript">
    ! function(o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
  </script>
  <link href="https://assets.website-files.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link href="https://assets.website-files.com/img/webclip.png" rel="apple-touch-icon" />
</head>

<body>
@include('layouts.includes._sidebar')
@yield('content')
  <script src="{{asset('assets/js/jquery-3.6.0.js')}}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{asset('assets/js/bootstrap.bundle.min')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/popper.min')}}" type="text/javascript"></script>
  <!--[if lte IE 9]><script src="cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>

</html>