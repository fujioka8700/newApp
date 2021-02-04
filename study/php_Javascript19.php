<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php
    $var = array(
        "Tokyo" => "東京",
        "Osaka" => "大阪",
        "Fukuoka" => "福岡"
    );

    print_r($var);

    $var = array();

    print_r($var);

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    let val = {
        "Tokyo": "東京",
        "Osaka": "大阪",
        "Fukuoka": "福岡"
    }

    console.log(val);

    //連想配列の初期化
    val = {};

    console.log(val);
</script>

</html>