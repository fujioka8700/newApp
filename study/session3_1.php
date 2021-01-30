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

<h1>ログインしました。</h1>

<?php
    if (!isset($_SESSION['visited'])) {
        print('初回の訪問です。セッションを開始します。<br>');

        $_SESSION['visited'] = 1;
        $_SESSION['date'] = date('c');
    } else {
        $visited = $_SESSION["visited"];
        $visited++;

        print('訪問回数は'.$visited.'です。<br>');

        $_SESSION["visited"] = $visited;

        if ($_SESSION['date']) {
            print('前回の訪問日時は'.$_SESSION['date'].'です。<br>');
        }

        $_SESSION['date'] = date('c');
    }
?>

<a href="./session3_2.php">ログアウトする。</a>

</body>
</html>