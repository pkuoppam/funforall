<?php $this->layout('template', ['title' => $laite['nimi']]) ?>



<h1><?=$laite['nimi']?></h1>
<div><?=$laite['kuvaus']?></div>

<?php
  if ($loggeduser) {
    if (!$varaukset) {
      echo "<div class='flexarea'><a href='ilmoittaudu?id=$laite[idlaitteet]' class='button'>VARAA LAITE</a></div>"; 
  } else {
    echo "<div class='flexarea'>";
    echo "<div>Olet ilmoittautunut tapahtumaan!</div>";
    echo "<a href='peru?id=$laite[idlaitteet]' class='button'>PERU VARAUS</a>";
    echo "</div>";
  }
}
?>
