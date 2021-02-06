<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $from = 'iranai7966@yahoo.co.jp';
    $to = 'fujioka8700@gmail.com';
    $subject = '件名: テスト送信';
    $message = <<< EOF
{$from}より。

こんにちは。
これはテスト送信です。
EOF;

    if (mb_send_mail($to, $subject, $message, "From: {$from}")) {
        echo '送信成功。';
    } else {
        echo '送信失敗。<br>エラーログを確認してください。 (xampp\sendmail\error.log)';
    }
    ?>
</body>

</html>