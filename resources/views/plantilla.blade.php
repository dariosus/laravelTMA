<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/estilos.css">
    @yield("css")
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li>Home</li>
          <li>Registracion</li>
          <li>Login</li>
          <li>Peliculas</li>
        </ul>
      </nav>
    </header>
    @yield("contenido")
    <footer>
      2017, Marca Registrada
    </footer>
  </body>
</html>
