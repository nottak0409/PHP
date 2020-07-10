<?php

define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'nottak0409');
define('DB_PASSWORD', 'swan374red697');
define('PDO_DSN', 'mysql:host=localhost;dbname=' . DB_DATABASE);

try {
  // connect
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // insert
  $db->exec("insert into users (name, score) values ('noda', 65)");
  echo "user added!";

  // disconnect
  $db = null;

} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}

?>
