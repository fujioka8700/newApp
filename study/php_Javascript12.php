<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    $pricelist = array(80, 70, 120);
    asort($pricelist);
    // $array = array(80, 100, 120);
    // $pricelist = new ArrayObject($array);

    foreach ($pricelist as &$value) {
        $value *= 1.10;
    }
    unset($value); //指定した変数の割当を解除する。

    $value = 999;
    print_r($pricelist);

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    let pricelist = new Array(80, 100, 120);

    for(let index in pricelist) {
        pricelist[index] *= 1.10;
    }

    pricelist.forEach(function(value, index){
        console.log('[' + index + ']=' + Math.floor(value));
    });

</script>

</html>