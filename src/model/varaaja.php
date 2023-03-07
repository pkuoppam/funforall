<?php

  require_once HELPERS_DIR . 'DB.php';

  function lisaaVaraaja($nimi,$puhelin,$email,$salasana) {
    DB::run('INSERT INTO varaukset (nimi, puhelin, email, salasana) VALUE  (?,?,?,?);',[$nimi,$puhelin,$email,$salasana]);
    return DB::lastInsertId();
  }

?>
