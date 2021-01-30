<?php
    session_name('phpsession');
    // session_id('1000');
    session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッション名とセッションIDの、取得と変更</title>
</head>
<body>

<h1>セッション名とセッションIDの、取得と変更</h1>

<?php
    print 'セッション名:'.session_name().'<br>';
    print 'セッションID:'.session_id().'<br>';
    print_r($_COOKIE);
?>

<br>
<a href="./index.php">ホームへ。</a>

</body>
</html>