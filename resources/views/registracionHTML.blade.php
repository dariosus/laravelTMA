<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Bienvenidos a la registracion</h1>
    <form class="" action="/registracion" method="post">
      {{ csrf_field() }}
      <input type="text" name="email" value="">
      <input type="submit" name="" value="Registrarse">
    </form>
  </body>
</html>
