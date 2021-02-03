<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    $preflist = array('東京', '大阪', '福岡');
    foreach ($preflist as $pref) {
        print $pref . '<br />';
    }

    foreach ($preflist as $key => $pref) {
        print $preflist[$key] . '<br />';
    }

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>

    const preflist = new Array('東京', '大阪', '福岡');
    for(let pref of preflist) {
        console.log(pref);
    }

    for(let index in preflist) {
        console.log(preflist[index]);
    }

    preflist.forEach(function(item, index){
        console.log(item);
    });

</script>

</html>