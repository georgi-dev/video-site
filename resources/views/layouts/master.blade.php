<html>
<head>
    <title>@yield('title')</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <style>
        .navbar-default .navbar-nav>li>a{font-weight:bold;color:#fff;}
        .navbar-default .navbar-nav>li>a:hover{color:red;}
        body,a{color:#fff;}
            h3,label{color:#fff;}
             .background{background-image: url('/images/Abstract.jpg');background-size: 100% 120%;
    background-position: 50% 100%;}
    footer{border-top:1px solid #fff;padding:10px 0 10px 0;text-align:center;background: #444;}
        </style>
</head>
<body class="background">
    <div class="wrapper container">
        @yield('h1')
        @include('includes.header')
        @include('includes.subheader')
        @yield('content')
        <div class="clearfix"></div>
        <footer>© 2016 Video-site. All Rights Reserved. Powered by <i style="color:red;">Ogromniq87</i>.</footer>
    </div>
    
<div class="clearfix"></div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="/scripts/my.js"></script>
</body>
</html>