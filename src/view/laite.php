<?php $this->layout('template', ['title' => $laite['nimi']]) ?>



<h1><?=$laite['nimi']?></h1>
<div><?=$laite['kuvaus']?></div>

<?php
  if ($loggeduser) {
    if (!$varaukset) {
      echo "<div class='flexarea'><a href='tee_varaus?id=$laite[idlaitteet]' class='button'>VARAA LAITE</a></div>"; 
  } else {
    echo "<div class='flexarea'>";
    echo "<div>Olet varannut laitteen käyttöösi!<br>Olemme yhteydessä, kun laite vapaana.</div><br>";
    echo "<a href='peru_varaus?id=$laite[idlaitteet]' class='button'>PERU VARAUS</a>";
    echo "</div>";
  }
}
?>
