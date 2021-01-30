<?php
    if (isset($_COOKIE["visited"])) {
        $count = $_COOKIE["visited"] + 1;
    } else {
        $count = 1;
    }

    if ($count > 3) {
        $flag = setcookie("visited", $count, time() - 1800);
    } else {
        $flag = setcookie("visited", $count);
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クッキーの読み込み</title>
</head>
<body>

<h1>クッキーの読み込み</h1>

<?php
    if ($flag) {
        print('<p>クッキーを書き込みました。</p>');
    } else {
        print('<p>クッキーの書き込みに失敗しました。</p>');
    }
    print('<p>訪問回数は'.$count.'回目です。</p>');
?>

</body>
</html>