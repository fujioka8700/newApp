<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの追加(INSERT)</title>
</head>
<body>

<h1>データの追加(INSERT)</h1>

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
    $sql = 'INSERT INTO shouhin (id, name) VALUES (?, ?)';
    $stmt = $dbh->prepare($sql);

    //プリペアドステートメントを実行。データの挿入
    $stmt->execute(array(12, 'yamato'));

    //PDOStatement::execute() メソッドによって実行される SQL ステートメントを準備。
    $sql = 'SELECT id, name FROM shouhin WHERE id > ? AND id < ?';
    $stmt = $dbh->prepare($sql);

    //プリペアドステートメントを実行。データの表示
    $stmt->execute(array(0, 20));

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