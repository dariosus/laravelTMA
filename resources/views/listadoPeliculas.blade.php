<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h1>Mis películas</h1>
    <?php if (!empty($peliculas)) : ?>
      <ul>
        <?php foreach ($peliculas as $clave => $pelicula) : ?>
          <li>
            <a href="/peliculas/<?=$clave?>">
              <?=$pelicula?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else : ?>
      <div class="">
        No hay peliculas
      </div>
    <?php endif; ?>
  </body>
</html>
