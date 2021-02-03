<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php
    $pref = '大阪';
    $ary = array('兵庫', '大阪', '京都');

    foreach($ary as $val) {
        if ($pref === $val) {
            print "関西です。";
        }
    }
    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    const pref = '大阪';
    const ary = new Array('兵庫', '大阪', '京都');

    for(let val of ary) {
        if (pref === val) {
            console.log("関西です。");
        }
    }

    ary.forEach((item, index)=>{
        console.log(item);
    });
</script>

</html>