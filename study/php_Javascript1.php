<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php
    define("STRING_", "100");
    define("NUMBER", 100);

    // 定数を出力するためのクロージャ
    $constant = function($c){ return $c; };

    print "STRING_:{$constant(STRING_)} 型:". gettype($constant(STRING_)).'<br>';
    print "num:{$constant(NUMBER)} 型:". gettype($constant(NUMBER)).'<br>';

    if (STRING_ === NUMBER) {
        print '同じです。';
    } else {
        print '違います。';
    }
    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    const str = '100';
    const num = 100;

    console.log(`str:${str} 型:${typeof(str)}`);
    console.log(`num:${num} 型:${typeof(num)}`);

    if (str === num) {
        console.log('同じです。');
    } else {
        console.log('違います。');
    }
</script>

</html>