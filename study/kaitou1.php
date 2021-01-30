<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETで送られたデータ処理</title>
</head>
<body>

<h1>GETで送られたデータ処理</h1>

<?php

    $input_data = $_GET['text1'];
    print('入力した値は'.$input_data.'<br>');
    print('帰ってきた値の型は'.gettype($input_data));

?>

</body>
</html>