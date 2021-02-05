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
    /*  print('セッションIDを表示します。<br>');
        print_r($_COOKIE);
        print($_COOKIE['PHPSESSID'].'<br>');
        print(session_id());*/

    // print_r($_SESSION);
    // print_r($_SERVER);
    if (!isset($_SESSION['visited'])) {
        print('初回の訪問です。セッションを開始します。<br>');

        $_SESSION['visited'] = 1;
        $_SESSION['date'] = date('c');
    } else {
        $visited = $_SESSION["visited"];
        $visited++;

        print('訪問回数は' . $visited . 'です。<br>');

        $_SESSION["visited"] = $visited;

        if ($_SESSION['date']) {
            print('前回の訪問日時は' . $_SESSION['date'] . 'です。<br>');
        }

        $_SESSION['date'] = date('c');
    }
    ?>

    <a href="./php35.php">ログアウトする。</a>

</body>

</html>