<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPとJavaScript</title>
</head>

<body>
    <?php

    $result['english'] = 72;
    $result['math'] = 82;

    foreach ($result as $value) {
        print $value . '<br />';
    }

    print_r($result);
    print '<br>';

    $name[0] = '山田';
    $name[1] = '高橋';

    foreach ($name as $value) {
        print $value . '<br />';
    }

    print_r($name);

    ?>
</body>
<!-- <script src="script.js"></script> -->
<script>
    const result = {
        '山田': {
            'english': 72,
            'math': 82
        },
        '高橋': {
            'english': 68,
            'math': 90
        },
    };

    Object.keys(result).forEach(function(data) {
        console.log(data);
        console.log(result[data]['english']);
        console.log(result[data]['math']);
    });
</script>

</html>