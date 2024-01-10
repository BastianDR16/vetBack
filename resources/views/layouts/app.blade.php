<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Agrega aquí tus enlaces a hojas de estilo CSS, scripts, etc. -->

    <!-- Ejemplo de inclusión de estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Puedes agregar aquí elementos de menú -->
            </ul>
        </div>
    </nav>

    <!-- Contenido principal de la página -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Pie de página -->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <!-- Contenido del pie de página -->
        </div>
    </footer>

    <!-- Agrega aquí tus scripts JavaScript -->

    <!-- Ejemplo de inclusión de scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
