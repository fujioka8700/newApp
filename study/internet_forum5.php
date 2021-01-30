<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板の完成版</title>
</head>
<body>

<h1>掲示板の完成版</h1>

<p>掲示板</p>

<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
<input type="text" name="personal_name"><br><br>
<textarea name="contents" rows="8" cols="40">
</textarea><br><br>
<input type="submit" name="btn1" value="投稿する">
</form>

<?php

//POSTかつ、投稿者＆内容、記入ある場合。
if($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["personal_name"] && $_POST["contents"]) {
    //以前の書き込み内容と同内容は、書き込みできない。
    if ($_SESSION["personal_name"] !== $_POST["personal_name"] ||
        $_SESSION["contents"] !== $_POST["contents"]) {
        writeData();
    }
}

readData();

//テキストから掲示板表示。
function readData(){
    $internet_forum_file = 'internet_forum.txt';

    $fp = fopen($internet_forum_file, 'r');

    if ($fp){
        if (flock($fp, LOCK_SH)){
            while (!feof($fp)) {
                $buffer = fgets($fp);
                print($buffer);
            }

            flock($fp, LOCK_UN);
        }else{
            print('ファイルロックに失敗しました');
        }
    }

    fclose($fp);
}

//テキストに書き込み。
function writeData() {
    $personal_name = $_POST['personal_name'];
    $contents = $_POST['contents'];

    //二重書き込みがないか確認用。
    $_SESSION['personal_name'] = $personal_name;
    $_SESSION['contents'] = $contents;

    //改行文字の前にHTMLの改行文字を挿入(nl2br)する。
    $contents = nl2br($contents);

    $data = "<hr>\r\n";
    $data = $data."<p>投稿者:".$personal_name."</p>\r\n";
    $data = $data."<p>内容:</p>\r\n";
    $data = $data."<p>".$contents."</p>\r\n";

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
}

?>

</body>
</html>