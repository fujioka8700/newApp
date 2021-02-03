<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    $result[0] = 85;
    $result[1] = 92;
    $result[2] = 68;

    foreach ($result as $value) {
        print $value . '<br />';
    }

    sort($result);

    for ($i = 0; $i < count($result); $i++) {
        print $result[$i] . '<br />';
    }

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    let result = [85, 92, 68];

    for (let val of result) {
        console.log(val);
    }

    result.sort();

    for (let val of result) {
        console.log(val);
    }
</script>

</html>