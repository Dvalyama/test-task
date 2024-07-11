<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title', config('app.name'))</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/app.css">
    @stack('css')
</head>
<body>
    <div class="d-flex flex-column justify-content-between min-vh-100">
        @include('includes.alert') <!-- Включення повідомлень про сповіщення -->
        @include('includes.header') <!-- Включення хедера -->

        <main class="flex-grow-1 py-3">
            @yield('content') <!-- Включення вмісту зі сторінки, яка розширює цей шаблон -->
        </main>

        @include('includes.footer') <!-- Включення підвалу -->
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
    @stack('js')
</body>
</html>
