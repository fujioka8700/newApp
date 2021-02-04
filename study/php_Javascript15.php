<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    $var[0] = 14;
    $var[2] = 'Tokyo';
    $var[-4] = 8400;

    $var['yamada'] = 86;
    $var['endou'] = 75;
    $var['aichi'] = 'nagoya';

    $var['8'] = 75;  //キーは整数
    $var[8] = 75;    //キーは整数
    $var['08'] = 75; //キーは文字列

    foreach ($var as $key => $val) {
        print '[キー]:' . $key . '[値]:' . $val . '[型]:' . gettype($val) . '<br />';
    }

    print_r($var);
    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    let val = {
        0: 14,
        2: "Tokyo",
        4: 8400,
        "Yamada": 86
    };
    //jsonで要素数を取得する
    console.log(Object.keys(val).length);

    for (index in val) {
        console.log(index + "=" + val[index]);
    }
</script>

</html>