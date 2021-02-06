<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASCIIメールの送信(mail関数)</title>
</head>
<body>

<h1>ASCIIメールの送信(mail関数)</h1>

<?php

    $header = "From: fujioka@gmail.com";

    if (mb_send_mail('fujioka8700@gmail.com', 'TEST SUBJECT', 'TEST BODY', $header)) {
        echo '送信完了';
    } else {
        echo '送信失敗';
    }

?>

</body>
</html>