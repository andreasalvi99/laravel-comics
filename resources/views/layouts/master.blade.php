<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>DC Comics</title>
</head>
<body>

    @include('partials.header')

    <section id="jumbotron">
        @yield('jumbotron')
    </section>

    <section>
        <div class="container">
            @yield('main-content')
        </div>
    </section>


</body>
</html>