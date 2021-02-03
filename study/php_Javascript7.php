<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    $lang = 'Jp';

    $msg = $lang === 'Jp' ? 'こんにちは' : 'Hello';
    print $msg;

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>

    let lang = 'Jp';

    let msg = lang === 'Jp' ? 'こんにちは' : 'Hello';
    console.log(msg);

</script>

</html>