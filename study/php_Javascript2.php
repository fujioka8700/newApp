<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php
    $math = 40;
    $english = 82;

    print "数学:".$math."点です<br>";
    print "英語:".$english."点です<br>";

    if ($math < 50 || $english < 50) {
        print("補修を受けてください。");
    }
    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    const math = 40;
    const english = 82;

    console.log("数学:" + math + "点です");
    console.log("英語:" + english + "点です");

    if (math < 50 || english < 50) {
        console.log("補修を受けてください。");
    }
</script>

</html>