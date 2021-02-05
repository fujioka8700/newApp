<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッション変数の書き込みと読み込み</title>
</head>
<body>

<h1>セッション変数の書き込みと読み込み</h1>

<?php
    if (!isset($_SESSION['visited'])) {
        print('初回の訪問です。セッションを開始します。');

        $_SESSION['visited'] = 1;
        $_SESSION['date'] = date('c');
    } else {
        $visited = $_SESSION["visited"];
        $visited++;

        print('訪問回数は'.$visited.'です。<br>');

        $_SESSION["visited"] = $visited;

        if ($_SESSION['date']) {
            print('前回の訪問日時は'.$_SESSION['date'].'です。');
        }

        $_SESSION['date'] = date('c');
    }
?>

</body>
</html>