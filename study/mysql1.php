<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQLへ接続、データベースの選択</title>
</head>
<body>

<h1>MySQLへ接続、データベースの選択</h1>

<?php

$link = mysqli_connect('localhost', 'testuser', 'Pu8k38DNB5SlvMHu');

if (!$link) {
    die('接続失敗です。'.mysqli_error($link));
}

print('<p>接続に成功しました。</p>');

$db_selected = mysqli_select_db($link, 'uriage');

if (!$db_selected) {
    die('データベース選択失敗です。'.mysqli_error($link));
}

print('<p>uriageデータベースを選択しました。</p>');

//MySQLに対する処理

$close_flag = mysqli_close($link);

if ($close_flag) {
    print('<p>切断に成功しました。</p>');
}

?>

</body>
</html>