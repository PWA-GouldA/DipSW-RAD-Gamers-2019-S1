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
<header>
    <p>Gamers</p>
</header>
<main>
    <h1>Manufacturer: {{ $manufacturer->name }}</h1>
    <ul>
        <li><b>ID</b> {{ $manufacturer->id }}</li>
        <li><b>Name</b> {{ $manufacturer->name }}</li>
        <li><b>City</b> {{ $manufacturer->city }}</li>
    </ul>
</main>
<footer>
    <p>Footer here!</p>
</footer>
</body>
</html>