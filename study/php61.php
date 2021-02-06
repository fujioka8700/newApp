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

    // 定数を宣言
    define("TEST_MESSAGE", "テスト");

    // 定数を出力するためのクロージャ
    $constant = function ($c) {
        return $c;
    };
    // print TEST_MESSAGE;
    echo "こちらは{$constant(TEST_MESSAGE)}環境です。";

    ?>

</body>

</html>