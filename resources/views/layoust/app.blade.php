<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo','Minimercado2024')</title>
</head>
<body>
      <header>
            {{-- Navbar--}}
            @include('Layoust.Navbar')
      </header>    
      <main>
@yiel('contenido')
      </main>
      <footer>
@incluide('Layoust.footer')
</footer>
</body>
</html>