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
$password = 'Pu8k38DNB5SlvMHu';

//PDOクラスのオブジェクトの作成
try {
    $dbh = new PDO($dsn, $user, $password);
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