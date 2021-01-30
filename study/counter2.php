<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カウンタを0詰めで表示する</title>
</head>
<body>

<h1>カウンタを0詰めで表示する</h1>

<?php

    $counter_file = 'counter.txt';
    $counter_lenght = 8;

    $fp = fopen($counter_file, 'r+');

    if ($fp){
        if (flock($fp, LOCK_EX)){

            $counter = fgets($fp, $counter_lenght);
            $counter++;

            rewind($fp);

            if (fwrite($fp,  $counter) === FALSE){
                print('ファイル書き込みに失敗しました');
            }

            flock($fp, LOCK_UN);
        }
    }

    fclose($fp);

    $format = '%0'.$counter_lenght.'d';
    $new_counter = sprintf($format, $counter);
    print('<p>訪問者数:'.$new_counter.'人目です</p>');

?>

</body>
</html>