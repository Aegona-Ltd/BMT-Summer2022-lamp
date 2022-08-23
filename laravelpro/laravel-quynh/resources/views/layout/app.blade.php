<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <div id="warpper">
        <div id="header">

        </div>
        <div id="content">
            @yield('content');
        </div>
        <div id="sidebar">
            @yield('sidebar');;
        </div>
        <div id="footer"></div>
    </div>
    
</body>
</html>