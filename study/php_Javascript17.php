<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    $var[] = 100;
    $var[] = 'Tokyo';

    for ($i = 10; $i < 13; $i++) {
        $var[] = $i * 100;
    }

    print_r($var);
    print count($var);

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    let boxes = [100, 200, 300];

    for (let i = 5; i < 10; i++) {
        boxes[i] = i * 100;
    }

    //配列の要素数の長さ
    console.log(boxes.length);

    for (index in boxes) {
        console.log("boxes[" + index + "]:" + boxes[index]);
    }
</script>

</html>