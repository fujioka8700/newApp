<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    print <<< Document
こんにちは。<br />
お元気ですか？<br />
Document;

    $number = 1;
    $str = <<< "EOM"
値は${number}です。<br>
EOM;
    echo $str;

    print '連結'.'します<br>';

print "ああ";

$output = `dir -lart`;
echo "<pre>$output</pre>"; //シェルコマンド実行
echo "$output";            //シェルコマンド実行
echo "`dir -lart`";        //文字列扱い

$name = '高橋';
echo "<br>こんにちは。${name} さん";
echo '<br>こんにちは。${name} さん';

    ?>
    <script>
    console.log('JavaScript');
    </script>
</body>

</html>