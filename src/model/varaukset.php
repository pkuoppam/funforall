<?php

  require_once HELPERS_DIR . 'DB.php';

  function haeVaraukset($idvaraaja,$idlaitteet) {
    return DB::run('SELECT * FROM varaukset WHERE idvaraaja = ? AND idlaitteet = ?',
                   [$idvaraaja, $idlaitteet])->fetchAll();
  }

  function lisaaVaraukset($idvaraaja,$idlaitteet) {
    DB::run('INSERT INTO varaukset (idvaraaja, idlaitteet) VALUE (?,?)',
            [$idvaraaja, $idlaitteet]);
    return DB::lastInsertId();
  }

  function poistaVaraukset($idvaraaja, $idlaitteet) {
    return DB::run('DELETE FROM varaukset  WHERE idvaraaja = ? AND idlaitteet = ?',
                   [$idvaraaja, $idlaitteet])->rowCount();
  }

?>
