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

    sendJudgment($result);

    function sendJudgment(array $result): void
    {
        foreach ($result as $key => $val) {
            print judgment($val, $key);
        }
    }

    function judgment(int $score, string $subject): string
    {
        $str = $subject . 'の結果:' . $score . '点 ';
        $str .= $score > 75 ? '合格です。<br>' : '不合格です。<br>';
        return $str;
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

    sendJudgment(result);

    function sendJudgment(result) {
        Object.keys(result).forEach(function(key) {
            const subject = key;
            const score = result[key];
            console.log(judgment(score, subject));
        });
    }

    function judgment(score, subject) {
        let str = subject + 'の結果:' + score + '点 ';
        str += score > 75 ? '合格です。' : '不合格です。';
        return str;
    }
</script>

</html>