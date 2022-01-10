<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('partials.header_scripts')
</head>

<body>
    <header>
        @section('header_default')
            <h1>Header di default</h1>
        @show
    </header>
    <main>
        @yield('main_content')
    </main>
    <footer>
        @yield('footer_content')
    </footer>

</body>

</html>
