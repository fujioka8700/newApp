<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDOクラスコンストラクタとDSNの記述</title>
</head>
<body>

<h1>PDOクラスコンストラクタとDSNの記述</h1>

<?php

$dsn = 'mysql:dbname=uriage;host=localhost';
$user = 'testuser';
$password = 'XWSJ8sATvyCui2KT';

try {
    //PDOクラスのオブジェクトの作成
    $dbh = new PDO($dsn, $user, $password);

    if ($dbh == null) {
        print('接続に失敗しました。<br>');
    } else {
        print('接続に成功しました。<br>');
    }

    //非推奨
    // $dbh->query('SET NAMES utf8');

    //データの表示
    $sql = 'SELECT * FROM shouhin';
    // $sql = 'INSERT  INTO  shouhin  VALUES (id=1, name="BD")';
    $dbh->query('INSERT INTO shouhin (id, name) VALUES (1, "BD")');
    foreach ($dbh->query($sql) as $row) {
        print($row['id'].':');
        print($row['name'].'<br>');
    }
} catch (PDOException $e){
    print('Connection failed:'.$e->getMessage());
    die();
}

//データベースへの接続を閉じる
$dbh = null;

print '<p>データベースへの接続を閉じました。</p>';

?>

</body>
</html>