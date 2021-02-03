<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php
    $pref = '兵庫';

    switch ($pref) {
        case '大阪':
        case '兵庫':
        case '京都':
            print '関西です。';
            break;
        case '東京':
        case '神奈川':
        case '千葉':
            print '関東です。';
            break;
        default:
            print 'それ以外です。';
            break;
    }
    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    let pref = '岡山';

    switch (pref) {
        case '大阪':
        case '兵庫':
        case '京都':
            console.log('関西です。');
            break;
        case '東京':
        case '神奈川':
        case '千葉':
            console.log('関東です。');
            break;
        default:
            console.log('それ以外です。');
            break;
    }
</script>

</html>