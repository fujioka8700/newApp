<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    $member = array("夏川椎菜", "麻倉もも", "雨宮天");
    $color = ["yellow", "pink", "blue"];
    $trysail = array($member, $color);

    print_r($trysail);
    print '<br>'. gettype($trysail);

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    let member = new Array("夏川椎菜", "麻倉もも", "雨宮天");
    let color = ["yellow", "pink", "blue"];
    let trysail = new Array(member, color);

    console.log(trysail);
    console.log(typeof(trysail));
</script>

</html>