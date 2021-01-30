<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTで送られたデータ処理</title>
</head>
<body>

<h1>POSTで送られたデータ処理</h1>

<?php

$input_data = (int)$_POST['text1'];

if ($input_data == 40){
    print('正解です。おめでとうございます。');
} else {
    print('残念でした。もう一度チャンレンジして下さい。');

    print('<p>');
    print('問題：10×4＝');
    print('</p>');

    print('<form method="POST" action="./kaitou2.php">');
    print('<input type="text" name="text1">');
    print('<input type="submit" name="btn1" value="回答">');
    print('</form>');
}

?>

</body>
</html>