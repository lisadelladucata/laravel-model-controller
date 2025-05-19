<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Movies')</title>
    @vite('resources/scss/app.scss')
</head>
<body>
    <header>
        <nav>
            <h1>Movies List</h1>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} - Tutti i diritti riservati</p>
    </footer>
</body>
</html>
