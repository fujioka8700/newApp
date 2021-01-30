<?php
    session_start();
    $old_id = session_id();

    $_SESSION['date'] = date('c');

    session_regenerate_id();
    $new_id = session_id();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッションIDの自動変更</title>
</head>
<body>

<h1>セッションIDの自動変更</h1>

<?php
    if (!isset($_COOKIE[session_name()])) {
        print('初回の訪問です。セッションを開始します。');
    } else {
        print '前のセッションIDは、'.$old_id.'です。<br>';
        print '今のセッションIDは、'.$new_id.'です。<br>';
    }

    //現在使っているセッションは、維持される。
    print_r($_SESSION);
?>

<br>
<a href="./index.php">ホームへ。</a>

</body>
</html>