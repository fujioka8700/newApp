<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの取得(SELECT)</title>
</head>
<body>

<h1>データの取得(SELECT)</h1>

<?php

//MySQLサーバーへの接続する
$link = mysqli_connect('localhost', 'testuser', 'Pu8k38DNB5SlvMHu');

if (!$link) {
    die('接続失敗です。'.mysqli_error($link));
}

print('<p>接続に成功しました。</p>');

//クエリを実行するためのデフォルトのデータベースを選択する
$db_selected = mysqli_select_db($link, 'uriage');

if (!$db_selected) {
    die('データベース選択失敗です。'.mysqli_error($link));
}

print('<p>uriageデータベースを選択しました。</p>');

//クライアントのデフォルト文字セットを設定
mysqli_set_charset($link, 'utf8');

//データベース上でクエリを実行する
$result = mysqli_query($link , 'SELECT id, name FROM shouhin');

if (!$result) {
    die('クエリーが失敗しました。'.mysqli_error($link));
}

//結果の行を連想配列で取得する
while ($row = mysqli_fetch_assoc($result)) {
    print('<p>');
    print('id='.$row['id']);
    print(', name='.$row['name']);
    print('</p>');
}

//MySQLサーバーへの接続を、切断する
$close_flag = mysqli_close($link);

if ($close_flag) {
    print('<p>切断に成功しました。</p>');
}

?>

</body>
</html>