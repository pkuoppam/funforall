<?php $this->layout('template', ['title' => 'Kaikki laitteet']) ?>

<h1>Kaikki laitteet</h1>

<div class='laitteet'>
<?php

foreach ($laitteet as $laite) {

  //$start = new DateTime($tapahtuma['tap_alkaa']);
  //$end = new DateTime($tapahtuma['tap_loppuu']);

  echo "<div>";
    echo "<div>$laite[nimi]</div>";
    //echo "<div>" . $start->format('j.n.Y') . "-" . $end->format('j.n.Y') . "</div>";
  echo "</div>";

}

?>
</div>