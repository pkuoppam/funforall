<?php
  // Suoritetaan projektin alustusskripti.
  require_once '../src/init.php';

  // Siistitään polku urlin alusta ja mahdolliset parametrit urlin lopusta.
  // Siistimisen jälkeen osoite /~pkuoppam/funforall/laite?id=1 on 
  // lyhentynyt muotoon /laite.
  $request = str_replace($config['urls']['baseUrl'],'',$_SERVER['REQUEST_URI']);
  $request = strtok($request, '?');

  // Luodaan uusi Plates-olio ja kytketään se sovelluksen sivupohjiin.
  $templates = new League\Plates\Engine(TEMPLATE_DIR);


  // Selvitetään mitä sivua on kutsuttu ja suoritetaan sivua vastaava
  // käsittelijä.
  if ($request === '/' || $request === '/laitteet') {
    require_once MODEL_DIR . 'laite.php';
    $laitteet = haeLaitteet();
    echo $templates->render('laitteet',['laitteet' => $laitteet]);
  } else if ($request === '/laite') {
    require_once MODEL_DIR . 'laite.php';
    $laite = haeLaite($_GET['id']);
    if ($laite) {
      echo $templates->render('laite',['laite' => $laite]);
    } else {
      echo $templates->render('laitenotfound');
    }
  } else if ($request === '/lisaa_tili') {
    echo $templates->render('lisaa_tili');
  } else {
    echo $templates->render('notfound');
  }

?> 
