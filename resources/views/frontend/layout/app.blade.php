<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/dist/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/sweetalert2/dist/sweetalert2.min.css") }}">
    <title>Document</title>
</head>
<body>

@include("frontend.inc.navbar")
<br>

@yield('icerik')
<br>
@include("frontend.inc.footer")


<script src="{{ asset("assets/bootstrap/dist/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("assets/bootstrap/dist/js/bootstrap.bundle.js") }}"></script>
<script src="{{ asset("assets/jquery/dist/jquery.js") }}"></script>
<script src="{{ asset("assets/sweetalert2/dist/sweetalert2.all.min.js") }}"></script>


</body>
</html>
