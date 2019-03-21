<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamers | Manufacturers</title>
</head>
<body>
<!-- header>p{Gamers} -->
<header>
    <p>Gamers</p>
</header>
<!-- main>(h1{Manufacturers}+p{Paragraph}+ul>li*2) -->
<main>
    <h1>Manufacturers</h1>
    <p>Paragraph</p>
    <ul>
        @foreach($manufacturers as $aMaker)
        <li><b>{{ $aMaker->id }}</b> {{ $aMaker->name }}</li>
        @endforeach
    </ul>
</main>
<!-- footer>p{Footer here!} -->
<footer>
    <p>Footer here!</p>
</footer>
</body>
</html>