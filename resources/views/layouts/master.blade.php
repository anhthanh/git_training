<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>N-Air a E-commerce category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="N-Air Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<meta charset utf="8">
<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
<!--fonts-->
<!--bootstrap-->
<link href="{!! url('/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
<!--coustom css-->
<link href="{!! url('/css/form.css') !!}" rel="stylesheet" type="text/css" media="all" />
<link href="{!! url('/css/style.css') !!}" rel="stylesheet" type="text/css"/>
</head>
<body>
    @include('layouts.blocks.header')
    @yield('content')
    @include('layouts.blocks.footer')
<!--------------------------------------------------------------------------------------->
        <!--shop-kart-js-->
        <script src="js/simpleCart.min.js"></script>
        <!--default-js-->
        <script src="js/jquery-2.1.4.min.js"></script>
        <script
        src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"
        integrity="sha256-ugED92WALymbx9ylw12aADWaCrsQysE29DyvnAv5i3w="
        crossorigin="anonymous">
    </script>
    <!--bootstrap-js-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myscript.js"></script>
    <!--script-->
    <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
</body>
</html>