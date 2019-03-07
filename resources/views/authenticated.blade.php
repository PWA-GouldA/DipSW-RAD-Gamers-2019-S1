<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Free Bulma template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.7.4-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.7.4/css/bulma.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/admin.css">

    <!-- Installed BULMA lightweigth css for this demo app -->
    <!--
        composer require laravel-frontend-presets/bulma
        php artisan preset bulma
        more; https://github.com/laravel-frontend-presets/bulma
        -->

</head>

<body>

<!-- START NAV -->
<nav class="navbar is-white">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item brand-text" href="/">
                Gamers Collection
            </a>
            <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="navMenu" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/">
                    Home
                </a>
                <a class="navbar-item" href="/manufacturers">
                    Manufacturers
                </a>
                <a class="navbar-item" href="/games">
                    Games
                </a>
            </div>

        </div>
    </div>
</nav>
<!-- END NAV -->
<div class="container">
    <div class="columns">

        <div class="column is-12">

            <section class="hero is-info welcome is-small">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">
                            Hello, Admin.
                        </h1>
                        <h2 class="subtitle">
                            I hope you are having a great day!
                        </h2>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="columns">
        <div class="column is-6">
            <div class="card events-card">
                <header class="card-header">
                    <p class="card-header-title">
                        Random Games
                    </p>
                </header>
                <div class="card-table">
                    <div class="content">
                        <table class="table is-fullwidth is-striped">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Added</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td width="5%"><i class="fa fa-bell-o"></i></td>
                                <td>Lorum ipsum dolem aire</td>
                                <td><a class="button is-small is-primary" href="#">Action</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <footer class="card-footer">
                    <a href="/games" class="card-footer-item">View All</a>
                </footer>
            </div>
        </div>
        <div class="column is-6">
            <section class="info-tiles">
                <div class="tile is-ancestor has-text-centered">
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">450</p>
                            <p class="subtitle">Games</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">102</p>
                            <p class="subtitle">Manufacturers</p>
                        </article>
                    </div>
                </div>
            </section>
            <section class="info-tiles">
                <div class="tile is-ancestor has-text-centered">
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">124</p>
                            <p class="subtitle">Users</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">3.6</p>
                            <p class="subtitle">Games/User</p>
                        </article>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</div>
</div>
<script async type="text/javascript" src="../js/bulma.js"></script>
</body>

</html>
