<?php

  require_once HELPERS_DIR . 'DB.php';

  function lisaaVaraaja($nimi,$email,$puhelin,$salasana) {
    DB::run('INSERT INTO varaukset (nimi, email, puhelin, salasana) VALUE  (?,?,?,?);',[$nimi,$email,$puhelin,$salasana]);
    return DB::lastInsertId();
  }

  function haeHenkiloSahkopostilla($email) {
    return DB::run('SELECT * FROM varaukset WHERE email = ?;', [$email])->fetchAll();
  }

?>
