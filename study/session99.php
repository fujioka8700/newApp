
<?php
// 注意: このコードは完全に動作するわけではありません。一例です！

session_start();

// 破棄されたタイムスタンプをチェック
/*if (isset($_SESSION['destroyed'])
    && $_SESSION['destroyed'] < time() - 300) {
    // 通常は起こるべきではない。攻撃や不安定なネットワークによる可能性がある
    // このユーザーのセッションから、全ての認証ステータスを削除
    remove_all_authentication_flag_from_active_sessions($_SESSION['userid']);
    throw(new DestroyedSessionAccessException);
}*/

$old_sessionid = session_id();

// 破棄されたタイムスタンプを設定
$_SESSION['destroyed'] = time(); // PHP 7.0.0 以降では、session_regenerate_id() は古いセッションデータを保存します。
print_r($_SESSION);

// 単に session_regenerate_id() を呼ぶだけでは、セッションの消失などに繋がる可能性があります。
// 次の例を見てください。
session_regenerate_id(true);

// 新しいセッションには、破棄されたタイムスタンプは不要
unset($_SESSION['destroyed']);

// $_SESSION = array();

$new_sessionid = session_id();

echo "古いセッション: $old_sessionid<br />";
echo "新しいセッション: $new_sessionid<br />";

print_r($_SESSION);
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッションIDの自動変更</title>
</head>
<body>

<h1>セッションIDの自動変更</h1>

<?php
class MyClass {
    const CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE;

echo MyClass::CONST_VALUE;

echo '<br>';

class OtherClass extends MyClass
{
    public static $my_static = 'static var';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
}

$classname = 'OtherClass';
$classname::doubleColon();

$var = new OtherClass();
$var->doubleColon();

// OtherClass::doubleColon();
?>

<br>
<a href="./index.php">ホームへ。</a>

</body>
</html>