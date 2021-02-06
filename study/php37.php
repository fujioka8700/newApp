<?php
session_name('phpsession');
    session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッション名の取得と変更</title>
</head>
<body>

<h1>セッション名の取得と変更</h1>

<?php
    print 'セッション名:'.session_name().'<br>';
    print 'セッションID:'.session_id().'<br>';
    print_r($_COOKIE);
    $_COOKIE[session_name()];

    print('セッションIDの表示します。<br>');
    if (!isset($_COOKIE[session_name()])) {
        print('セッションは登録されていません。<br>');
    } else {

        print $_COOKIE[session_name()].'<br>';
    }
?>

<br>
<a href="./index.php">ホームへ。</a>

</body>
</html>