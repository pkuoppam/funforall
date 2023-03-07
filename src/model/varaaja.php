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

  function paivitaVahvavain($email,$avain) {
    return DB::run('UPDATE varaaja SET vahvavain = ? WHERE email = ?', [$avain,$email])->rowCount();
  }

  function vahvistaTili($avain) {
    return DB::run('UPDATE varaaja SET vahvistettu = TRUE WHERE vahvavain = ?', [$avain])->rowCount();
  }

  function asetaVaihtoavain($email,$avain) {
    return DB::run('UPDATE varaaja SET nollausavain = ?, nollausaika = NOW() + INTERVAL 30 MINUTE WHERE email = ?', [$avain,$email])->rowCount();
  }

  function tarkistaVaihtoavain($avain) {
    return DB::run('SELECT nollausavain, nollausaika-NOW() AS aikaikkuna FROM varaaja WHERE nollausavain = ?', [$avain])->fetch();
  }

  function vaihdaSalasanaAvaimella($salasana,$avain) {
    return DB::run('UPDATE varaaja SET salasana = ?, nollausavain = NULL, nollausaika = NULL WHERE nollausavain = ?', [$salasana,$avain])->rowCount();
  }

?>
