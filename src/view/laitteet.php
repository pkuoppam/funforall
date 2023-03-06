<?php $this->layout('template', ['title' => 'Kaikki laitteet']) ?>

<h1>Kaikki laitteet</h1>

<div class='laitteet'>
<?php

foreach ($laitteet as $laite) {

 echo "<div>";
  echo "<div>$laite[nimi]</div>";
  echo "<div><a href='laite?id=" . $laite['idvaraus'] . "'>TIEDOT</a></div>";
echo "</div>";


}

?>
</div>