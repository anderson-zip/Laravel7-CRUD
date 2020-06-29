<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - CRUD Laravel 7 </title>
</head>
<body>
    <header>
        <h1>Cabeçalho</h1>
    </header>
    <hr/>
    <section>
        @yield('content')
    </section>
    <hr/>
    <footer>
        Rodapé.
    </footer>
</body>
</html>
