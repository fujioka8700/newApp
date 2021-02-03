<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    $count = 0;
    $sum = 0;

    do {
        $count++;
        if ($count % 2 == 0) {
            //countが偶数の時は、足さない。
            continue;
        }
        $sum += $count;
    } while ($count < 100);
    print 'sum = ' . $sum;

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    let count = 0;
    let sum = 0;

    do {
        count++;
        if (count % 2 == 0) {
            //countが偶数の時は、足さない。
            continue;
        }
        sum += count;
    } while (count < 100);
    console.log('sum = ' + sum);

</script>

</html>