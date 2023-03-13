<?php $this->layout('template', ['title' => $laite['nimi']]) ?>



<h1><?=$laite['nimi']?></h1>
<div><?=$laite['kuvaus']?></div><br><br>
<div><?=$laite['hinta']?>€/vrk</div>
<br>


<?php
  if ($loggeduser) {
      if (!$varaukset) {
        echo "<div class='flexarea'><a href='tee_varaus?id=$laite[idlaitteet]' class='button2'>VARAA LAITE</a></div>"; 
      } else {
        echo "<div class='flexarea'>";
        echo "<div>Olet varannut laitteen käyttöösi!<br>Olemme yhteydessä, kun laite on vapaana.</div>";
        echo "<a href='peru_varaus?id=$laite[idlaitteet]' class='button2'>PERU VARAUS</a>";
        echo "</div>";
    }
  }
?>
