<?php
    $flag = setcookie("visited", 1);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クッキーの利用</title>
</head>
<body>

<h1>クッキーの利用</h1>

<?php
    if ($flag) {
        print('<p>クッキーを書き込みました</p>');
    } else {
        print('<p>クッキーの書き込みに失敗しました</p>');
    }

    print_r($_COOKIE);
?>

</body>
</html>