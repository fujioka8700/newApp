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
    $user = 'admin';
    $password = 'pass';
    // print_r($_SERVER);
    if (!isset($_SERVER['PHP_AUTH_USER'])){
        header('WWW-Authenticate: Basic realm="Private Page"');
        header('HTTP/1.0 401 Unauthorized');
    
        die('このページを見るにはログインが必要です');
    }else{
        if ($_SERVER['PHP_AUTH_USER'] != $user
            || $_SERVER['PHP_AUTH_PW'] != $password){
    
            header('WWW-Authenticate: Basic realm="Private Page"');
            header('HTTP/1.0 401 Unauthorized');
            die('このページを見るにはログインが必要です');
        }
    }
    ?>
    <p>ok</p>
</body>
</html>