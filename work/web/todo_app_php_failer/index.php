<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/function.php');
require_once(__DIR__ . '/Todo.php');

// get todo
$todoApp = new \MyApp\Todo();
$todos = $todoApp->getAll();

var_dump($todos);
exit;

?>
<!DOCTYPE>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <title>My Todos</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div id="container">
    <h1>Todos</h1>
    <form action="">
      <input type="text" id="new_todo" placeholder="what needs to be done?" />
    </form>
    <ul>
      <li>
        <input type="checkbox" />
        <span>Do something</span>
        <div class="delete_todo">x</div>
      </li>
      <li>
        <input type="checkbox" checked/>
        <span class="done">something again!</span>
        <div>x</div>
      </li>
    </ul>
  </div>
</body>
</html>
