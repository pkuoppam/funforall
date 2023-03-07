<?php $this->layout('template', ['title' => 'Uuden tilin luonti']) ?>

<h1>Uuden tilin luonti</h1>

<form action="" method="POST">
  <div>
    <label for="etunimi">Etunimi:</label>
    <input id="etunimi" type="text" name="etuninimi">
  </div>
  <div>
    <label for="sukunimi">Sukunimi:</label>
    <input id="sukunimi" type="text" name="sukunimi">
  </div>
  <div>
    <label for="puhelin">Puhelin numero:</label>
    <input id="puhelin" type="text" name="puhelin">
  </div>
  <div>
    <label for="synaika">Syntymäaika:</label>
    <input id="synaika" type="text" name="synaika">
  </div>
  <div>
    <label for="email">Sähköposti:</label>
    <input id="email" type="email" name="email">
  </div>
  <div>
    <label for="salasana1">Salasana:</label>
    <input id="salasana1" type="password" name="salasana1">
  </div>
  <div>
    <label for="salasana2">Salasana uudelleen:</label>
    <input id="salasana2" type="password" name="salasana2">
  </div>
  <div>
    <input type="submit" name="laheta" value="Luo tili">
  </div>
</form>
