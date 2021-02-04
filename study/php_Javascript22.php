<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    $result = array('数学' => 82, '英語' => 62, '国語' => 78);

    preparJudgment($result);

    function preparJudgment(array $result): void
    {
        foreach ($result as $key => $val) {
            judgment($val, $key);
        }
    }

    function judgment(int $score, string $subject): void
    {
        print $subject . 'の結果:' . $score . '点 ';
        if ($score > 75) {
            print '合格です。' . '<br />';
        } else {
            print '不合格です。' . '<br />';
        }
    }

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    const result = {
        "数学": 82,
        "英語": 62,
        "国語": 78,
    };

    preparJudgment(result);

    function preparJudgment(result) {
        Object.keys(result).forEach(function(key) {
            const subject = key;
            const score = result[key];
            judgment(score, subject);
        });
    }

    function judgment(score, subject) {
        const str = subject + 'の結果:' + score + '点 ';
        if (score > 75) {
            console.log(str + '合格です。');
        } else {
            console.log(str + '不合格です。');
        }
    }
</script>

</html>