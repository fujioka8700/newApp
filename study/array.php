<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>配列</title>
</head>
<body>

<h1>配列</h1>

<?php
/*
//配列の使い方
$result[0] = 85;
$result[1] = 92;
$result[2] = 68;

foreach($result as $value) {
    print $value.'<br />';
}

for ($i=0; $i < count($result); $i++) { 
    print $result[$i].'<br />';
}

//配列への値の獲得と取得

$result['english'] = 72;
$result['math'] = 82;

foreach($result as $value) {
    print $value.'<br />';
}

$name[0] = '山田';
$name[1] = '高橋';

foreach($name as $value) {
    print $value.'<br />';
}

//キーの指定

$var[0] = 14;
$var[2] = 'Tokyo';
$var[-4] = 8400;

$var['yamada'] = 86;
$var['endou'] = 75;
$var['aichi'] = 'nagoya';

$var['8'] = 75;  //キーは整数
$var[8] = 75;    //キーは整数
$var['08'] = 75; //キーは文字列

foreach($var as $key => $val) {
    print '[キー]:'.$key.'[値]:'.$val.'[型]:'.gettype($val).'<br />';
}

//変数や定数を使ってキーを指定する

//変数でキーを指定
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

$key = 'peach';
$var["price_$key"] = 120;

define("ORANGE", 'price_orange');
$var[ORANGE] = 120;

print_r($var);

//キーの自動付与

$var[] = 100;
$var[] = 'Tokyo';

print_r($var);

$var[12] = 100;
$var['Kudou'] = 72;
$var[7] = 100;
//最大のキーは12なので、キーが省略された場合には13が付与される。
$var[] = 'Tokyo';

print_r($var);

//整数であっても負の整数のキーしか存在しなかった場合、
//自動で付与されるキーは、最大の数から1足された数になる。
$var[-3] = 75;
$var[-12] = 45;
$var[] = 28;
$var[] = 83;

print_r($var);

$var[] = 100;
$var[] = 'Tokyo';

for ($i=10; $i < 13; $i++) { 
    $var[] = $i * 100;
}

print_r($var);

//配列の初期化(array)

//配列を初期化するにはarrayを使用

$var = array('Tokyo'=>'東京','Osaka'=>'大阪','Fukuoka'=>'福岡');

print_r($var);

$var = array(10 => '遠藤', '斎藤', '伊藤');

print_r($var);

$var = array('Yamada' => 82,
             'Endou' => 76,
             'Takahashi' => 64
);
$var['Yoshida'] = 91;

print_r($var);

//多次元配列

$maker = array('富士通', 'NEC', 'Sony', 'Sharp');
$type = array('Note', 'Desktop');

$pc = array($maker, $type);
print_r($pc);
print '<br />';

//値の取得
print '$pc[0][1]='.$pc[0][1].'<br />';
print '$pc[1][0]='.$pc[1][0];
*/

?>

</body>
</html>