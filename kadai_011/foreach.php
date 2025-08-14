<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $ver_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach($ver_data as $key => $value){
      echo "{$key}:{$value}<br>";
    }
  ?>
</body>
</html>