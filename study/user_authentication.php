<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー認証</title>
</head>
<body>

<h1>ユーザー認証</h1>

<?php

// if (!isset($_SERVER['PHP_AUTH_USER'])){
//     header('WWW-Authenticate: Basic realm="Private Page"');
//     header('HTTP/1.0 401 Unauthorized');
// }
// if (!isset($_SERVER['PHP_AUTH_USER'])){

// }
// header('WWW-Authenticate: Basic realm="Private Page"');
// header('HTTP/1.0 401 Unauthorized');

$user = 'admin';
$password = 'pass';

if (!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic realm="Private Page"');
    header('HTTP/1.0 401 Unauthorized');

    //キャンセルを押した場合
    die('このページを見るにはログインが必要です');
} else {
    //OKを押した場合
    if ($_SERVER['PHP_AUTH_USER'] != $user
        || $_SERVER['PHP_AUTH_PW'] != $password){

        header('WWW-Authenticate: Basic realm="Private Page"');
        header('HTTP/1.0 401 Unauthorized');

        die('このページを見るにはログインが必要です');
    }
}

/* 認証に成功すればここに処理が来る */

?>

<p>ようこそ、会員向けページへ</p>

</body>
</html>