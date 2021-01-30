<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>変数</title>
</head>
<body>

<h1>変数</h1>

<?php

//変数
$old = 20;
$name = '加藤';

print $name.'<br />'; //加藤
print ($old * 9).'<br />'; //180

$name = '遠藤';
print $name;//遠藤

//変数の初期化とNULL

$name = NULL;
print $name.'さん';

//変数の型

$name = 'Yamada';
$old = 24;

$var = 'Yamada';
$var = 24;

print $var;

$var = '高橋';
print '[値]'.$var.', ';
print '[型]'.gettype($var).'<br />';

$var = 180;
print '[値]'.$var.', ';
print '[型]'.gettype($var);

$num1 = 320;
$num2 = $num1;
$num1 = 45;

print $num1.'<br />'; //45
print $num2; //320

$num1 = 320;
$num2 = $num1;

print '$num1='.$num1.'<br />';//320
print '$num2='.$num2.'<br />';//320

$num1 = 18;

print '$num1='.$num1.'<br />';//18
print '$num2='.$num2.'<br />';//320

//変数を参照

$num1 = 320;
$num2 =& $num1;

print '$num1 = '.$num1.'<br />';//320
print '$num2 = '.$num2.'<br />';//320

$num1 = 18;

print '$num1 = '.$num1.'<br />';//18
print '$num2 = '.$num2.'<br />';//18

$num2 = 75;

print '$num1 = '.$num1.'<br />';//75
print '$num2 = '.$num2.'<br />';//75

//色々な代入演算子
$num = 80 * 15;
$pref = '愛知';
$address = $pref.'県';

print $num;//1200
print $pref;//愛知
print $address;//愛知県

$num = 10;
$num += 8;
print $num;//18

$str = '山田';
$str .= 'さん';//$str = $str.'さん';と同じ処理
print $str; //山田さん

$num = 40;
print '$num = '.$num.'<br />';//40

$num += 25;
print '$num = '.$num.'<br />';//65

$str = '福岡';
print '$str = '.$str.'<br />';//福岡

$str .= '支店';
print '$str = '.$str.'<br />';//福岡支店

//定数

define("TAX", 0.10);

$price1 = 100 * (1 + TAX);
$price2 = floor(84 * (1 + TAX));
$price3 = 180 * (1 + TAX);

print $price1.'<br />';
print $price2.'<br />';
print $price3;

// define("TAX", 0.05);
define("PAI", 3.14159);
define("COPYRIGHT", "Copyright (c) 2021 The Only SKY Rights Reserved.");

print '[値]'.TAX.'[型]'.gettype(TAX).'<br />';//double
print '[値]'.PAI.'[型]'.gettype(PAI).'<br />';//double
print '[値]'.COPYRIGHT.'[型]'.gettype(COPYRIGHT).'<br />';//string

//TAX = 0.1;//定数は変更不可

// define("PAI", 3.14159);

$r = 7;
$menseki = PAI * pow($r, 2);
print '半径='.$r.'の面積は'.$menseki.'<br />';

$r = 14;
$menseki = PAI * pow($r, 2);
print '半径='.$r.'の面積は'.$menseki;

?>

</body>
</html>