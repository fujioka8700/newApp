<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTかGETかを判別</title>
</head>
<body>

<h1>POSTかGETかを判別</h1>

<p>POSTとGETのリクエストの識別</p>

<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
<input type="text" name="personal_name"><br><br>
<input type="submit" name="btn1" value="投稿する">
</form>

<p>
<a href="<?php print($_SERVER['PHP_SELF']) ?>">自分自身へのリンク</a>
</p>

<?php

    print('<hr>結果表示<br>');

    if($_SERVER["REQUEST_METHOD"] !== "POST"){
        print('GETによる要求です');
    } else {
        print('POSTによる要求です');
    }

?>

</body>
</html>