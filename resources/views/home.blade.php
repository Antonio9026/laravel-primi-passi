<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <header>
        <div class="header-container">
            <div class="image">
                <img src="https://pbs.twimg.com/profile_images/1163911054788833282/AcA2LnWL_400x400.jpg" alt="">
            </div>
            <ul class="header-list">
                <li><a href="{{ '/about' }}">about us</a></li>
                <li><a href="{{ '/contatti' }}">contatti</a></li>
                <li><a href="{{ '/log' }}">log in</a></li>
                <li><a href="{{ '/info' }}">info</a></li>
            </ul>
        </div>
    </header>

    <div class="container">
        <h1>Welcome to laravel from {{ $nome }} {{ $cognome }}</h1>
    </div>
</body>

</html>
