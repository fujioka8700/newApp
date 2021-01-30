<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>条件分岐</title>
</head>
<body>

<h1>条件分岐</h1>

<?php

//条件分岐

$old = 25;

if ($old >= 20) {
    print '年齢は20歳以上です。';
}

//論理値
$flag = null;

if ($flag) {
    print '$flagは真です。';
}

if (TRUE) {
    print '条件式にTRUEが、記述されているので常に実行される。';
}

//比較演算子

$num1 = 10;
$num2 = 20;

if ($num1 <> $num2) {
    print '$num1と$num2は違う。';
}

$var1 = 208;
if ($var1 == 208) {
    print '変数の値は208と等しい。'.'<br />';
}

$var1 = 12;
$var2 = '12';
if ($var1 == $var2) {
    print "12 == '12'はTRUEです。".'<br />';
}

$var1 = 'Tokyo';
if ($var1 == 'Tokyo') {
    print "変数の値はTokyoと等しい。";
}

//論理演算子

//論理積(AND)
$old = 25;
$pref = '東京';

if ($old >= 20 && $pref == '東京') {
    print '東京出身で20歳以上です。';
}

//論理和(OR)

$math = 45;
$english = 82;

print '数学:'.$math.'英語:'.$english.'<br />';
if ($math > 50 || $english > 50) {
    print '合格です。'.'<br />';
} else {
    print '不合格です。'.'<br />';
}

$math = 42;
$english = 39;

print '数学:'.$math.'英語:'.$english.'<br />';
if ($math > 50 || $english > 50) {
    print '合格です。';
} else {
    print '不合格です。';
}

//排他的論理和(XOR)

$math = 45;
$english = 82;

print '数学:'.$math.'英語:'.$english.'<br />';
if ($math < 50 || $english < 50) {
    print '補修を受けて下さい。';
}

//論理否定(NOT)
$pref = '東京';

if (!($pref == '東京')) {
    print "東京以外にお住いの方。";
}

//条件式が偽の時の処理(if..else)

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

//複数の条件分岐(if..elseif..else)

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

//switch文
$pref = '大阪';

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

//複数の値に一致した場合に同じ処理を行う
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

//三項演算子

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
?>

</body>
</html>