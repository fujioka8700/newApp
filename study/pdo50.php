<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの削除(DELETE)</title>
</head>
<body>

<h1>データの削除(DELETE)</h1>

<?php

//文字セットの設定: pdo_mysql
$dsn = 'mysql:dbname=uriage;host=localhost;charset=utf8mb4';
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

    //PDOStatement::execute() メソッドによって実行される SQL ステートメントを準備。
    $sql = 'DELETE FROM `shouhin` WHERE `shouhin`.`id` = :delete_id';
    $stmt = $dbh->prepare($sql);

    //プリペアドステートメントを実行。データの削除
    $stmt->execute(array(':delete_id'=>8));

    //PDOStatement::execute() メソッドによって実行される SQL ステートメントを準備。
    $sql = 'SELECT id, name FROM shouhin WHERE id > ? AND id < ?';
    $stmt = $dbh->prepare($sql);

    //プリペアドステートメントを実行。データの表示
    $stmt->execute(array(0, 10));

    //データの表示
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        print($result['id'].':');
        print($result['name'].'<br>');
    }

} catch (PDOException $e){
    print('Connection failed:'.$e->getMessage());
}

//データベースへの接続を閉じる
$dbh = null;

print '<p>データベースへの接続を閉じました。</p>';

?>

</body>
</html>
