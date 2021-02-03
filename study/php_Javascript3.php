<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php
$domain = 'jp';

if ($domain == 'in') {
    print 'インドのトップレベルドメイン';
} else if ($domain == 'cn') {
    print '中国のトップレベルドメイン';
} else if ($domain == 'jp') {
    print '日本のトップレベルドメイン';
} else {
    print '不明です';
}
    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
const domain = 'jp';

if (domain == 'in') {
    console.log('インドのトップレベルドメイン');
} else if (domain == 'cn') {
    console.log('中国のトップレベルドメイン');
} else if (domain == 'jp') {
    console.log('日本のトップレベルドメイン');
} else {
    console.log('不明です');
}
</script>

</html>