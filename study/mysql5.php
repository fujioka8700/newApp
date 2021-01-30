<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの更新(UPDATE)</title>
</head>
<body>

<h1>データの更新(UPDATE)</h1>

<?php

//データベース上でクエリを実行する(データの取得)
function getData(mysqli $link) : mixed {
    $result = mysqli_query($link , 'SELECT id, name FROM shouhin');

    if (!$result) {
        die('SELECTクエリーが失敗しました。'.mysqli_error($link));
    }

    return $result;
}

//結果の行を連想配列で取得し、表示する
function getRow(mixed $result) : void {
    while ($row = mysqli_fetch_assoc($result)) {
        print('<p>');
        print('id='.$row['id']);
        print(', name='.$row['name']);
        print('</p>');
    }
}

//数値以外をクオートする
function quote_smart(mixed $link, string $value) {
    if(!is_numeric($value)) {
        //現在の接続の文字セット。特殊文字をエスケープし、mysqli_queryで安全に利用できる形式に変換。
        $value = "'".mysqli_real_escape_string($link, $value)."'";
    }
    return $value;
}

//MySQLサーバーへの接続する
$link = mysqli_connect('localhost', 'testuser', 'Pu8k38DNB5SlvMHu');

if (!$link) {
    die('接続失敗です。'.mysqli_error($link));
}

print('<p>接続に成功しました。</p>');

//クエリを実行するためのデフォルトのデータベースを選択する
$db_selected = mysqli_select_db($link, 'uriage');

if (!$db_selected) {
    die('データベース選択失敗です。'.mysqli_error($link));
}

print('<p>uriageデータベースを選択しました。</p>');

//クライアントのデフォルト文字セットを設定
mysqli_set_charset($link, 'utf8');

//データの取得
$result = getData($link);

//データの表示
getRow($result);

print('<p>データを更新します。</p>');

$id = 5;
$name = "デジタルカメラ";

//データの更新
$sql = sprintf("UPDATE shouhin SET name = %s WHERE id = %s", quote_smart($link, $name), quote_smart($link, $id));

print('<p>エスケープ後のデータ：'.quote_smart($link, $id).'</p>');
print('<p>エスケープ後のデータ：'.quote_smart($link, $name).'</p>');

//データベース上でクエリを実行する(データの更新)
$result_flag = mysqli_query($link, $sql);
if (!$result_flag) {
    print('<p>UPDATEクエリーが失敗しました。</p>');
}

print('<p>更新後のデータを取得します。</p>');

//データの取得
$result = getData($link);

//データの表示
getRow($result);

//MySQLサーバーへの接続を、切断する
$close_flag = mysqli_close($link);

if ($close_flag) {
    print('<p>切断に成功しました。</p>');
}

?>

</body>
</html>