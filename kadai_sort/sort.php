<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編_ソートの課題</title>
</head>

<body>
  <p>
    <?php
    function sort_2way($array, $order) {
      if ($order === TRUE) {
        // 昇順に並び替える
        echo '昇順にソートします。<br>';
        sort($array);
      } else {
        // 降順に並び替える
        echo '降順にソートします。<br>';
        rsort($array);
      }
      foreach ($array as $array) {
        echo $array . '<br>';
      }
    }

    // ソートする配列を宣言
    $num = [15, 4, 18, 23,10];

    // 関数の呼び出し（昇順）
    sort_2way($num, TRUE);

    // 関数の呼び出し（降順）
    sort_2way($num, FALSE);
    ?>
  </p>
</body>
</html>