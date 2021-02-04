<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    $math = 82;
    $english = 62;
    $national_language = 78;

    judgment($math, '数学');
    judgment($english, '英語');
    judgment($national_language, '国語');

    function judgment(int $score, string $subject)
    {
        print $subject. 'の結果:'. $score. '点 ';
        if ($score > 75) {
            print '合格です。'. '<br />';
        } else {
            print '不合格です。'. '<br />';
        }
        return true;
    }

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    const math = 82;
    const english = 62;
    const national_language = 78;

    judgment(math, '数学');
    judgment(english, '英語');
    judgment(national_language, '国語');

    function judgment(score, subject) {
        const str = subject + 'の結果:' + score + '点 ';
        if (score > 75) {
            console.log(str + '合格です。');
        } else {
            console.log(str + '不合格です。');
        }
        return true;
    }
</script>

</html>