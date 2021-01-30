<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>繰り返し処理</title>
</head>
<body>

<h1>繰り返し処理</h1>

<?php

//while文

$num = 0;

while ($num <= 10) {
    print 'num = '.$num.'<br />';
    $num++;
}

//while文をネスト
$i = 0;

while ($i < 3) {
    $j = 0;

    while ($j < 3) {
        print '(i,j)=('.$i.','.$j.')<br />';
        $j++;
    }
    $i++;
}

//break
$count = 1;
$sum = 0;

while ($count <= 100) {
    $tmp = $sum;
    $sum += $count;
    // print $count.'<br />';
    // print '$sum='.$sum.'<br />';
    print $count.'+'.$tmp.'='.$sum.'<br />';
    if ($sum > 100) {
        print '合計が100を超えたので終了します。';
        break;
    }

    $count++;
}

//抜ける繰り返し処理の階層を指定
$i = 1;

while ($i < 5) {
    print 'i='.$i.'<br />';
    $j = 1;
    while ($j < 5) {
        print "&nbsp j=".$j.'<br />';
        if ($i * $j > 5) {
            break;
        }
        $j++;
    }
    $i++;
}

//↓2階層分の繰り返し処理を抜ける。

$i = 1;

while ($i < 5) {
    print 'i='.$i.'<br />';
    $j = 1;
    while ($j < 5) {
        print "&nbsp j=".$j.'<br />';
        if ($i * $j > 5) {
            break 2;
        }
        $j++;
    }
    $i++;
}

$count = 1;
$sum = 0;

while ($count <= 100) {
    $sum += $count;
    if ($sum > 1000) {
        print '合計が1000を超えたので count = '.$count.'で終了します。<br />';
        break;
    }
    $count++;
}
print 'sum = '.$sum;

//continue文

$count = 0;
$sum = 0;

while ($count < 100) {
    $count++;
    // print 'count='.$count.'<br />';
    if ($count % 2 == 0) {
        //countが偶数の時は、足さない。
        continue;
    }
    $sum += $count;
    // print 'sum='.$sum.'<br />';
}
print 'sum = '.$sum;

//2階層分の繰り返し処理の残りの処理を飛ばし、
//外側の条件式の評価に処理が移る。

$count1 = 0;
$sum = 0;

while ($count1 < 10) { //continueが実行された時に処理が移る位置
    $count1++;
    // print 'count1='.$count1.'<br />';

    $count2 = 0;
    while ($count2 < 10) {
        $count2++;
        //count1*count2が30より大きい時、
        //外側の条件式の評価に、処理が移る。
        if ($count1 * $count2 > 30) {
            continue 2;
        }
        // print '&nbsp;count2='.$count2.'<br />';
        $sum += $count1 * $count2;
    }
}
print 'sum='.$sum;

//do..while文

$num = 0;

do {
    $num++;
    if ($num == 5) {
        // break;
        continue;
    }
    print 'num='.$num.'<br />';
} while ($num < 10);

//for文

for ($num=0; $num < 5; $num++) {
    print 'num='.$num.'<br />';
}

//for文で複数の変数を変化させる

for ($i=0, $j=3; $i < 3; $i++,$j--) { 
    print '$i='.$i.','.'$j='.$j.'<br />';

}

//foreach文

$preflist = array('東京', '大阪', '福岡');
foreach($preflist as $pref) {
    print $pref.'<br />';
}

//連想配列

$array = ["りんご", "れもん", "もも"];
print_r($array);
print $array[1];

print '<br />';

$array = ["apple" => "りんご", "lemon" => "れもん", "peach" => "もも"];
print_r($array);
print $array["lemon"];

//foreach文でキーと値を取り出す

$preflist = array('Tokyo' => '東京', 'Osaka' => '大阪', 'Fukuoka' => '福岡');
foreach($preflist as $key => $value) {
    print $key.'=>'.$value.'<br />';
}

//foreach文で配列要素の値を変更する

$pricelist = array(80, 100, 120);

foreach($pricelist as &$value) {
    $value *= 1.10;
}
unset($value);

$value = 999;
print_r($pricelist);

?>

</body>
</html>