<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQLへ接続、接続失敗時のエラー表示</title>
</head>
<body>

<h1>MySQLへ接続、接続失敗時のエラー表示</h1>

<?php

//文字セットの設定: pdo_mysql
$dsn = 'mysql:dbname=uriage;host=localhost;charset=utf8mb4';
$user = 'testuser';
$password = 'Pu8k38DNB5SlvMHu';

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