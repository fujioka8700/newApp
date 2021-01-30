<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッションの開始</title>
</head>
<body>

<h1>セッションの開始</h1>

<?php
    if (!isset($_COOKIE["PHPSESSID"])) {
        print('初回の訪問です。セッションを開始します。');
    } else {
        print('セッションは開始しています。<br>');
        print('セッションIDは'.$_COOKIE["PHPSESSID"].'です。');
    }
?>

</body>
</html>