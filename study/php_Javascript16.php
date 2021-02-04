<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    $value_array = ['value1' => 1, 'value2' => 2, 'value3' => 3, 'value4' => 4, 'value5' => 5];

    //配列をJSON形式に変換
    $jsonstr =  json_encode($value_array);
    echo $jsonstr;
    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    let val = {
        "value1" : 1,
        "value2" : 2,
        "value3" : 3,
        "value4" : 4,
        "value5" : 5
    };
    //jsonで要素数を取得する
    console.log(Object.keys(val).length);

    for (index in val) {
        console.log(index + ":" + val[index]);
    }
</script>

</html>