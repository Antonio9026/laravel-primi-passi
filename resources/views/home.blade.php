<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/resources/css/app.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <header>
        <ul>
            <li><a href="{{'/about'}}">about us</a></li>
            <li><a href="{{'/contatti'}}">contatti</a></li>
            <li><a href="{{'/log'}}">log in</a></li>
            <li><a href="{{'/info'}}">info</a></li>
        </ul>
    </header>
    <h1>Welcome to laravel from {{$nome}} {{$cognome}}</h1>
    
</body>
</html>