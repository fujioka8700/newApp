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

<h1>ログアウトの確認。</h1>

<?php
    print('セッション変数の確認をします。<br>');
    // print_r($_SESSION);
    if (!isset($_SESSION['visited'])) {
        print('セッション変数visitedは登録されていません。<br>');
    } else {
        print $_SESSION['visited'].'<br>';
    }

    setcookie(session_name(), '', time() - 1800, '/');

    print('セッションIDの確認をします。<br>');
    if (!isset($_COOKIE[session_name()])) {
        print('セッションは登録されていません。<br>');
    } else {
        print $_COOKIE[session_name()].'<br>';
    }
?>

<a href="./index.php">ホームへ。</a>

</body>
</html>