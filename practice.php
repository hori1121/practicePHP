
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

try{
  $db = new PDO('mysql:dbname=mydb;host=127.0.0.1:3300;charset=utf8',
  'root','');
}catch(PDOException $e){
  echo 'DB接続エラー: '.$e->getMessage();
}

?>
</body>
</html>
