<?php
    setcookie("buy[0]", "Television");
    setcookie("buy[1]", "Video");
    setcookie("buy[2]", "Audio");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1つのクッキーに複数の値を格納する</title>
</head>
<body>

<h1>1つのクッキーに複数の値を格納する</h1>

<?php
    if (isset($_COOKIE['buy'])) {
        $buy = $_COOKIE['buy'];
        print('<p>');
        print('購入したものは下記の通りです。<br>');
        foreach($buy as $value) {
            print $value.'<br>';
        }
        print('</p>');
    } else {
        print('<p>値をセットしました。</p>');
    }
?>

</body>
</html>