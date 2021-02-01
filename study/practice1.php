<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習2周目。</title>
</head>
<body>
    <?php
    /*echo 250   , "<br />"; //整数
    echo gettype("250") , "<br />"; //文字列
    echo 955   , "<br />"; //10進数
    echo gettype(034)   , "<br />"; //8進数
    echo 034   , "<br />"; //8進数
    echo 0x3A  , "<br />"; //16進数

    echo -82,   "<br />"; //負の数
echo -0xD2, "<br />"; //負の数

//浮動小数点（固定小数点形式）
echo  2.72,    "<br />";
echo  gettype(1.42E-5), "<br />";
echo -0.72,    "<br />";
echo gettype(-8E14),    "<br />";

echo "5 * 3 = ", gettype(5 * 3), "<br>";
echo "8 / 2 = ", 8 / 2, "<br>";
echo "3 + 6 = ", 3 + 6, "<br>";
echo "5 - 2 = ", 5 - 2, "<br>";
echo "7 % 3 = ", 7 % 3, "<br>";

echo "5 + 2.4 = ", 5 + 2.4, '<br />'; //7.4
echo "5 + '8year' = ", 5 + (int)'8year', '<br />'; //13
echo "5 + '東京' = ", 5 + (int)'東京'; //5
echo (int)'東京';

$name = NULL;
$old = 20;
$name = '加藤';

print $name.'<br />'; //加藤
print ($old * 9).'<br />'; //180

$name = '遠藤';
print $name;//遠藤

$name = NULL;
print $name;

$var = '高橋';
print '[値]'.$var.', ';
print '[型]'.gettype($var).'<br />';

$var = 180;
print '[値]'.$var.', ';
print '[型]'.gettype($var);

$num1 = 320;
$num2 = $num1; //$num1をコピーして、$num2は320
$num1 = 45;

print $num1.'<br />'; //45
print $num2; //320

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

define("TAX", 0.10);

$price1 = 100 * (1 + TAX);
$price2 = floor(84 * (1 + TAX));
$price3 = 180 * (1 + TAX);

print $price1.'<br />';
print $price2.'<br />';
print $price3;

#TAX = 0.10; //定数は変更不可

define("TAX", 0.05);
define("PAI", 3.14159);
define("COPYRIGHT", "Copyright (c) 2021 The Only SKY Rights Reserved.");

print '[値]'.TAX.'[型]'.gettype(TAX).'<br />';//double
print '[値]'.PAI.'[型]'.gettype(PAI).'<br />';//double
print '[値]'.COPYRIGHT.'[型]'.gettype(COPYRIGHT).'<br />';//string

$old = 30;

if ($old >= 20) {
    print '年齢は20歳以上です。';
}

$flag = TRUE;

if ($flag) {
    print '$flagは真です。';
}

if (TRUE) {
    print '条件式にTRUEが、記述されているので常に実行される。';
}

$str = '100';
$num = 100;

print 'str='.$str.'[型]:'.gettype($str).'<br>';
print 'num='.$num.'[型]:'.gettype($num).'<br>';

if ($str !== $num) {
    print '$strの型と$numの型は違う。';
}

$math = 40;
$english = 80;

print '数学:'.$math.'英語:'.$english.'<br />';
if ($math < 50 xor $english < 50) {
    print '補修を受けて下さい。';
}

$domain = 'jp';

if ($domain == 'in') {
    print 'インドのトップレベルドメイン';
} elseif ($domain == 'cn') {
    print '中国のトップレベルドメイン';
} elseif ($domain == 'jp') {
    print '日本のトップレベルドメイン';
} else {
    print '不明です';
}

$old = 18;

print '年齢:'.$old.'<br />';
if ($old >= 20) {
    print '年齢は20歳以上です。'.'<br />';
} else {
    print '年齢は20歳未満です。'.'<br />';
}

$old = 45;

print '年齢:'.$old.'<br />';
if ($old >= 20) {
    print '年齢は20歳以上です。'.'<br />';
} else {
    print '年齢は20歳未満です。'.'<br />';
}

$pref = '東京';

switch ($pref) {
    case '東京':
        print '東京です。';
        break;
    case '神奈川':
        print '神奈川です。';
        break;
    default:
        print '東京都と神奈川、意外です。';
        break;
}

$pref = '大阪';

switch ($pref) {
    case '東京':
    case '神奈川':
    case '千葉':
        print '関東です。';
        break;
    case '大阪':
        print '関西です。';
        break;
    default:
        print '関東と関西以外です。';
        break;
}

$lang = 'En';
$msg = NULL;

if ($lang == 'Jp') {
    $msg = 'こんにちは';
} else {
    $msg = 'Hello';
}
print $msg.'<br />';

//↓三項演算子を使用。

$lang = 'Jp';

$msg = $lang == 'Jp' ? 'こんにちは' : 'Hello';
print $msg;

$num = 0;
$num2 = 0;

while ($num <= 5) {
    $num2 = 0;
    print 'num = '.$num.'<br />';
    while ($num2 <= 5) {
        print '&nbsp;&nbsp;num2 = '.$num2.'<br />';
        $num2++;
        if ($num2 == 2) break 2;
    }
    $num++;
    // if ($num == 3) break;
}

print 'while文、終了。';

$i = 0;

while ($i < 3) {
    $j = 0;

    while ($j < 3) {
        print '(i,j)=('.$i.','.$j.')<br />';
        $j++;
    }
    $i++;
}

//continue文、968行目から。
$count = -1;
while ($count < 10) {
    $count++;
    if ($count === 3) continue;
    printf('%02d<br>', $count);
}
print 'end';

for ($num=0; $num < 5; $num++) {
    print 'num='.$num.'<br />';
}*/
for ($i=0, $j=3; $i < 3; $i++,$j--) {
    print '$i='.$i.','.'$j='.$j.'<br />';

}
    ?>


</body>
</html>