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
}
for ($i=0, $j=3; $i < 3; $i++,$j--) {
    print '$i='.$i.','.'$j='.$j.'<br />';
}
$preflist = array('東京', '大阪', '福岡');
foreach($preflist as $pref) {
    print $pref.'<br />';
}

// $array = ["りんご", "れもん", "もも"];
$array = array("apple"=>"りんご", "れもん", "もも");
foreach($array as $key=>$val) {
    print $key.$val;
}
print_r($array);
print $array[1];

$preflist = array('Tokyo' => '東京', 'Osaka' => '大阪', 'Fukuoka' => '福岡');
foreach($preflist as $key => $value) {
    print $key.'=>'.$value.'<br />';
}

$slime = array('スライム', 'スライムベス', 'スライムスノー');
foreach($slime as $key => &$value)
{
    $value .= 'でぇす！';
    print '['.$key.']'.$value.'<br>';
}
unset($value);
$value = '変更';


$pricelist = array(80, 100, 120);

foreach($pricelist as $key => &$value) {
    $value *= 1.10;
}
unset($value);

$value = 999;
print_r($pricelist);

$result[0] = 85;
$result[1] = 92;
$result[2] = 68;

foreach($result as $value) {
    print $value.'<br />';
}
// print count($result);
for ($i=0; $i < count($result); $i++) {
    print $result[$i].'<br />';
    // print $i;
}

$result['english'] = 72;
$result['math'] = 82;

foreach($result as $key => $value) {
    print $key.' : '.$value.'<br />';
}

$name[1] = '山田';
$name[10] = '高橋';

foreach($name as $value) {
    print $value.'<br />';
}
print_r($name);

$var[0] = 14;
$var[2] = 'Tokyo';
$var[-4] = 8400;

$var['yamada'] = 86;
$var['endou'] = 75;
$var['aichi'] = 'nagoya';

$var['8'] = 65;  //キーは整数
$var[8] = 75;    //キーは整数
$var['08'] = 85; //キーは文字列

foreach($var as $key => $val) {
    print '[キー]:'.$key.'[値]:'.$val.'[型]:'.gettype($val).'<br />';
}

$key = 'peach';
$var[$key] = 120;

//変数を展開し、キーを指定
$key = 'peach';
$var["price_$key"] = 120;

//定数でキーを指定
define("INDEX_KEY", 8);
$var[INDEX_KEY] = 120;

foreach($var as $key => $val) {
    print '[キー]:'.$key.'&nbsp;&nbsp;[値]:'.$val.'&nbsp;&nbsp;[値の型]:'.gettype($val).'<br />';
}
print_r($var);

$key = 'peach';
$var["price_$key"] = 120;

define("ORANGE", 'price_orange');
$var[ORANGE] = 120;

print_r($var);

$var[6] = 100;
$var[] = 'Tokyo';
$var[5] = 'Fukuoka';

for ($i=10; $i < 13; $i++) {
    $var[] = $i * 100;
}

print_r($var);

$var[12] = 100;
$var['Kudou'] = 72;
$var[7] = 100;
//最大のキーは12なので、キーが省略された場合には13が付与される。
$var[] = 'Tokyo';

print_r($var);

$var[-3] = 75;
$var[-12] = 45;
$var[] = 28;
$var[] = 83;

print_r($var);

hello('Hello', 3);

function hello($hello, ...$args) {
    for ($i=0; $i < $args; $i++) {
        print $hello;
    }
}

    function f($req, $opt = null, ...$params)
    {
        // $params は配列で、残りのすべての引数が含まれる
        printf('$req: %d; $opt: %d; パラメータ数: %d; パラメータ: ', $req, $opt, count($params));
        if ($params) {
            $i = 0;
            while ($i < count($params)) {
                print $params[$i].'&nbsp;';
                $i++;
            }
        } else {
            print '無し';
        }
        print '<br>';
    }

    f(1);
    f(1, 2);
    f(1, 2, 3);
    f(1, 2, 3, 4);
    f(1, 2, 3, 4, 5);
    f(1, 2, 3, 4, 5, 6);
    
    $var = array('Tokyo'=>'東京','Osaka'=>'大阪','Fukuoka'=>'福岡');

    print_r($var);
    
    $var = array(10 => '遠藤', '斎藤', '伊藤');
    
    print_r($var);

    $var[0] = 'Tanaka';
    $var[1] = 'Yamada';
    print_r($var);
    
    $var = array('Yamada' => 82,
             'Endou' => 76,
             'Takahashi' => 64
);
$var['Yoshida'] = 91;

print_r($var);
$result = array_search(91, $var);
print($result);
*/

//多次元配列の確認から。
$maker = array('富士通', 'NEC', 'Sony', 'Sharp');
$type = array('Note', 'Desktop');

$pc = array($maker, $type);
print_r($pc);
print '<br />';

// print count($pc[1]);
$pc[2][0] = 'スマホ';

for ($j=0; $j < count($pc); $j++) { 
    for ($i=0; $i < count($pc[$j]); $i++) { 
        print $pc[$j][$i].' ';
    }
    print '<br>';
}




//値の取得
// print '$pc[0][1]='.$pc[0][1].'<br />';
// print '$pc[1][0]='.$pc[1][0];
    ?>

</body>

</html>