<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サンプル</title>
</head>
<body>

<h1>文字列</h1>

<?php
//文字列リテラル
print 'HelloWorld文字です。<br>';

//文字の連結
$name = '田中'.'太郎';
echo $name.'くんです。<br>';

// コールバック関数
/*Logic
---------------------------*/
function greeting(callable $method) {
    //helloworld()を呼び出す
    echo $method(); //おはよう
}

function helloworld() {
    echo 'おはよう';
}

/*View
---------------------------*/
//引数にhelloworld()の関数名の文字列を配置
greeting('helloworld');

/*@output
---------------------------
おはよう

*/

//文字列の出力
echo 'こんにちは';
echo '出身地:', '東京都', '<br>'; //〇

print 'こんばんは<br>';
// print '出身地:', '大阪府'; //printは複数の引数は取れない。

echo '2021年', '01月', '20日', '<br>';
print '月曜日<br>';

//エスケープシーケンス

print "こんにちは\n<br>";
print "名前は\"伊藤\"です\n<br>";
print '趣味は\'サッカー\'です\n<br>';

print "私の名前は\"山田\"です<br />"; //私の名前は"山田"です
print '私の名前は\"山田\"です<br />'; //私の名前は\"山田\"です

//文字列の中の変数展開
$name = '高橋';
echo "こんにちは。$name さん<br>";

$colorname = 'red';
//echo "frame is $colornamecolor";

//変数がどこまでなのか判別しにくい場合や、
//配列変数などを使う場合には、変数名の部分を{}で囲んで記述する。
echo "frame is {$colorname}color<br />";

$name = '山田';
print "私の名前は${name}です<br>"; //私の名前は山田です
print '私の名前は${name}です';     //私の名前は${name}です

?>

</body>
</html>