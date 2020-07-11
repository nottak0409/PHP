<?php

require('../app/functions.php');

createToken();

define('FILENAME', '../app/messages.txt');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  validateToken();

  $message = trim(filter_input(INPUT_POST, 'message'));
  $message = $message !== '' ? $message : '...';

  $fp = fopen(FILENAME, 'a');
  fwrite($fp, $message . "\n");
  fclose($fp);

  header('Location: http://localhost:8080/result.php');
  exit;
}

$messages = file(FILENAME, FILE_IGNORE_NEW_LINES);

include('../app/_parts/_header.php');

?>
<h1>メモ機能</h1>
  <ul>
  <?php foreach ($messages as $message): ?>
    <li><?= h($message); ?></li>
  <?php endforeach; ?>
  </ul>

  <form action="" method="post">
    <input type="text" name="message">
    <button>Post</button>
    <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
  </form>
  <a href="dice.php">サイコロ</a><br>
  <a href="bbs.php">簡易掲示板</a><br>
  <a href="calendar.php">カレンダー</a><br>

<?php

include('../app/_parts/_footer.php');
