<!DOCTYPE html>
<html lang="fi">
  <head>
    <title>FunForAll - <?=$this->e($title)?></title>
    <meta charset="UTF-8"> 
    <link href="styles/styles.css" rel="stylesheet">
  </head>
  <body> 
  <header>
    <div><a href="<?=BASEURL."/etusivu"?>"><img src="<?=BASEURL."/images/logo.jpg"?>" alt="Etusivu"></a></div>
    <!--<h1>Fun For All</h1>-->
    <div class="profile1">
        <?php
          if (isset($_SESSION['user'])) {
            echo "<div>$_SESSION[user]</div>";
          }
        ?>
</header>
  <nav>
  <div><a href="<?=BASEURL."/etusivu"?>">Etusivu</a></div>
  <div><a href="<?=BASEURL."/laitteet"?>">Laitteet</a></div>
  <div><a href="<?=BASEURL."/maksu"?>">Maksutavat</a></div>
  <div><a href="<?=BASEURL."/ehdot"?>">Sopimusehdot</a></div>
  <div><a href="<?=BASEURL."/yhteystiedot"?>">Yhteystiedot</a></div>
  <div><a href="<?=BASEURL."/yritys"?>">Meistä</a></div>
  <div class="profile">
        <?php
          if (isset($_SESSION['user'])) {
           
            echo "<div><a href='logout'>Kirjaudu ulos</a></div>";
          } else {
            echo "<div><a href='kirjaudu'>Kirjaudu</a></div>";
          }
        ?>
        
        


  </nav>
    <section>
      <?=$this->section('content')?>
    </section>
    <footer>
      <hr>
      <div>Fun For All by pkuoppam</div>
    </footer>
  </body>
</html>
