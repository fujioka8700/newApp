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
    print('セッション変数の一覧を表示します。<br>');
    if (isset($_SESSION["visited"])) {
        print_r($_SESSION);
        print('<br>');
    } else {
        print('セッション変数visitedは登録されていません。<br>');
    }

    print('セッションIDの表示します。<br>');
    if (!isset($_COOKIE[session_name()])) {
        print('セッションは登録されていません。<br>');
    } else {
        print $_COOKIE[session_name()].'<br>';
    }

    //ログアウト処理
    // $_SESSION = array();

    // if (isset($_COOKIE['PHPSESSID'])) {
    //     setcookie('PHPSESSID', '', time() - 1800);
    // }

    setcookie(session_name(), '', time() - 1800, '/');

    session_destroy();
?>

<a href="./session3_3.php">ログアウトの確認。</a>

</body>
</html>