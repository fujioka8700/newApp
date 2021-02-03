<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    for ($num = 0; $num < 5; $num++) {
        print 'num=' . $num . '<br />';
    }

    for ($i=0, $j=3; $i < 3; $i++,$j--) {
        print '$i='.$i.', $j='.$j.'<br />';
    }

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>

    for (num = 0; num < 5; num++) {
        console.log('num=' + num);
    }

    for (i=0, j=3; i < 3; i++, j--) {
        console.log('i=' + i + ', j=' + j);
    }

</script>

</html>