<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>関数</title>
</head>
<body>

<h1>関数</h1>

<?php

//関数
//関数を使う前

$math = 84;
$english = 62;
$national_language = 78;

print '数学の結果:';
if ($math > 75) {
    print '合格です'.'<br />';
} else {
    print '不合格です'.'<br />';
}

print '英語の結果:';
if ($english > 75) {
    print '合格です'.'<br />';
} else {
    print '不合格です'.'<br />';
}

print '国語の結果:';
if ($national_language > 75) {
    print '合格です'.'<br />';
} else {
    print '不合格です'.'<br />';
}

print '-+-+-+-+-+-+-+-+-+-+-'.'<br />';

//関数を使うと
// function check($kamoku, $tensuu) {
//     print $kamoku.'の結果:';
//     if ($tensuu > 75){
//         print '合格です';
//     }else{
//         print '不合格です';
//     }
//     print '(点数:'.$tensuu.')';
//     print '<br />';
// }

function check(string $kamoku, int $tensuu){
    $result = $tensuu > 75 ? '合格' : '不合格';
    print $kamoku.'の結果:'.$result.'です(点数:'.$tensuu.')<br />';
}

$math = 84;
$english = 62;
$national_language = 78;

check('数学', $math);
check('英語', $english);
check('国語', $national_language);

print '-+-+-+-+-+-+-+-+-+-+-'.'<br />';

//配列を使うと

$result = array('数学'=>84,'英語'=>62,'国語'=>78,'社会'=>52,'理科'=>92,);

foreach($result as $key => $val) {
    check($key, $val);
}

//戻り値を使って関数から値を返す

//2つの整数を足す
function plus(int $num1, int $num2) {
    return $num1 + $num2;
}

$sum = plus(10, 8);
print '10 + 8の結果は'.$sum.'です<br />';

print '7 + 14の結果は'.plus(7, 14).'です<br />';

?>

</body>
</html>