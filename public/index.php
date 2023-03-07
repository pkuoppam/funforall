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
  switch ($request) {
    case '/':
    case '/laitteet':
      require_once MODEL_DIR . 'laite.php';
      $laitteet = haeLaitteet();
      echo $templates->render('laitteet',['laitteet' => $laitteet]);
      break;
    case '/laite':
      require_once MODEL_DIR . 'laite.php';
      $laite = haeLaite($_GET['id']);
      if ($laite) {
        echo $templates->render('laite',['laite' => $laite]);
      } else {
        echo $templates->render('laitenotfound');
      }
      break;
    case '/lisaa_tili':
      if (isset($_POST['laheta'])) {
        $formdata = cleanArrayData($_POST); 
        require_once CONTROLLER_DIR . 'tili.php';
        $tulos = lisaaTili($formdata);
        if ($tulos['status'] == "200") {
          echo $templates->render('tili_luotu', ['formdata' => $formdata]);
          break;
        }
        echo $templates->render('lisaa_tili', ['formdata' => $formdata, 'error' => $tulos['error']]);
        break;
      } else {
        echo $templates->render('lisaa_tili', ['formdata' => [], 'error' => []]);
        break;
      }
    case "/kirjaudu":
      if (isset($_POST['laheta'])) {
        require_once CONTROLLER_DIR . 'kirjaudu.php';
        if (tarkistaKirjautuminen($_POST['email'],$_POST['salasana'])) {
          echo "Kirjautuminen ok!";
        } else {
          echo $templates->render('kirjaudu', [ 'error' => ['virhe' => 'Väärä käyttäjätunnus tai salasana!']]);
        }
        } else {
          echo $templates->render('kirjaudu', [ 'error' => []]);
        }
        break;
  
  
    default:
      echo $templates->render('notfound');
  }    


?> 
