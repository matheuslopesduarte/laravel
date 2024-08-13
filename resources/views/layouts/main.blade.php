<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    header, footer {
        background-color: #f1f1f1;
        padding: 1em;
        text-align: center;
    }
    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    h1, h2, h3 {
        border-bottom: 1px solid #ccc;
    }
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }
</style>
@yield('styles')
<body>
    <header>
        <h2>Layout Blade Header</h2>
    </header>
    @yield('content')    
    <footer>
        <p>Layout Blade Footer</p>
    </footer>
</body>
@yield('scripts')
</html>