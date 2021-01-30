<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿した内容を画面表示</title>
</head>
<body>

<h1>投稿した内容を画面表示</h1>

<p>掲示板</p>

<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
<input type="text" name="personal_name"><br><br>
<textarea name="contents" rows="8" cols="40">
</textarea><br><br>
<input type="submit" name="btn1" value="投稿する">
</form>

<?php

$personal_name = $_POST['personal_name'];
$contents = $_POST['contents'];

//改行文字の前にHTMLの改行文字を挿入(nl2br)する。
$contents = nl2br($contents);

$data = "<hr>\r\n";
$data = $data."<p>投稿者:".$personal_name."</p>\r\n";
$data = $data."<p>内容:</p>\r\n";
$data = $data."<p>".$contents."</p>\r\n";

print $data;

$internet_forum_file = 'internet_forum.txt';

$fp = fopen($internet_forum_file, 'a+');

if ($fp){
    if (flock($fp, LOCK_EX)){
        if (fwrite($fp,  $data) === FALSE){
            print('ファイル書き込みに失敗しました');
        }

        flock($fp, LOCK_UN);
    }else{
        print('ファイルロックに失敗しました');
    }
}

fclose($fp);

?>

</body>
</html>