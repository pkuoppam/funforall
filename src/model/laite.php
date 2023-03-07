<?php

  require_once HELPERS_DIR . 'DB.php';

  function haeLaitteet() {
    return DB::run('SELECT * FROM laitteet ORDER BY nimi;')->fetchAll();
  }

  function haeLaite($id) {
    return DB::run('SELECT * FROM laitteet WHERE idlaitteet = ?;',[$id])->fetch();
  }

?>
