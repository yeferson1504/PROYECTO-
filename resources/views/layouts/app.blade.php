<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo','Minimercado2024')</title>
    @vite('resources/css/app.css')
</head>
<body>
      <header>
            {{-- Navbar--}}
            @include('layouts.Navbar')
      </header>    
      <main>
@yiel('contenido')
      </main>
      <footer>
@incluide('layouts.footer')
</footer>
</body>
</html>