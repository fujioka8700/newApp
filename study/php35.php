<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッション変数の削除とセッションIDの削除</title>
</head>

<body>

    <h1>ログアウトする。</h1>

    <?php
    //print_r($_COOKIE);
    print('セッション変数の一覧を表示します。<br>');
    print_r($_SESSION);
    print(session_id());
    print('<br>');

    print('セッションIDを表示します。<br>');
    print($_COOKIE['PHPSESSID'] . '<br>');

    print('<p>ログアウトします。</p>');

    //ログアウト処理
    $_SESSION = array();

    if (isset($_COOKIE['PHPSESSID'])) {
        setcookie('PHPSESSID', '', time() - 1800, '/');
    }

    session_destroy();
    ?>

    <a href="./php36.php">ログアウトの確認。</a>

</body>

</html>