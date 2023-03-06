<?php

  // Siistitään polku urlin alusta ja mahdolliset parametrit urlin lopusta.
  // Siistimisen jälkeen osoite /~pkuoppam/funforall/laite?id=1 on 
  // lyhentynyt muotoon /laite.
  $request = str_replace('/~pkuoppam/funforall','',$_SERVER['REQUEST_URI']);
  $request = strtok($request, '?');

  // Selvitetään mitä sivua on kutsuttu ja suoritetaan sivua vastaava 
  // käsittelijä.
  if ($request === '/' || $request === '/laitteet') {
    echo '<h1>Kaikki laitteet</h1>';
    } else if ($request === '/laite') {
    echo '<h1>Yksittäisen laitteen tiedot</h1>';
  } else {
    echo '<h1>Pyydettyä sivua ei löytynyt :(</h1>';
  }

?> 
