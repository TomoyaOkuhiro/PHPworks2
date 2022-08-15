<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <hr>
  <p>何かお話ししてください</p>
  <form method="post">
    <input type="text" name="a">
    <input type="submit" value="送るよ">
  </form>
  <?php
  // *ファイル読み込み("fileName","method")
  $f = fopen("chat.txt", "at");
  fwrite($f, $_POST["a"] . "\n");
  fclose($f);
  echo "<pre>";
  readfile("chat.txt");
  echo "</pre>";
  ?>
  <hr>
</body>

</html>