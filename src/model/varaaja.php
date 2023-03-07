<?php

  require_once HELPERS_DIR . 'DB.php';

  function lisaaVaraaja($nimi,$email,$puhelin,$salasana) {
    DB::run('INSERT INTO varaaja (nimi, email, puhelin, salasana) VALUE  (?,?,?,?);',[$nimi,$email,$puhelin,$salasana]);
    return DB::lastInsertId();
  }

  function haeVaraajaSahkopostilla($email) {
    return DB::run('SELECT * FROM varaaja WHERE email = ?;', [$email])->fetchAll();
  }

  function haeVaraaja($email) {
    return DB::run('SELECT * FROM varaaja WHERE email = ?;', [$email])->fetch();
  }

?>
